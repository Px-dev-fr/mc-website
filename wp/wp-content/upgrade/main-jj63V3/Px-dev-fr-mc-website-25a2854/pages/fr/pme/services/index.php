<?php
$h1="Service aux entreprises: découvrez nos produits!";
$link="/fr/pme/conseil";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Nos services aux entreprises et PME en Suisse</title>
<meta name="description" content="Crédit, leasing, factoring, hypothèques, assurances, découvrez nos services pour entreprises. Financez simplement vos liquidités grâce à nos solutions!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="services-entreprises-pme";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Multicrédit, c'est un spécialiste en services pour entreprises à votre disposition pour vous permettre de financer simplement votre besoin en liquidités! Crédits, leasing, factoring, hypothèque, assurances, profitez d'un service sur mesure pour votre PME! Actifs <b>depuis 1999</b> sur le marché, nous vous apportons les solutions dont vous avez besoin!</p>
		
		<h2>Nos services pour PME</h2>
		<p>Actifs aussi bien dans les nouveaux services pour PME comme le factoring que dans les solutions plus traditionnelles, nous souhaitons apporter à notre clientèle un conseil sur mesure débouchant sur des solutions avantageuses. N'hésitez pas à nous contacter quel que soit le besoin:</p>
		<ul>
			<li><b>Factoring / Affacturage</b>: financez votre croissance en bénéficiant d'une avance sur toute facture émise tout en sécurisant votre activité contre les pertes débiteurs.</li>
			<li><b>Leasing PME</b>: acquisition ou remplacement de tout bien de production lié à votre activité, ceci sans avoir à immobilier votre capital acquis.</li>
			<li><b>Crédit entreprise</b>: découvrez nos alternatives avec ou sans banques. Profitez d'un montant plus élevé tout en conservant votre relation bancaire intacte.</li>
			<li><b>Hypothèques commerciales</b>: vous cherchez à financer un bien immobilier? Local, bureaux, entrepôts, espaces industriels, nous vous aidons à obtenir une ligne de financement flexible et avantageuse!</li>
			<li><b>Assurances entreprises</b>: bénéficiez d'un contact sans engagement avec un spécialiste!</li>
		</ul>
		
		<h2>Contactez-nous</h2>
		<p>Vous souhaitez en savoir plus sur nos services pour PME? N'hésitez pas à nous solliciter pour bénéficier d'un contact simple, rapide et sans engagement avec un spécialiste!</p>
		
		
		<a class="bouton" href="/fr/pme/conseil">Demande de conseil</a>
	</div>
	<?php $subtitre="Découvrez nos solutions financières pour PME";include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
