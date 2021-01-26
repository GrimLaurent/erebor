<?php
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Contr�leur de la gestionConnexionAdmin
 *
 *
 * @projet EREBOR
 * @nom du fichier : gestionConnexionAdmin.php
 */ 
//test de $cnxAdh pour voir s'il s'agit d'une connexion ou d'une d�connexion

if ($cnxAdm=='v')
{
//il s'agit d'une demande de connexion 

	//on r�cup�re les �l�ments de la vue seConnecter 
	$wlogin = mysql_real_escape_string($_POST['TLogin']);
	$wmdp = mysql_real_escape_string($_POST['TMdp']);
   
	//on fait appel � la fonction de v�rification de ces infos dans la contr�leur appli
		
	include_once('modele/mod_connexionAdmin.php');
	
	$admin = get_admin($wlogin,$wmdp);
	
	//et on teste pour savoir si l'adh�rent a �t� trouv� ou non 
	if ($admin['NomAdmin'] != null)
	//l'adh�rent est trouv� ; on peut garder en m�moire ses identifiant ,nom et pr�nom
	{
		$_SESSION['IdAdmin']=$admin['IdAdmin'];
		$_SESSION['NomAdmin']=$admin['NomAdmin'];
		// on m�morise que la connexion est ok
		$_SESSION['validiteConnexion']=true;
		//on le renvoie sur l'accueil
		header("location:index.php?section=index");
		
		 
	}
	else
	{
		// les coordonn�es sont incorrectes 
		header("location:index.php?section=connexion");
		
	}
	
}
else if ($cnxAdm=='d')
{

	//il s'agit d'une d�connexion 
	 
	 session_destroy();
	 header("location:http://localhost/erebor");
	
}

