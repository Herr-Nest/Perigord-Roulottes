<?php
	
	function get_Sejour()
	{
		global $bdd;
		
		$req = $bdd -> prepare("SELECT * FROM etape ");
		$req -> execute();
		$sejour =$req->fetchAll();

		return $sejour;
		
	}


