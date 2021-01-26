<?php 
function get_lieux() // fonction permettant de retourner les données de la requête ci-dessous
{

	global $bdd;        // on appelle la base de données
	$req = $bdd->prepare("SELECT * FROM lieu order by NomLieu"); // on fait une requête sélectionnant tous les lieux à visiter triées alphabétiquement
	$req->execute();                        // on exécute la requête
    $lieux = $req->fetchAll();           // on récupère toutes les données dans notre variable $lieux
        
    return $lieux;  // on retourne la variable $lieux
}
 ?>