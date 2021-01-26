<?php

function get_supprimerChambre($idCha)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM chambre WHERE idChambre= $idCha");
	$req->execute();
   
}
?>