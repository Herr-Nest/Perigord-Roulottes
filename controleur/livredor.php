<?php

    include_once('modele/mod_livredor.php') ;
    
    if(isset($_POST['pseudo']) & isset($_POST['billet']))
    {
        $auteur = $_POST['pseudo'] ;
        $billet = $_POST['billet'] ;
        
        insert_billet($auteur, $billet) ;
        
        $msg_confirm = 'Votre message a bien été envoyé' ;
    }
    
    if(!isset($_GET['page']))
    {
        $page = 1 ;
    }
    else
    {
        $page = $_GET['page'] ;
    }
    
    $nbbillets = count_billets();
    
    $billets = get_billets($page) ;
    
    include_once('vue/vue_livredor.php') ;

