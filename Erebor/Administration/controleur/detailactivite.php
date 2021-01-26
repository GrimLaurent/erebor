<?php
//récupération de l'identifiant artiste passé en paramètre
	$idActiviteChoisi = $_GET["IdAct"];
	
	
//récupération des infos  correspondant à l'activité
	include_once('modele/mod_reglement_activite.php');
	$uneActivite = get_detailActivite($idActiviteChoisi);
	

// affichage de la vue associée
	include_once('vue/vue_detailactivite.php');
?>