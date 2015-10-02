<?php // CONTROLLER PRINCIPALE - dispacher
	
	include("modele/param.inc.php");
	include("config/config.inc.php");

	// Appel du controleur du modile demandé
	if(!isset($_GET['module']))
	{
		$module = "blog";
	}
	else
	{
		$module = $_GET['module'];
	}

	if(!isset($_GET['action']))
	{
		$action = 'index';
	}
	else
	{
		$action = $_GET['action'];
	}


	$url = 'controleur/'.$module.'/'.$action.'.php';

	if(file_exists($url))
	{
		// On appel le controleur secondaire
		include_once($url);
	}
	else
	{
		include_once('vue/404.php');
	}