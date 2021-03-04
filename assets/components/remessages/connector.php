<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var reMessages $reMessages */
$reMessages = $modx->getService('reMessages', 'reMessages', MODX_CORE_PATH . 'components/remessages/model/');
$modx->lexicon->load('remessages:default');

// handle request
$corePath = $modx->getOption('remessages_core_path', null, $modx->getOption('core_path') . 'components/remessages/');
$path = $modx->getOption('processorsPath', $reMessages->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);