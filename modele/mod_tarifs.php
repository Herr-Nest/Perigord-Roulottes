<?php
	function getTarifs(){
		global $bdd;
		$req=$bdd->prepare("SELECT * FROM duree, saison, tarif WHERE duree.NbJours=tarif.NbJours AND tarif.NumSaison=saison.NumSaison AND NomSaison!='automne' ORDER BY duree.NbJours, tarif.NumSaison");
		$req->execute();
		$tarifs=$req->fetchAll();
		return $tarifs;		

	}

?>
