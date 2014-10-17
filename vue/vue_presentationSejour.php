<?php 
	include "header.php";
	
?>

<section>
<meta charset="UTF-8"> 
	<table style="width:100%" >
	
	<tr><td> <b> Nom Hebergement <b> </td><td> <b> Ville Etape <b> </td><td> <b> Site Internet </b> </td></tr>
	
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