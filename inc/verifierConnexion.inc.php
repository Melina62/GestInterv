<?php
	//r�cup�ration des valeurs valeurs saisies
	$sLogin = $_POST["txt_login"];
	$sMdp   = $_POST["pwd_mdp"];
	// il faudrait am�liorer la v�rification (utilisation de tableaux)
	// et �viter les injections SQL 
	

	
	//verification du login et du mot de passe
	$sReq = " SELECT Uti_Login, Uti_Fonction
			  FROM UTILISATEUR
			  WHERE Uti_Login = '".$sLogin."'
			  AND Uti_Mdp     = '".$sMdp."'";
	//traitement de la requ�te
	$rstUti  = $oSql->query($sReq) ;						
	if($ligne   = $oSql->tabAssoc($rstUti))
	{
		$sLoginR = $ligne["Uti_Login"] ;
	
		//si le curseur pr�sente un r�sultat
		if (!empty($sLoginR))
		{
			//on ouvre la session
			$_SESSION["login"]    = $sLoginR;
			$sFonction            = $ligne["Uti_Fonction"] ;
			$_SESSION["fonction"] = $sFonction ;
		
?>
			<script language="Javascript">
				window.location.replace("index_2.php");
			</script>		
<?php
		}

		else
		{
			//retour � la page de connexion
?>
			<script language="Javascript">
				alert("impossible de se connecter ");
				window.location.replace("index.php");
			</script>
<?php
		}
	}
?>
