<?php // MODELE INSERTION DE COMMENTAIRE

	function insert_comment($commentaire, $cle_user, $cle_post)
	{
		global $bdd;

		try
		{
			$insert = $bdd -> prepare('INSERT INTO comment (comment_content, wbblog_users_user_id, wbblog_posts_post_id) 
										VALUES (:commentaire, :cle_user, :cle_post)');

			$insert -> bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
			$insert -> bindValue(':cle_user', $cle_user, PDO::PARAM_INT);
			$insert -> bindValue(':cle_post', $cle_post, PDO::PARAM_INT);

			$insert -> execute();
			return true;
		}
		catch(exception $e)
		{
			die($e->getMessage());
			return false;
		}
		
	}