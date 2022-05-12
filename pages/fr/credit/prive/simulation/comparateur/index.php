<?php
$h1="Besoin d'un comparateur de taux de crédit? Découvrez nos solutions";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Comparateur: comparez et économisez grâce à un prêt adapté</title>
<meta name="description" content="Multicrédit compare pour vous les différentes offres de prêt et vous aide à bénéficier d'un crédit au meilleur taux du marché! Proposition gratuite."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="comparateur-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>En Suisse, il existe de nombreux acteurs sur le marché du prêt privé. Pour vous aider à bénéficier des meilleures solutions possibles, Multicrédit se positionne comme un intermédiaire neutre à même de <b>comparer les taux de crédit</b> proposés par les différentes banques. Vous souhaitez obtenir de meilleures conditions de prêt? N'hésitez pas à nous confier votre dossier!</p>
		<h2>Comparateur de prêt: notre solution</h2>
		<p>Lorsque vous nous confiez votre dossier, vous vous assurez des services d'un spécialiste bénéficiant d'une expérience réussie dans la comparaison de prêts. En effet:</p>
		<ul>
			<li>Nous prenons en charge votre demande de manière rapide, ceci sans frais de dossier</li>
			<li>Nous analysons votre situation et comparons les différentes offres du marché</li>
			<li>Nous sélectionnons la meilleure banque pour votre futur emprunt et négocions encore à la baisse les conditions proposées</li>
			<li>Vous bénéficiez tout simplement de la meilleure offre sur le marché actuel!</li>
		</ul>
		<h2>Economisez sur vos futurs intérêts</h2>
		<p>Pour des montants ou des durées importants, une petite différence dans le taux d'intérêt proposé peut vite permettre d'économiser des sommes importantes sur la durée. Faire appel à Multicrédit pour votre besoin de comparateur de taux de crédit vous permet ainsi d'obtenir un meilleur taux et de réaliser des économies sur votre futur emprunt.</p>
		<h2>Besoin d'une proposition sans engagement?</h2>
		<p>Achat de véhicule, rénovation, prêt à la consommation, n'hésitez pas à nous solliciter pour profiter d'une solution flexible et adaptée à votre besoin. Vous pouvez effectuer votre demande en ligne de manière simple, rapide et confidentielle!</p>

		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Comparez nos solutions!</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
