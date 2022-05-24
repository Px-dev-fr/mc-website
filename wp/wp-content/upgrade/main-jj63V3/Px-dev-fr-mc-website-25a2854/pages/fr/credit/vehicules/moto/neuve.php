<?php
$h1="Acheter une moto neuve avec un crédit qui s'adapte à vos besoins";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Moto neuve: financez votre achat en toute simplicité</title>
<meta name="description" content="Multicrédit vous aide à financer l'achat d'une moto neuve avec un crédit qui s'adapte à vos besoins et votre situation. Offre gratuite par un spécialiste."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="achat-moto-neuve";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous souhaitez vous faire plaisir avec l'acquisition d'un nouveau véhicule? Nous pouvons vous aider à concrétiser votre projet avec un prêt qui s'adapte à votre situation comme à votre besoin. Demandez une offre et profitez des meilleurs taux du marché!</p>
		<h2>Pourquoi Multicrédit?</h2>
		<p>Le prix d'une moto neuve peut varier considérablement en fonction de la marque et du modèle. Ainsi, si les modèles d'entrées de gamme coûtent rarement en-dessous de 15'000.-, les prix peuvent vite augmenter pour des modèles ou marques de prestige. Grâce à notre agence:</p>
		<ul>
			<li>C'est vous qui déterminez le montant nécessaire pour votre projet</li>
			<li>C'est également vous qui choisissez la durée de remboursement, de 12 à 84 mois, en fonction de vos préférences et votre budget</li>
			<li>Nous nous occupons du reste! Bénéficiez d'une offre sans engagement et d'un taux d'intérêt négocié auprès des banques!</li>
		</ul>
		<h2>Utilisez votre argent comme vous l'entendez</h2>
		<p>Au contraire d'un leasing, un crédit destiné à l'achat d'une moto neuve vous offre une liberté totale sur votre acquisition:</p>
		<ul>
			<li>Libre choix de la marque et du modèle</li>
			<li>Financement total ou partiel de votre bien, si par exemple vous disposez déjà d'économies</li>
			<li>Choisissez une casco partielle ou totale selon vos préférences</li>
			<li>Aucune limite de kilométrage: le véhicule vous appartient!</li>
		</ul>
		<h2>Obtenez une offre confidentielle de manière simple et rapide</h2>
		<p>Vous souhaitez vous offrir une moto neuve prochainement? Vous avez déjà choisi le modèle, il ne vous manque plus que les fonds nécessaires? Confiez-nous votre projet et disposez rapidement de la somme nécessaire pour concrétiser ce dernier! Nous vous garantissons une offre rapide et confidentielle dans les plus brefs délais!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande en ligne</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
