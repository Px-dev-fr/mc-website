<?php
$h1="Besoin d'un conseil en crédit? Nos conseillers sont là pour vous!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Conseil sur mesure: un conseiller en crédit à votre disposition</title>
<meta name="description" content="Besoin d'un conseil pour un prêt? Nos conseillers sont à votre disposition. Demandez une offre sans engagement et économisez grâce à un meilleur taux!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="conseiller-en-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous hésitez à prendre un prêt personnel? Vous avez déjà un contrat en cours et souhaitez diminuer vos mensualités mais vous ignorez comment procéder? Confiez très simplement votre dossier à nos spécialistes et bénéficiez d'un conseil sur mesure pour votre emprunt en cours ou futur emprunt.</p>
		<h2>Les avantage d'un conseil chez Multicrédit</h2>
		<p>Choisir notre agence pour gérer votre dossier, c'est vous assurer des services d'un spécialiste <b>actif depuis plus de 15 ans</b> dans le domaine du prêt à la consommation. En confiant votre demande à notre conseiller, vous vous assurez:</p>
		<ul>
			<li>D'un entretien gratuit et confidentiel avec un expert</li>
			<li>D'une solution <b>centrée sur vos besoins</b> et <b>adaptée à votre budget</b>: profitez d'un emprunt de 3'000 à 300'000 Chf sur 12 à 84 mois</li>
			<li>De mensualités fixes pour votre prêt permettant une budgétisation claire sur la durée</li>
			<li>D'un taux plus avantageux qui vous permettra d'économiser sur vos intérêts</li>
			<li>D'une prise en charge globale et d'un suivi de votre dossier</li>
		</ul>
		<h2>Que pouvons-nous vous proposer?</h2>
		<p>Actifs dans le conseil en crédit et rachat de prêts, nous sommes là pour vous apporter notre savoir-faire quel que soit votre besoin:</p>
		<ul>
			<li>Emprunt personnel</li>
			<li>Rachat ou regroupement de vos engagements en cours (prêt privé, leasing ou solde de cartes Visa / Mastercard)</li>
			<li>Supplément d'argent</li>
			<li>Autres conseils et solutions financières selon les besoins</li>
		</ul>
		<h2>Un conseiller spécialisé à votre disposition</h2>
		<p>Vous avez un projet à concrétiser et cherchez à financer ce dernier? Vous avez une question? Vous cherchez à obtenir le meilleur prêt en confiant votre dossier à un spécialiste? N'hésitez pas à nous contacter: nous traiterons votre demande de manière rapide, gratuite et confidentielle.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Conseil gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
