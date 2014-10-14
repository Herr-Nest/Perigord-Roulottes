<?php

    if(!isset($_POST['nomclient']) || !isset($_POST['prenomclient']) || !isset($_POST['adresseclient'])
            || !isset($_POST['cpclient']) || !isset($POST['villeclient']) || !isset($_POST['date']))
    {
        $msg_error = 'Veuillez remplir tout les champs' ;
        
        include_once('vue/vue_reservation.php') ;
    }
    else
    {
        $nom = $_POST['nomclient'] ;
        $prenom = $_POST['prenomclient'] ;
        $adresse = $_POST['adresseclient'] ;
        $cp = $_POST['cpclient'] ;
        $ville = $POST['villeclient'] ;
        $datedepart = $_POST['date'] ;
    }

