<?php	
	function connecter()
	{
		require_once("classe/clstBaseMysql.classe.php") ;	
		$oSql = new clstBaseMysql("localhost", "root", "", "gestinterv") ;
		return ($oSql) ;
	}	
	
	FUNCTION getUneInterv($pNum)
	{		
		$oSql= connecter() ;		
		$sReq = " SELECT Tic_Num, Tic_DatCre, Tic_Salle, Cat_Libelle , Tic_Materiel, Int_Num, Int_Debut, Tic_Constat , Eta_Libelle
				  FROM INTERVENTION , CATEGORIE,  TICKET, ETAT
				  WHERE Int_Num         = " . $pNum . "
				  AND Tic_Categorie   = Cat_Code
				  AND Int_Ticket      = Tic_Num
				  AND Tic_Etat        = Eta_Code ";	
		//echo $sReq . "<br/>" ;
		$rstInterv = $oSql->query($sReq) ;	
		
		if ($uneLigne = $oSql->tabAssoc($rstInterv ) )
		{
			return($uneLigne) ;
		}
	}
	
	
	
	FUNCTION getAllInterv($pLogin, $pEtat)
	{		
		$oSql= connecter() ;		
		$sReq = " SELECT Tic_Num, Tic_DatCre, Tic_Salle, Cat_Libelle , Tic_Materiel, Int_Num, Int_Debut,  Eta_Libelle
				  FROM INTERVENTION , CATEGORIE, UTILISATEUR,  TICKET, ETAT
				  WHERE Uti_Login     = '" . $pLogin ."'
				  AND Tic_Etat        = " . $pEtat . "
				  AND Tic_Categorie   = Cat_Code
				  AND Tic_Intervenant = Uti_code					
				  AND Int_Ticket      = Tic_Num
				  AND Tic_Etat        = Eta_Code	
				  ORDER BY Tic_Num ";		
		$rstInterv = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesIntervs = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstInterv ) )
		{
			$iNb = $iNb + 1 ;
			$lesIntervs[$iNb] =  $uneLigne ;
		}
		return ($lesIntervs) ;
	}	
	
	FUNCTION getAllProb()
	{		
		$oSql= connecter() ;		
		$sReq = " SELECT Cat_Code, Cat_Libelle
				  FROM categorie
				  ORDER BY Cat_Code ";		
		$rstPb = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesPbs = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstPb ) )
		{
			$iNb = $iNb + 1 ;
			$lesPbs[$iNb] =  $uneLigne ;
		}
		return ($lesPbs) ;
	}	

	FUNCTION getAllIntervProb($pProb)
	{		
		$oSql= connecter() ;		
		$sReq = " SELECT Int_Num, Int_Ticket, Int_Debut, Int_Fin
				  FROM INTERVENTION , TICKET
				  WHERE Tic_Num = Int_Ticket
				  AND Tic_Categorie = " . $pProb ."
				  ORDER BY Tic_Num ";		
		$rstInterv = $oSql->query($sReq) ;	
		$iNb = 0 ;
		$lesIntervs = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstInterv) )
		{
			$iNb = $iNb + 1 ;
			$lesIntervs[$iNb] =  $uneLigne ;
		}
		return ($lesIntervs) ;
	}	
?>