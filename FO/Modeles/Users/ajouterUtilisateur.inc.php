<?php
	//r�ception des valeurs saisies
	$sNom		= $_POST["txt_nom"];
	$sPrenom	= $_POST["txt_prenom"];
	$sLogin		= $_POST["txt_login"];
	$sMdp		= $_POST["pwd_mdp"];
	$sFonction	= $_POST["rad_fonction"];
	
	//g�n�ration d'un code pour le nouvel utilisateur
	$sReq= " SELECT MAX(UTI_CODE) 
			FROM UTILISATEUR";
	$iCode  =$oSql->getNombre($sReq) ;
	$iCode  = $iCode +  1 ;
	echo $iCode ;
	
	//insertion des donn�es dans la base
	$sReq = "INSERT INTO UTILISATEUR(Uti_Code , UTi_Login,  Uti_Mdp, Uti_Nom, Uti_Prenom , Uti_Fonction)
		      VALUES(".$iCode.", '".$sLogin."', '".$sMdp."', '".$sNom."', '".$sPrenom."', '".$sFonction."')" ;
			
	//echo $sReq;
	
	$oSql->execute($sReq);
	if ($sFonction == "Responsable")
	{
?>
	<script language="Javascript">
		alert("Utilisateur enregistr�");
		window.location.replace("?page=suiviUser");
	</script>	
<?php
	}
?>
