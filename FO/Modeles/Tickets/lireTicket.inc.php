<?php
	function reconnecter()
	{
		require_once("classe/clstBaseMysql.classe.php") ;	
		$oSql = new clstBaseMysql("localhost", "root", "", "gestinterv") ;
		return ($oSql) ;
	}	
	
	FUNCTION getAllSalles()
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Sal_Num 
				  FROM SALLE ";
		$rstSal = $oSql->query($sReq) ;
		$iNb = 0 ;
		$lesSalles = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstSal) )
		{
			$iNb = $iNb + 1 ;
			$lesSalles[$iNb] =  $uneLigne ;
		}
		return ($lesSalles) ;
	}
	
	FUNCTION getAllMateriels()
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Mat_Code, Mat_Libelle
				  FROM MATERIEL ";
		$rstMat = $oSql->query($sReq) ;

		$iNb = 0 ;
		$lesMateriels = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstMat) )
		{
			$iNb = $iNb + 1 ;
			$lesMateriels[$iNb] =  $uneLigne ;
		}
		return ($lesMateriels) ;
	}
	
	FUNCTION getAllCategories()
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Cat_Code ,Cat_Libelle 
				  FROM CATEGORIE ";
		$rstCat = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesCategories = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstCat) )
		{
			$iNb = $iNb + 1 ;
			$lesCategories[$iNb] = $uneLigne ;
		}
		return ($lesCategories) ;
	}
	
	
	// les tickets du demandeur
	FUNCTION getMesTickets($pLogin, $pEtat)
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Tic_Num, Tic_Materiel
				  FROM  TICKET , UTILISATEUR
				  WHERE Tic_Intervenant = Uti_Code
				  AND   Tic_Etat        = " . $pEtat . "
				  AND   Uti_Login       = '".  $pLogin ."'
				  ORDER BY Tic_Num " ;	
		//echo $sReq ;			
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
	// tous les tickets déclarés pour le responsable
	FUNCTION getAllDeclares()
	{		
		$oSql= reconnecter() ;	
		$sReq = "SELECT Tic_Num, Tic_Salle, Cat_Libelle, Tic_Materiel, Tic_DatCre, Tic_Constat, Eta_Libelle , Uti_Nom  as Dem
				 FROM  TICKET, CATEGORIE , ETAT, UTILISATEUR 
				 WHERE Tic_Etat     = 1
				 AND Tic_Categorie  = Cat_Code   
				 AND Tic_Etat       = Eta_Code
				 AND Tic_Demandeur  = Uti_Code  
				 ORDER BY Tic_Num " ;	
		// echo $sReq ;					 
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
	
	// tous les autres tickets pour le responsable
	FUNCTION getLesTickets( $pEtat)
	{		
		$oSql= reconnecter() ;	
		$sReq = "SELECT Tic_Num, Tic_Salle, Cat_Libelle, Tic_Materiel, Tic_DatCre, Tic_Constat, Eta_Libelle , A.Uti_Nom  as Dem , B.Uti_Nom  as Interv
				 FROM  TICKET, CATEGORIE , ETAT, UTILISATEUR A, UTILISATEUR B 
				 WHERE Tic_Etat       = " . $pEtat . "
				 AND Tic_Categorie    = Cat_Code 
				 AND Tic_Etat         = Eta_Code
				 AND Tic_Demandeur    =  A.Uti_Code  
				 AND Tic_Intervenant  =  B.Uti_Code  
				 ORDER BY Tic_Num " ;	
		//echo $sReq ;					 
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
	// intervenant et tickets affectés
	FUNCTION getAllTicketsAff($pLogin, $pEtat)
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Tic_Num, Tic_DatCre,Tic_Salle, Cat_Libelle , Tic_Materiel, Tic_Constat , Eta_Libelle
				  FROM CATEGORIE, UTILISATEUR,  TICKET, ETAT
				  WHERE Uti_Login     = '" . $pLogin ."'
				  AND Tic_Etat        = " . $pEtat . "
				  AND tic_Etat        = 2
				  AND Tic_Categorie   = Cat_Code
				  AND Tic_Intervenant = Uti_code					
				  AND Tic_Etat        = Eta_Code	
				  ORDER BY Tic_Num ";		
		//echo $sReq ;
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
	// intervenant et les tickets pris en charge  (voire plus)
	FUNCTION getAllMesTickets($pLogin, $pEtat)
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Tic_Num, Tic_DatCre,Tic_Salle, Cat_Libelle , Tic_Materiel, Int_Num, Int_Debut, Tic_Constat , Eta_Libelle
				  FROM INTERVENTION , CATEGORIE, UTILISATEUR,  TICKET, ETAT
				  WHERE Uti_Login     = '" . $pLogin ."'
				  AND Tic_Etat        = " . $pEtat . "
				  AND Tic_Etat        >= 3
				  AND Tic_Categorie   = Cat_Code
				  AND Tic_Intervenant = Uti_code					
				  AND Int_Ticket      = Tic_Num 
				  AND Tic_Etat        = Eta_Code	
				  ORDER BY Tic_Num ";		
		//echo $sReq ;
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
	
	// toutes les demandes
	FUNCTION getAllDemandes($pLogin, $pEtat)
	{		
		$oSql= reconnecter() ;		
		$sReq = " SELECT Tic_Num, Tic_DatCre, Tic_Salle , Cat_Libelle, Tic_Materiel,  Tic_Constat, Eta_Libelle 
				  FROM  CATEGORIE, UTILISATEUR,  TICKET, ETAT
				  WHERE Uti_Login     = '" . $pLogin ."'
				  AND Tic_Etat        = " . $pEtat . "
				  AND Tic_Categorie   = Cat_Code
				  AND Tic_Demandeur   = Uti_code					
				  AND Tic_Etat        = Eta_Code	
				  ORDER BY Tic_Num ";	
		$rstTic = $oSql->query($sReq) ;	

		$iNb = 0 ;
		$lesTickets = array() ;		
		while ($uneLigne = $oSql->tabAssoc($rstTic) )
		{
			$iNb = $iNb + 1 ;
			$lesTickets[$iNb] =  $uneLigne ;
		}
		return ($lesTickets) ;
	}
	
		
?>