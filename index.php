<?php
	// modif in index
	function senkei_session_start($name = '')
	{
		session_name($name);
		session_start();

		$ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

		$securite = $ip . '_' . $_SERVER['HTTP_USER_AGENT'];

		if(!isset($_SESSION['senkei_secu']))
		{
			$_SESSION['senkei_secu'] = $securite;
			return true;
		}
		else
		{
			if($_SESSION['senkei_secu'] != $securite)
			{
				session_regenerate_id();
				$_SESSION = array();
				return false;
			}
			else
			{
				return true;
			}
		}
	}

	/*senkei_session_start(session_name);
	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";*/

	// SECURISATION DES FICHIERS INCLUDES
	define('_BASE_URL', TRUE);

	include('modele/param.inc.php');
	include('controleur/user/cookie_session.php');
	include('config/config.inc.php');


	if(isset($_GET['module']))
	{
		$module = $_GET['module'];
	}
	else
	{
		$module = 'blog';
	}

	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else
	{
		$action = 'index';
	}

	$url = 'controleur/'.$module.'/'.$action.'.php';

	if(file_exists($url))
	{
		include_once($url);
	}
	else
	{
		include_once('vue/404.php');
	}