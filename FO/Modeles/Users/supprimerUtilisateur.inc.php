<?php
	$sLogin = $_SESSION["login"];	
	if(!empty($_POST["suppr"])) 
	{
		$suppr = $_POST["suppr"];
		$sReq = "DELETE  FROM UTILISATEUR 
				 WHERE Uti_Code IN (";
				
				foreach($suppr as $iNumUti)
				{					
					// v�rifier s'il existe des tickets - requete avec $iNumUti
					// si oui message 
					
					// sinon
					$sReq .=   $iNumUti.",";
				
				}			
		$sReq =    substr($sReq, 0, strlen($sReq)-1);
		$sReq .=   ")"; //et on termine la requ�te
		// echo $sReq ."<br/>" ;
		$oSql->execute($sReq);	
?>
		<script language="Javascript">
			alert("Utilisateur supprim�");
		</script>		
<?php						
	}	
?>

	<script language="Javascript">
		window.location.replace("?page=suiviUser")
	</script>	