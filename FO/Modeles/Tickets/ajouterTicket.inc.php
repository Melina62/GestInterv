<?php	
	$dDateTick = date("Y-m-d");
	$sLogin    = $_SESSION["login"];
	$sFonction = $_SESSION["fonction"];
	//r�ception des valeurs saisies
	$sNumMat   = $_POST["lst_mat"];
	$sNumSalle = $_POST["lst_salle"];
	$iCat      = $_POST["lst_categ"];
	$sConstat  = protegerChaine($_POST["txt_constat"]);
	
	//g�n�ration d'un num�ro d'intervention 
	$sReq = "SELECT MAX(Tic_Num) 
		     FROM TICKET" ;
	$iNumTicket  = $oSql->getNombre($sReq) ;
	$iNumTicket = $iNumTicket  +  1 ;	
		
	//Code du demandeur
	$sReq = " SELECT Uti_Code
			  FROM UTILISATEUR
			  WHERE Uti_Login = '".$sLogin."'";
	// echo $sReq ."<br/>" ;
	$iCode   = $oSql->getNombre($sReq) ;
			
	//insertion des donn�es dans la base
	$sReq = "INSERT INTO TICKET(Tic_Num, Tic_Salle, Tic_Categorie, Tic_Materiel, Tic_DatCre, Tic_Etat, Tic_Demandeur)
		    VALUES (".$iNumTicket.",'".$sNumSalle."',".$iCat .",'".$sNumMat."', '" .$dDateTick ."',1, ".$iCode." )";
	// echo $sReq ."<br/>" ;
	$oSql->execute($sReq);	
	
	//si il y a une description
	$sConstat  = protegerChaine($_POST["txt_constat"]);
	if (!empty($sConstat))
	{
		//mise � jour de la table INTERVENTION
		$sReq = "UPDATE TICKET
				SET Tic_Constat = '" .$sConstat. "'
				WHERE Tic_Num   = " .$iNumTicket ;		
		$oSql->execute($sReq);
	}
	if ($sFonction == "Demandeur")
	{
?>
	<script language="Javascript">
		alert("Ticket enregistr�");
		window.location.replace("?page=monSuivi")
	</script>
<?php
	}
	elseif ($sFonction == "Intervenant")
	{
?>
	<script language="Javascript">
		alert("Ticket enregistr�");
		window.location.replace("?page=monSuivi")
	</script>
<?php
	}
	elseif ($sFonction == "Responsable")
	{	
?>
	<script language="Javascript">
		alert("Ticket enregistr�");
		window.location.replace("?page=suivisTcks")
	</script>
<?php
	}
?>