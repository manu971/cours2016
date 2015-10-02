<?php
// modèle lire_articles.php

function lire_articles($offset, $limite)
{
	global $bdd;

	//echo "modèle lire_article";
	try
	{
		$select = $bdd -> prepare('SELECT * FROM blog_posts, blog_users, blog_categories
									WHERE post_author = ID 
									and post_category = cat_id
									ORDER BY post_date ASC 
									LIMIT :offset, :limite');

		$select -> bindValue(':limite', $limite, PDO::PARAM_INT);
		$select -> bindValue(':offset', $offset, PDO::PARAM_INT);
		
		$select -> execute();
	
		$articles = $select -> fetchAll();
		
	}
	catch (exception $e)
	{
		die($e->getMessage());
	}
	return $articles;
	
}