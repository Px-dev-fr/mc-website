<?php
$h1="Faire un crédit - La demande en ligne";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Vidéo - Faire un crédit - 1 - Demande en ligne</title>
<meta name="description" content="Via Multicrédit, vous effectuez votre demande de crédit en ligne très simplement afin de recevoir une offre gratuite. Découvrez notre vidéo de présentation."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Multicrédit vous propose d'effectuer très simplement votre demande de crédit en ligne. Notre vidéo vous présente brièvement notre formulaire et le fonctionnement de celui-ci!</p>
		<p>Effectuez votre demande en ligne en définissant vous-même les modalités du prêt et laissez-nous vos informations de contact afin que notre équipe vous rappelle pour une offre gratuite!</p>
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/r6sUS-kBwt4" frameborder="0" allowfullscreen></iframe>
		<p>Vous souhaitez en savoir plus? Vous envisagez de prendre un crédit? N'hésitez pas à compléter notre formulaire gratuit sans engagement dès maintenant:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
