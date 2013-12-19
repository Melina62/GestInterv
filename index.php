<?php
	header("Content-Type: text/html; charset=ISO-8859-15");	
	session_start() ;		
	$dDatJour = date("Y-m-d");	
	$page     = @$_GET["page"] ;
	require_once("inc/connecter.inc.php") ;	
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
			<title><?php echo $titre ?></title>
			<link rel="stylesheet" media="screen" type="text/css" title="style" href="css/styleSite.css" />
		
		</head>	
		<body>
			<header>
<?php				
				require_once("mdl/banniere.php") ;
?>
			</header>
			<nav>
			</nav>
			<br/>
			<article>
<?php
				switch($page)
				{
					case "connexion":
						$fichier = "FO/Vues/fo_connexion.html" ;
						$titre   = "Se connecter";
						break ;
				
					case "verifCnx":
						$fichier = "inc/verifierConnexion.inc.php" ;
						break ;
						
					case "infoCnx":
						$fichier = "FO/Vues/fo_infoCnx.php" ;
						break ;				
					
					default: $fichier = "FO/Vues/fo_connexion.html" ;
				}
			
				include($fichier) ;
?>					
			</article>
		</body>
	</html>


