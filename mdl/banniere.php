<table>
	<tr>
		<td width="20%">
			<img src="images/maintenance.jpg" alt="logo maintenance" />
		</td>
		<td width="55%">
			<div id="bandeau">
				Gestion des interventions
			</div>
		</td>
		<td width="25	%">
	
<?php
			//si un utilisateur est connecté
			if (isset($_SESSION["login"]))
			{										
				require("FO/VUES/fo_infoCnx.php");	
			}	
?>
		</td>
	</tr>
</table>