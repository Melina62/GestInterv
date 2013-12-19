<?php
	$sLogin = $_SESSION["login"];
	require_once ("/FO/Modeles/Tickets/lireTicket.inc.php") ;
	// intégrer la liste déroulante
	require_once("FO/Vues/Tickets/fo_priseCharge.php") ;
?>
	<br /> <br />
	<fieldset >		
		<legend> suivi des tickets affectés </legend>
		<br />
		<table border = 1  width="100%" >
			<tr>
				<th width="5%" >Ticket</th>
				<th width="8%" >Création</th>
				<th width="8%" >Salle</th>
				<th width="10%" >Matériel</th>
				<th width="8%" >Problème</th>
				<th width="30%" >Constat</th>
				<th width="15%" >Etat</th>				
			</tr>
<?php
			$lesTickets  = getAllTicketsAff($sLogin ,2) ;
			foreach ($lesTickets as $unTicket)			
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ; ?></td>
					<td><?php echo modifierDate($unTicket["Tic_DatCre"]) ; ?></td>
					<td><?php echo $unTicket["Tic_Salle"] ; ?></td>
					<td><?php echo $unTicket["Tic_Materiel"] ; ?></td>
					<td><?php echo $unTicket["Cat_Libelle"] ; ?></td>	
					<td><?php echo $unTicket["Tic_Constat"] ; ?></td>
					<td><?php echo $unTicket["Eta_Libelle"] ; ?></td>				
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>
	<br /> <br />
	<fieldset >		
		<legend> suivi des tickets pris en charge </legend>
		<br />
		<table border = 1  width="100%" >
			<tr>
				<th width="5%" >Ticket</th>
				<th width="8%" >Création</th>
				<th width="8%" >Salle</th>
				<th width="10%">Matériel</th>
				<th width="8%" >Problème</th>
				<th width="20%">Constat</th>
				<th width="8%" >Intervention</th>
				<th width="10%">Début</th>
				<th width="15%" >Etat</th>				
			</tr>
<?php
			$lesTickets  = getAllMesTickets($sLogin ,3) ;
			foreach ($lesTickets as $unTicket)		
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ; ?></td>
					<td><?php echo modifierDate($unTicket["Tic_DatCre"]) ; ?></td>
					<td><?php echo $unTicket["Tic_Salle"] ; ?></td>
					<td><?php echo $unTicket["Tic_Materiel"] ; ?></td>
					<td><?php echo $unTicket["Cat_Libelle"] ; ?></td>	
					<td><?php echo $unTicket["Tic_Constat"] ; ?></td>
					<td><?php echo $unTicket["Int_Num"] ; ?></td>	
					<td><?php echo modifierDate($unTicket["Int_Debut"]) ; ?></td>							
					<td><?php echo $unTicket["Eta_Libelle"] ; ?></td>		
		
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>