<?php include('vue/layout/header.php'); ?>

	<h1>Page d'accueil du blog</h1>
	<a href="?page=1">1</a>
	<a href="?page=2">2</a>
	<a href="?page=3">3</a>
	<a href="?page=4">4</a>

	<?php foreach ($articles as $article) { ?>

			<h2>
				<a href="?action=article&amp;id=<?php echo $article['post_ID']; ?>">
					<?php echo $article['post_title']; ?>
				</a>
			</h2>
			<p>Par 
				<em><?php echo $article['display_name']// pas post_author; ?></em>, le 
				<em><?php echo $article['post_date']; ?></em>
			</p>
			<p> Catégorie: <?php echo $article['cat_descr']// pas post_category; ?></p>
			<p> <?php echo substr($article['post_content'], 0, MAXCHAR); ?></p><br/>
			
	<?php } ?>


<?php include('vue/layout/footer.php'); ?>