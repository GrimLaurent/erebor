<?php
	
	$chambre = $_GET['IdChReserve'];
   //récupération des valeurs des champs: 
	$nom  = $_POST["TNom"] ;
  //prenom:
	$prenom = $_POST["TPrenom"] ;
  //adresse:
	$adresse = $_POST["TAdresse"] ;
  //ville:
	$ville = $_POST['TVille'] ;
  //code postal:
	$cp = $_POST["TCP"] ;
  //mail:
	$mail = $_POST["TMail"];
  //numéro de téléphone:
	$tel = $_POST["TTel"] ;
  // date :
	$datesql = date ("Y-m-d");
  
   //date début:
	$Tdate= $_POST["Tdate"] ;
	list($jj,$mm,$aaaa)=explode("/",$Tdate);
    $datedeb = $aaaa."-".$mm."-".$jj;
     
	 //date fin:
	$dfin = $_POST["DF"] ;
	list($jj,$mm,$aaaa)=explode("/",$dfin);
    $datefin = $aaaa."-".$mm."-".$jj;
	
	include_once("modele/mod_insertion.php");
	include_once("modele/mod_acceptation.php");
	
	
	get_reservation($nom,$prenom,$adresse,$ville,$cp,$mail,$tel,$datesql,$datedeb,$datefin,$chambre);
	$uneReservation = get_DetailReservation($nom);
	

	//affichage de la vue associée
	include_once('vue/vue_acceptation.php');
	
  
	
	?>