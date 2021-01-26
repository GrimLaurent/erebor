<?php

function get_ajoutActivite($nomAct, $regAct, $dureeAct, $prixAct, $imgAct, $imgAct2)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO activite(NomActivite, Reglement, Duree, Prix, Img_Activite, ImgActivite2) VALUES ('$nomAct', '$regAct', $dureeAct, $prixAct, '$imgAct', '$imgAct2')");
	$req->execute();
}
?>