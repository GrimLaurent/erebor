<?php
//récupération de l'identifiant artiste passé en paramètre
	$idChambreChoisi = $_GET["IdCh"];
	
	
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_detailchambre.php');
	$uneChambre = get_detailChambre($idChambreChoisi);
	

// affichage de la vue associée
	include_once('vue/vue_detailchambre.php');
?>