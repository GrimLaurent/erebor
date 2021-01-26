<?php

function get_chambre()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM Chambre order by NomChambre ");
	$req->execute();
    $chambre = $req->fetchAll();
        
    return $chambre;
}
?>