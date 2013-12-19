<?php
	session_start() ;
	$page =@$_GET["page"] ;
	
?>

<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Messagerie PHP - utilisation classe - test</title>
		<link rel="stylesheet" media="screen" type="text/css" title="style" href="" />
		<script type="text/javascript" src="fonctionsAjax.js"></script>  
	</head>
	<body >
		<header>

		</header>

		<article>
<?php
			switch($page) {
				//case ""  : $fichier = ""  ; break ;
					
				default: $fichier = "fo_IntervProblemes.php" ;
			}
			require($fichier) ;
?>
		</article>

		<footer>

		</footer>
	</body>
</html>
