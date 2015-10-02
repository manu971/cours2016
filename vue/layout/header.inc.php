<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo TITLE; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/styles/style.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	</head>

<body>

	<header>
		<div id="div_bonjour">

			<?php if(isset($_SESSION['user_login']) && $_SESSION['user_login']): ?>

				<p>Bonjour <?php echo $_SESSION['user_login']; ?></p>

			<?php endif; ?>

		</div>

		<div id="div_bye">
			<a href="?module=user&amp;action=inscription">Inscription</a>

			<?php if(isset($_SESSION['user_login']) && $_SESSION['user_login']){ ?>

				<a href="?module=user&amp;action=logout">Déconnexion</a>

			<?php }else{ ?>

				<a href="?module=user&amp;action=login">Connexion</a>
			<?php } ?>

		</div>
	</header>