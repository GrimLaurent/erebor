<?php
//récupèration de l'ensemble des chambres dans la base
	include_once('modele/mod_chambre.php');
	
	$leschambres = get_chambre();
	
	
// affichage de la vue associée
	include_once('vue/vue_chambre.php');
?>