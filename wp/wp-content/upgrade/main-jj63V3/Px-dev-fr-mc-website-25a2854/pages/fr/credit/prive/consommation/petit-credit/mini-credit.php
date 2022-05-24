<?php
$h1="Minicrédit: besoin d'une rallonge pour votre budget?";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Mini-crédit: emprunt flexible dès 2'000 Chf au meilleur taux</title>
<meta name="description" content="Confiez-nous votre besoin en liquidités et bénéficiez d'une offre sur mesure au meilleur taux du marché! Proposition gratuite, mensualités fixes."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="mini-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		
		<p>Vous cherchez à emprunter un petit montant sous la forme d'un prêt à la consommation? Un mini-crédit chez Multicrédit vous permettra d'obtenir tout montant <b>dès 2'000 Chf</b>. Profitez d'un remboursement sur 12 - 84 mois, de mensualités fixes, et économisez grâce à un meilleur taux!</p>
		
		<h2>Nos services</h2>
		<p>Actifs <b>depuis 1999</b> sur le marché de l'emprunt, nous proposons à notre clientèle des mini-crédits particulièrement avantageux grâce entre autre:</p>
		<ul>
			<li>A un taux d'intérêt très avantageux</li>
			<li>A la possibilité d'effectuer le remboursement à court, moyen ou long terme</li>
			<li>A la prise en charge globale de votre dossier afin d'accélérer les démarches et d'obtenir pour nos clients les meilleures offres possibles</li>
		</ul>
		
		<h2>Simplicité, rapidité, confidentialité</h2>
		<p>Vous êtes Suisse ou étranger? Vous disposez d'un revenu régulier en Suisse? N'hésitez pas à nous contacter afin de bénéficier d'un mini crédit. En passant par notre agence, vous vous assurez:</p>
		<ul>
			<li>D'un traitement gratuit et confidentiel de votre dossier</li>
			<li>D'obtenir une proposition sans engagement de manière simple et rapide</li>
			<li>De profiter des conseils neutres d'un spécialiste à votre écoute</li>
		</ul>
		
		<h2>Besoin d'un mini-crédit privé?</h2>
		<p>A titre indicatif, un mini crédit de 3'000 Chf sur 12 mois ne coûtera que 109.- (pour un taux de 6.9%). Notre équipe est volontiers à votre disposition pour vous renseigner ou vous proposer une offre individualisée et sans engagement.</p>
		
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
