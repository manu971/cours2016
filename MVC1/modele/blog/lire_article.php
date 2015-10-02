<?php

function lire_article($id)
{
	global $bdd;

	//echo "modèle lire_article";
	try
	{
		$select = $bdd -> prepare('SELECT * FROM blog_posts, blog_users, blog_categories
									WHERE post_author = ID 
									and post_category = cat_id
									and post_id = :id');

		$select -> bindValue(':id', $id, PDO::PARAM_INT);
		
		$select -> execute();
	
		$article = $select -> fetch();
		
	}
	catch (exception $e)
	{
		die($e->getMessage());
	}
	return $article;
	
} 