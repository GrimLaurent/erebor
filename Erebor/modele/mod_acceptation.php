<?php

function get_DetailReservation($nom)
{
    global $bdd;
	$req = $bdd -> prepare("SELECT * 
							FROM reservation
							where NomR= '$nom'");
	$req -> execute();
	$detail= $req-> fetch();
	
	return $detail;
}
?>