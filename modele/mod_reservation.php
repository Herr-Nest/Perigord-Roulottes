<?php

    function get_sejours()
    {
        global $bdd ;
        
        $requete = $bdd->prepare('SELECT * FROM duree');
        $requete->execute();
        
        $donnees = $requete->fetchAll() ;
        
        return $donnees ;
    }
