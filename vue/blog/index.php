<?php include('vue/layout/header.inc.php'); ?>
<div id="content">
	<br/>
	<h1>Bienvenue sur mon blog</h1>
	<br/><br/>



	<!--=============================================================

					BOUCLE AFFICHAGE LISTE CATEGORIES

	=============================================================-->
	<ul id="menu_categ">
		<li><a href="?cat=0">Accueil</a></li>
		<?php foreach($categories as $categorie): ?>

			<li><a href="?cat=<?php echo $categorie['idcategories']; ?>"><?php echo $categorie['descr']; ?></a></li>

		<?php endforeach; ?>
	</ul>
	<br/><br/>

	<!--=============================================================

						BOUCLE AFFICHAGE ARTICLE

	=============================================================-->
	<?php foreach($articles as $article): ?>

		<h3><a href="?action=article&amp;id=<?php echo $article['idposts']; ?>"><?php echo $article['title']; ?></a></h3>
		<p><?php echo $article['date']; ?>, par <em><?php echo $article['users_idusers']; ?></em></p>
		<p>Catégorie: <a href="?cat=<?php echo $article['idcategories']; ?>"><?php echo $article['descr']; ?></a></p>
		<br/>
		<p class="parag"><?php echo $article['content']; ?></p>
		<br/><br/><br/>

	<?php endforeach; ?>


	<!--=============================================================

								PAGINATION

	=============================================================-->
	<div id="pagination">
		<p>
			<a href="?page=1">1</a>
			<a href="?page=2">2</a>
			<a href="?page=3">3</a>
			<a href="?page=4">4</a>
		</p>
	</div>


</div>

<?php include('vue/layout/footer.inc.php'); ?>