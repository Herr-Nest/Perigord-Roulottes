<?php

	include_once('modele/connexionBdd.php');
	
	if (!isset($_GET['section']) OR $_GET['section'] == 'index')
	{

    	include_once('controleur/accueil.php');

	}
	else{
		switch($_GET['section']){
			case 'tarifs':
				include_once('controleur/tarifs.php');
				break;
			case 'sejours':
				include_once('controleur/presentationSejour.php');
				break;
                        case 'reservation' :
                                include_once('controleur/reservation.php');
                                break ;
		}
	}
?>

