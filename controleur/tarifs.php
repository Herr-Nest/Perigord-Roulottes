<?php
	include_once('modele/mod_tarifs.php');

	$lesTarifs=getTarifs();

	include_once('vue/vue_tarifs.php');
?>
