<?php 
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Page principale du site
 *
 *
 * @projet EREBOR
 * @nom du fichier : index.php
 */ 
session_start();

if  ((!isset($_SESSION['validiteConnexion'])) OR ($_SESSION['validiteConnexion']==false))
    {       
          // pas de connexion valide
          $okConnexion=false;
    }
else
{
	      // bonne connexion
          $okConnexion=true;
          $idSessionAdmin = $_SESSION['IdAdmin'];
          $nomSessionAdmin = $_SESSION['NomAdmin'];
}


include_once('modele/e-connexion.php');
 
if (!isset($_GET['section']) OR $_GET['section'] == 'connexion')
{
    include_once('controleur/connexion.php');
}

else
{
	if ($_GET['section'] == 'index')
	{  
			include_once('controleur/accueil.php');
	}
	if ($_GET['section'] == 'chambre')
	{  
			include_once('controleur/chambre.php');
	}
	if ($_GET['section'] == 'contact')
	{  
			include_once('controleur/contact.php');
	}
	
	if ($_GET['section'] == 'detailchambre')
	{  
			include_once('controleur/detailchambre.php');
	}
	if ($_GET['section'] == 'activite')
	{  
			include_once('controleur/Activites.php');
	}
	if ($_GET['section'] == 'reservation')
	{  
			include_once('controleur/reservation.php');
	}
	if ($_GET['section']=='detailactivite')
	{
			include_once('controleur/detailactivite.php');
	}
	if ($_GET['section'] == 'verifConnexionAdmin')
	{  
		$cnxAdm='v';
		include_once('controleur/gestionConnexionAdmin.php');
	}
	if ($_GET['section'] == 'deconnexion')
	{  
		$cnxAdm='d';
		include_once('controleur/gestionConnexionAdmin.php');
	}
	if ($_GET['section'] == 'ajoutChambre')
	{  
			include_once('controleur/ajoutChambre.php');
	}
	if ($_GET['section'] == 'verifAjoutChambre')
	{  
			include_once('controleur/verifAjoutChambre.php');
	}
	if ($_GET['section'] == 'supprimerChambre')
	{  
			include_once('controleur/supprimerChambre.php');
	}
	if ($_GET['section'] == 'modifChambre')
	{  
			include_once('controleur/modifChambre.php');
	}
	if ($_GET['section'] == 'voirResa')
	{  
			include_once('controleur/voirResa.php');
	}
	if ($_GET['section'] == 'refuser')
	{  
			include_once('controleur/refuser.php');
	}
	if ($_GET['section'] == 'accepter')
	{  
			include_once('controleur/accepterR.php');
	}
	if ($_GET['section'] == 'voirreservation')
	{  
			include_once('controleur/vReservation.php');
	}
	if ($_GET['section'] == 'ajoutActivite')
	{  
			include_once('controleur/ajoutActivite.php');
	}
	if ($_GET['section'] == 'verifAjoutActivite')
	{  
			include_once('controleur/verifajoutActivite.php');
	}
	if ($_GET['section'] == 'modifActivite')
	{  
			include_once('controleur/modifActivite.php');
	}
}
?>