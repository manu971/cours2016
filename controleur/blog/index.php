<?php // CONTROLEUR SECONDAIRE INDEX BLOG

	/*=================================================
						PAGINATION
	=================================================*/
	if(!isset($_GET['page']) || $_GET['page']<1)
	{
		$page = 1;
	}
	else
	{
		$page = $_GET['page'];
	}

	$offset = ($page-1)*max_articles;


	/*=================================================
					LISTE CATEGORIES
	=================================================*/
	if (!isset($_GET["cat"]))
	{
		$cat = 0;
	} 
	else 
	{
		$cat = $_GET["cat"];
	}


	include('modele/blog/lire_articles.php');
	$articles = lire_articles($cat, $offset, max_articles);

	include('modele/blog/liste_categories.php');
	$categories = liste_categories();

	define('TITLE', 'Accueil du blog');
	

	include('vue/blog/index.php'); 