<?php // MODELE VERIFICATION DE L'EXISTANTE DU LOGIN ET NOM D'UTILISATEUR

	function user_exist($user_name, $login)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM users 
										WHERE display_name = :user_name OR login = :login');

			$select -> bindValue(':user_name', $user_name, PDO::PARAM_STR);
			$select -> bindValue(':login', $login, PDO::PARAM_STR);

			$select -> execute();

			$resultat = $select -> rowCount();

			if($resultat == 0)
			{
				return 0;
			}
			else
			{
				return 1;
			}
		
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}
	}