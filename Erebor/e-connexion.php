<?php
// Connexion à la base de données Erebor
try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=ereborbdd;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
    	die('Erreur : '.$e->getMessage());
	}

