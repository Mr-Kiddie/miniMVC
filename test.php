<?php
	/*
		step1: users 		-> 	get controller and make an instruction;
		step2: controller	->	choose a modeldepending on the instruction; 
		step3: model		->	execute the instruction and fetch the correct data;
		step4: controller 	-> 	choose a viewer depending on the instruction;
		step5: viewer		->	using viewer to display the data fetched in the step3;
	*/
	require_once('testController.class.php');
	require_once('testModel.class.php');
	require_once('testView.class.php');

	$testController = new testController();
	$testController->show();
?>

