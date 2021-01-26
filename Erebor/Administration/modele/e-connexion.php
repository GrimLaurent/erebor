<?php

// Connexion à la base de données Erebor
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ereborbdd', 'root', '');
    $bdd->exec('SET NAMES utf8');	// Nécéssaire pour la prise en charge de l'UTF8 dans toutes les pages
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


