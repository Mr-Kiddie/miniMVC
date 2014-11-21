<?php
	//url form: index.php?controller=nameOfController&method=nameOfMethod
	require_once('function.php');
	
	$controller = $_GET['controller'];
	$method = $_GET['method'];

	C($controller, $method);
?>

