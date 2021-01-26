<?php

/**
 * Nom : GRIMALDI
 * Prenom : Laurent
 * 
 * Description : Vue de la page ajouter une activité
 *
 *
 * @projet EREBOR
 * @nom du fichier : vue_ajoutActivites.php
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

		<BR/><BR/><BR/> <center><H1>Ajout d'une Activité </H1></center><BR/><BR/> <!-- titre de page -->

<form action="index.php?section=verifAjoutActivite" method="post">

              <p>
              <label> Nom de l'activité : </label> 
              <input type="text" name="nomActivite" onblur="verifNom(this)"> <br /> <br />
              <label> Réglement : </label>
              <textarea name="Reglement" onblur="verifDesc(this)"/></textarea> <br />
              <label> Durée : </label>
              <textarea name="Duree" onblur="verifPrix(this)"/></textarea> <br />
              <label> Prix : </label>
              <input type="number" name="Prix" onblur="verifPrix(this)"/> <br />
             


              <b>Les images à importer doivent être dans le répertoire Administration/Vue/Image/Chambre (/DetailChambre pour les images en détail de la chambre) !!! </b> <br /> <br />
              
              <label> Image Detail Chambre 1 : </label>
              <input type="file" name="img_Activite"> <br />
              <label> Image Detail Chambre 2 : </label>
              <input type="file" name="img_Activite2"> <br />
              
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