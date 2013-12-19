	<div id="infoCnx">
<?php
		$login     = $_SESSION["login"];  
		$sFonction = $_SESSION["fonction"];  
		echo  $login . "<br/>" ;
		echo  $sFonction ;
?>
		<br/>
		<a href="?page=deconnexion"><img src="images/deconnnecter.png" alt="Se déconnecter"</a>
	</div>
