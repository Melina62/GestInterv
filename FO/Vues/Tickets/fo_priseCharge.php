<?php
	// récuperer les résultats des requêtes
	$sLogin = $_SESSION["login"];
	$lesTickets  = getMesTickets($sLogin ,2) ;
?>
	<form id="frm_priseCharge" action="?page=chargeTick" method="post">
		<fieldset> 
			<legend> Prise en charge des tickets affectés</legend>
			<br/>
			<table>
				<tr>
					<th> Ticket: </th>
					<td>
						<select id="lst_ticket" name="lst_ticket" >
<?php		
							$lesTickets  = getMesTickets($sLogin ,2) ;
							foreach ($lesTickets as $unTicket)							
							{	
?>							
								<option value="<?php echo $unTicket["Tic_Num"] ; ?>" > <?php echo $unTicket["Tic_Num"] . "  -  " . $unTicket["Tic_Materiel"] ; ?> </option>			
<?php							
							}
?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><center>
						<input type="submit" name="cmd_valider" value="valider"></center>
					</center></td>
				</tr>
			</table>
		</fieldset>
	</form>