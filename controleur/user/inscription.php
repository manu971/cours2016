<?php // CONTROLEUR SECONDAIRE INSCRIPTION
	
	if(isset($_POST['inscription']))
	{

		$user_name = $_POST['user_name'];
		$login = $_POST['login_'];
		$password = md5($_POST['password_']);
		$password2 = md5($_POST['password2_']);
		$mail = $_POST['mail_'];

		// ON VERIFIE QUE LES CHAMPS NE SONT PAS VIDE
		if(!empty($user_name) && !empty($login) && !empty($_POST['password_']) && !empty($_POST['password2_']) && !empty($mail))
		{
			// ON VERIFIE QUE LE NOM D'UTILISATEUR ET LE LOGIN N'EXISTE PAS DEJA
			include('modele/user/user_exist.php');
			if(user_exist($user_name, $login)==0)
			{
				// ON VERIFIE LA CONCORDANCE ENTRE LE PASSWORD ET LE PASSWORD DE CONFIRMATION
				if($password == $password2)
				{
					// ON VERIFIE LA VALIDITE DU MAIL
					if(filter_var($mail, FILTER_VALIDATE_EMAIL))
					{
						// ON PEUT MAINTENANT ENREGISTRER LE COMPTE DE L'UTILISATEUR
						include('modele/user/register.php');
						if(register($user_name, $login, $password, $mail))
						{
							$registered = true;
						}
						else
						{
							$unknown_error = true;
						}
					}
					else
					{
						$invalid_mail = true;
					}
				}
				else
				{
					$pwd_different = true;
				}
			}
			else
			{
				$exist = true;
			}
		}
		else
		{
			$empty = true;
		}

		$value_name = $_POST['user_name'];
		$value_login = $_POST['login_'];
		$value_password = $_POST['password_'];
		$value_password2 = $_POST['password2_'];
		$value_mail = $_POST['mail_'];
	}

	include('vue/user/inscription.php');