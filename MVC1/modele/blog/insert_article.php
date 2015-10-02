<?php
	
	function insert_article($post)
	{
		global $bdd;

		try
		{
			$insert = $bdd -> prepare("INSERT INTO blog_comments (comment_post_ID, comment_author, comment_content)
										VALUES (:id, :author, :content)");

			$insert -> bindValue(':id', $post['id'], PDO::PARAM_INT);
			$insert -> bindValue(':author', $post['pseudo'], PDO::PARAM_STR);
			$insert -> bindValue(':content', $post['commentaire'], PDO::PARAM_STR);

			$insert -> execute();

			return true;
		}
		catch (Exception $e)
		{
			die($e->getMessage());
			return false;
		}
	}