<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Connexion</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/styles/style.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	</head>

<body>

	<h1 class="hcenter">CONNEXION</h1>

	<div class="separateur"></div>


	<?php if(isset($empty) && $empty == true): ?>
		<p class="msg">Tous les champs sont obligatoires!!</p> 
	<?php endif; ?>

	<?php if(isset($user_unknown) && $user_unknown == true): ?>
		<p class="msg">Utilisateur non reconnu, vérifiez vos login et mot de passe</p> 
	<?php endif; ?>

	<?php if(isset($pwd_different) && $pwd_different == true): ?>
		<p class="msg">Erreur dans la gestion des tables utilisateurs</p> 
	<?php endif; ?>
	

	<form id="form_connexion" action="" method="post">
		<p>
			<label for="login">Login</label><br/>
			<input id="login" name="login" type="text" value=""><br/>

			<label for="password">Password</label><br/>
			<input id="password" name="password" type="password" value=""><br/>

			<input id="remember" name="remember" type="checkbox"> Se souvenir de moi</br>

			<input id="button" name="connexion" type="submit" value="connexion">
		</p>
	</form>

</body>
</html>