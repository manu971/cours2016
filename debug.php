<?php
	
	// Dans le contrôleur principal, mettre la constante à true si serveur de test, et false si non.


	// gestion des erreurs PHP pour être indépendant du php.ini
	 if(defined('DEBUG') && DEBUG)
	 {
	 	// En mode debug, on affiche toutes les erreurs et warning (serveur test)
	 	ini_set('display_errors, 1');
	 	//error_reporting(E_ALL & ~E_DEPRECATED)
	 	error_reporting(E_ALL);
	 }
	 else
	 {
	 	// En mode non debug, on affiche aucun message (serveur prod) 
		ini_set('display_errors, 0');
	 	error_reporting(0);
	 }