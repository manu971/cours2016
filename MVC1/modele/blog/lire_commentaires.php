<?php
// modèle lire_commentaires.php

function lire_commentaires($id, $offset, $limite)
{
	global $bdd;

	//echo "modèle lire_article";
	try
	{
		$select = $bdd -> prepare('SELECT * FROM blog_comments, blog_posts
									WHERE post_ID = :id
									ORDER BY comment_date DESC
									LIMIT :offset, :limite');

		$select -> bindValue(':id', $id, PDO::PARAM_INT);
		$select -> bindValue(':offset', $offset, PDO::PARAM_INT);
		$select -> bindValue(':limite', $limite, PDO::PARAM_INT);
		
		$select -> execute();
	
		$commentaires = $select -> fetchAll();
		
	}
	catch (exception $e)
	{
		die($e->getMessage());
	}
	return $commentaires;
	
}  