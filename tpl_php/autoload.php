<?php
	require_once("../config.php");
	ini_set('display_errors','Off');
	function __autoload($name) {
		require 'class' . $name . '.php';
	}
	require_once "recaptchalib.php";
	$cookieManager = new CookieManager("user-fields", "base64_decode");
	$user_cookie = $cookieManager->get_cookie("user-fields", "base64_decode");
	
 ?>