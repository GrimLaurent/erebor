<?php

function get_activite()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM activite order by NomActivite ");
    $req->execute();
    $lesactivites = $req->fetchAll();
        
    return $lesactivites;
}
?>