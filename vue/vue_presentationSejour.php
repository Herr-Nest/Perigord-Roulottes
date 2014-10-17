<?php 
	include "header.php";
	
?>

<section>
	
	<h1><b>Presentation des Sejours</b></h1>
	<table>	
	<tr><th>Nom Hebergement</th><th>Ville Etape</th><th>Site Internet</th><th>Description de l'étape</th></tr>	
	<?php
	foreach ($lesSejours as $UnSejour)
	{
	$wVilleEtape=$UnSejour['VilleEtape'];
	$wNomHebergement=$UnSejour['NomHeb'];
	$wSiteInternet=$UnSejour['SiteInternet'];
	$wDescriptionEtape=$UnSejour['DescriptionEtape'];
	
	echo"<tr><td>$wNomHebergement</td><td>$wVilleEtape</td><td>$wSiteInternet</td><td>$wDescriptionEtape</td></tr>";
	}
	
	
	?>
	
	</table>
</section>