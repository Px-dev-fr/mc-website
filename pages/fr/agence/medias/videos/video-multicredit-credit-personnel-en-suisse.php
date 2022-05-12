<?php
$h1="Vidéo - Le spécialiste du crédit";
$link="/fr/credit/formulaire-demande-credit?pme=1";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Média - Vidéos</title>
<meta name="description" content="Découvrez notre vidéo promotionnelle Multicrédit - Le spécialiste du crédit en Suisse. Vous trouverez également des liens vers nos autres médias."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Vidéo promotionnelle pour notre service de crédit en Suisse. Avec Multicrédit, vous avez la possibilité d'effectuer votre demande de crédit en ligne pour tout montant de 3'000 à 300'000 Chf.</p>
		<p>Recevez une offre gratuite et sans engagement quel que soit votre projet.</p>
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/JGXRZ7Ye3tU" frameborder="0" allowfullscreen></iframe>
		<p>Vous souhaitez pouvoir bénéficier d'une <b>offre gratuite de crédit personnel</b>? Très simplement, vous pouvez compléter notre formulaire en ligne de manière sécurisée:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit?pme=1">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
