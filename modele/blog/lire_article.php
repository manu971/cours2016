<?php // MODELE LIRE UN SEUL ARTICLE

	function lire_article($id)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM posts, users, categories, posts_has_categories 
											WHERE users_idusers = idusers
											AND posts_idposts = idposts
											AND categories_idcategories = idcategories
											AND idposts = :id'); // jointure user, puis catégories-posts avec table de jointure

			$select -> bindValue(':id', $id, PDO::PARAM_INT);

			$select -> execute();

			$article = $select -> fetch();
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}

		return $article;
	}