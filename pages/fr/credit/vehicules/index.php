<?php
$h1="Financement de véhicule: nos solutions de prêts";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit véhicules: profitez d'un prêt adapté</title>
<meta name="description" content="Un crédit véhicule vous permettra de financer avantageusement l'achat de votre nouvelle voiture, moto, scooter, ... Profitez d'une offre au meilleur taux!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-vehicules";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous rêvez d'une nouvelle voiture? D'une moto d'occasion? D'acheter un voilier pour naviguer sur le Léman? Flexibles, nos solutions d'emprunt pour véhicules vous permettront de concrétiser vos projets de manière facile et avantageuse! Confiez votre dossier à un spécialiste et profitez d'une solution au meilleur taux!</p>
		<h2>Définissez les modalités de votre prêt</h2>
		<p>De quel montant avez-vous besoin? D'un projet à l'autre, les prix peuvent considérablement varier. De même, la capacité de remboursement ne sera pas la même d'une personne à l'autre. Pour cette raison, nous vous proposons de <b>définir vous-même les modalité de votre prêt véhicule</b>:</p>
		<ul>
			<li>Montant: de 3'000 à 300'000 Chf selon vos besoins</li>
			<li>Remboursement: sur 12 à 84 mois selon votre budget</li>
			<li>Mensualités: profitez de mensualités fixes et avantageuses et planifiez sereinement le paiement de vos factures</li>
		</ul>
		<h2>Demande gratuite et confidentielle</h2>
		<p>Chez Multicrédit, nous accordons une importance toute particulière à la sécurité des données de nos clients. Quelle que soit votre situation, nous vous garantissons un traitement 100% confidentiel de votre dossier. En outre, nous vous garantissons l'étude gratuite de votre dossier débouchant sur <b>une offre de prêt véhicule qui ne vous engage en rien</b>.</p>
		<h2>Confiez votre demande d'emprunt à un spécialiste</h2>
		<p>Plus de 20 ans d'expérience dans le domaine du financement ont su faire de nous des experts reconnus du domaine. N'hésitez pas à nous contacter et à nous confier votre dossier. Ensembles, nous trouverons la meilleure solution pour financer l'achat de votre futur véhicule.</p>

		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande gratuite</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
