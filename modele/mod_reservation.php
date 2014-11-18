<?php

    function get_sejours()
    {
        global $bdd ;
        
        $requete = $bdd->prepare('SELECT * FROM duree');
        $requete->execute();
        
        $donnees = $requete->fetchAll() ;
        
        return $donnees ;
    }

    function get_Sejour()
	{
		global $bdd;
		
		$req = $bdd -> prepare("SELECT * FROM etape ");
		$req -> execute();
		$sejour =$req->fetchAll();

		return $sejour;
		
	}