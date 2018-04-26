<?php
	require_once("../config.php");
	require_once("local_config.php");
	require_once("../tpl_php/autoload.php");
	require_once("../tpl_php/functions.php");
	session_start();

	$db = Database::getInstance();
	$mysqli = $db->getConnection();

	$routes = array();
	$first_level_slug  = '';
	$second_level_slug = '';
	$third_level_slug  = '';
	$description 	   = '';
	$keywords 		   = '';

	$routes = require_once("routes.php");
	if(empty($routes)) {
		print("<h1>Приносим извинения, сайт временно отдыхает</h1>");
	}
	$address = trim($_SERVER["REQUEST_URI"],"/");
	//$result = preg_grep("~$address~", array_keys($routes));
	$result = check_array_with_regular($routes, $address);
	//$result = array_values($result);
	if($result && !empty($result[1])) {
		$data = explode('/', $result[1]);
		$slug_data = explode('/', $address);
		$first_level_slug = $slug_data[0];
		if(count($slug_data) > 1) $second_level_slug = $slug_data[1];
		if(count($slug_data) > 2) $third_level_slug = $slug_data[2];
		$controller = $data[0];
		$method 	= $data[1];
		if(file_exists(sprintf(CONTROLLER . "%sController.php", $controller))) {
			require_once(sprintf(CONTROLLER . "%sController.php", $controller));
			$controller::$method();
		}
	}

?>