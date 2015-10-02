<?php // CONTROLLEUR SECONDAIRE DETAIL D'ARTICLE

	if(isset($_POST['publier']))
	{
		$commentaire = addslashes($_POST['commentaire']);

		include_once('modele/blog/insert_comment.php');
		if(insert_comment($commentaire, $_SESSION['idusers'], $_POST['id']))
		{
			header('location: ?module=blog&action=article&id='.$_POST['id'].'&return=insert_succes');
		}
		else
		{
			header('location: ?module=blog&action=article&'.$_POST['id'].'&return=insert_failed');
		}
	}
	else
	{
		include('modele/blog/lire_article.php');
		$article = lire_article($_GET['id']);

		include_once('modele/blog/lire_commentaires.php');
		$commentaires = lire_commentaires($_GET['id'], 0, 5);

		define('TITLE', $article['title']);

		include('vue/blog/article.php');
	}