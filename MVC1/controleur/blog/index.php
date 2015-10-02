<?php // controleur secondaire allant chercher les données pour les transmettre à la vue pour les afficher
	
	if(!isset($_GET['page']) || $_GET['page']<1)
	{
		$page = 1;
	}
	else
	{
		$page = $_GET['page'];
	}
	
	$offset = ($page-1)*MAXART;

	include_once('modele/blog/lire_articles.php');

	$articles = lire_articles($offset, MAXART); // on récupère les articles sous forme de tableau

	include_once('vue/blog/index.php'); 