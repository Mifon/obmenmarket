<?php
/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService('reMessages', 'reMessages', MODX_CORE_PATH . 'components/remessages/model/', $scriptProperties);
if (!$reMessages) {
    return 'Could not load reMessages class!';
}

$scriptProperties['pageId'] = $modx->getOption('remessages_page');
if (!$scriptProperties['pageId']) {
    $pageId = $modx->resource->id;
    if ($setting = $modx->getObject('modSystemSetting', ['key' => 'remessages_page'])) {
        $setting->set('value', $pageId);
        $setting->save();
    }
    $scriptProperties['pageId'] = $pageId;
}
$_SESSION['scriptProperties'] = $scriptProperties;

if (isset($_REQUEST['identifier']) && $_REQUEST['identifier']) {
    return $reMessages->getDialog($_REQUEST['identifier']);
} else {
    return $reMessages->getThreads();
}