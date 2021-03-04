<?php

/**
 * The home manager controller for reMessages.
 *
 */
class reMessagesHomeManagerController extends modExtraManagerController
{
    /** @var reMessages $reMessages */
    public $reMessages;


    /**
     *
     */
    public function initialize()
    {
        $this->reMessages = $this->modx->getService('reMessages', 'reMessages', MODX_CORE_PATH . 'components/remessages/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['remessages:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('remessages');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->reMessages->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/remessages.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->reMessages->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        reMessages.config = ' . json_encode($this->reMessages->config) . ';
        reMessages.config.connector_url = "' . $this->reMessages->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "remessages-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="remessages-panel-home-div"></div>';

        return '';
    }
}