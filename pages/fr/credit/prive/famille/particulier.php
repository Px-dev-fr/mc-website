<?php
$h1="Profitez d'un crédit individuel centré sur vos besoins!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Prêt particulier: nos crédits individuels avantageux</title>
<meta name="description" content="Financez tout projet individuel avec un crédit pour particulier de 3'000 à 300'000 Chf. Demandez une offre au meilleur taux par un spécialiste en Suisse!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pret-particulier-individuel";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous cherchez à obtenir un <b>prêt personnel particulier</b>? Profitez d'une solution axée sur vos besoins spécifiques et empruntez librement de 3'000 à 300'000 Chf avec un crédit individuel sur 12 à 84 mois.</p>
		<h2>Des conditions flexibles qui s'adaptent à tout projet</h2>
		<p>Notre succès repose à la fois sur une expérience forte de nombreuses années dans le métier qu'une stratégie orientée <b>vers les besoins de notre clientèle</b>. Ainsi, nous avons à coeur de propose à chaque client une solution d'emprunt flexible et surtout adaptée à sa situation:</p>
		<ul>
			<li>Montant et durée flexible: définissez les modalités de votre crédit individuel!</li>
			<li>Libre utilisation de la somme obtenue: une fois votre argent obtenu, vous l'utilisez librement sans justification</li>
			<li>Suivi du dossier: souhaitez-vous pouvoir bénéficier d'une baisse de taux? D'un supplément d'argent? Nous restons à votre disposition!</li>
		</ul>
		<h2>Besoin d'un prêt particulier urgent?</h2>
		<p>Effectuez votre demande en ligne de manière simple, rapide et confidentielle pour bénéficier d'une offre <b>dans les plus brefs délais</b>. Nous prenons en charge votre dossier pour simplifier les démarches:</p>
		<ul>
			<li>Faites votre demande en ligne en deux minutes seulement</li>
			<li>L'étude de votre dossier, rapide et gratuite, débouche sur une proposition de prêt personnel particulier qui ne vous engage à rien</li>
		</ul>
		<h2>Nos spécialistes sont à votre écoute</h2>
		<p>Envie d'acheter une nouvelle voiture? De rénover un appartement? De réaliser un projet qui vous tient à coeur? Rien de plus simple: contactez-nous pour bénéficier d'une solution individualisée dans les meilleurs délais!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
