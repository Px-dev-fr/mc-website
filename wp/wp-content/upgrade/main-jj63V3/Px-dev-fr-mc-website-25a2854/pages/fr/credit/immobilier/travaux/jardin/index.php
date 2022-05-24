<?php
$h1="Crédit pour l'aménagement de votre jardin";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Jardin: profitez d'un prêt adapté à vos projets</title>
<meta name="description" content="Financez simplement tout futur aménagement pour votre jardin grâce à un prêt flexible et avantageux. Offre gratuite et confidentielle de 3'000 à 300'000 Chf."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="amenagement-jardin";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous possédez une propriété et bénéficiez d'un terrain que vous souhaitez aménager? Avec un prêt aménagement de jardin, profitez d'une somme flexible que vous utilisez selon vos besoins. Confiez-nous votre dossier et bénéficiez des meilleurs taux du marché!</p>
		<h2>Vos projets</h2>
		<p>Chez Multicrédit, nous aimons à penser qu'il existe autant de projets d'aménagements de jardins que de clients! Pour cette raison, nous proposons systématiquement <b>des solutions sur mesure</b> qui s'adaptent aux besoins de chacun. Ainsi, choisir notre agence vour permet d'obtenir simplement et rapidement tout montant de 3'000 à 300'000 Chf sur une durée de 12 à 84 mois quel que soit le besoin:</p>
		<ul>
			<li>Construction d'une piscine</li>
			<li>Achat d'une véranda</li>
			<li>Transformations ou constructions sur votre terrain</li>
			<li>Installation d'une clôture ou d'un portail d'entrée</li>
			<li>Construction d'un garage pour votre ou vos véhicules</li>
			<li>Etc.</li>
		</ul>
		<h2>Profitez de conditions plus avantageuses</h2>
		<p>Actifs dans le domaine du prêt immobilier <b>depuis plus de 15 ans déjà</b>, nous pouvons vous aider à réaliser vos envies aux meilleures conditions du marché. En effet, nous négocions directement avec nos partenaires bancaires chaque contrat de prêt afin d'assurer à notre clientèle le taux le plus bas du marché. Vous souhaitez vous en convaincre? N'hésitez pas à nous contacter pour bénéficier d'une proposition sans engagement et comparez les offres!</p>
		<h2>Votre demande en ligne</h2>
		<p>Confiez-nous vos projets d'aménagement de jardin: nous finançons vos travaux de manière simple, rapide et efficace. Contactez-nous pour en savoir plus!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
