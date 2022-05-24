<?php
$h1="Un crédit pour couvrir le prix de votre side car";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Side-car: nos solutions pour financer votre achat</title>
<meta name="description" content="Financez simplement l'achat d'un side-car neuf ou d'occasion grâce à Multicrédit! Découvrez nos offres de prêts dès 3'000.- Analyse gratuite de votre dossier."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="side-car";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous rêvez d'emmener la personne que vous aimez en side-car ou d'écumer les routes en compagnie d'un ami? Nos solutions de prêt s'adaptent à vous besoins et vous permetter d'acheter un side car sans complications. Profitez d'un crédit au meilleur taux proposé par un spécialiste en Suisse!</p>
		<h2>Quel est le prix d'un side-car?</h2>
		<p>Le prix d'un tel véhicule peut varier considérablement d'un modèle à l'autre ainsi qu'en fonction de l'état du véhicule. Ainsi:</p>
		<ul>
			<li>Le coût d'un side-car neuf débute à environ 15'000 Chf</li>
			<li>Le coût d'un side-car d'occasion dépendra bien entendu du véhicule, mais en principe pas en-dessous de 7'000 Chf</li>
		</ul>
		<h2>Financer votre projet avec un crédit véhicule</h2>
		<p>Le principe d'un achat à crédit est de faire un emprunt personnel auprès d'une banque ou d'une agence, et d'utiliser le montant obtenu pour selon vos envies et besoins. En choisissant Multicrédit pour votre emprunt:</p>
		<ul>
			<li>Vous bénéficiez d'une somme d'argent flexible de 3'000.- à 300'000.- utilisable selon vos besoins</li>
			<li>Vous remboursez l'emprunt à votre propre rythme sur 12 à 84 mois</li>
			<li>Vous bénéficiez de mensualités de remboursementfixes négociées aux meilleurs taux auprès de nos partenaires</li>
			<li>Vous vous facilitez la vie: nous prenons en effet à charge les différentes étapes administratives pour l'obtention d'un prêt</li>
		</ul>
		<h2>Demandez une offre</h2>
		<p>Confiez-nous le financement de votre side car et laissez-nous vous aider à donner vie à votre projet! De manière simple, rapide et confidentielle, notre équipe vous proposera une solution adaptée aussi bien à votre projet qu'à votre budget!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
