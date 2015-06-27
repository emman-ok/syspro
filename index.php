<?php 
	require('config.php');
	require LIBS_DIR . "page_functions.php";
	require(LIBS_DIR . "MysqliDb.php");
	require(LIBS_DIR . 'router.php');
	require(APP_CONTROLLER_DIR.'Controllers.php');
	require(APP_MODEL_DIR.'Models.php');
	require(APP_VIEW_DIR.'Views.php');
	$page=new Bootstrap;
?>
