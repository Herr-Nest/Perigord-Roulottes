<?php 
	include "header.php";
	
?>

<section>
	
	<h1><b>Presentation des Sejours</b></h1>
	
		<table>	
			<tr><th>Nom Hebergement</th><th>Ville Etape</th><th>Site Internet</th><th>Description de l'étape</th><th>Etape suivante</th></tr>	
				<?php
					foreach ($lesSejours as $UnSejour)
					{
					$wVilleEtape=$UnSejour['VilleEtape'];
					$wNomHebergement=$UnSejour['NomHeb'];
					$wSiteInternet=$UnSejour['SiteInternet'];
					$wDescriptionEtape=$UnSejour['DescriptionEtape'];
					
					$suivant = get_Suivant($UnSejour['EtapeSuivante']) ;
					
					$etapesuivant = $suivant['VilleEtape'] ;
					
					echo"<tr><td>$wNomHebergement</td><td>$wVilleEtape</td><td><a href=http://$wSiteInternet>Site internet</a></td><td>$wDescriptionEtape</td><td>$etapesuivant</td></tr>";
					}
	
	
				?>
	
		</table>
</section>