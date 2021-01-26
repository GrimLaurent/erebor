<?php

$nomCh = $_POST['nomChambre'];
$desc = $_POST['descriptionChambre'];
$typeCh = $_POST['typechambre'];
$capa = $_POST['capacite'];
$sallebain = $_POST['sallebain'];
$typelit = $_POST['typelit'];
$nblit = $_POST['nbrelit'];
$nbwc = $_POST['nbrewc'];
$debutch = $_POST['heurearrivee'];
$finch = $_POST['heuredepart'];
$equip = $_POST['equipement'];
$image = $_POST['imageChambre'];
$imageDetail1 = $_POST['imageDetailChambre1'];
$imageDetail2 = $_POST['imageDetailChambre2'];
$prix = $_POST['prixChambre'];


	
//récupèration de l'ensemble des artistes dans la base
	include_once('modele/mod_verifAjoutChambre.php');
	
	get_ajoutChambre($nomCh, $desc, $typeCh, $capa, $sallebain, $typelit, $nblit, $nbwc, $debutch, $finch, $equip, $image, $imageDetail1, $imageDetail2, $prix);
	
// affichage de la vue associée
	header("location:index.php?section=chambre");