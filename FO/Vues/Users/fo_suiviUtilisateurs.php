<?php
	$sLogin = $_SESSION["login"];	
	require_once ("/FO/Modeles/Users/lireUser.inc.php") ;
?>

	<br/>
	<fieldset>
		<legend> utilisateurs créés </legend>
		<br/>
		<form name="frm_utilisateurs" action="?page=suppUser" method="POST">
			<table border =1 width="100%" >
				<tr>
					<th width="15%" >Nom</th>
					<th width="15%">Prénom</th>
					<th width="15%">Login</th>
					<th width="15%">Fonction</th>				
					<th width="20%">Suppression</th>
				</tr>
<?php			
				$lesUsers  = getAllUsers() ;
				foreach ($lesUsers as $unUser)			
				{
?>	
					<tr>
						<td><?php echo $unUser["Uti_Nom"] ;  ?></td>
						<td><?php echo $unUser["Uti_Prenom"] ; ?></td>
						<td><?php echo $unUser["Uti_Login"] ; ?></td>
						<td><?php echo $unUser["Uti_Fonction"] ;?></td>	
						<td> <center> <input type="checkbox" name="suppr[]" value="<?php echo $unUser["Uti_Code"]; ;?> " /> </center></td>
						
					</tr>
<?php
				}
?>
				<tr>
					<td colspan="5" align="right" ><input type="submit" name="cmd_supp" value="Supprimer" onClick="
						if(confirm('Vous allez supprimer les utilisateurs sélectionnés?'))
						{	
							submit()
						}
						" />
					</td>
				</tr>
			</table>	
		</form>
	</fieldset>