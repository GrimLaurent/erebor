<?php

function get_refuser($nomR)
{
	 global $bdd;
	
    $req = $bdd->prepare("DELETE from reservation where NomR='$nomR'");

	
	$req->execute();
    $formats = $req->fetchAll();
        
    return $formats;
	
 }
 ?>