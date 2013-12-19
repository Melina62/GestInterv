
	<form id="frm_affectation" action="?page=affecTck" method="post">
		<fieldset> 			
			<legend> Affecter ticket </legend>
			<br />
			<table>
				<tr>
					<th> Ticket: </th>
					<td>
						<select id="lst_ticket" name="lst_ticket" >
<?php		
							$lesTickets = getAllDeclares() ;
							foreach ($lesTickets as $unTicket) 
							{	
?>							
								<option value="<?php echo $unTicket['Tic_Num'] ; ?>" > <?php echo $unTicket["Tic_Salle"] . " " . $unTicket["Tic_Materiel"]; ?> </option>			
<?php							
							}
?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Intervenant: </th>
					<td>
						<select id="lst_interv" name="lst_interv" >
<?php		
							$lesIntervs = getAllIntervenants() ;
							foreach ($lesIntervs as $unInterv) 
							{	
?>							
								<option value="<?php echo $unInterv['Uti_Code'] ; ?>" > <?php echo $unInterv["Uti_Nom"] . " " . $unInterv["Uti_Prenom"]; ?></option>
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