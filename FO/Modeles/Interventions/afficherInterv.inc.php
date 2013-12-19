<?php

	header("Cache-Control: no-cache, must-revalidate");
	header("Content-Type: text/html; charset=ISO-8859-1");
	
	require_once("lireIntervention.inc.php");	

	if (isset($_POST["codeElt"]))
	{
		$iCodeCat = $_POST["codeElt"];
		
		$lesIntervs = getAllIntervProb($iCodeCat);
?>

		<table border =1 width="100%" >
			<tr>
				<th width="5%" >Numéro Ticket</th>
				<th width="13%">Date de début</th>
				<th width="5%" >Date de fin</th>
			</tr>
<?php			
			foreach ($lesIntervs as $uneInterv)			
			{
?>	
				<tr>
					<td><?php echo $uneInterv["Int_Ticket"] ;  ?></td>
					<td><?php echo $uneInterv["Int_Debut"] ;  ?></td>
					<td><?php echo $uneInterv["Int_Fin"] ; ?></td>	
						
				</tr>
<?php
			}
?>
		</table>
		
<?php
	}
	else
	{
		echo "aucune intervention" ;
	}	
?>