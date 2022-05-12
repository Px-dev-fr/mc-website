<?php
$h1="Crédit à l'achat de quad ou véhicule tout-terrain";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Quad: nous finançons votre véhicule de sport</title>
<meta name="description" content="Vous rêvez d'un quad tout-terrain pour vos loisirs? Nous vous aidons à financer votre achat avec un prêt flexible et avantageux. Offre gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-achat-de-quad";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Un prêt chez Multicrédit peut également vous aider à financer l'achat d'un quad ou l'achat d'un véhicule tout-terrain! Confiez-nous votre projet, bénéficiez d'une solution sur mesure de 3'000.- à 300'000.- grâce à nos spécialites.</p>
		<h2>Quel est le coût d'un véhicule tout-terrain?</h2>
		<p>En Suisse, le prix d'un véhicule tout-terrain de type <i>quad</i> varie d'environ 5'000.- neuf à près de 20'000.-, parfois plus. D'occasion, le coût dépendra de l'état du véhicule de seconde main et de la négociation avec l'acheteur, mais il est rare de trouver de réelles opportunités à moins de 3'000.-</p>
		<h2>Pourquoi un crédit quad?</h2>
		<p>Financer l'acquisition du véhicule avec un prêt privé est une solution flexible qui sait s'adapter à votre budget comme à vos besoins. Ainsi, en choisissant notre agence:</p>
		<ul>
			<li>Vous pouvez librement définir les modalités de l'emprunt, de 3'000 à 300'000.- sur 12 à 84 mois</li>
			<li>Nous nous chargeons du dossier et des démarches administratives afin de vous garantir de meilleures offres ainsi qu'une meilleur chance d'acceptation auprès de sbanques</li>
			<li><b>Le traitement dossier est toujours gratuit et confidentiel!</b></li>
		</ul>
		<h2>Contactez-nous pour financer l'achat de votre nouveau véhicule tout-terrain</h2>
		<p>Vous souhaitez faire l'acquisition d'un quad ou d'un véhicule similaire! Notre équipe répondra volontiers à vos attentes avec une proposition sans engagement dans les plus brefs délais pour le montant de votre choix!</p>

		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
