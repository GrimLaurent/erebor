<?php	
//récupèration de l'ensemble des activités dans la base
	include_once('modele/mod_activites.php');
	
	$lesactivites = get_activite();
	
	
// affichage de la vue associée
	include_once('vue/vue_activites.php');
?>