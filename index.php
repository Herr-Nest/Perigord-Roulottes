<?php

	include_once('modele/connexionBdd.php');
	
	if (!isset($_GET['section']) OR $_GET['section'] == 'index')
	{

    	include_once('controleur/Accueil.php');

	}

?>

