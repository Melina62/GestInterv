<?php
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Tickets/lireTicket.inc.php") ; //controleur qui appelle la page données
	require_once ("/FO/Modeles/Users/lireUser.inc.php") ;
	require_once ("fo_affecterTicket.php") ;

?>
	<br /> <br />
	<fieldset >		
		<legend> Suivi des tickets déclarés </legend>
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
		
		<legend> Suivi des tickets affectés </legend>
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
		
		<legend> Suivi des tickets pris en charge </legend>
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
	<br /> <br />
	<fieldset >
		
		<legend> Suivi des tickets en cours </legend>
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
	<br /> <br />
	<fieldset >
		
		<legend> Suivi des tickets en attente </legend>
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
					<th width="15%">Constat</th>
					<th width="15%">Intervenant</th>
					<th width="20%">Etat</th>
					<th width="10%">Date Fin</th>
				</tr>
<?php
							
				$lesTickets = getLesTickets(5) ;
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
						<td><?php echo$unTicket["Int_Fin"] ; ?></td>
					</tr>
<?php
				}
?>
			</table>		
	</fieldset>
	<br /> <br />
	<fieldset >
		
		<legend> Suivi des tickets résolus </legend>
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
							
				$lesTickets = getLesTickets(6) ;
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
		
		<legend> Suivi des tickets sans solution </legend>
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
							
				$lesTickets = getLesTickets(7) ;
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
		
		<legend> Suivi des tickets clôturés </legend>
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
							
				$lesTickets = getLesTickets(8) ;
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
