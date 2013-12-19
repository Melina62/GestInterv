<?php
	function reconnecter()
	{
		require_once("classe/clstBaseMysql.classe.php") ;	
		$oSql = new clstBaseMysql("localhost", "root", "", "GestInterv_G5_emvl") ;
		return ($oSql) ;
	}	
	
	FUNCTION getAllUsers()
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Uti_Code, Uti_Nom, Uti_Prenom, Uti_Login, Uti_Fonction
				  FROM UTILISATEUR 
				  ORDER BY Uti_FOnction";
		$rstUti = $oSql->query($sReq) ;
		$iNb = 0 ;
		$lesUsers = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstUti) )
		{
			$iNb = $iNb + 1 ;
			$lesUsers[$iNb] =  $uneLigne ;
		}
		return ($lesUsers) ;
	}
	
	FUNCTION getAllIntervenants()
	{		
		$oSql= reconnecter() ;
		$sReq = "SELECT Uti_Code, Uti_Nom, Uti_Prenom
				 FROM   UTILISATEUR
				 WHERE  Uti_Fonction = 'Intervenant'
				 ORDER BY 2, 3 " ;
		$rstUti = $oSql->query($sReq) ;
		$iNb = 0 ;
		$lesUsers = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstUti) )
		{
			$iNb = $iNb + 1 ;
			$lesUsers[$iNb] =  $uneLigne ;
		}
		return ($lesUsers) ;
	}