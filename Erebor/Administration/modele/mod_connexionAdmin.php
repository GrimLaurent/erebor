<?php
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Modèle de la connexion admin
 *
 *
 * @projet EREBOR
 * @nom du fichier : mod_connexionAdmin.php
 */ 
function get_admin($login,$mdp)
//on cherche l'adhérent pouvant correspondre à une  connexion 
{
   global $bdd;

   $req = $bdd->prepare("SELECT * FROM administration where NomAdmin = '$login' and MdpAdmin = '$mdp'");
   $req->execute();
   $admin = $req->fetch();
   return $admin;
   
   
}
?>



