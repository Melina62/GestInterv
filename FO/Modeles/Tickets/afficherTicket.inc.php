<?php

	header("Cache-Control: no-cache, must-revalidate");
	header("Content-Type: text/html; charset=ISO-8859-1");
	
	require_once("lireTicket.inc.php");	

	if (isset($_POST["codeElt"]))
	{
		$iCodeEtat = $_POST["codeElt"];
		
		$lesTickets = getAllTicketEtat($iCodeEtat);
?>

		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Numéro Ticket</th>
				<th width="13%">Catégorie</th>
				<th width="5%" >Date Création</th>
				<th width="5%" >Demandeur</th>
				<th width="5%" >Intervenant</th>
			</tr>
<?php			
			foreach ($lesTickets as $unTicket)			
			{
?>	
				<tr>
					<td><?php echo $unTicket["Tic_Num"] ;  ?></td>
					<td><?php echo $unTicket["Tic_Categorie"] ;  ?></td>
					<td><?php echo $unTicket["Tic_DatCre"] ; ?></td>	
					<td><?php echo $unTicket["Tic_Demandeur"] ; ?></td>
					<td><?php echo $unTicket["Tic_Intervenant"] ; ?></td>
				</tr>
<?php
			}
?>
		</table>
		
<?php
	}
	else
	{
		echo "aucun ticket" ;
	}	
?>