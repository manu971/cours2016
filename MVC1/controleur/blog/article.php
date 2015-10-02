<? // CONROLEUR SECONDAIRE blog/secondaire

	if(isset($_POST['publier']))
	{
		include_once('modele/blog/insert_article.php');
		if(insert_article($_POST))
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
		include_once('modele/blog/lire_article.php');
		$article = lire_article($_GET['id']);

		include_once('modele/blog/lire_commentaires.php');
		$commentaires = lire_commentaires($_GET['id'], 0, 5);

		include_once('vue/blog/article.php');
	}