<?php
if (!$modx->getOption('cityfields_active')) return false;

$cityFields = $modx->getService('cityfields','cityFields',$modx->getOption('cityfields.core_path',null,$modx->getOption('core_path').'components/cityfields/').'model/cityfields/',$scriptProperties);
if (!($cityFields instanceof cityFields)) return false;

if ( empty($key) && empty($input) ) return false;
if ( empty($city) && empty($options) ) $city = $cityFields->currentCityId;

if ( !is_numeric($city) && !is_numeric($options) ) {
	$tmp = $modx->getObject('cfCity', array(
		array(
			'key' => $city ?: $options,
			'OR:name:=' => $city ?: $options
		),
		'active' => 1
	));
	if ( $tmp ) $city = $tmp->get('id');
	else return false;
}

$field = $modx->getObject('cfField', array(
	'city_id' => $city ?: $options,
	'placeholder' => $key ?: $input
));
return ( $field ) ? $field->get('value') : false;