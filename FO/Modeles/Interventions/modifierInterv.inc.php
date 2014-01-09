<?php
	$sEtat = $_POST["btn_etat"];
	$iNumTicket = $_POST["Tic_Num"];

		$sReq = "UPDATE ticket
				 SET Tic_Etat = '" .$sEtat. "'
				 WHERE Tic_Num   = '" .$iNumTicket. "'";
var_dump($sReq);				 
		$oSql->execute($sReq);
?>				
<script language="Javascript">
	alert("Intervention terminée");
	window.location.replace("?page=mesIntervs")
</script>