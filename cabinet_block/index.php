<?php
	require_once("../config.php");
	require_once("local_config.php");
	require_once("../tpl_php/autoload.php");
	require_once("../tpl_php/functions.php");
	session_start();

	/*$db = Database::getInstance();
	$mysqli = $db->getConnection();*/

	$routes = array();
	$routes = require_once("routes.php");
	if(empty($routes)) {
		print("<h1>Приносим извинения, сайт временно отдыхает</h1>");
	}
	$address = trim($_SERVER["REQUEST_URI"],"/");
	$result = preg_grep("~$address~", array_keys($routes));
	$result = array_values($result);
	if(!empty($routes[$result[0]])) {
		$data = explode('/', $routes[$address]);
		$controller = $data[0];
		$method 	= $data[1];
		if(file_exists(sprintf(CONTROLLER . "%sController.php", $controller))) {
			require_once(sprintf(CONTROLLER . "%sController.php", $controller));
			$controller::$method();
		}
	}

?>