<?php
	
	function get_Sejour()
	{
		global $bdd;
		
		$req = $bdd -> prepare("SELECT * FROM etape ");
		$req -> execute();
		$sejour =$req->fetchAll();

		return $sejour;
		
	}
	
        function get_villeEtape($numEtape)
        {
            global $bdd;
            
            $req=$bdd->prepare("SELECT VilleEtape FROM etape WHERE NumEtape=$numEtape");
            $req->execute();
            $VilleEtape=$req->fetchColumn();
            return $VilleEtape;
        }
	function get_Suivant($i)
	{
	global $bdd;
	
	$req = $bdd -> prepare("SELECT VilleEtape FROM etape WHERE NumEtape=$i");
		$req -> execute();
		$Suivant =$req->fetch();

		return $Suivant;
	}


