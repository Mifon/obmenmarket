<?php
/**
 * @var array $scriptProperties
 * @var siteStatistics $siteStat
 */
if (!$siteStat = $modx->getService('sitestatistics', 'siteStatistics',
    $modx->getOption('sitestatistics_core_path', null, $modx->getOption('core_path') . 'components/sitestatistics/') . 'services/')) {
    return 'Could not load siteStatistics class!';
}
if (empty($tpl)) {
    $scriptProperties['tpl'] = 'tpl.siteOnlineUsers';
}

$siteStat->initialize($scriptProperties);

/** @var array $output */
$output = $siteStat->getOnlineUsers();
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}