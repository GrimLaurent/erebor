<?php
	include "vue/vue_entete.php";
 ?>


		<?php
					$wIdActivite=$uneActivite['IdActivite'];
					$wNomActivite=$uneActivite['NomActivite'];
					$wReglement=$uneActivite['Reglement'];	
					$wDuree=$uneActivite['Duree'];				
					$wPrix=$uneActivite['Prix'];
					$wimg_Activite="/Erebor/Administration/vue/image/detailactivite/".$uneActivite['Img_Activite'];
					$wimgActivite2="/Erebor/Administration/vue/image/detailactivite/".$uneActivite['ImgActivite2'];
					
					echo "<form action='index.php?section=modifActivite&action=nom&IdAct=$wIdActivite' METHOD='POST'>";		
					echo "<TR>
							<TD>
								<div class='grid_2_bis'><INPUT NAME=ANom value='$wNomActivite' required='required'></div> 
							</TD>
						</TR>
					<br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifN()'> Modifier le nom de l'activite</button></form>";		
				

					echo "<form action='index.php?section=modifActivite&action=reg&IdAct=$wIdActivite' METHOD='POST'>";		
					echo "<TR>
							<TD>
								<div class='grid_2_bis'><INPUT NAME=AReg value='$wReglement' required='required'> </div> 
							</TD>
						</TR>
					<br>";
					echo "<button type='submit' onclick='return ConfirmMessageModif()'> Modifier la description </button></form>";

					echo "<form action='index.php?section=modifActivite&action=prix&IdAct=$wIdActivite' METHOD='POST'>";		
					echo "<TR>
							<TD>
								<div class='grid_2_bis'><INPUT NAME=APrix value=$wPrix required='required' pattern='[0-9]{2,3}'> € TTC </div>
							</TD>
						</TR>
					<br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifP()'> Modifier le prix </button></form>";				

		


?>

<SCRIPT language=javascript>
   function ConfirmMessageModif() {
       ok = confirm('Voulez-vous vraiment modifier le prix de cette activite ?');
       return ok;
   }
</SCRIPT>
