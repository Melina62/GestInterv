<?php	
	$sLogin     = $_SESSION["login"];
	//r�ception des valeurs saisies
	$iNumTicket = $_POST["lst_ticket"];
	$dDateInt   = date("Y-m-d");

	//mise � jour de la table TICKET
	$sReq = "UPDATE TICKET
	 		 SET   Tic_Etat = 3 
			 WHERE Tic_Num = " .$iNumTicket;		
	$oSql->execute($sReq);
	
	// cr�ation de l'intervention
	//g�n�ration d'un num�ro d'intervention 
	$sReq = "SELECT MAX(Int_Num) 
		     FROM INTERVENTION" ;
	$iNumInterv  = $oSql->getNombre($sReq) ;
	$iNumInterv  = $iNumInterv  +  1 ;
	
	//insertion des donn�es dans la base
	$sReq = "INSERT INTO INTERVENTION (Int_Num, Int_Ticket, Int_Debut)
		    VALUES (".$iNumInterv .",".$iNumTicket.",'".$dDateInt."' )";
	// echo $sReq ."<br/>" ;
	$oSql->execute($sReq);	
	
	
?>
	<script language="Javascript">
		alert("Intervention prise en charge ");
		window.location.replace("?page=priseCharge")
	</script>