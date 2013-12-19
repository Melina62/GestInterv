<?php
	$sLogin = $_SESSION["login"];	
	if(!empty($_POST["suppr"])) 
	{
		$suppr = $_POST["suppr"];
		$sReq = "DELETE  FROM UTILISATEUR 
				 WHERE Uti_Code IN (";
				
				foreach($suppr as $iNumUti)
				{					
					// vérifier s'il existe des tickets - requete avec $iNumUti
					// si oui message 
					
					// sinon
					$sReq .=   $iNumUti.",";
				
				}			
		$sReq =    substr($sReq, 0, strlen($sReq)-1);
		$sReq .=   ")"; //et on termine la requête
		// echo $sReq ."<br/>" ;
		$oSql->execute($sReq);	
?>
		<script language="Javascript">
			alert("Utilisateur supprimé");
		</script>		
<?php						
	}	
?>

	<script language="Javascript">
		window.location.replace("?page=suiviUser")
	</script>	