<?php 
	include "vue/vue_entete.php";
	include "fonctionsJavaScript.js";
 ?>
<html>
<div id= "ConnexionAdh">
		 <H1>Reservation </H1>

<?php 
        $chambre=$chAffiche['IdChambre'];
        $nomchambre=$chAffiche['NomChambre'];
		$prix=$chAffiche['Prix_chambre'];
		
		echo"Vous avez choisis $nomchambre a $prix euro par nuit. ";		 
 
echo "<Form action = 'index.php?section=insertion&IdChReserve=$chambre' METHOD = 'POST' name = 'DemandeReservation' >";
echo "<TABLE>";		
	
		
		
	    echo"	 <TR><TD>Nom: *</TD><TD><INPUT NAME=TNom size=20 onblur='veriftext(this)' ></TD></TR>
        <TR><TD>Prenom: *</TD><TD><INPUT NAME=TPrenom size=20 onblur='veriftext(this)'></TD></TR>
		<TR><TD>Adresse:</TD><TD><INPUT NAME=TAdresse size=20 onblur='verifadresse(this)'></TD></TR>
        <TR><TD>Ville:</TD><TD><INPUT NAME=TVille size=20 onblur='verifadresse(this)'></TD></TR>
		<TR><TD>Code Postal:</TD><TD><INPUT NAME=TCP size=20 required='required' pattern='[0-9]{5}'></TD></TR>
		<TR><TD>Mail:*</TD><TD><INPUT NAME=TMail size=20 ></TD></TR>
        <TR><TD>Telephone:</TD><TD><INPUT NAME=TTel size=20 ></TD></TR>
		<TR><TD>Date Début (année-mois-jours):</TD><TD><input type='text' name=Tdate class='calendrier' size=20  type='text/javascript'></TD></TR>
		<TR><TD>Date Fin (année-mois-jours):</TD><TD><INPUT type='text'  NAME=DF class='calendrier' size=20  type='text/javascript'  ></TD></TR>
	
		</BR>
		<div style='display:none'><INPUT NAME=PrixTotal size=20 value='$prix'></div>";
		?>
		</TABLE>
		<?php //obtenir la date d'aujourd'hui
		//$date = date("d-m-Y");
		//$heure = date("H:i");
		//Print("Nous sommes le $date et il est $heure");
		?>
		<TR><Th colspan =2><input  type="submit"   value="Valider reservation"></Th></TR>
	</TABLE>
	
	
	
   
</FORM>

<script type="text/javascript">
	              function veriftext(champ)

              {
                     
                     if ((champ.value.length < 2 ) || (champ.value.length > 20)  )
                     {
                            alert("le renseignemet demandé est trop court ou trop long (Minimum 2 caractères)");
                            return false;
                     }
                     else
                     {
                            return true;
                     }
                     
              }

              	    function verifadresse(champ)

              {
                     
                     if ((champ.value.length < 8 ) || (champ.value.length > 30)  )
                     {
                            alert("le renseignemet demandé est trop court ou trop long (Minimum 8 caractères)");
                            return false;
                     }
                     else
                     {
                            return true;
                     }
                     
              }

                    function verifCP(champ)
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
</script>
</div>
</html>


