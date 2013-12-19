<?php	
	$sLogin     = $_SESSION["login"];
	//réception des valeurs saisies
	$iNumTic    = $_POST["lst_ticket"];
	$iCode      = $_POST["lst_interv"];

	//mise à jour de la table INTERVENTION
	$sReq = "UPDATE TICKET
	 		 SET Tic_Etat        = 2 ,
			     Tic_Intervenant = " . $iCode . "
			 WHERE Tic_Num = " .$iNumTic  ;		
	$oSql->execute($sReq);
	
?>
	<script language="Javascript">
		alert("Intervention affectée");
		window.location.replace("?page=suivisTcks")
	</script>