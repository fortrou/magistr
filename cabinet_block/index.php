<?php
	require_once("../config.php");
	require_once("../tpl_php/autoload.php");
	session_start();

	var_dump(ROOT);
	echo "<br>";
	var_dump(DOC_ROOT);
	echo "<br>";
	var_dump(REQUEST_URI);
	echo "<br>";
	var_dump(REFERER_URI);
	/*$db = Database::getInstance();
	$mysqli = $db->getConnection();*/
	$routes = array();
	$routes = require_once("routes.php");
	echo "<pre>";
	print_r($routes);
	echo "</pre>";
?>