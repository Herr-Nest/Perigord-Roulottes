<?php

	include_once('modele/connexionBdd.php');
	
	if (!isset($_GET['section']) OR $_GET['section'] == 'index')
	{
$title="Accueil";
    	include_once('controleur/accueil.php');

	}
	else{
		switch($_GET['section']){
			case 'tarifs':
                                $title="Tarifs";
				include_once('controleur/tarifs.php');
				break;
			case 'sejours':
                                $title="Sejours";
				include_once('controleur/presentationSejour.php');
				break;
                        case 'reservation' :
                                $title="Reservation";
                                include_once('controleur/reservation.php');
                                break ;
                        case 'reserv_roul' :
                                $title="Reservation";
                                include_once('controleur/reserv_roulotte.php');
                                break ;
                        case 'livredor' :
                                $title="Livre d'or";
                                include_once('controleur/livredor.php');
                                break ;
		}
	}
?>

