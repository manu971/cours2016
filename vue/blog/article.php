<?php include('vue/layout/header.inc.php'); ?>

	<div id="content">
		<br/>
		<!--=============================================================

								AFFICHAGE DE L'ARTICLE

		=============================================================-->
		<h2 class="titre_detail"><?php echo $article['title']; ?></h2>

		<p>
			<?php echo $article['date']; ?>, 
			par 
			<em><?php echo $article['users_idusers']; ?></em>
		</p>
		<br/>

		<p>Catégorie: <a href="?cat=<?php echo $article['idcategories']; ?>">
			<?php echo $article['descr']; ?></a>
		</p>
		<br/>

		<p class="parag">
			<?php echo $article['content']; ?>
		</p>

		<br/><br/>
		<hr>
		<br/>


		<!--=============================================================

							AFFICHAGE DES COMMENTAIRES

		=============================================================-->
		<h3>Commentaires</h3>
		<br/>
		<br/>

		<?php foreach($commentaires as $commentaire): ?>

			<p>
				<span class="comment_user"><b><?php echo $commentaire['users_idusers']; ?></b></span>
			 	 <span class="comment_date"><?php echo $commentaire['date']; ?></span>
			</p>
			
			<p class="parag">
				<?php echo $commentaire['comment_content']; ?>
			</p>
			<br/>

		<?php endforeach; ?>

		<br/><br/>
		<hr>
		<br/>


		<!--=============================================================

						FORMULAIRE INSERTION DE COMMENTAIRE

		=============================================================-->
		<?php if(isset($_SESSION['user_login']) && $_SESSION['user_login']): ?>

			<h3>Publier un commentaire</h3>

			<?php if(isset($_GET['return']) && $_GET['return'] == 'insert_succes'): ?>
				<p>Commentaire publié!!</p> 
			<?php endif; ?>

			<form action="" method="post">

				<input id="id" name="id" type="hidden" value=<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>><br/>

				<textarea id="commentaire" name="commentaire" rows="8" cols="50"></textarea><br/>

				<input id="publier" name="publier" type="submit" value="Publier"><br/>
			</form>

			<br/><br/>
			
		<?php endif; ?>


	<a href="?cat=0">Retourner à l'accueil</a><br/><br/>

	</div>

<?php include('vue/layout/footer.inc.php'); ?>