<?php

function modifPrix($prix, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE activite SET Prix=$prix WHERE IdActivite=$id");
	$req->execute();
}

function modifNom($nom, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE activite SET NomActivite='$nom' WHERE IdActivite=$id");
	$req->execute();
}

function modifReg($reg, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE activite SET Reglement='$reg' WHERE IdActivite=$id");
	$req->execute();
}

?>