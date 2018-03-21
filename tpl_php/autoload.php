<?php
	ini_set('display_errors','Off');
	function __autoload($name) {
		require 'class' . $name . '.php';
	}
	require_once "recaptchalib.php";
 ?>