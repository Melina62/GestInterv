<?php
	$sLogin = $_SESSION["login"];	
	require_once ("FO/Modeles/Interventions/lireintervention.inc.php") ;
?>
	<br/>
	<fieldset>
		<legend>Interventions r�alis�s</legend>
		<br/>
		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Num </th>
				<th width="13%">d�but</th>
				<th width="5%" >Ticket</th>
				<th width="13%">Demand�</th>
				<th width="13%">Salle</th>
				<th width="13%">Mat�riel</th>
				<th width="20%">Probl�me</th>
				<th width="20%">Choix</th>
			</tr>
<?php			
			$lesIntervs  = getAllInterv($sLogin, 6) ;
			foreach ($lesIntervs as $uneInterv)			
			{
?>	
				<tr>
					<td><?php echo $uneInterv["Int_Num"] ;  ?></td>
					<td><?php echo modifierDate($uneInterv["Int_Debut"]); ?></td>
					<td><?php echo $uneInterv["Tic_Num"] ;  ?></td>
					<td><?php echo modifierDate($uneInterv["Tic_DatCre"]); ?></td>
					<td><?php echo $uneInterv["Tic_Salle"] ; ?></td>
					<td><?php echo $uneInterv["Tic_Materiel"] ; ?></td>
					<td><?php echo $uneInterv["Cat_Libelle"] ;?></td>	
					<td><a href="?page=modifier&num=<?php echo $uneInterv['Int_Num']; ?>"> Visualiser </a></td>	
					
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>
	<br/><br/>
	