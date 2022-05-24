<?php
$h1="Découvrez nos prêts à l'achat d'un véhicule de loisir";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Véhicules: financez tout véhicule de loisir à crédit</title>
<meta name="description" content="Un prêt chez Multicrédit permettra l'achat de tout véhicule de loisir. Sports nautiques, mobile-home, quad, ... profitez d'un financement sur mesure!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="vehicule-de-loisir";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous avez besoin de fonds pour financer l'achat d'un véhicule de loisir neuf ou d'occasion? Ne cherchez plus! Nous vous proposons un prêt flexible dont vous définissez les modalités! Confiez votre dossier à un spécialiste et profitez des meilleurs prix du marché!</p>
		<h2>Notre offre</h2>
		<p>Spécialisés dans le crédit privé depuis <b>plus de 15 ans déjà</b>, nous mettons notre expérience au service de notre clientèle en Suisse afin de pouvoir proposer des solutions adaptées à tout projet. Vous cherchez à acheter un véhicule de loisir? Véhicule neuf ou d'occasion, nous avons la solution:</p>
		<ul>
			<li>Bénéficiez d'une somme flexible allant de 3'000.- à 300'000.- et disposez librement du montant obtenu</li>
			<li>Remboursez votre emprunt sur une durée de 12 à 84 mois vous permettant de respecter votre budget</li>
			<li>Nous nous chargeons des démarches administratives et négocions votre dossier auprès de nos partenaires bancaires pour vous garantir un meilleur taux!</li>
		</ul>
		<h2>Pour tout projet</h2>
		<p>Un prêt véhicule de loisir permet de financer tout projet de manière flexible. Ainsi, n'hésitez pas à nous contacter si vous souhaitez financer par exemple:</p>
		<ul>
			<li>Un véhicule nautique: yacht, voilier, kayak, ...</li>
			<li>Un véhicule de vacances: mobile-home, caravane, ...</li>
			<li>Un véhicule de sport: quad, moto, tout-terrain,...</li>
			<li>Tout autre type de véhicule privé</li>
		</ul>
		<h2>Simple, rapide et confidentiel</h2>
		<p>Pourquoi attendre? Nos offres sont <b>gratuites et sans engagement</b>! Contactez-nous et bénéficiez d'une évaluation sur mesure débouchant sur une proposition en toute confidentialité pour le moment de votre choix.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
