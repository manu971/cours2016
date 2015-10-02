<?php // ENREGISTREMENT DU COMPTE USER

	function register($user_name, $login, $password, $mail)
	{
		global $bdd;

		try
		{
			$insert = $bdd -> prepare('INSERT INTO users (display_name, login, pass, email)
										VALUES (:user_name, :login, :password, :mail)');

			$insert -> bindValue(':user_name', $user_name, PDO::PARAM_STR);
			$insert -> bindValue(':login', $login, PDO::PARAM_STR);
			$insert -> bindValue(':password', $password, PDO::PARAM_STR);
			$insert -> bindValue(':mail', $mail, PDO::PARAM_STR);

			$insert -> execute();
			return true;
		}
		catch(exception $e)
		{
			die($e->getMessage());
			return false;
		}
	}