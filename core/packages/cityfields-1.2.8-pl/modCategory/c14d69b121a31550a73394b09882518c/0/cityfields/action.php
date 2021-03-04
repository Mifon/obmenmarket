<?php

if (empty($_REQUEST['action']) && empty($_REQUEST['cityfields_action'])) {
	die('Access denied');
}

if (!empty($_REQUEST['action'])) {$_REQUEST['cityfields_action'] = $_REQUEST['action'];}

if ( file_exists(dirname(dirname(dirname(dirname(__FILE__)))).'/index.php') ) {
	require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/index.php';
} else {
	require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/index.php';
}
