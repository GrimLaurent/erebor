<?php
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Contrôleur de la gestionConnexionAdmin
 *
 *
 * @projet EREBOR
 * @nom du fichier : gestionConnexionAdmin.php
 */ 
//test de $cnxAdh pour voir s'il s'agit d'une connexion ou d'une déconnexion

if ($cnxAdm=='v')
{
//il s'agit d'une demande de connexion 

	//on récupère les éléments de la vue seConnecter 
	$wlogin = mysql_real_escape_string($_POST['TLogin']);
	$wmdp = mysql_real_escape_string($_POST['TMdp']);
   
	//on fait appel à la fonction de vérification de ces infos dans la contrôleur appli
		
	include_once('modele/mod_connexionAdmin.php');
	
	$admin = get_admin($wlogin,$wmdp);
	
	//et on teste pour savoir si l'adhérent a été trouvé ou non 
	if ($admin['NomAdmin'] != null)
	//l'adhérent est trouvé ; on peut garder en mémoire ses identifiant ,nom et prénom
	{
		$_SESSION['IdAdmin']=$admin['IdAdmin'];
		$_SESSION['NomAdmin']=$admin['NomAdmin'];
		// on mémorise que la connexion est ok
		$_SESSION['validiteConnexion']=true;
		//on le renvoie sur l'accueil
		header("location:index.php?section=index");
		
		 
	}
	else
	{
		// les coordonnées sont incorrectes 
		header("location:index.php?section=connexion");
		
	}
	
}
else if ($cnxAdm=='d')
{

	//il s'agit d'une déconnexion 
	 
	 session_destroy();
	 header("location:http://localhost/erebor");
	
}

