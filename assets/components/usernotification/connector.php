<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';
$usernotification = $modx->getService('usernotification', 'usernotification', MODX_CORE_PATH . 'components/usernotification/model/usernotification/');
$modx->lexicon->load('usernotification:default');

$corePath = MODX_CORE_PATH . 'components/usernotification/';
$path = $modx->getOption('processorsPath', $usernotification->config, $corePath . 'processors/');
$modx->getRequest();

$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));