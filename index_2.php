<?php
	header("Content-Type: text/html; charset=ISO-8859-15");	
	session_start() ;		
	$dDatJour = date("Y-m-d");	
	$page     = @$_GET["page"] ;
	require_once("inc/connecter.inc.php") ;	
	require_once("inc/Biblio.lib.php") ;	
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
			<title><?php echo $titre ?></title>
			<link rel="stylesheet" media="screen" type="text/css" title="style" href="css/styleSite.css" />	
			<script type="text/javascript" src="js/fonctionsAjax.js"></script>
			
		</head>	
		<body>
			<header>
<?php
				require_once("mdl/banniere.php") ;
?>
			</header>
			<nav>
<?php			
				//si un utilisateur est connecté
				if (isset($_SESSION["login"]))
				{										
					require_once("mdl/menu.php") ;				
				}						
?>
			</nav>
			<br/>
			<article>
				<br/> <br/>
<?php
				switch($page)
				{
					case "ajouter":
						$fichier = "FO/Vues/Tickets/fo_creerTicket.php" ;
						$titre   = "Création d'un ticket";
						break ;	
						
					case "ajoutTck":
						$fichier = "FO/Modeles/Tickets/ajouterTicket.inc.php" ;
						break ;
						
					case "monSuivi":
						$fichier = "FO/Vues/Tickets/fo_monSuiviTickets.php" ;
						$titre   = "suivi de mes tickets du demandeur";
						break ;	
						
					case "affecter":
						$fichier = "FO/Vues/Tickets/fo_affecterTicket.php" ;
						$titre   = "Affectation des tickets par le responsable";
						break ;	
						
					case "affecTck":
						$fichier = "FO/Modeles/Tickets/affecterTicket.inc.php" ;
						break ;	
						
					case "suivisTcks":
						$fichier = "FO/Vues/Tickets/fo_lesSuivisTickets.php" ;
						$titre   = "suivi des tickets par le responsable ";
						break ;	
						
					case "priseCharge" :
						$fichier = "FO/Vues/Tickets/fo_suivisPriseCharge.php" ;
						$titre   = "prise en charge du ticket par l'intervenant ";
						break ;	
						
					case "chargeTick":
						$fichier = "FO/Modeles/Tickets/priseChargeTicket.inc.php" ;
						break ;	

					case "mesIntervs":
						$fichier = "FO/Vues/Interventions/fo_mesInterventions.php" ;
						$titre   = "suivi de mes interventions";
						break ;	
						
					case "histInterv":
						$fichier = "FO/Vues/Interventions/fo_historiqueInterventions.php" ;
						$titre   = "Historique des interventions finies";
						break ;	
						
					case "modifierInterv":
						$fichier = "FO/Vues/Interventions/fo_modifierInterv.php" ;
						$titre   = "modification de l'intervention";
						break ;		
						
					case "modifier":
						$fichier = "FO/Modeles/Interventions/modifierInterv.inc.php" ;
						break ;	
						
					case "terminerInterv":
						$fichier = "FO/Vues/Interventions/fo_terminerInterv.php" ;
						$titre   = "Terminer l'intervention";
						break ;
					
					case "IntervProbleme":
						$fichier = "FO/Vues/Interventions/fo_IntervProblemes.php";
						$titre   = "Affichage des interventions par problème";
						break;
						
					case "afficherInterv":
						$fichier = "FO/Modeles/Interventions/afficherInterv.inc.php";
						break;
						
					case "TicketEtat":
						$fichier = "FO/Vues/Tickets/fo_suivisTicket.php";
						$titre   = "Affichage des tickets par état";
						break;
						
					case "creer":
						$fichier = "FO/Vues/Users/fo_creerUtilisateur.html" ;
						$titre   = "Créer un nouvel utilisateur";
						break ;
						
					case "creerUti":
						$fichier = "FO/Modeles/Users/ajouterUtilisateur.inc.php" ;
						break ;
						
					case "suiviUser":
						$fichier = "FO/Vues/Users/fo_suiviUtilisateurs.php" ;
						$titre   = "Visualiser  et gérer les utilisateurs";
						break ;	
						
					case "suppUser":
						$fichier = "FO/Modeles/Users/supprimerUtilisateur.inc.php" ;
						break ;
					
					case "deconnexion":
						$fichier = "inc/deconnecter.inc.php" ;
						break ;
						
					case "infoCnx":
						$fichier = "FO/Vues/fo_infoCnx.php" ;
						break ;				
					
					default: $fichier = "FO/Vues/fo_accueil.php" ;
				}
				include($fichier) ;
?>					
			</article>
		</body>
	</html>


