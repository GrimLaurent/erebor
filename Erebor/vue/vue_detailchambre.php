<?php
	include "vue/vue_entete.php";
 ?>


		<?php
					$wIdChambre                    =$uneChambre['IdChambre'];
					$wNomChambre               =$uneChambre['NomChambre'];
					$wDescription                    =$uneChambre['Description'];					
					$wCapacite_Accueil         =$uneChambre['Capacite_Accueil'];
					$wSalle_de_bain              =$uneChambre['Salle_de_Bain'];
					$wType_de_lit                   =$uneChambre['Type_de_lit'];
					$wLit                                    = $uneChambre['Lit'];
					$wWC			      = $uneChambre['WC'];
					$wArrivee_chambre	      = $uneChambre['Arrivee_chambre'];
					$wDepart_chambre	      = $uneChambre['Depart_chambre'];	
					$wEquipements_chambre = $uneChambre['Equipements_chambre'];								
					$wImg_Chambre2	        ="/Erebor/Administration/vue/image/detailchambre/".$uneChambre['Img_Chambre2']."";	
					$wImg_Chambre3              ="/Erebor/Administration/vue/image/detailchambre/".$uneChambre['Img_Chambre3'].""; 
					$wPrix 		        =$uneChambre['Prix_chambre'];
					
					echo "<TR><TD><h1><center>Detail de votre chambre : $wNomChambre</h1></TD></TR>	
						<TR><TD><div class='description'> $wDescription</div></TD></TR>		
						<TR><TD><div class='prixdetail'> $wPrix €TTC </div></center> </TD></TR><br>
						<TR><TD><a href='index.php?section=reservation&IdCh=$wIdChambre'><div class='prixdetail'>Réserver</div></a></center> </TD></TR><br>


						";
					echo "<center><div id='blockdetail'>
						<div id='btn-detail'>
							<p class='btn-detail'>Capacité d'accueil :$wCapacite_Accueil</p>
								<div class='btn-img-detail user'></div>
						</div>
						<div id='btn-detail'>
							<p class='btn-detail'>Salle de bain :$wSalle_de_bain</p>
								<div class='btn-img-detail douche'></div>
						</div>
						<div id='btn-detail'>
							<p class='btn-detail'>WC :$wWC</p>
								<div class='btn-img-detail wc'></div>
						</div>
						<div id='btn-detail'>
							<p class='btn-detail'>Nombre de lit :$wLit</p>
								<div class='btn-img-detail bed'></div>
						</div></div></center>";
					echo "<br><br>";
					echo "<TR><TD><div id='blockimg'> <img class='img-detail' src='$wImg_Chambre2'><img class='img-detail' src='$wImg_Chambre3'></div></div></TD></TR>"; 
										

		
echo"<center><br>


<div class='grid'>
À propos de ce logement : </div><br>																				
<TR><TD>Type de lit :$wType_de_lit</TD></TR><br>
<TR><TD>Horraire d'arrivé :$wArrivee_chambre</TD></TR><br>
<TR><TD>Horraire de départ :$wDepart_chambre</TD></TR><br>


<div class='grid'>
Équipement : </div><br> 		

<TR><TD>$wEquipements_chambre</TD></TR><br><br>			


<div class='grid'>
Règlement intérieur : </div><br>
			  Non fumeur 														<br>
			  Animaux autoriés en dessous de 10 kg     							<br>
			  Pas de fêtes ni de soirées avec des personnes étrangères au gîte	<br>
			  Peut ne pas convenir aux enfants de (0-10 ans)					<br>									
			  Pas de règles, juste du bon sens, partage du Calme & Propreté		<br><br>
<div class='grid'>
Dispositif de sécurité : </div><br>
			   Détecteur de fumée												<br>
			   Kit de premiers secours											<br>
			   Fiche de sécurité												<br>	
			   Extincteur														<br>


<p align='left'>Le prix inclu le petit déjeuner ainsi que le repas du midi.<br><br><br>
</center>
";

?>