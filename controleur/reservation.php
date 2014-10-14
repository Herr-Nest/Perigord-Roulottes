<?php

    include_once('modele/mod_reservation.php') ;

    $liste_sejours = get_sejours() ;
    
    include_once('vue/vue_reservation.php') ;