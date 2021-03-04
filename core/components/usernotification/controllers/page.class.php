<?php

class UsernotificationControllersPageManagerController extends modExtraManagerController
{
    public $usernotification;

    public function initialize()
    {
        $this->usernotification = $this->modx->getService('usernotification', 'usernotification', MODX_CORE_PATH . 'components/usernotification/model/usernotification/');
        parent::initialize();
    }

    public function getLanguageTopics()
    {
        return array('usernotification:default');
    }

    public function getPageTitle()
    {
        return $this->modx->lexicon('un_title');
    }

    public function loadCustomCssJs()
    {
        $this->addCss($this->usernotification->config['cssUrl'] . 'mgr/main.css?v=' . $this->usernotification->version);
        $this->addCss($this->usernotification->config['cssUrl'] . 'mgr/bootstrap.buttons.css?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/usernotification.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/misc/utils.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/misc/combo.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/widgets/notification/grid.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/widgets/notification/windows.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/widgets/panel.js?v=' . $this->usernotification->version);
        $this->addJavascript($this->usernotification->config['jsUrl'] . 'mgr/sections/page.js?v=' . $this->usernotification->version);

        $this->addHtml('<script type="text/javascript">
        usernotification.config = ' . json_encode($this->usernotification->config) . ';
        usernotification.config.connector_url = "' . $this->usernotification->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "usernotification-page-main"});
        });
        </script>
        ');
    }

    public function getTemplateFile()
    {
        return $this->usernotification->config['templatesPath'] . 'page.tpl';
    }
}