<?php
$h1="Besoin d'une banque de prêt pour un emprunt?";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Banque de crédit: financez votre projet en Suisse</title>
<meta name="description" content="Vous cherchez une banque de crédit pour financer un projet? Découvrez nos offres flexibles de 3'000 à 300'000 Chf. Profitez d'un taux bas, demandez une offre."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous avez un besoin d'un emprunt pour concrétiser un projet? Confiez-nous votre dossier: nous négocions votre taux auprès de chaque banque de crédit pour vous proposer une offre aux meilleures conditions du marché.</p>
		<h2>Nos avantages</h2>
		<p>Actifs dans le domaine de la finance <b>depuis plus de 15 ans déjà</b>, nous faisons chaque jour notre maximum pour satisfaire nos clients et leur proposer des solutions qui leur convienne. Si vous recherchez une banque de prêt pour un emprunt, nous pourrons nous occuper de traiter votre demande, vous faisant ainsi bénéficier des avantages suivants:</p>
		<ul>
			<li>Vous pourrez librement <b>choisir le montant et la durée de votre prêt</b> (de 3'000 à 300'000 Chf sur une durée de 12 à 84 mois)</li>
			<li>Les démarches pour obtenir votre prêt <b>seront simplifées</b>: notre équipe se chargera à votre place de la plupart des démarches administratives</li>
			<li>Vous bénéficierez d'un <b>traitement rapide</b> de votre demande: recevez une proposition définitive déjà dans les 24h à 48h suivant la complétion de votre dossier, et votre argent <b>dans les 14 jours</b></li>
			<li>Taux d'intérêt <b>négocié au plus bas auprès des banques de crédit en Suisse</b> afin de vous garantir la meilleure offre possible</li>
		</ul>
		<h2>Conditions</h2>
		<p>Pour pouvoir faire un emprunt personnel auprès d'une banque de prêt, trois conditions de base doivent être validées:</p>
		<ul>
			<li>Travailler en Suisse depuis au moins trois mois</li>
			<li>Avoir un salaire minimum de 2'900 Chf / mois</li>
			<li>Ne pas avoir de poursuites ni actes de défaut de biens</li>
		</ul>
		<h2>Recevez une offre rapidement</h2>
		<p>Vous êtes intéressé? N'hésitez pas à compléter notre formulaire en ligne <b>en deux minutes seulement</b>. La démarche, <b>gratuite et confidentielle</b>, vous permettra de recevoir rapidement une offre de prêt adaptée à votre besoin et à votre budget de la part de notre équipe:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
