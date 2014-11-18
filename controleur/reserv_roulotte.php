<?php

    if(!isset($_POST['nomclient']))
    {
        $msg_error = 'Veuillez remplir tout les champs' ;
        
        include_once('controleur/reservation.php') ;
        
    }
    else
    {   
       
        include_once('modele/mod_presentationEtapes.php');
        $nom = $_POST['nomclient'] ;
        $prenom = $_POST['prenomclient'] ;
        $adresse = $_POST['adresseclient'] ;
        $cp = $_POST['cpclient'] ;
        $ville = $_POST['villeclient'] ;
        $datedepart = $_POST['date'] ;
        $nbJours=$_POST['dureesej'];
        $villedepart=get_villeEtape($_POST['villedep']);
        
        include_once('vue/vue_recap_reservation');
}

