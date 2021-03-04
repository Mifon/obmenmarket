<?php

class antiSovetYandex
{
    /** @var modX $modx */
    public $modx;

    /** @var array() $config */
    public $config = array();

    /** @var array $initialized */
    public $initialized = array();
    /** @var pdoFetch $pdoTools */
    public $pdoTools;

    /**
     * @param modX $modx
     * @param array $config
     */
    function __construct(modX &$modx, array $config = [])
    {
        $this->modx =& $modx;
        $corePath = MODX_CORE_PATH . 'components/antisovetyandex/';
        $assetsUrl = MODX_ASSETS_URL . 'components/antisovetyandex/';

        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'jsUrl' => $assetsUrl . 'js/',
        ], $config);
        $this->modx->addPackage('antisovetyandex', $this->config['modelPath']);

        if ($this->pdoTools = $this->modx->getService('pdoFetch')) {
            $this->pdoTools->setConfig($this->config);
        }
    }

    /**
     * Initializes component into different contexts.
     *
     * @param string $ctx The context to load. Defaults to web.
     * @param array $scriptProperties Properties for initialization.
     *
     * @return bool
     */
    public function initialize($ctx = 'web', $scriptProperties = array())
    {
        $this->config = array_merge($this->config, $scriptProperties);
        switch ($ctx) {
            case 'mgr':
                break;
            default:
                if (!defined('MODX_API_MODE') || !MODX_API_MODE) {
                    if ((boolean)$this->modx->getOption('antisovetyandex_enable')) {

                        $isReg = false;
                        if ($this->modx->resource instanceof msProduct) {
                            $isReg = true;
                        }

                        if ($this->modx->resource instanceof modResource) {
                            $templates = $this->modx->getOption('antisovetyandex_templates');
                            $templates = explode(',', $templates);
                            $templates = array_map('trim', $templates);
                            $templates = array_map('intval', $templates);
                            if (in_array($this->modx->resource->template, $templates)) {
                                $isReg = true;
                            }
                        }

                        if ($isReg) {
                            if ($css = $this->modx->getOption('antisovetyandex_frontend_css')) {
                                $this->modx->regClientCSS($css);
                            }
                            if ($js = trim($this->modx->getOption('antisovetyandex_frontend_js'))) {
                                if (!empty($js) && preg_match('/\.js/i', $js)) {
                                    $this->modx->regClientScript($js);
                                }
                            }

                            if ($chunk = trim($this->modx->getOption('antisovetyandex_chunk'))) {
                                if (!empty($chunk)) {
                                    $this->modx->regClientHTMLBlock($this->pdoTools->getChunk('tpl.antiSovetYandex.topbar'));
                                }
                            }

                        }
                    }
                }
                break;
        }
        return true;
    }

    /**
     * Обработчик для событий
     * @param modSystemEvent $event
     * @param array $scriptProperties
     */
    public function loadHandlerEvent(modSystemEvent $event, $scriptProperties = array())
    {
        switch ($event->name) {
            case 'OnLoadWebDocument':
                if ($this->modx->context->key != 'mgr') {
                    $this->initialize($this->modx->context->key);
                }
                break;
        }
    }
}