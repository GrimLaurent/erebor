<?php
//récupèration de l'ensemble des chambres dans la base
	include_once('modele/mod_vReservation.php');
	
	$lesvre= get_vre();
	
	
// affichage de la vue associée
	include_once('vue/vue_vReservation.php');
?>