<?php
	require_once(MODX_CORE_PATH . 'components/gtranslit/vendor/autoload.php');

	use Dejurin\GoogleTranslateForFree;

	/**
	 * A transliteration service implementation class for MODx Revolution.
	 *
	 * @package    modx
	 * @subpackage ytranslit
	 */
	class modTransliterate
	{

		/**
		 * A reference to the modX instance communicating with this service instance.
		 * @var modX
		 */
		public $modx = NULL;
		/**
		 * A collection of options.
		 * @var array
		 */
		public $options = [];


		/**
		 * Constructs a new instance of the modTransliterate class.
		 *
		 * Use modX::getService() to get an instance of the translit service; do not manually construct this class.
		 *
		 * @param modX &$modx    A reference to a modX instance.
		 * @param array $options An array of options for configuring the modTransliterate instance.
		 */
		public function __construct(modX &$modx, array $options = [])
		{
			$this->modx = &$modx;
			$this->options = $options;
		}


		/**
		 * Translate a string using a named transliteration table.
		 *
		 * @param string $string The string to transliterate.
		 *
		 * @return string The translated string.
		 */
		public function translate($string)
		{
			$extension = '';
//			$seed = 'gtraslit';
			$source = $this->modx->getOption('gtranslit.lang.from', NULL, 'ru');
			$target = $this->modx->getOption('gtranslit.lang.to', NULL, 'en');
			$attempts = $this->options['attempts'] ?? 5;
			$st = $source . '-' . $target;
			$c = !(bool)$this->modx->getOption('gtranslit.disable_cache', NULL, FALSE);
			if (preg_match('#\.[0-9a-z]+$#i', $string, $matches)) {
				$extension = $matches[0];
				$string = preg_replace('#' . $extension . '$#', '', $string);
			}
			$trim = $this->modx->getOption('friendly_alias_trim_chars', NULL, '/.-_', TRUE);
			$string = str_replace(str_split($trim), ' ', $string);
			if (preg_match("/[^A-Za-z]/u", $string)) {
				if ($c) {
					if(!file_exists(__DIR__ . '/cache.json')){
						file_put_contents(__DIR__ . '/cache.json','[]');
					}
					$cache = json_decode(file_get_contents(__DIR__ . '/cache.json'), 1) ?: [];
					$cacheKey = md5($string);
				}
				if (!empty($cache) and isset($cache[$st][$cacheKey])) {
					$string = $cache[$st][$cacheKey];
					return $string . strtolower($extension);
				} else {
					$tr = new GoogleTranslateForFree();
					$translate = $tr->translate($source, $target, $string, $attempts);
					if ($translate && !empty($translate)) {
						$cache[$st][$cacheKey] = $translate;
						file_put_contents(__DIR__ . '/cache.json', json_encode($cache, 256));
						return $translate . strtolower($extension);
					} else {
						$this->modx->log(modX::LOG_LEVEL_ERROR, "can`t translit:'$string' [$source=>$target]", '', __METHOD__, __FILE__, __LINE__);
						return $this->CommonTranslate($string, $source). strtolower($extension);
					}
				}
			}
			return $string. strtolower($extension);

		}

		public function commonTranslate($string, $table)
		{
			$ret = $string;
			$filePath = __DIR__ . '/tables/' . $table . '.php';
			if (is_file($filePath)) {
				$table = include $filePath;
				if (is_array($table) && !empty($table)) {
					$ret = strtr($string, $table);
				}
			}
			return $ret;
		}

		public function rawText($a = '')
		{
			return mb_strtolower(preg_replace('@[^A-zА-я0-9]|[\/_\\\.\,]@u', '', (string)$a));
		}
	}
