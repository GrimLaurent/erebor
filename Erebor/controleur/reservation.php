<?php
	
// affichage de la vue associée
    $nch = $_GET['IdCh'];
	include_once('modele/mod_insertion.php');
	
	$chAffiche = get_afficher($nch);
	include_once('vue/vue_reservation.php');
	?>