<?php 
/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Vue de la page connexionAdmin
 *
 *
 * @projet EREBOR
 * @nom du fichier : vue_connexionAdmin.php
 */ 
	include "vue/vue_entete.php";
 ?>
 <link href="style1.css" rel="stylesheet" type="text/css" />
<html>
        
        <title> Connexion Administrateur </title>
		<BR/> <H1>Veuillez vous connecter</H1><BR/>    
 
<Form action = "index.php?section=verifConnexionAdmin" METHOD = "POST" name = "FormConnexionAdmin">

    <TABLE>
        
	    <TR><TD>Login : </TD><TD><INPUT NAME=TLogin size=20 ></TD></TR>
        <TR><TD>Mot de passe : </TD><TD><INPUT type =password NAME=TMdp size=20 ></TD></TR>

		<TR><Th colspan =2><input type="submit" value="Valider" ></Th></TR>
	</TABLE>
		

</FORM>

</html>