<?php
	define('DS', DIRECTORY_SEPARATOR);
	//echo DS;
	define('ROOT', dirname(dirname(__FILE__)));
	//echo ROOT;
	//ternary operator
	$url = (isset($_GET['url'])) ? $_GET['url'] : header("location:./users/generalhomepage");
	//echo $url;exit();
	session_start();
	require_once(ROOT.DS.'library'.DS.'bootstrap.php');
?>
