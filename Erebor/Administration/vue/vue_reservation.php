<?php 
	include "vue/vue_entete.php";
 ?>
<div id="titresection"> Les réservations</div>
<Form action = "index.php?section=voirResa" METHOD = 'POST' name ='Voir Reservation' >
 
<select name='lar'>
        <?php
            // </Th></TR>
           foreach($lid as $lareservation)
		   {
				$idR = $lareservation['IdReservation'];
				$Nom = $lareservation['NomR'];
				//echo "$idR,  '$Nom'";
				echo "<option value=$idR> $Nom </option>";
				
		   }
            //echo "<A href='index.php?section=voirResa&nom=$Nom'>Refuser réservation</a></BR>";
        ?>
</select> 
</br>
<input  type="submit"   value="Valider reservation">

    </form><br/>

