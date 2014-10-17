<?php
	try
	{
		$bdd=new PDO('mysql:host=localhost;dbname=perigordroulottes','root','');
                $bdd->query('SET NAMES UTF8') ;
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
