<?php
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Tickets/lireTicket.inc.php") ;
?>
	<br/>
	<fieldset>
		<legend> Suivi de mes tickets créés </legend>
		<br/>
		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Num</th>
				<th width="13%">Date</th>
				<th width="13%">Salle</th>
				<th width="13%">Matériel</th>
				<th width="20%">Problème</th>
				<th width="40%">Constat</th>
				<th width="20%">Etat</th>
			</tr>
<?php			
			$lesTickets  = getAllDemandes($sLogin ,1) ;
			foreach ($lesTickets as $unTicket)			
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ;  ?></td>
					<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
					<td><?php echo $unTicket["Tic_Salle"] ; ?></td>
					<td><?php echo $unTicket["Tic_Materiel"] ; ?></td>
					<td><?php echo $unTicket["Cat_Libelle"] ;?></td>	
					<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
					<td><?php echo $unTicket["Eta_Libelle"] ; ?></td>
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>
	<br/><br/>
	<fieldset>
	
		<legend> Suivi de mes tickets affectés </legend>
		<br/>
		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Num</th>
				<th width="13%">Date</th>
				<th width="13%">Salle</th>
				<th width="13%">Matériel</th>
				<th width="20%">Problème</th>
				<th width="40%">Constat</th>
				<th width="20%">Etat</th>
			</tr>
<?php		
			$lesTickets  = getAllDemandes($sLogin ,2) ;
			foreach ($lesTickets as $unTicket)			
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ;  ?></td>
					<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
					<td><?php echo $unTicket["Tic_Salle"] ; ?></td>
					<td><?php echo $unTicket["Tic_Materiel"] ; ?></td>
					<td><?php echo $unTicket["Cat_Libelle"] ;?></td>	
					<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
					<td><?php echo $unTicket["Eta_Libelle"] ; ?></td>
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>
	<br/>
	<fieldset>
		
		<legend> Suivi de mes tickets pris en charge </legend>
		<br/><br/>
		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Num</th>
				<th width="13%">Date</th>
				<th width="13%">Salle</th>
				<th width="13%">Matériel</th>
				<th width="20%">Problème</th>
				<th width="40%">Constat</th>
				<th width="20%">Etat</th>
			</tr>
<?php		
			$lesTickets  = getAllDemandes($sLogin ,3) ;
			foreach ($lesTickets as $unTicket)			
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ;  ?></td>
					<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
					<td><?php echo $unTicket["Tic_Salle"] ; ?></td>
					<td><?php echo $unTicket["Tic_Materiel"] ; ?></td>
					<td><?php echo $unTicket["Cat_Libelle"] ;?></td>	
					<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
					<td><?php echo $unTicket["Eta_Libelle"] ; ?></td>
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>