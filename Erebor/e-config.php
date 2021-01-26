<?php
/**
 * Appel de la base de donnée est des fonctions externe.
 * Ce fichier est appellé via index.php sur l'ensemble des pages.
 *
 * @package Erebor
 */

include_once('/e-connexion.php'); /*Base de donnée*/

include_once('modele/mod_lieux.php');  //récupèration de l'ensemble des lieux à visiter dans la base

$leslieux = get_lieux();    // on prend le résultat de la fonction get_lieux() du modèle dans la variable $leslieux

include_once('modele/mod_contact.php');  //fonction pour l'envoi d'un email