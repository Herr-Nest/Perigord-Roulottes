<?php
	//recuperation de l'ensemble des sejours
	include_once('modele/mod_presentationSejour.php');
	
	$lesSejours = get_Sejour();
	
	
	//recuperation de la vue 
	include_once('vue/vue_presentationSejour.php');
	

