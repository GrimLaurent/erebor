<?php

function get_reservation($nom,$prenom,$adresse,$ville,$cp,$mail,$tel,$datesql,$Tdate,$dfin,$pt,$idch)
{
    global $bdd;
	
    $req = $bdd->prepare("INSERT  INTO reservation (NomR, PrenomR, AdresseR, VilleR, CPR, MailR, TelR, DateReservation, DateDebut, DateFin, PrixTotal, IdChambre)
            VALUES ( '$nom', '$prenom', '$adresse', '$ville', '$cp', '$mail', '$tel', '$datesql','$Tdate','$dfin', $pt, $idch) ") ;

	
	$req->execute();
    
}

function get_afficher($idch)
{
	global $bdd;
	
	$req = $bdd->prepare("Select * 
						From chambre
						where IdChambre=$idch
						");
	$req->execute();
	$jtm=$req->fetch();
	return $jtm;
	
}

?>