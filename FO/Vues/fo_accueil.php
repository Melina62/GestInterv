<?php
	$sFonction = $_SESSION["fonction"];
?>
	<br/><br/>
	SOCIETE TOUTISSUS
	<br/><br/><br/>
	Cet outil de gestion des interventions va vous permettre
	<br/><br/>
<?php
	if ($sFonction == "Demandeur")
	{
?>
		<ul>
			<li> de cr�er un ticket d�s qu'un probl�me a �t� d�tect�</li>
			<li> de suivre le traitement de vos tickets</li>
			<li> de suivre les interventions r�alis�es</li>
		</ul>
		<br/>
<?php
	}
	if ($sFonction == "Intervenant")
	{
?>
		<ul>
			<li> de cr�er un ticket d�s qu'un probl�me a �t� d�tect�</li>
			<li> de visualiser tous les tickets qui vous concerne</li>
			<li> de prendre en charge le ticket qui vous est affect�</li>
			<li> de visualiser tous les tickets (les votres et ceux qui vous ont �t� affect�s) par �tat</li>
			<li> de visualiser toutes vos interventions</li>
			<li> de visualiser une de vos interventions (en d�tail) </li>
			<li> de modifier une de vos interventions : son �tat, les t�ches effectu�es (sauf si le ticket est cl�tur�)</li>
			<li> de d�clarer qu'un ticket est r�solu ou sans solution</li>
			<li> de suivre les interventions r�alis�es</li>		
			<li> de visualiser toutes les interventions selon un probl�me s�lectionn�</li>
		</ul>
		<br/>
<?php
	}
	elseif ($sFonction == "Responsable")
	{
?>
		<ul>
			<li> de cr�er un ticket d�s qu'un probl�me a �t� d�tect�</li>
			<li> de visualiser tous les tickets (d�clar�s, affect�s, pris en charge, etc ...)</li>
			<li> d'affecter le ticket � un des intervenants</li>
			<li> de vous affecter le ticket si le ticket tarde � �tre pris en charge</li>
			<li> de visualiser toutes les interventions</li>
			<li> de visualiser une intervention (en d�tail) </li>
			<li> de modifier une intervention : son �tat, les t�ches effectu�es (sauf si le ticket est cl�tur�)</li>	
			<li> de visualiser tous les tickets et les interventions pour un intervenant qui a �t� s�lectionn�</li>			
			<li> de cl�turer un ticket dont le probl�me est r�solu </li>
			<li> de cr�er un utilisateur avec son r�le demandeur, intervenant ou responsable</li>
			<li> de supprimer un ou plusieurs utilisateurs </li>
		</ul>
		<br/>
<?php
	}
?>