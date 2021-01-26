<?php

$IdChambreSuppr = $_GET['IdSuppr'];
	
//récupèration de l'ensemble des artistes dans la base
	include_once('modele/mod_supprimerChambre.php');
	
	get_supprimerChambre($IdChambreSuppr);
	
	
// affichage de la vue associée
	header("location:index.php?section=chambre");