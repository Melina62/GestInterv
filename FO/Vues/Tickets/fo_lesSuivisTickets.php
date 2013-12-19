<?php
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Tickets/lireTicket.inc.php") ;
	require_once ("/FO/Modeles/Users/lireUser.inc.php") ;
	require_once ("fo_affecterTicket.php") ;
?>
	<br /> <br />
	<fieldset >		
		<legend> suivi des tickets déclarés </legend>
		<br />
		<form name="suivisTickets" >
			<table border =1 width="100%" >
				<tr>
					<th width="5%" >Num</th>
					<th width="13%">Demandeur</th>
					<th width="10%">Date</th>
					<th width="10%">Salle</th>
					<th width="13%">Matériel</th>
					<th width="15%">Problème</th>
					<th width="40%">Constat</th>
					<th width="20%">Etat</th>			
				</tr>
<?php
				$lesTickets = getAlldeclares() ;
				foreach ($lesTickets as $unTicket) 		
				{
?>	
					<tr>
						<td><?php echo$unTicket["Tic_Num"] ;  ?></td>
						<td><?php echo$unTicket["Dem"]; ?></td>
						<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
						<td><?php echo$unTicket["Tic_Salle"] ; ?></td>
						<td><?php echo$unTicket["Tic_Materiel"] ; ?></td>
						<td><?php echo$unTicket["Cat_Libelle"] ;?></td>	
						<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
						<td><?php echo$unTicket["Eta_Libelle"] ; ?></td>
					</tr>
<?php
				}
?>
			</table>		
	</fieldset>
	<br /> <br />
	<fieldset >
		<legend> suivi des tickets affectés </legend>
		<br />
		<form name="suivisTickets" >
			<table border =1 width="100%" >
				<tr>
					<th width="5%" >Num</th>
					<th width="13%">Demandeur</th>
					<th width="10%">Date</th>
					<th width="10%">Salle</th>
					<th width="13%">Matériel</th>
					<th width="15%">Problème</th>
					<th width="40%">Constat</th>
					<th width="40%">Intervenant</th>
					<th width="20%">Etat</th>			
				</tr>
<?php
				$lesTickets = getLesTickets(2) ;
				foreach ($lesTickets as $unTicket) 
				{
?>	
					<tr>
						<td><?php echo$unTicket["Tic_Num"] ;  ?></td>
						<td><?php echo$unTicket["Dem"]; ?></td>
						<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
						<td><?php echo$unTicket["Tic_Salle"] ; ?></td>
						<td><?php echo$unTicket["Tic_Materiel"] ; ?></td>
						<td><?php echo$unTicket["Cat_Libelle"] ;?></td>	
						<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
						<td><?php echo$unTicket["Interv"]; ?></td>
						<td><?php echo$unTicket["Eta_Libelle"] ; ?></td>
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
		<form name="suivisTickets" >
			<table border =1 width="100%" >
				<tr>
					<th width="5%" >Num</th>
					<th width="13%">Demandeur</th>
					<th width="10%">Date</th>
					<th width="10%">Salle</th>
					<th width="13%">Matériel</th>
					<th width="15%">Problème</th>
					<th width="40%">Constat</th>
					<th width="40%">Intervenant</th>
					<th width="20%">Etat</th>			
				</tr>
<?php
							
				$lesTickets = getLesTickets(3) ;
				foreach ($lesTickets as $unTicket) 		
				{
?>	
					<tr>
						<td><?php echo$unTicket["Tic_Num"] ;  ?></td>
						<td><?php echo$unTicket["Dem"]; ?></td>
						<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
						<td><?php echo$unTicket["Tic_Salle"] ; ?></td>
						<td><?php echo$unTicket["Tic_Materiel"] ; ?></td>
						<td><?php echo$unTicket["Cat_Libelle"] ;?></td>	
						<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
						<td><?php echo$unTicket["Interv"]; ?></td>
						<td><?php echo$unTicket["Eta_Libelle"] ; ?></td>
					</tr>
<?php
				}
?>
			</table>		
	</fieldset>
	<fieldset >
		<legend> suivi des tickets en cours </legend>
		<br />
		<form name="suivisTickets" >
			<table border =1 width="100%" >
				<tr>
					<th width="5%" >Num</th>
					<th width="13%">Demandeur</th>
					<th width="10%">Date</th>
					<th width="10%">Salle</th>
					<th width="13%">Matériel</th>
					<th width="15%">Problème</th>
					<th width="40%">Constat</th>
					<th width="40%">Intervenant</th>
					<th width="20%">Etat</th>			
				</tr>
<?php
							
				$lesTickets = getLesTickets(4) ;
				foreach ($lesTickets as $unTicket) 		
				{
?>	
					<tr>
						<td><?php echo$unTicket["Tic_Num"] ;  ?></td>
						<td><?php echo$unTicket["Dem"]; ?></td>
						<td><?php echo modifierDate($unTicket["Tic_DatCre"]); ?></td>
						<td><?php echo$unTicket["Tic_Salle"] ; ?></td>
						<td><?php echo$unTicket["Tic_Materiel"] ; ?></td>
						<td><?php echo$unTicket["Cat_Libelle"] ;?></td>	
						<td><?php echo stripslashes($unTicket["Tic_Constat"]) ; ?></td>	
						<td><?php echo$unTicket["Interv"]; ?></td>
						<td><?php echo$unTicket["Eta_Libelle"] ; ?></td>
					</tr>
<?php
				}
?>
			</table>		
	</fieldset>