<?php
	
	if(!defined("_BASE_URL"))
	{
		die('Tu n\'a rien a faire ici!!');
	}

	define("max_articles", 3); // nombre d'article par page dans la pagination
	define("max_caracteres", 500); // nombre de caractère pour troncage des articles non détaillés
	define("session_name", "senkei");