<?php // MODELE DE CONNEXION

	function connexion($login, $password) 
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM users 
										WHERE login=:login AND pass=:password');

			$select -> bindValue(':login', $login, PDO::PARAM_STR);
			$select -> bindValue(':password', $password, PDO::PARAM_STR);

			$select -> execute();

			$user_data = $select -> fetch();

			$nb_resultats = $select -> rowCount();

			if($nb_resultats == 0)
			{
				return 0;
			}
			elseif($nb_resultats == 1)
			{
				$_SESSION = $user_data;
				return 1;
			}
			else
			{
				return 'n';
			}
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}
	}