<?php
	
	include_once('header.php') ;
?>
<section id="reservation">
    <h1>Récapitulatif demande Réservation</h1>

		<?php
			
			echo"<div id='floatleft'><img src='vue/img/logo.jpg'  /></div>";
			echo"   <div id='details'>Nom  : $nom <br/> Prénom  : $prenom <br/> Adresse  : $adresse <br/>"
                                . " Code Postal  : $cp <br/> Ville  : $ville <br/> Date Départ  : $datedepart <br/> "
                                . "Village Départ  :$villedepart <br/> Nombres de Jours  : $nbJours <br/><br/>"
                                . "<input type=button value='envoyer la demande' onclick=\"alert('fonctionnalité encore en développement')\"</div>";
			
		?>
		
</section>