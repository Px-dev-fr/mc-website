<?php
$h1="Faire un crédit - Les étapes";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Vidéos</title>
<meta name="description" content="Découvrez en vidéo les étapes nécessaires pour votre demande de crédit chez Multicrédit! Notre vidéo vous montre comment obtenir votre prêt en 4 étapes!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>De nombreux clients se demandent quelles sont les étapes nécessaires pour obtenir un prêt en Suisse. Avec Multicrédit, chacun peut obtenir son argent en 4 étapes seulement.</p>
		<p>Notre vidéo promotionnelle vous propose de découvrir en vidéo comment obtenir un crédit très simplement chez Multicrédit!
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/uU5Gv2qfQGc" frameborder="0" allowfullscreen></iframe>
		<p>Vous souhaitez en savoir plus? Vous envisagez de prendre un crédit? N'hésitez pas à compléter notre formulaire gratuit sans engagement dès maintenant:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
