<?php
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Mod�le de la connexion admin
 *
 *
 * @projet EREBOR
 * @nom du fichier : mod_connexionAdmin.php
 */ 
function get_admin($login,$mdp)
//on cherche l'adh�rent pouvant correspondre � une  connexion 
{
   global $bdd;

   $req = $bdd->prepare("SELECT * FROM administration where NomAdmin = '$login' and MdpAdmin = '$mdp'");
   $req->execute();
   $admin = $req->fetch();
   return $admin;
   
   
}
?>



