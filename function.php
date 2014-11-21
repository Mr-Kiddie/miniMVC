<?php
	/*
	*	function C($name, $method);
	*	
	*	arg:
	*		$name, 		name of Controller
	*		$method,	name of method you wanna execute
	*
	*	return:
	*		no return value
	*/
	function C($name, $method) {
		require_once('libs/Controller/'.$name.'Controller.class.php');
		eval('$obj = new '.$name.'Controller(); $obj->'.$method.'();');
	}

	/*
	*	function M($name);
	*
	*	arg:
	*		$name, 		name of Model
	*
	*	return:
	*		a reference of Model
	*/
	function M($name) {
		require_once('libs/Model/'.$name.'Model.class.php');
		eval('$obj = new '.$name.'Model();');

		return $obj;
	}

	/*
	*	function V($name);
	*
	*	arg:
	*		$name,		name of View
	*
	*	return:
	*		a reference of View
	*/
	function V($name) {
		require_once('libs/View/'.$name.'View.class.php');
		eval('$obj = new '.$name.'View();');
	
		return $obj;
	}

?>

