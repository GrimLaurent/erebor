<?php

function modifPrix($prix, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE chambre SET Prix_chambre=$prix WHERE IdChambre=$id");
	$req->execute();
}

function modifNom($nom, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE chambre SET NomChambre='$nom' WHERE IdChambre=$id");
	$req->execute();
}

function modifDesc($desc, $id)
{
	global $bdd;

	$req = $bdd->prepare("UPDATE chambre SET Description='$desc' WHERE IdChambre=$id");
	$req->execute();
}

?>