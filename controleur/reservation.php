<?php

    include_once('modele/mod_reservation.php') ;

    $liste_sejours = get_sejours() ;
    $liste_etapes=  get_Sejour();
    
    include_once('vue/vue_reservation.php') ;