<?php
	     

	include "vue/vue_entete.php"; 	// on inclut l'entête
?>

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



					echo "<TR><TD><h1><center>L'activité  $wNomActivite</center> </TD></TR>"; // on affiche le nom de l'activité
					echo "<TR><TD> <rowspan=3><img src='$wImg_Activite'></TD></TR>";  // son image
					echo "<center><TR><TD><div id='reglement'> $wReglement </div></TD></TR></center>";   // son réglement, ses caractéristiques 
					echo"<center><TR><TD><div id='reglement'> Durée : $wDuree h</div></TD></TR></center>";
					echo"<center><TR><TD><div id='reglement'> Prix : $wPrix €</div></TD></TR></center>";
					echo "<TR><TD><div class='Img_2_reglement'><img src='$wImgActivite2'></div></TD></TR>";
			


					;  // son image_2
										
				}
?>		
			
				
		</TABLE>

