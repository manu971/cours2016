<?php include('vue/layout/header.php'); ?>

	<h2>Page détail article</h2>

		<?php //var_dump($article); ?>

		<h2><?php echo $article['post_title']; ?></h2>

		<p>Par 
			<em><?php echo $article['display_name']// pas post_author; ?></em>, le 
			<em><?php echo $article['post_date']; ?></em>
		</p>

		<p> Catégorie: <?php echo $article['cat_descr']// pas post_category; ?></p>
		<p> <?php echo $article['post_content']; ?></p><br/>

	<hr>

	<h2> commentaires </h3>

		<?php foreach ($commentaires as $commentaire) { ?>

			<strong><?php echo $commentaire['comment_author']; ?></strong> le <em><?php echo $commentaire['comment_date']; ?></em>:
			<br/>	
			<?php echo $commentaire['comment_content']; ?>
			<br/><br/>
			
			
	<?php } ?>

	<br/>
	<hr>
	<?php
		if(isset($_GET['return']))
		{
			if($_GET['return']=='insert_succes')
			{
				echo "insertion réussie";
			}
			else
			{
				echo "insertion pas réussie";
			}
		}
	?>
	<form action="" method="post">
		<input id="pseudo" name="pseudo" type="text" value="1"><br/>

		<input id="id" name="id" type="hidden" value=<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>><br/>

		<textarea id="commentaire" name="commentaire" rows="8" cols="50"></textarea><br/>

		<input id="publier" name="publier" type="submit"><br/>
	</form>

	<br/><br/>


	<a href=<?php echo $_SERVER['HTTP_REFERER']; ?>>Retourner à la liste</a>


<?php include('vue/layout/footer.php'); ?>