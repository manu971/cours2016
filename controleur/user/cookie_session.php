<?php // CONTROLEUR SECONDAIRE COOKIE DE SESSION

	if(!isset($_SESSION['user_login']) || !$_SESSION['user_login'])
	{ 
		if(isset($_COOKIE['remember']))
		{
			$cookie_data = explode('|', $_COOKIE['remember']);

			$login = $cookie_data[0];
			$password = $cookie_data[1];

			include('modele/user/login.php');
			connexion($login, $password);
		}
	}