<?php
	$sLogin = $_SESSION["login"];	
	require_once ("inc/lireTicket.inc.php") ;
?>

	<br/>
	<fieldset>
		<legend> utilisateurs créés </legend>
		<br/>
		<table border =1 width="100%" >
			<tr>
				<th width="15%" >Nom</th>
				<th width="15%">Prénom</th>
				<th width="15%">Login</th>
				<th width="15%">Fonction</th>
				
				<th width="20%">Etat</th>
			</tr>
<?php			
			$lesUsers  = getAllUsers() ;
			foreach ($lesUsers as $unUser)			
			{
?>	
				<tr>
					<td><?php echo $unUser["Uti_Nom"] ;  ?></td>
					<td><?php echo $unUser["Uti_Prenom"] ; ?></td>
					<td><?php echo $unUser["Tic_Login"] ; ?></td>
					<td><?php echo $unUser["Tic_Fonction"] ;?></td>	
					
				</tr>
<?php
			}
?>
		</table>		
	</fieldset>