<?php
	require_once ("FO/Modeles/Tickets/lireTicket.inc.php") ;
?>
	<br/>
	<fieldset>
		<legend>Liste des tickets</legend>
		<br/>
		<table border=0>
		<tr>
			<th>Etat : </th>
			<td>
				<select id="lst_etat" name="lst_etat" onchange="envoyerListe('POST','afficherTicket',this.name,'lst_ticket')">
					<option value="-1">Selectionnez </option>
<?php			
					$lesEtats  = getAllEtat() ;
					foreach ($lesEtats as $unEtat)			
					{
?>	
						<option value="<?php echo $unEtat['Eta_Code']; ?>"><?php echo $unEtat["Eta_Libelle"]; ?> </option>
<?php
					}
?>
				</select>
			</td>
			</tr>
		</table>
		<br/><br/>
		<div id="lst_ticket" name="lst_ticket" style="display:inline">
					
		</div>
	</fieldset>