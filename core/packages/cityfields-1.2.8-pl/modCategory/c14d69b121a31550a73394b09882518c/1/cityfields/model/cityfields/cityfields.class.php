<?php
/**
 * The base class for cityFields.
 */

class cityFields {

	/* @var modX $modx */
	public $modx;
	public $namespace = 'cityfields';
	public $config = array();
	public $currentCityId;
	public $cityInDomain = false;
	public $frontendCSS;
	public $frontendJS;

	/** @var SxGeo $SxGeo */
	public $SxGeo;

	/**
	 * @param modX $modx
	 * @param array $config
	 */
	function __construct (modX &$modx, array $config = array()) {
		$this->modx =& $modx;
		$this->namespace = $this->modx->getOption('namespace', $config, 'cityfields');
		$corePath = $this->modx->getOption('cityfields.core_path', $config, $this->modx->getOption('core_path') . 'components/cityfields/');
		$assetsPath = $this->modx->getOption('cityfields.assets_path', $config, $this->modx->getOption('assets_path') . 'components/cityfields/');
		$assetsUrl = $this->modx->getOption('cityfields.assets_url', $config, $this->modx->getOption('assets_url') . 'components/cityfields/');
		$this->config = array_merge(array(
			'corePath' => $corePath,
			'assetsPath' => $assetsPath,
			'modelPath' => $corePath . 'model/',
			'chunksPath' => $corePath . 'elements/chunks/',
			'templatesPath' => $corePath . 'elements/templates/',
			'snippetsPath' => $corePath . 'elements/snippets/',
			'processorsPath' => $corePath . 'processors/',
			
			'assetsUrl' => $assetsUrl,
			'cssUrl' => $assetsUrl . 'css/',
			'jsUrl' => $assetsUrl . 'js/',
			'imagesUrl' => $assetsUrl . 'images/',
			'actionUrl' => $assetsUrl . 'action.php',
			'connectorUrl' => $assetsUrl . 'connector.php',
			
			'chunkSuffix' => '.chunk.tpl',
		), $config);
		$this->modx->addPackage('cityfields', $this->config['modelPath']);
		$this->frontendCSS = str_replace(array('[[+cssUrl]]', '[[+assetsUrl]]'), array($this->config['cssUrl'], $this->config['assetsUrl']), $modx->getOption('cityfields_frontend_css', $config, null));
		$this->frontendJS = str_replace(array('[[+jsUrl]]', '[[+assetsUrl]]'), array($this->config['jsUrl'], $this->config['assetsUrl']), $modx->getOption('cityfields_frontend_js', $config, null));
		$this->cityInDomain = $this->modx->getOption('cityfields_cityindomain', $config, false);
		$this->currentCityId = $this->getCurrentCityId();
		$this->modx->lexicon->load('cityfields:default');
	}

	/**
	 * @return bool
	 */
	public function loadSxGeo() {
		if ( !is_object($this->SxGeo) || !($this->SxGeo instanceof SxGeo) ) {
			require_once($this->config['modelPath'] . 'sxgeo/sxgeo.class.php');
			$this->SxGeo = new SxGeo($this->config['modelPath'] . 'sxgeo/SxGeoCity.dat');
		}
		return !empty($this->SxGeo) && $this->SxGeo instanceof SxGeo;
	}

	/**
	 * @return string
	 */
	public function getUserIp() {
		if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
			$ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
			$ip = $ip[0];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	/**
	 * @return integer
	 */
	public function getCurrentCityId() {
		if ( is_numeric($this->currentCityId) ) return $this->currentCityId;
		$default = $this->modx->getOption('cityfields_default_city', $config, 1);
		$host = str_replace('www.', '', MODX_HTTP_HOST);
		$host = function_exists('idn_to_utf8') ? idn_to_utf8($host) : $host;
		if ( $this->cityInDomain ) {
			preg_match('/^([^.]+)\.(.+)\.(.+)$/ui', $host, $key);
			if ( $key[1] ) {
				$city = $this->modx->getObject('cfCity', array(
					'key' => $key[1],
					'active' => 1
				));
				if ( $city ) {
					$host = preg_replace('/^'.$key[1].'\./ui', '', $host, 1);
					if ( $city->get('id') == $default && $host != MODX_HTTP_HOST && 'www'.$host != MODX_HTTP_HOST && $this->modx->context->get('key') != 'mgr' ) {
						$this->modx->sendRedirect(MODX_URL_SCHEME . $host . $_SERVER['REQUEST_URI'], array('responseCode' => 'HTTP/1.1 301 Moved Permanently'));
					} elseif ( $city->get('id') == $_COOKIE['cfCity'] ) {
						return $city->get('id');
					}
					$city_id = $city->get('id');
				} elseif ( $default == $_COOKIE['cfCity'] ) {
					return $default;
				}
				setcookie('cfCity', $city_id ?: $default, time()+94608000, '/', '.'.$host);
				$_COOKIE['cfCity'] = $city_id ?: $default;
			} elseif ( is_numeric($_COOKIE['cfCity']) ) {
				setcookie('cfCity', $default, time()+94608000, '/', '.'.$host);
				$_COOKIE['cfCity'] = $default;
			} 
		}
		if ( is_numeric($_COOKIE['cfCity']) ) return $_COOKIE['cfCity'];
		if ( $this->modx->getOption('cityfields_gl_active', $config, true) && !$this->isExcluded() && $this->loadSxGeo() ) {
			$info = $this->SxGeo->get($this->getUserIp());
			$city = $this->modx->getObject('cfCity', array(
				'name' => $info['city']['name_ru'],
				'active' => 1
			));
			setcookie('cfCity', $city ? $city->get('id') : $default, time()+94608000, '/', '.'.$host);
			$_COOKIE['cfCity'] = $city ? $city->get('id') : $default;
			if ( $this->cityInDomain && $city && $city->get('key').'.'.$host != MODX_HTTP_HOST && $this->modx->context->get('key') != 'mgr' ) {
				$this->modx->sendRedirect(MODX_URL_SCHEME . $city->get('key') . '.' . $host . $_SERVER['REQUEST_URI']);
			}
		} else {
			setcookie('cfCity', $default, time()+94608000, '/', '.'.$host);
			$_COOKIE['cfCity'] = $city ? $city->get('id') : $default; 
		}
		return $_COOKIE['cfCity'];
	}

	/**
	 * @return integer
	 */
	public function isExcluded(string $excluded = null) {
		$excluded = ($excluded !== null) ? $excluded : $this->modx->getOption('cityfields_gl_exclude', $config, null);
		if ( empty($excluded) ) return false;
		$excluded = explode(',', $excluded);
		foreach ( $excluded as $ex ) {
			if ( stripos($_SERVER['HTTP_USER_AGENT'], trim($ex)) !== false ) return true;
		}
		return false;
	}

}
