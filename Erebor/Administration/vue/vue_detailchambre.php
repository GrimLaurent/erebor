<?php
	include "vue/vue_entete.php";
 ?>


		<?php
					$wIdChambre                    =$uneChambre['IdChambre'];
					$wNomChambre               =$uneChambre['NomChambre'];
					$wDescription                    =$uneChambre['Description'];	
					$wTypeChambre        =$uneChambre['Type_Chambre'];				
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
					
					echo "<form action='index.php?section=modifChambre&action=nom&IdCha=$wIdChambre' METHOD='POST'>";		
					echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=MNom value='$wNomChambre' required='required'> </div> </TD></TR><br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifN()'> Modifier le nom de la chambre</button></form>";		
				

					echo "<form action='index.php?section=modifChambre&action=desc&IdCha=$wIdChambre' METHOD='POST'>";		
					echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=MDesc value='$wDescription' required='required'> </div> </TD></TR><br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifD()'> Modifier la description </button></form>";

					echo "<form action='index.php?section=modifChambre&action=prix&IdCha=$wIdChambre' METHOD='POST'>";		
					echo "<TR><TD><div class='grid_2_bis'><INPUT NAME=MPrix value=$wPrix required='required' pattern='[0-9]{2,3}'> € TTC </div> </TD></TR><br>";
					echo "<button type='submit' onclick='return ConfirmMessageModifP()'> Modifier le prix </button></form>";

					echo "<TR><TD><div class='ImgChambre_detail'> <img src='$wImg_Chambre2'></div></TD></TR>"; 
					echo "<TR><TD><div class='Img_3'> <img src='$wImg_Chambre3'></div></TD></TR>";					

		
echo"<center><br>

<TR><TD><h2>Chambre $wTypeChambre, possibilité de réservation en ligne</h2></TD></TR>	<br>

<div class='grid'>
À propos de ce logement : </div><br>																					

<TR><TD> Capacité d'accueil : $wCapacite_Accueil personne(s)</TD></TR><br>
<TR><TD>Salle(s) de bain : $wSalle_de_bain</TD></TR><br>
<TR><TD>Type de lit : lit $wType_de_lit</TD></TR><br>
<TR><TD>Nombre de lit(s) : $wLit</TD></TR><br>
<TR><TD>WC : $wWC</TD></TR><br>
<TR><TD>Réservation possible à partir de $wArrivee_chambre heures</TD></TR><br>
<TR><TD>Départ possible jusqu'à $wDepart_chambre heures</TD></TR><br><br>



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


<p align='left'>Le prix inclue le petit déjeuner ainsi que le repas du midi.	
</center>
";
echo "<a href='index.php?section=supprimerChambre&IdSuppr=$wIdChambre'><INPUT type=button value='Supprimer la chambre' onClick='return ConfirmMessageSuppr()'/></a>";
?>

<SCRIPT language=javascript>
                 
   function ConfirmMessageSuppr() {
       ok = confirm('Voulez-vous vraiment supprimer cette chambre ?');
       return ok;
   }

   function ConfirmMessageModif() {
       ok = confirm('Voulez-vous vraiment modifier le prix de cette chambre ?');
       return ok;
   }
</SCRIPT>
