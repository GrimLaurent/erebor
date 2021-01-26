<?php

function get_ajoutChambre($nomCha, $descCha, $typeCha, $capaCha, $sallebainCha, $typelitCha, $nbreLitCha, $nbreWC, $arrivee, $depart, $equipCh, $imgCh, $imgCh2, $imgCh3, $prix)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO chambre(NomChambre, Description, Type_Chambre, Capacite_Accueil, Salle_de_Bain, Type_de_lit, Lit, WC, Arrivee_chambre, Depart_chambre, Equipements_chambre, Img_Chambre, Img_Chambre2, Img_Chambre3, Prix_chambre) VALUES ('$nomCha', '$descCha', '$typeCha', $capaCha, $sallebainCha, '$typelitCha', $nbreLitCha, $nbreWC, $arrivee, $depart, '$equipCh', '$imgCh', '$imgCh2', '$imgCh3', $prix) ");
	$req->execute();
}
?>