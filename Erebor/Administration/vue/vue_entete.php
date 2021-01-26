<?php
/**
 * L'entête de l'ensemble du site web
 *
 * Les balises html / body s'ouvrent ici mais ce ferme uniquement dans la footer du site web
 *
 * @package Erebor
 * @since Site Erebor 1.0
 */

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Gîte Erebor</title>
		<meta charset="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="description" content="Développement d'un site web en PPE">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="Hege Refsnes">
		<meta name="Distribution" content="global">
		<meta name="Geography" content="France">
		<meta name="Copyright" content="Erebor 2016">
		<!-- Chargement de la feuille de style-->
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
<div id="volet_clos">
    <div id="volet" style="overflow-y: auto; overflow-x: hidden;">
    <div id="wallpaper-menu">
    <!--bouton fermer volet-->
    	<a href="#?" class="fermer" aria-hidden="true">
			<img src="/Erebor/vue/image/data/close-black.svg" alt="fermer" style="width: 1.5em;">
		</a>
	<!--nom du site-->	
		<p id="title-volet">
			<a href="" rel="home" style="color:white;">Le Gîte Erebor</a>
		</p>
	</div>
	<!--menu de navigation-->
		<div class="main-navigation">
			<nav>

					<a class="btn-navigation" href="index.php?section=index" title="Accueil">
						<img src="/Erebor/vue/image/data/home.png" style="width: 2em; float: left; padding: 3px;">Accueil
					</a>
					<a class="btn-navigation" href="index.php?section=chambre" title="Chambres">
						<img src="/Erebor/vue/image/data/lit.png" style="width: 2em; float: left; padding: 3px;">Chambres
					</a>
					<a class="btn-navigation" href="index.php?section=activite" title="Activites">
						<img src="/Erebor/vue/image/data/equitation.png" style="width: 2em; float: left; padding: 3px;">Activités
					</a>
					<a class="btn-navigation" href="index.php?section=reservation" title="Réservation">
						<img src="/Erebor/vue/image/data/reservation.png" style="width: 2em; float: left; padding: 3px;">Réservation
					</a>
					<a class="btn-navigation" href="index.php?section=voirreservation" title="Réservation">
						<img src="/Erebor/vue/image/data/reservation.png" style="width: 2em; float: left; padding: 3px;">Voir les Réservations
					</a>
					<?php 
					if ($okConnexion==true)
					{
						
						echo "<a class='btn-navigation' href='index.php?section=deconnexion' title='Erebor Client'>
						<img src='/Erebor/vue/image/data/logout.png' style='width: 2em; float: left; padding: 3px;'>Déconnexion </a>";
					}
					else
					{
						echo "<a class='btn-navigation' href='http://localhost/erebor/' title='Erebor Client'>
						<img src='/Erebor/vue/image/data/logout.png' style='width: 2em; float: left; padding: 3px;'>Retour site client </a>";
					}
					
					?>
		</nav>
		</div>
			<!--juridique-->
			<p id="copyright">
				©2016 Erebor.
			</p>
		</div>
	</div>
</div>
	<header>
		<div id="nav-bar" class="nav-bar">
			<div id="structure-nav">
				<a href="#volet" class="ouvrir" aria-hidden="true">
	 				<div id="btn-volet"></div>
   				 </a>
				<a href="#" style="font-size: 37px; color: white;">
					Administration
				</a>
				<?php if ($okConnexion==true)
				{
					echo "<p style='color:white;'>Bienvenue $nomSessionAdmin</p>";
				}
				?>
			</div>
		</div>
	</header>
	<body>
	 <div id="design"></div>
	 	 <div id="corps">
 				<div class="bandeau"></div>
 			<div class="content">
