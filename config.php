<?php
	define('ROOT',dirname(__FILE__));
	define('PROTOCOL', "http://");
	define('SITE_NAME', "magistr-zno.com.ua/");
	define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('REQUEST_URI', $_SERVER['REQUEST_URI']);
	if(!empty($_SERVER['HTTP_REFERER'])) $referer = $_SERVER['HTTP_REFERER'];
	else $referer = "";
	define('REFERER_URI', $referer);
	define('BLOCK_FOLDER', ROOT . "/tpl_blocks/");
?>