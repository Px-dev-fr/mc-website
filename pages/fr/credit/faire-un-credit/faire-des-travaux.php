<?php
$h1="Quel taux pour votre crédit travaux? Bénéficiez des meilleures conditions!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Travaux: le meilleur taux pour financer vos projets</title>
<meta name="description" content="Financez simplement les travaux à effectuer pour votre maison ou appartement. Rénovation, transformation, nous vous proposons un prêt au meilleur taux!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="taux-pret-travaux-meilleur-taux";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous avez des rénovations à effectuer dans votre maison? Des transformations de prévu dans votre appartement? Multicrédit vous aide à financer vos projets avec un crédit travaux au meilleur taux. Bénéficiez d'un financement flexible par un spécialiste!</p>
		<h2>Vos projets</h2>
		<p>Tout en vous garantissant le meilleur taux de prêt pour vos financer vos travaux, nous vous proposons également une solution flexible qui s'adapte à vos besoins et vos projets:</p>
		<ul>
			<li>Rénovation de maison ou appartement</li>
			<li>Travaux de transformation</li>
			<li>Construction ou amménagement</li>
		</ul>
		<h2>De 3'000.- à 300'000.- sur 12 à 84 mois</h2>
		<p>Forts de notre expérience en matière de financement, nous vous proposons <b>une solution flexible</b>. En effet, avec notre agence, c'est vous qui déterminez vos modalités d'emprunt. De notre côté, nous vous garantissons les meilleurs offres:</p>
		<ul>
			<li>Nous prenons en charge votre dossier</li>
			<li>Nous optimisons votre demande avant l'envoi aux banques</li>
			<li>Nous négocions avec nos partenaires bancaires pour vous garantir un crédit travaux au meilleur taux en Suisse</li>
			<li>Faites votre demande de manière gratuite et sans obligation pour recevoir une proposition sans engagement!</p>
		</ul>
		<h2>Votre demande</h2>
		<p>Vous souhaitez obtenir une proposition sous la forme d'un prêt travaux au meilleur taux de Suisse? N'hésitez pas à nous soumettre vos projets: nos spécialistes vous feront volontiers parvenir une proposition de financement privé dans les plus brefs délais, ceci de manière gratuite, confidentielle et sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Contact gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
