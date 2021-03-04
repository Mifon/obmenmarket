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
			$source = $this->modx->getOption('friendly_alias_translit', NULL, 'ru', TRUE);
			$target = 'en';
			$attempts = $this->options['attempts'] ?? 5;
			$st = $source . '-' . $target;
			if (preg_match('#\.[0-9a-z]+$#i', $string, $matches)) {
				$extension = $matches[0];
				$string = preg_replace('#' . $extension . '$#', '', $string);
			}

			$trim = $this->modx->getOption('friendly_alias_trim_chars', NULL, '/.-_', TRUE);
			$string = str_replace(str_split($trim), ' ', $string);
//			$cache = $this->modx->cacheManager->get($seed) ?: [];
			$cache = json_decode(file_get_contents(__DIR__ . '/cache.json'), 1) ?: [];
			$cacheKey = md5($this->rawText($string));
			if (!empty($cache) and isset($cache[$st][$cacheKey])) {
				$string = $cache[$st][$cacheKey];
				return $string . strtolower($extension);
			} else {
				$tr = new GoogleTranslateForFree();
				$translate = $tr->translate($source, $target, $string, $attempts);
				if ($translate && !empty($translate)) {
					$cache[$st][$cacheKey] = $translate;
					file_put_contents(__DIR__ . '/cache.json', json_encode($cache, 256));
//				    $this->modx->cacheManager->set($seed, $cache);
					return $translate . strtolower($extension);
				} else {
					return FALSE;
				}
			}
			return FALSE;

		}

		public function rawText($a = '')
		{
			return mb_strtolower(preg_replace('@[^A-zА-я0-9]|[\/_\\\.\,]@u', '', (string)$a));
		}
	}
