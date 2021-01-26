<SCRIPT language="javascript">	
	function Controle()
	{
		var ok=1;
		//controle de remplissage
		
		if((DemandeReservation.TNom.value=="")||(DemandeReservation.TPrenom.value=="")||(DemandeReservation.TMail.value==""))
		{
			alert("Tous les champs marqués d'un * doivent etre remplis");
			ok=0;
		}
		
		if((isNaN(DemandeReservation.TCP.value))||(DemandeReservation.TCP.value.length !=5))
		{
			alert("Le code postal doit contenir 5 chiffres");
			ok=0;
		}
		
		if((isNaN(DemandeReservation.TTel.value))||(DemandeReservation.TTel.value.length !=10))
		{
			alert("Le numéro de téléphone doit contenir 10 chiffres");
			ok=0;
		}
		
		
		
		//controle des dates
		
		//récupération des 2 dates saisies
		dateDebutFR = DemandeReservation.Tdate.value;
		dateDebutJS = new Date(dateDebutFR.substring(6,10),dateDebutFR.substring(3,5)-1,dateDebutFR.substring(0,2));
		
		dateFinFR = DemandeReservation.DF.value;
		dateFinJS = new Date(dateFinFR.substring(6,10),dateFinFR.substring(3,5)-1,dateFinFR.substring(0,2));
		//récupération de l'objet date du jour
		dateJourJS = new Date();
		
		
		//tests entre dates
		heure=dateJourJS.getUTCHours() + 1;
		dateDebutJS.setUTCHours()=heure;
		
		
		if(dateDebutJS<dateJourJS)
		{
			alert("La date de début est erronée. Elle doit etre plus grande que la date du jour.");
			ok =0;
		}
		if(dateFinJS<=dateDebutJS)
		{
			alert("La date de fin est erronée. Elle doit etre plus grande que la date du début.");
			ok =0;
		}
		
		
		if(ok==1)
		{
			DemandeReservation.submit();
		}
		else
		{
			return false;
		}
	}
</SCRIPT>