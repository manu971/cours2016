<?php // CONTROLEUR SECONDAIRE CONNEXION.PHP
	
	if(isset($_POST['connexion'])) 
	{
		$login = $_POST['login'];
		$password = md5($_POST['password']);

		if(!empty($login) && !empty($_POST['password']))
		{
			include('modele/user/login.php');

			switch(connexion($login, $password))
			{
				case 0:
					$user_unknown = true;
					break;

				case 1:
					if(isset($_POST['remember']))
					{
						if(!setcookie('remember', $login.'|'.$password, time()+3600*24*7))
						{
							echo 'erreur cookie';
						}
					}
					header('location: ?module=blog&action=index');
					break;

				default:
					$error_user = true;
					break;
			}
		}
		else
		{
			$empty = true;
		}
	}
	include('vue/user/login.php');