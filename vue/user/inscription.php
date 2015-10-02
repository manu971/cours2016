<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Inscription</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/styles/style.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	</head>

<body>

	<h1 class="hcenter">INSCRIPTION</h1>

	<div class="separateur"></div>

	<?php if(isset($empty) && $empty == true): ?>
		<p class="msg">Tous les champs sont obligatoires!!</p> 
	<?php endif; ?>

	<?php if(isset($exist) && $exist == true): ?>
		<p class="msg">Le nom d'utilisateur et/ou le login est déja attribué</p> 
	<?php endif; ?>

	<?php if(isset($pwd_different) && $pwd_different == true): ?>
		<p class="msg">Les deux mots de passe saisis sont différents</p> 
	<?php endif; ?>

	<?php if(isset($invalid_mail) && $invalid_mail == true): ?>
		<p class="msg">Veuillez saisir un mail valide</p> 
	<?php endif; ?>

	<?php if(isset($unknown_error) && $unknown_error == true): ?>
		<p class="msg">Une erreur est survenue</p> 
	<?php endif; ?>

	<?php if(isset($registered) && $registered == true): ?>
		<p class="msg">Félicitations! Votre compte a été enregistré.<a href="?module=user&amp;action=login"> Connexion</a></p> 
	<?php endif; ?>



	<form id="form_inscription" action="" method="post">
		<p>
			<label for="user_name">Nom d'utilisateur</label><br/>
			<input id="user_name" name="user_name" type="text" value=<?php echo $value_name; ?>><br/>

			<label for="login_">Login</label><br/>
			<input id="login_" name="login_" type="text" value=<?php echo $value_login; ?>><br/>

			<label for="password_">Password</label><br/>
			<input id="password_" name="password_" type="password" value=<?php echo $value_password; ?>><br/>

			<label for="password2_">Confirm password</label><br/>
			<input id="password2_" name="password2_" type="password" value=<?php echo $value_password2; ?>><br/>

			<label for="mail_">E-mail</label><br/>
			<input id="mail_" name="mail_" type="text" value=<?php echo $value_mail; ?>><br/>

			<input id="button" name="inscription" type="submit" value="inscription">
		</p>
	</form>
	<br/>
	<br/>
	<p id="return_blog" class="center"><a href="?module=blog&amp;action=index">Retour sur le blog</a></p>
	<br/>
	<br/>


</body>
</html>