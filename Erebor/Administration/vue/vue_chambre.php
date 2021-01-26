<?php 
	include "vue/vue_entete.php";
 ?>
<div id="titresection"> Les chambres proposées</div>

<a href="index.php?section=ajoutChambre">Ajouter une chambre </a>
<?php


				//affichage des chambres
				foreach($leschambres as $uneChambre)
				{	
					$wIdChambre		=$uneChambre['IdChambre'];
					$wNomChambre	=$uneChambre['NomChambre'];
					$wPrix			=$uneChambre['Prix_chambre'];
					$wCapaciteAccueil	=$uneChambre['Capacite_Accueil'];
					$wImgChambre	="/Erebor/vue/image/chambre/".$uneChambre['Img_Chambre']."";
				
					
					echo "<a href='index.php?section=detailchambre&IdCh=$wIdChambre'>
							<div id='blockchambre'>
									<img class='imgchambre' src='$wImgChambre'>
									<div id='textechambre'>$wNomChambre</div></br>
									<div id='btnchambre'><a href='index.php?section=detailchambre&IdCh=$wIdChambre'>Modifier & Supprimer</a></div>
									<div id='btn-info'><p class='btn-info'>$wPrix €</p></div>
									<div id='btn-info'><p class='btn-info'>$wCapaciteAccueil</p><div class='btn-img-user'></div></div>
							</div>
						</a>";						
				}
?>
</div>
</div>

									