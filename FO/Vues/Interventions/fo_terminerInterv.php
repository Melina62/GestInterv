<?php
	$iNum = $_GET["num"] ;
	
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Interventions/lireIntervention.inc.php") ;
	$uneInterv  = getUneInterv($iNum) ;
?>
	<fieldset>
		<legend> Lire l'intervention </legend>
		<br/> <br/>
		<form name ="frm_intervention" action="?page=modifier" method="POST">
			<table border = 1>
				<tr>
					<th> Numéro intervention </th>
					<td><?php echo $uneInterv["Int_Num"] ; ?></td>
				</tr>
				<tr>
					<th> Date création </th>
					<td><?php echo modifierDate($uneInterv["Int_Debut"]) ; ?></td>
				</tr>
				<tr>
					<th> Numéro Ticket </th>
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
					<th> Matériel</th>
					<td><?php echo $uneInterv["Tic_Materiel"] ; ?></td>
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
			<legend> Terminer l'intervention </legend>
			<br>
			<table>
				<tr>
					<th>Etat : </th>
					<td><input type="radio" id="btn_resolu" name="btn_etat" value="6"/>Résolu
						<input type="radio" id="btn_non_resolu" name="btn_etat" value="7"/>Sans solution
					</td>
				</tr>
			</table>
			<input type="submit" id="valider" name="valider" value="Terminer"/>
			<input type="submit" id="annuler" name="annuler" value="Annuler"/>
		</form>
	</fieldset>