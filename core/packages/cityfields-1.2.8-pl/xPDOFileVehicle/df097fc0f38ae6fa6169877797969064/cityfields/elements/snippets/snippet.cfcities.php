<?php
if (!$modx->getOption('cityfields_active')) return false;

$cityFields = $modx->getService('cityfields','cityFields',$modx->getOption('cityfields.core_path',null,$modx->getOption('core_path').'components/cityfields/').'model/cityfields/',$scriptProperties);
if (!($cityFields instanceof cityFields)) return false;
$pdoFetch = $modx->getService('pdoFetch');

if ( empty($selected) ) $selected = ' selected="selected"';
if ( empty($where) ) $where = array();
else $where = is_array($where) ? $where : $modx->fromJSON($where);
if ( empty($sortby) ) $sortby = 'id';
if ( empty($sortdir) ) $sortdir = 'ASC';
if ( !empty($limit) ) $limit = intval($limit);
if ( empty($tplWrapper) ) $tplWrapper = 'cfCities.outer';
if ( empty($tpl) ) $tpl = 'cfCities.row';

if ( $cityFields->cityInDomain ) {
	$default = $modx->getOption('cityfields_default_city', $scriptProperties, 1);
	$host = str_replace('www.', '', MODX_HTTP_HOST);
	$host = function_exists('idn_to_utf8') ? idn_to_utf8($host) : $host;
	$cities = $modx->getObject('cfCity', $cityFields->currentCityId);
	if ( $cities && $cities->get('id') != $default ) $host = preg_replace('/^'.$cities->get('key').'\./ui', '', $host, 1);
}

$q = $modx->newQuery('cfCity');
$q->where(array_merge(array(
	'active' => 1
), $where));
$q->sortby($sortby, $sortdir);
if ( isset($limit) && $limit > 0 ) $q->limit($limit);
$cities = $modx->getCollection('cfCity', $q);
$rows = '';
foreach ( $cities as $city ) {
	$row = $city->toArray();
	if ( $cityFields->cityInDomain ) {
		$row['link'] = MODX_URL_SCHEME . ($city->get('id') == $default ? '' : $city->get('key') . '.') . $host . '/' . ltrim($modx->makeUrl($modx->resource->id), '/');
	} else {
		$row['link'] = MODX_URL_SCHEME . MODX_HTTP_HOST . '/' . ltrim($modx->makeUrl($modx->resource->id), '/') . '?city='.$row['id'];
	}
	$row['selected'] = ( $cityFields->currentCityId == $city->get('id') ) ? $selected : '';
	$rows .= $pdoFetch ? $pdoFetch->getChunk($tpl, $row) : $modx->getChunk($tpl, $row);
}

if ( !empty($cityFields->frontendCSS) ) {
	$modx->regClientCSS($cityFields->frontendCSS);
}
if ( !empty($cityFields->frontendJS) ) {
	$modx->regClientScript(preg_replace('/(\t|\n)/', '', '
		<script type="text/javascript">
			cityFields = {
				actionUrl: "'.$cityFields->config['actionUrl'].'",
				cityInDomain: '.($cityFields->cityInDomain?'true,
				mainHost: "'.$host.'"':'false').'
			};
			typeof jQuery == "function" || document.write("<script type=\"text/javascript\" src=\"' . $cityFields->config['jsUrl'] . 'web/jquery.min.js\"><\/script>");
		</script>
	'));
	$modx->regClientScript($cityFields->frontendJS);
}

return $pdoFetch ? $pdoFetch->getChunk($tplWrapper, array('rows' => $rows)) : $modx->getChunk($tplWrapper, array('rows' => $rows));