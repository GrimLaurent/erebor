<?php
/**
 * Préchargement de l'ensemble des pages de redirection.
 * Renvoi vers e-config.php pour l'ensemble des éléments de liaison.
 *
 * @package Erebor
 */


include_once('/e-config.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/accueil.php');
}

else
{
		if ($_GET['section'] == 'chambre')
	{  
			include_once('controleur/chambre.php');
	}
		if ($_GET['section'] == 'detailchambre')
	{  
			include_once('controleur/detailchambre.php');
	}
		if ($_GET['section'] == 'activite')
	{  
			include_once('controleur/Activites.php');
	}
		if ($_GET['section']=='reglementactivite')
	{
			include_once('controleur/detailactivite.php');
	}
		if ($_GET['section'] == 'reservation')
	{  
			include_once('controleur/reservation.php');
	}
		if ($_GET['section'] == 'insertion')
	{  
			include_once('controleur/insertion.php');
	}
		if ($_GET['section'] == 'demandeReservation')
	{  
			include_once('controleur/demandeReservation.php');
	}
	}