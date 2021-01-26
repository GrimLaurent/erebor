<?php 
	include "vue/vue_entete.php";
 ?>
<div id="titresection"> Les chambres proposées</div>
<?php
				//affichage des chambres
				foreach($leschambres as $uneChambre)
				{	
					$wIdChambre=$uneChambre['IdChambre'];
					$wNomChambre=$uneChambre['NomChambre'];
					$wPrix=$uneChambre['Prix_chambre'];
					$wCapacite_Accueil=$uneChambre['Capacite_Accueil'];
					$wImgChambre="/Erebor/Administration/vue/image/chambre/".$uneChambre['Img_Chambre']."";
				
					
					echo "<a href='index.php?section=detailchambre&IdCh=$wIdChambre'>
							<div id='blockchambre'>
									<img class='imgchambre' src='$wImgChambre'>
									<div id='textechambre'>$wNomChambre</div></br>
									<div id='btnchambre'><a href='index.php?section=detailchambre&IdCh=$wIdChambre'>En savoir plus</a></div>
									<div id='btn-info'><p class='btn-info'>$wPrix €</p></div>
									<div id='btn-info'><p class='btn-info'>$wCapacite_Accueil</p><div class='btn-img-user'></div></div>
							</div>
						</a>";						
				}
?>
</div>
</div>
