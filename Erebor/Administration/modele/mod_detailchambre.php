<?php


function get_detailChambre($idChambreChoisi)
{
    global $bdd;
	$req = $bdd -> prepare("SELECT * 
							FROM Chambre
							where IdChambre= $idChambreChoisi");
	$req -> execute();
	$detail= $req-> fetch();
	
	return $detail;
}
