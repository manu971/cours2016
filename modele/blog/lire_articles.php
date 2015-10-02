<?php // MODELE LIRE TOUS LES ARTICLES

	function lire_articles($cat, $offset, $limite)
	{
		global $bdd;

		try
		{
			if($cat == 0)
			{
				$select = $bdd -> prepare('SELECT * FROM posts, users, categories, posts_has_categories 
											WHERE users_idusers = idusers
											AND posts_idposts = idposts
											AND categories_idcategories = idcategories
											ORDER BY idposts DESC
										 	LIMIT :offset, :limite'); // jointure user, puis catégories-posts avec table de jointure

				$select -> bindValue(':offset', $offset, PDO::PARAM_INT);
				$select -> bindValue(':limite', $limite, PDO::PARAM_INT);

				$select -> execute();

				$articles = $select -> fetchAll();
			}
			else
			{
				$select = $bdd -> prepare('SELECT * FROM posts, users, categories, posts_has_categories 
											WHERE users_user_id = idusers
											AND posts_idpost = idposts
											AND categories_categorie_id = idcategories
											AND categorie_id = :cat
											ORDER BY idposts DESC
										 	LIMIT :offset, :limite'); // jointure user, puis catégories-posts avec table de jointure

				$select -> bindValue(':offset', $offset, PDO::PARAM_INT);
				$select -> bindValue(':limite', $limite, PDO::PARAM_INT);
				$select -> bindValue(':cat', $cat, PDO::PARAM_INT);

				$select -> execute();

				$articles = $select -> fetchAll();
			}
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}

		return $articles;
	}