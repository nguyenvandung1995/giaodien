<?php
ob_start();
session_start();
	//load config
	include_once("config.php");
	//load model 
	include_once("admin/model/model.php");
	$model=new model();
	//include_once("function/remove_unicode.php");
	$controller=isset($_GET["controller"]) ?$_GET["controller"]:"";
	$load_controller="controller/controller_main.php";
	
	if(file_exists("controller/controller_".$controller.".php"))
		$load_controller="controller/controller_".$controller.".php";

	include_once("view/view_layout.php");
?>