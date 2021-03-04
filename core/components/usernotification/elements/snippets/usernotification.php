<?php
$modx->getService('pdoTools');
$modx->getService('usernotification', 'usernotification', MODX_CORE_PATH . 'components/usernotification/model/usernotification/');

$user_id = $modx->getOption('user_id', $scriptProperties, $modx->user->id);
$tpl = $modx->getOption('tpl', $scriptProperties, 'userNotificationRow');
$tplOuter = $modx->getOption('tplOuter', $scriptProperties, 'userNotificationOuter');
$tplEmpty = $modx->getOption('tplEmpty', $scriptProperties, 'userNotificationEmpty');
$mode = $modx->getOption('mode', $scriptProperties, '');
$where = $modx->getOption('where', $scriptProperties, '');
$sortby = $modx->getOption('sortby', $scriptProperties, 'createdon');
$sortdir = $modx->getOption('sortdir', $scriptProperties, 'DESC');
$limit = $modx->getOption('limit', $scriptProperties, 0);
$js = $modx->getOption('js', $scriptProperties, $modx->usernotification->config['jsUrl'] . 'web/default.js?v=' . $modx->usernotification->version);
$css = $modx->getOption('css', $scriptProperties, $modx->usernotification->config['cssUrl'] . 'web/default.css?v=' . $modx->usernotification->version);
$action = $modx->getOption('action', $scriptProperties, $modx->usernotification->config['assetsUrl'] . 'action.php');

if (!$user_id) {
    return false;
}
$userGroup = $modx->usernotification->userGroup($user_id);

$c = $modx->newQuery('extUserNotificationView');
$c->select('notification_id');
$c->where(array(
    'user_id' => $user_id,
));
$c->prepare();
$sql = $c->toSQL();
$c = $modx->newQuery('extUserNotification');
$c->select($modx->getSelectColumns('extUserNotification', 'extUserNotification', ''));
$c->where(array('`id` NOT IN (' . $sql . ')'));
$c->where(array(
    array(
        array(
            'type' => 0,
            'user_id' => $user_id,
        ),
        array(
            'OR:type:=' => '1',
            'user_id:IN' => $userGroup,
        ),
        array(
            'OR:type:=' => '2',
        ),
    ),
));
$c->where([
    'extUserNotification.createdon:>=' => $modx->usernotification->getDateStart($user_id),
]);
if ($where) {
    $where = is_array($where) ? $where : json_decode($where, true);
    $c->where($where);
}
$c->sortby($sortby, $sortdir);
if (!$c->prepare() || !$c->stmt->execute() || !$count = $c->stmt->rowCount()) {
    if ($mode != 'count') {
        return $modx->pdoTools->getChunk($tplEmpty);
    }
}
$config = [
    'action' => $action,
    'total' => (int)$count,
];
if ($js) {
    $modx->regClientScript($js);
    $modx->regClientHTMLBlock("<script>if(typeof UserNotification == 'object'){UserNotification.setConfig(" . json_encode($config) . ");}</script>");
}
if ($css) {
    $modx->regClientCSS($css);
}
if ($limit) {
    $c->limit($limit);
}
if ($mode == 'count') {
    return (int)$count;
}
$return = '';
foreach ($c->stmt->fetchAll(PDO::FETCH_ASSOC) as $v) {
    $return .= $modx->pdoTools->getChunk($tpl, $v);
}
if ($tplOuter) {
    $return = $modx->pdoTools->getChunk($tplOuter, ['rows' => $return, 'total' => (int)$count]);
}
return $return;