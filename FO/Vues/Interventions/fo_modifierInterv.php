<?php
	$iNum = $_GET["num"] ;
	
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Interventions/lireIntervention.inc.php") ;
	$uneInterv  = getUneInterv($iNum) ;
?>
	<fieldset>
		<legend> Lire l'intervention </legend>
		<br/> <br/>
		<form name ="frm_intervention" action="ajouter" method="POST">
			<table border = 1>
				<tr>
					<th> Num�ro intervention </th>
					<td><?php echo $uneInterv["Int_Num"] ; ?><input type ="hidden" name="txt_interv" id="txt_interv" value="<?php echo $iNum ; ?>"/></td>
					
				</tr>
				<tr>
					<th> Date cr�ation </th>
					<td><?php echo modifierDate($uneInterv["Int_Debut"]) ; ?></td>
				</tr>
				<tr>
					<th> Num�ro Ticket </th>
					<td><?php echo $uneInterv["Tic_Num"] ; ?></td>
				</tr>
				<tr>
					<th> Date Demande </th>
					<td><?php echo modifierDate($uneInterv["Tic_DatCre"]) ; ?></td>
				</tr>
				<tr>
					<th>Salle </th>
					<td><?php echo $uneInterv["Tic_Salle"] ; ?></td>
				</tr>
				<tr>
					<th> Mat�riel</th>
					<td><?php echo $uneInterv["Tic_Materiel"] ; ?></td>
				</tr>
				<tr>
					<th> Etat</th>
					<td><?php echo $uneInterv["Eta_Libelle"] ; ?></td>
				</tr>
				<tr>
					<th>Constat </th>
					<td><?php echo $uneInterv["Tic_Constat"] ; ?></td>
				</tr>
				<tr>
			</table>
			</fieldset>
			<br></br>
			<fieldset>
			<legend> Modifier l'intervention </legend>
			<br></br>
					<td><th>Descriptif T�ches</th></td>
					<br></br>
			<table>
					<td><textarea id="txt_taches" name="txt_taches" cols="70" rows="10"  maxlength="100" ></textarea></td>
				</tr>
					<select id="lst_Etat" name="lst_Etat" >
				<tr>		
				<br></br>
					<td colspan="2"><center>
						<input type="submit" id="cmd_modifier" name="cmd_modifier" value="Modifier">
						<input type="reset" id="cmd_annuler" name="cmd_annuler" value="Annuler">
						<option value=" <?php echo $unEtat["Eta_Code"] . "  -  " . $unEtat["Eta_Libelle"] ; ?> </option>
					</center></td>
				</tr>
			</table>
		</form>
	</fieldset>