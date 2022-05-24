<?php
$h1="Quel est le prix de votre véhicule de marque? Financez le prix de votre achat!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Voiture de luxe: financez l'achat de votre véhicule de marque</title>
<meta name="description" content="Vous cherchez à financer l'achat d'une auto neuve? Découvrez nos solutions de prêts jusqu'à 300'000.- et profitez d'une offre sur mesure par un spécialiste!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="voiture-de-luxe";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Un crédit auto peut s'avérer une solution flexible et efficace pour financer <b>l'achat d'une automobile de luxe</b>. Véhicule de marque ou auto renommée, profitez d'une solution sur mesure qui s'adapte à votre projet comme à votre budget!</p>
		<h2>Quel est le prix de votre automobile de luxe?</h2>
		<p>Chez Multicrédit, nous pouvons vous proposer un prêt flexible allant <b>jusqu'à 300'000 Chf</b> et permettant ainsi de financer une vaste gamme de véhicules tels que:</p>
		<ul>
			<li>Voiture de luxe</li>
			<li>Auto de marque</li>
			<li>Automobile de sport</li>
			<li>Etc.</li>
		</ul>
		<h2>Simple, rapide et sécurisé</h2>
		<p>Faire appel à nos services, c'est avant tout profiter de l'expérience <b>d'un spécialiste du domaine</b> qui saura prendre en charge votre besoin pour vous faire profiter des meilleures opportunités du marché. En effet, chez Multicrédit:</p>
		<ul>
			<li>Nous nous engageons à prendre en charge votre dossier de A à Z de manière neutre et professionnelle</li>
			<li>Nous vous assurons un traitement rapide et confidentiel de vos données</li>
			<li>Nous négocions auprès de nos partenaires de meilleures offres afin de vous permettre d'économiser grâce à des taux plus avantageux!</li>
		</ul>
		<h2>Votre demande en ligne ou par téléphone</h2>
		<p>Vous cherchez à financer l'achat d'une automobile de luxe? Quel que soit le prix du véhicule, nous nous engageons à vous proposer une offre adaptée! Contactez-nous dès maintenant et bénéficiez d'une proposition gratuite et sans engagement dans les plus brefs délais!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
