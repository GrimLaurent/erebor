<?php 
	include "vue/vue_entete.php";
 ?>
<div id="titresection"><h2> Les activités proposées</h2></div>
<a href="index.php?section=ajoutActivite">Ajouter une Activité </a>
<?php
				//affichage des activités du gîte...
				foreach($lesactivites as $uneactivite)
				{			
					$wIdActivite           	=$uneactivite['IdActivite'];
					$wNomActivite      	=$uneactivite['NomActivite'];
					$wPrix			= $uneactivite['Prix'];
					$wDuree		= $uneactivite['Duree'];
					$wImgActivite 		="vue/image/activite/".$uneactivite['Img_Activite']."";

					echo "<a href='index.php?section=detailactivite&IdAct=$wIdActivite'>
							<div id='blockactivite'>
									<img class='imgactivite' src='$wImgActivite'>
									<div id='texteactivite'>L'activité $wNomActivite</div></br>
									<div id='btnchambre'><a href='index.php?section=detailactivite&IdAct=$wIdActivite'>Modifier & Supprimer</a></div>
									<div id='btn-info'><p class='btn-info'>$wPrix €</p></div>
									<div id='btn-info'><p class='btn-info'>$wDuree h</p><div class='btn-img-user_clock'></div></div>
							</div>
						</a>"; 						
				}
?>
</div>
</div>