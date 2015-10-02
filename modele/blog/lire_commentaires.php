<?php // LIRE LES COMMENTAIRES

	function lire_commentaires($id, $offset, $limite)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM comments, users
										WHERE users_idusers = idusers
										AND posts_idposts = :id
										ORDER BY idcomments DESC
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