<?php
	     

	include "vue/vue_entete.php"; 	// on inclut l'entête
?>
<html>
<div id= "corps">
		<BR/> <H1><center>Votre activité en détail : </center></H1><BR/> <!-- On donne un titre de page -->  
	  
		<TABLE align="center">
                       
			<?php
		
				//affichage des activités du gîte...
				{			
					$wIdActivite		=$uneactivite['IdActivite'];
					$wNomActivite	=$uneactivite['NomActivite'];
					$wReglement		=$uneactivite['Reglement'];
					$wDuree             	=$uneactivite['Duree'];
					$wPrix			=$uneactivite['Prix'];
					$wImg_Activite	="vue/image/activite/".$uneactivite['Img_Activite']."";
					$wImgActivite2	="vue/image/activite/".$uneactivite['ImgActivite2']."";

					echo "<TR><TD><h2><center><div class='grid'> L'activité  $wNomActivite</div></center> </TD></TR>"; // on affiche le nom de l'activité
					echo "<TR><TD> <rowspan=3><img src='$wImg_Activite'></TD></TR>";  // son image
					echo "<center><TR><TD><div id='reglement'> $wReglement </div></TD></TR></center>";   // son réglement, ses caractéristiques 
					echo"<center><TR><TD><div id='reglement'> Durée : $wDuree</div></TD></TR></center>";
					echo"<center><TR><TD><div id='reglement'> Prix : $wPrix</div></TD></TR></center>";
					echo "<TR><TD><div class='Img_2_reglement'><img src='$wImgActivite2'></div></TD></TR>";  // son image_2
										
				}
?>		
			
			<?php
					$wIdActivite                   =$uneActivite['IdActivite'];
					$wNomActivite               =$uneActivite['NomActivite'];
					$wReglement                    =$uneActivite['Reglement'];	
					$wDuree        =$uneActivite['Duree'];				
					$wPrix        =$uneActivite['Prix'];
					$wimg_Activite             ="/Erebor/Administration/vue/image/detailactivite/".$uneActivite['Img_Activite'];
					$wimgActivite2                  ="/Erebor/Administration/vue/image/detailactivite/".$uneActivite['ImgActivite2'];
					
					echo "<form action='index.php?section=modifActivite&action=nom&IdAct=$wIdActivite' METHOD='POST'>";		
					echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=ANom value='$wNomActivite' required='required'> </div> </TD></TR><br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifN()'> Modifier le nom de l'activite</button></form>";		
				

					//echo "<form action='index.php?section=modifChambre&action=desc&IdCha=$wIdChambre' METHOD='POST'>";		
					//echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=MDesc value='$wDescription' required='required'> </div> </TD></TR><br>";
					//echo "<button type='submit' onclick='return ConfirmMessageModifD()'> Modifier la description </button></form>";

					//echo "<form action='index.php?section=modifChambre&action=prix&IdCha=$wIdChambre' METHOD='POST'>";		
					//echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=MPrix value=$wPrix required='required' pattern='[0-9]{2,3}'> € TTC </div> </TD></TR><br>";
					//echo "<button type='submit' onclick='return ConfirmMessageModifP()'> Modifier le prix </button></form>";

					//echo "<TR><TD><div class='ImgChambre_detail'> <img src='$wImg_Chambre2'></div></TD></TR>"; 
					//echo "<TR><TD><div class='Img_3'> <img src='$wImg_Chambre3'></div></TD></TR>";					

		

//echo "<a href='index.php?section=supprimerChambre&IdSuppr=$wIdChambre'><INPUT type=button value='Supprimer la chambre' onClick='return ConfirmMessageSuppr()'/></a>";
?>
				
		</TABLE>
		 </div>      
</div>
</body>

</html> 

