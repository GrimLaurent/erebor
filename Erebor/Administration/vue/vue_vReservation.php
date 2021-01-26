<?php 
	include "vue/vue_entete.php";
 ?>
<div id="titresection"> Les chambres proposées</div>

<?php


				//affichage des chambres
				foreach($lesvre as $unevre)
				{	
					$NomR=$unevre['NomR'];
					$PrenomR=$unevre['PrenomR'];
					$AdresseR=$unevre['AdresseR'];
					$Ville=$unevre['VilleR'];
					$CP=$unevre['CPR'];
					$Mail=$unevre['MailR'];
					$Tel=$unevre['TelR'];
					$Date=$unevre['DateReservation'];
					$Debut=$unevre['DateDebut'];
					$Fin=$unevre['DateFin'];
			
					echo"Nom client: $NomR</BR>";
					echo"Prenom client: $PrenomR</BR>";
					echo"Adresse client: $AdresseR , $Ville ,$CP</BR>";
					echo"Mail du client: $Mail</BR>";
					echo"Telephone du client: $Tel</BR>";
					echo"Date de réservation: $Date</BR>";
					echo"Date début de réservation souhaitée: $Debut</BR>";
					echo"Date fin de réservation souhaitée: $Fin</BR>";
					echo"</BR>";
				}
?>
</div>
</div>
