<?php 
	include "header.php";
	
?>

<section>
<meta charset="UTF-8"> 
	<table style="width:100%" >
	
	<h1><b>Presentation des Sejours</b></h1>
	<tr><th>Nom Hebergement</th><th>Ville Etape</th><th>Site Internet</th><th>Description de l'étape</th></tr>
	
	<?php
	
		foreach ($lesSejours as $UnSejour)
	{
	$wVilleEtape=$UnSejour['VilleEtape'];
	$wNomHebergement=$UnSejour['NomHeb'];
	$wSiteInternet=$UnSejour['SiteInternet'];
	$wDescriptionEtape=$UnSejour['DescriptionEtape'];
	
	echo"<tr><td><p>$wNomHebergement</td><br><td>$wVilleEtape</td>"."<td><p> $wSiteInternet </p></td><td><p>$wDescriptionEtape</p></td></tr>";
	}
	
	
	?>
	
	</table>
</section>