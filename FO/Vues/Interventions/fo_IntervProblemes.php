<?php
	require_once ("FO/Modeles/Interventions/lireIntervention.inc.php") ;
?>
	<br/>
	<fieldset>
		<legend>Liste des interventions</legend>
		<br/>
		<table border=0>
		<tr>
			<th>Problème : </th>
			<td>
				<select id="lst_probleme" name="lst_probleme" onchange="envoyerListe('POST','afficherInterv',this.name,'lst_interv')">
					<option value="-1">Selectionnez </option>
<?php			
					$lesProbs  = getAllProb() ;
					foreach ($lesProbs as $unProb)			
					{
?>	
						<option value="<?php echo $unProb['Cat_Code']; ?>"><?php echo $unProb["Cat_Libelle"]; ?> </option>
<?php
					}
?>
				</select>
			</td>
			</tr>
		</table>
		<br/><br/>
		<div id="lst_interv" name="lst_interv" style="display:inline">
					
		</div>
		
	</fieldset>