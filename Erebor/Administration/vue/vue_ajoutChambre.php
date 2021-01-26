<?php

/**
 * Nom : GUY
 * Prenom : Tommy
 * 
 * Description : Vue de la page contact
 *
 *
 * @projet EREBOR
 * @nom du fichier : vue_contact.php
 */

	include "vue/vue_entete.php";
 ?>
<html>
<head>
<meta charset="utf-8" />
</head>
<div id="corps">
 <div class="content">
<body>

		<BR/><BR/><BR/> <center><H1>Ajout d'une chambre </H1></center><BR/><BR/> <!-- titre de page -->

<form action="index.php?section=verifAjoutChambre" method="post">

              <p>
              <label> Nom de la chambre : </label> 
              <input type="text" name="nomChambre" onblur="verifNom(this)"> <br /> <br />
              <label> Petite description : </label>
              <textarea name="descriptionChambre" onblur="verifDesc(this)"/></textarea> <br />
              <label> Prix : </label>
              <input type="number" name="prixChambre" onblur="verifPrix(this)"/> <br />
              <label> Type de chambre : </label>
              <select name="typechambre">
                     <option value="simple"> Simple </option>
                     <option value="double"> Double </option>
              </select> <br />
              <label> Capacité d'accueil : </label>
              <select name="capacite">
                     <option value="1"> 1 personne </option>
                     <option value="2"> 2 personnes </option>
              </select> <br />
              <label> Nombre de salle de bains :  </label>
              <select name="sallebain">
                     <option value="1" selected="selected"> 1 </option>
                     <option value="2"> 2 </option>
              </select> <br />
              <label> Type de lit : </label>
              <select name="typelit">
                     <option value="simple"> Simple </option>
                     <option value="double"> Double </option>
              </select> <br />
              <label> Nombre de lit : </label>
              <select name="nbrelit">
                     <option value="1" selected="selected"> 1 </option>
                     <option value="2"> 2 </option>
              </select> <br />
              <label> Nombre de WC : </label>
              <select name="nbrewc">
                     <option value="1" selected="selected"> 1 </option>
                     <option value="2"> 2 </option>
              </select> <br />
              <label> Heure de réservation possible : </label>
              <input type="number" name="heurearrivee" onblur="verifPrix(this)"/> <br />

              <label> Heure de départ maximum : </label>
              <input type="number" name="heuredepart" onblur="verifPrix(this)"/> <br /> <br /> <br />

              <label>Equipements :</label>
              <textarea name="equipement" onblur="verifDesc(this)"/></textarea> <br />

              <b>Les images à importer doivent être dans le répertoire Administration/Vue/Image/Chambre (/DetailChambre pour les images en détail de la chambre) !!! </b> <br /> <br />
              
              <label> Image de base : </label>
              <input type="file" name="imageChambre"> <br />
              <label> Image Detail Chambre 1 : </label>
              <input type="file" name="imageDetailChambre1"> <br />
              <label> Image Detail Chambre 2 : </label>
              <input type="file" name="imageDetailChambre2"> <br />
              
              <input type="submit" name="Valider" value="Valider">

              <SCRIPT language=javascript>

              function verifPrix(champ)
              {
                     if (isNaN(champ.value))
                     {
                            alert("Ce champ doit être numérique");
                            champ.value = "";
                            return false;
                     }
                     else
                     {
                           return true;
                     }
                     
              }

              function verifNom(champ)

              {
                     
                     if ((champ.value.length < 2 ) || (champ.value.length > 20)  )
                     {
                            alert("le nom de la chambre est trop court ou trop long");
                            return false;
                     }
                     else
                     {
                            return true;
                     }
                     
              }

              function verifDesc(champ)
              {
                     if (champ.value.length < 10)

                     {
                            alert("La description est trop courte");
                            return false;
                     }
                     else
                     {
                            return true;
                     }
              }

       
              </SCRIPT>

              </p>
              </form>