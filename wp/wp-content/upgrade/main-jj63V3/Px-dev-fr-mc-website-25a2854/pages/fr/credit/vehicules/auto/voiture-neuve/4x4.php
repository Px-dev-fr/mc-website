<?php
$h1="Acheter un 4X4: nos propositions de financement";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>4X4: un crédit pour financer l'achat de votre véhicule</title>
<meta name="description" content="Vous cherchez à faire l'acquisition d'un 4X4? Avec Multicrédit, profitez d'un prêt qui s'adapte à votre besoin tout en respectant votre budget! Offre gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-4x4";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous souhaitez acheter une voiture de sport, véhicule utilitaire, quad ou autre engin? Chez Multicrédit, nous pouvons vous proposer une solution adaptée qui vous permettra de financer simplement et rapidement tout modèle et toute marque de véhicule.</p>
		<h2>Confiez-nous votre projet!</h2>
		<p>Nos spécialistes sont à votre disposition pour vous renseigner! Bénéficiez d'une proposition gratuite et sans engagement pour tout montant <b>de 3'000 Chf à 300'000 Chf</b>. Choisissez la somme nécessaire pour votre achat de 4X4 ainsi que la durée de remboursement <b>sur 12 à 84 mois</b>. L'argent obtenu vous permettra de financer librement tout type de véhicule:</p>
		<ul>
			<li>Véhicule utilitaire destiné par exemple à tracter une remorque ou caravane</li>
			<li>Véhicule de sport ou de loisir</li>
			<li>Véhicule professionnel</li>
			<li>Etc.</li>
		</ul>
		<h2>Un professionel à votre service en toute simplicité</h2>
		<p>Chez Multicrédit, nous privilégions un contact simple et direct avec notre clientèle. Indiquez-nous le montant nécessaire pour <b>l'achat de votre 4x4</b>: nous nous chargeons de tout:</p>
		<ul>
			<li>Comparaison des offres proposées par les banques et négociation en vue d'obtenir un meilleur taux pour nos clients</li>
			<li>Prise en charge administrative des démarches pour l'obtention du prêt</li>
			<li>Gestion gratuite et confidentielle de votre dossier par un spécialiste en Suisse</li>
		</ul>
		<h2>Votre demande en quelques clics</h2>
		<p>Vous souhaitez en savoir plus ou bénéficier d'une proposition rapidement? N'hésitez pas à nous contacter pour bénéficier d'un financement de 4X4 à la hauteur de vos attentes!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
