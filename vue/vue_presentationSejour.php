<?php 
	include "header.php";
	
?>

<section>
	
	<?php
		foreach ($lesSejours as $UnSejour)
	{
	$wVilleEtape=$UnSejour['VilleEtape'];
	$wNomHebergement=$UnSejour['NomHeb'];
	$wSiteInternet=$UnSejour['SiteInternet'];
	
	echo"<tr><td>$wNomHebergement"."$wVilleEtape"."$wSiteInternet</td></tr>";
	}
	
	
	?>

</section>