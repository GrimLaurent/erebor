<?php 
	function get_vre()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM reservation order by DateReservation ");
    $req->execute();
    $chambre = $req->fetchAll();
        
    return $chambre;
}
?>