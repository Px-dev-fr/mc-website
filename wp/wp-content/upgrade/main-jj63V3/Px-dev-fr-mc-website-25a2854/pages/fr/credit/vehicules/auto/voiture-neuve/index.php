<?php
$h1="Acheter une automobile neuve? Découvrez nos solutions de prêt";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Voiture neuve: financez votre achat à crédit</title>
<meta name="description" content="Vous cherchez à financer l'achat d'une auto neuve? Découvrez nos solutions de prêts jusqu'à 300'000.- et profitez d'une offre sur mesure par un spécialiste!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="voiture-neuve";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous envisagez d'acheter une nouvelle automobile? Grâce à notre agence, bénéficiez d'une solution sur mesure qui vous permettra d'obtenir de manière simple et rapide le financement nécessaire!</p>
		<h2>Votre dossier par un spécialiste</h2>
		<p>Actifs dans le financement personnel depuis plus de 15 ans, nous pouvons vous proposer un <b>crédit pour l'achat d'une auto neuve</b>. Confiez-nous votre projet et bénéficiez de l'expérience d'un spécialiste:</p>
		<ul>
			<li>Prise en charge des aspects administratifs de votre demande d'emprunt</li>
			<li>Optimisation de votre dossier et négociation auprès des banques</li>
			<li>Bénéficiez de mensualités fixes</li>
			<li>Profitez du meilleur taux d'intérêt pour votre prêt</li>
		</ul>
		<h2>Libre choix de la marque et du modèle </h2>
		<p>En optant pour notre solution de prêt pour auto neuve, vous vous assurez d'obtenir le montant nécessaire pour concrétiser votre projet. Une fois l'emprunt accepté, vous utilisez librement le montant pour acheter l'automobile de votre choix:</p>
		<ul>
			<li>Aucune restriction de marque</li>
			<li>Aucune restriction de modèle</li>
			<li>Vous effectuez l'achat auprès du concessionnaire de votre choix</li>
		</ul>
		<h2>Rapidité, simplicité, confidentialité</h2>
		<p>Faites-nous part de votre projet: nous vous aiderons à financer votre acquisition grâce à une <b>offre personnalisée</b>. Avec Multicrédit, vous bénéficiez d'une prise en charge rapide, gratuite et sans frais de dossier par un spécialiste en Suisse!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
