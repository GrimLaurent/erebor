<?php


function get_detailActivite($idActiviteChoisi)
{
    global $bdd;
	$req = $bdd -> prepare("			SELECT * 
							FROM  activite
							where IdActivite= $idActiviteChoisi");
	$req -> execute();
	$reglement_detail= $req-> fetch();
	
	return $reglement_detail;
}
