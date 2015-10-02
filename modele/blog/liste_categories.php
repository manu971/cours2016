<?php // MODELE LISTE CATEGORIES

	function liste_categories()
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM categories');

			$select -> execute();

			$categories = $select -> fetchAll();
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}

		return $categories;
	}