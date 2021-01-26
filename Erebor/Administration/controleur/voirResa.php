<?php

	include_once('modele/mod_voirResa.php');
	$nom = $_POST["lar"];
	$uneReservation = get_DetailReservation($nom);
	
	
// affichage de la vue associée
	include_once('vue/vue_voirResa.php');
?>