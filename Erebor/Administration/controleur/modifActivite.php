<?php

$action = $_GET["action"];
$idActivite = $_GET['IdAct'];
include("modele/mod_modifActivite.php");

switch ($action) {
	case 'nom':
		$nomA = $_POST['ANom'];
		modifNom($nomA, $idActivite);
		break;
	
	case 'reg':
		$reg = $_POST['AReg'];
		modifReg($reg, $idActivite);
		break;

	case 'prix':
		$prixA = $_POST['APrix'];
        modifPrix($prixA, $idActivite);
        break;
}


header("location:index.php?section=detailactivite&IdAct=$idActivite");


