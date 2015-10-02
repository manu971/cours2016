<?php // CONTROLEUR SECONDAIRE DECONNEXION

	session_destroy();

	session_unset();

	setcookie('remember', '', time()-1000); 

	//unset($_COOKIE);

	header('location: ?module=blog&action=index');
	exit;