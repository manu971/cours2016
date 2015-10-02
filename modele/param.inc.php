<?php 
	
	$dns = 'mysql:host=localhost; dbname=Blog';
	$utilisateur = 'root';
	$motdepasse = '';

	global $bdd;
	
	try
	{
		$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		$bdd = new PDO($dns, $utilisateur, $motdepasse, $option);
		//echo "yes";
	}
	catch(Exception $e)
	{
		//var_dump($e);
		die($e -> getMessage());
	}

?>