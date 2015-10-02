
<?php

		//Tentative de connexion à la base de données.
		global $bdd;
		
		try{
				$bdd = new PDO('mysql:host=dev.etudiant-eemi.com;dbname=manco','manco','685971');
				$bdd->exec("SET CHARACTER SET utf8");
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

				
				
			}
		//En cas d'erreur,on arrête l'exécution de la page et on affiche l'erreur.
		catch(PDOException $e)
			{
				echo 'Erreur : '.$e->getMessage();
				echo 'N° : '.$e->getCode();
				
			}

?>