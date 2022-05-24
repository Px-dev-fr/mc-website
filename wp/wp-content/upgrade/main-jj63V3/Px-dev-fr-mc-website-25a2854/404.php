<?php
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html>
<head>
<title>404 - File Not Found</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0" />
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div id="container">
		<h1>404...</h1>
		<div id="header">
			<?php $lang='fr';include('includes/meta.php');?>
		</div>
		<div id="menu">
			<?php include('includes/header.php');?>
		</div>
		
		<div id="mainContent" class="mainFull show">
			<div id="confirm" style="margin:30px auto;">
				<h3>Erreur 404</h3>
				<p style="text-align:center;">Fichier non trouvé
				<br/>Datei nicht gefunden
				<br/>File not found</p>
			</div>
			<h2>La page demandée n'a pas pu être trouvée...</h2>
			<p>Malheureusement, nous n'avons pas pu accéder à votre requête. Nous vous suggérons de vérifier l'adresse demandée ou de retourner sur la <a href="https://www.multicredit.ch">page principale de notre site</a>. Vous pouvez également consulter les différentes rubriques de notre site via le menu ci-dessus.</p>
			<h2>File not found...</h2>
			<p>Unfortunately, we have not been able to find the requested document. We suggest you check the requested address or return to the <a href="https://www.multicredit.ch/">main page of our website</a>. This website is also available in different languages. Do not hesitate to <b>change language using the top-right menu</b> in this page.</p>
			<p>
		</div>
	</div>
</body>
</html>