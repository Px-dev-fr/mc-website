<?php
$h1="Acheter un camping car neuf ou d'occasion avec un prêt privé";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Camping car: profitez d'un crédit pour votre achat</title>
<meta name="description" content="Financez aisément l'acquisition d'un camping car avec un emprunt flexible au meilleur taux du marché. Proposition gratuite par un spécialiste en Suisse."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="camping-car";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous rêvez d'écumer les routes au gré de vos envies? Nos solutions de prêts s'adaptent idéalement à tout projet d'achat de camping car neuf ou d'occasion. Définissez les modalités de votre prêt et laissez-nous nous charger des démarches administratives!</p>
		<h2>Découvrez notre solution</h2>
		<p>Multicrédit vous aide à obtenir le crédit camping car le moins cher du marché! Financez simplement votre projet. Caravane, van, mobile-home, nous nous adaptons à vos projets:</p>
		<ul>
			<li>Définissez le montant nécessaire avec un prêt de 3'000 à 300'000 Chf</li>
			<li>Choisissez une durée de remboursement comprise entre 12 et 84 mois</li>
			<li>Nous nous chargeons des démarches administratives</li>
			<li>Nous négocions pour vous un meilleur taux d'intérêt</li>
			<li>Vous profitez tout simplement d'une proposition aux meilleures conditions du marché</li>
		</ul>
		<h2>Le véhicule de votre choix</h2>
		<p>Au contraire d'un leasing, un emprunt personnel vous permet d'obtenir le montant nécessaire pour votre besoin et d'acheter votre véhicule de manière entièrement libre, sans justificatifs à fournir:</p>
		<ul>
			<li>Libre choix de la marque et du modèle du véhicule</li>
			<li>Libre choix du concessionnaire</li>
			<li>Libre choix du type d'assurance (casco partielle ou complète)</li>
		</ul>
		<h2>Proposition gratuite par un spécialiste</h2>
		<p>Avec plus de 15 ans d'activité dans le domaine du conseil en crédits privés, nous serions heureux de vous aider à réaliser votre projet d'achat! Contactez-nous par téléphone ou via notre formulaire sécurisé pour bénéficier d'une prise en charge gratuite de votre dossier débouchant sur une proposition sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande gratuite</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
