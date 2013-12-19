<?php	
	// r�cuperer les r�sultats des requ�tes
	require_once ("/FO/Modeles/Tickets/lireTicket.inc.php") ;

?>	
	<fieldset>	
		<legend> Cr�ation d'un ticket correspondant � un incident </legend>
		<form id="frm_ticket" action="?page=ajoutTck" method="post">		
			<table border ="1">
				<tr>
					<th> Date cr�ation   : </th>
					<td><label> <?php echo modifierDate($dDatJour) ; ?></label> </td>
				</tr>
				<tr>
					<th> Num�ro salle : </th>
					<td>
				
						<select name="lst_salle">
<?php		
							$lesSalles = getAllSalles() ;
							foreach ($lesSalles as $uneSalle)
							{
?>						
								<option> <?php echo $uneSalle["Sal_Num"]  ; ?> </option>
<?php 						
							}
?>
						</select>
					</td>
				</tr>
				<tr>
					<th> Mat�riel concern� : </th>
					<td>
				
						<select id="lst_mat" name="lst_mat">
<?php
							$lesMateriels   = getAllMateriels() ;
							foreach ($lesMateriels as $unMateriel)
							{
?>						
								<option value="<?php echo $unMateriel["Mat_Code"] ; ?>"> <?php echo $unMateriel["Mat_Code"] . " - ". $unMateriel["Mat_Libelle"] ;  ?> </option>
<?php 						
							}
?>
						</select>
					</td>
				</tr>
				<tr>	
					<th>Cat�gorie de probl�me : </th>
					<td>
						<select id="lst_categ" name="lst_categ" >				
<?php
		
							$lesCategories  = getAllCategories() ;
							foreach ($lesCategories as $uneCategorie)
							{	
?>	
								<option value="<?php echo $uneCategorie["Cat_Code"] ; ?>" > <?php echo $uneCategorie["Cat_Libelle"]; ?></option>
<?php					
							}	
?>	
						</select>
					</td>
				</tr>
				<tr>	
					<th> CONSTAT : </th>
					<td> <textarea id="txt_constat" name="txt_constat" rows="4" cols="30"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><center>
						<input type="submit" id="cmd_valider" name="cmd_valider" value="Valider">
						<input type="reset" id="cmd_annuler" name="cmd_annuler" value="Annuler">
					</center></td>
				</tr>
			</table>
		</form>
	</fieldset>