<?php

	include_once('modele/mod_refuser.php');
	$nomR= $_GET["nom"];
	get_refuser($nomR);
// affichage de la vue associée
	include_once('vue/vue_refuser.php');
?>