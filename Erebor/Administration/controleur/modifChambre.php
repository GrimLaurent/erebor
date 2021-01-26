<?php

$action = $_GET["action"];
$idChambre = $_GET['IdCha'];
include("modele/mod_modifChambre.php");

switch ($action) {
	case 'nom':
		$nomC = $_POST['MNom'];
		modifNom($nomC, $idChambre);
		break;
	
	case 'desc':
		$descC = $_POST['MDesc'];
		modifDesc($descC, $idChambre);
		break;

	case 'prix':
		$prixC = $_POST['MPrix'];
        modifPrix($prixC, $idChambre);
        break;
}


header("location:index.php?section=detailchambre&IdCh=$idChambre");


