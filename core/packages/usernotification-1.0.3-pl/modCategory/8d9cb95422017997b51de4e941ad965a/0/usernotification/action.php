<?php

define('MODX_API_MODE', true);
header("Content-type:application/json");

if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/index.php')) {
    include_once dirname(dirname(dirname(dirname(__FILE__)))) . '/index.php';
} else {
    include_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/index.php';
}

$modx->getRequest();
$modx->getService('usernotification', 'usernotification', MODX_CORE_PATH . 'components/usernotification/model/usernotification/');
if (!$modx->user->id || !isset($_SERVER['HTTP_X_REQUESTED_WITH']) || empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $modx->sendErrorPage();
}
$response = [];

switch ($modx->request->parameters['POST']['action']) {
    case "remove":
        $response = $modx->runProcessor('web/notification/read', ['notification_id' => $modx->request->parameters['POST']['id'], 'user_id' => $modx->user->id], ['processors_path' => $modx->usernotification->config['processorsPath']])->response;
        break;
}
if (!is_array($response) || !count($response)) {
    $modx->sendErrorPage();
}
die(json_encode($response));

