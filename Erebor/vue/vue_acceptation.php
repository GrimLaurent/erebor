<?php 
	include "vue/vue_entete.php";
 ?>

<html>
<div id= "Corps">
		<hben> <BR/>La réservation <BR></hben>
		
		<div class="content">

		<?php
			$chambre=$ch['IdChambre'];
			$nomchambre=$ch['NomChambre'];
			$prix=$ch['Prix_chambre'];
			echo"Vous avez choisis $nomchambre a $prix euro par nuit. </BR>";
		    $NomR=$uneReservation['NomR'];
			$PrenomR=$uneReservation['PrenomR'];
			$AdresseR=$uneReservation['AdresseR'];
			$Ville=$uneReservation['VilleR'];
			$CP=$uneReservation['CPR'];
			$Mail=$uneReservation['MailR'];
			$Tel=$uneReservation['TelR'];
			$Debut=$uneReservation['DateDebut'];
			$Fin=$uneReservation['DateFin'];
			
			echo"Nom client: $NomR</BR>";
			echo"Prenom client: $PrenomR</BR>";
			echo"Adresse client: $AdresseR  $Ville $CP</BR>";
			echo"Mail du client: $Mail</BR>";
			echo"Telephone du client: $Tel</BR>";
			echo"Date début de réservation souhaitée: $Debut</BR>";
			echo"Date fin de réservation souhaitée: $Fin</BR>";
			echo "<A href='index.php?section=demandeReservation'>Envoyer la réservation</BR>";
		?>

</div>
</body>

</html>