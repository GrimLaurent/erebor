<?php

$nomAct = $_POST['nomActivite'];
$regAct = $_POST['Reglement'];
$dureeAct = $_POST['Duree'];
$prixAct = $_POST['Prix'];
$imgAct = $_POST['img_Activite'];
$imgAct2 = $_POST['img_Activite2'];

	include_once('modele/mod_verifAjoutActivite.php');

	get_ajoutActivite($nomAct, $regAct, $dureeAct, $prixAct, $imgAct, $imgAct2);

	//echo"INSERT INTO activite(NomActivite, Reglement, Duree, Prix, Img_Activite, ImgActivite2) VALUES ('$nomAct', '$regAct', $dureeAct, $prixAct, '$imgAct', '$imgAct2')";


	header("location:index.php?section=activite");

?>