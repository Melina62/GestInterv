<div id="menu">
<?php
	$sFonction = $_SESSION["fonction"] ;
	if ($sFonction == "Demandeur")
	{
?>
		<li><a href="?page=ajouter">Créer un ticket</a></li>
		<li><a href="?page=monSuivi">Suivre mes tickets et interventions</a></li>
<?php
	}
	elseif ($sFonction == "Intervenant")
	{
?>
		<li><a href="?page=ajouter">Créer un ticket</a></li>
		<li><a href="?page=priseCharge">Prise en charge de tickets</a></li>
		<li><a href="?page=TicketEtat">Suivis des tickets</a></li>
		<li><a href="?page=mesIntervs">Suivre mes interventions</a></li>
		<li><a href="?page=histInterv">Historique des interventions</a></li>
		<li><a href="?page=IntervProbleme">Affichage interventions</a></li>		
<?php
	}
	elseif ($sFonction == "Responsable")
	{
?>   
		<li><a href="?page=suiviUser">Gérer les Utilisateurs</a></li>
		<li><a href="?page=ajouter">Créer un ticket</a></li>
		<li><a href="?page=suivisTcks">Affecter et suivre les tickets</a></li>
		<li><a href="?page=suivResp">Suivre les interventions</a></li>		
		<li><a href="?page=cloreInt">clôturer les interventions</a></li>
<?php
	}

?>

</div>
	
	