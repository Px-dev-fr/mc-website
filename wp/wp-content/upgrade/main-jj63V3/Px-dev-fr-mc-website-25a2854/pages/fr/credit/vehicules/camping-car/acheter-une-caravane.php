<?php
$h1="Crédit caravane: financez votre achat avec un emprunt avantageux";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Caravane: besoin d'un prêt pour concrétiser un achat?</title>
<meta name="description" content="Financez l'achat de votre caravane avec un crédit flexible. Confiez-nous votre projet et bénéficiez des meilleures modalités du marché! Offre gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-caravane";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous envisagez <b>d'acheter une caravane prochainement</b>? Si vous cherchez une solution pour financer votre acquisition, nous pouvons vous proposer un prêt flexible avec un taux négocié au plus bas auprès de nos partenaires. Contactez-nous pour en savoir plus et bénéficiez d'une offre sans engagement.</p>
		<h2>Une solution flexible pour tout véhicule neuf ou d'occasion</h2>
		<p>Un prêt caravane permet de financer aussi bien l'achat d'une <b>caravane neuve</b> que d'une <b>caravane d'occasion</b>. En effet, grâce à nos offres flexibles:</p>
		<ul>
			<li>C'est vous qui déterminez le montant nécessaire pour réaliser votre achat</li>
			<li>Vous décidez également de la durée de remboursement du prêt, entre 12 et 84 mois</li>
		</ul>
		<h2>Nous prenons en charge votre dossier</h2>
		<p>Bénéficiez de l'expérience d'un spécialiste et confiez-nous votre dossier de demande de financement de caravane. Avec plus de 15 années de pratique en Suisse et de nombreux clients satisfaits, nous pouvons vous proposer:</p>
		<ul>
			<li>La prise en charge globale de votre dossier</li>
			<li>Une offre individualisée qui correspond précisément à votre besoin</li>
			<li>Un traitement rapide, gratuit et confidentiel par un conseiller spécialisé</li>
		</ul>
		<h2>Une liberté totale</h2>
		<p>Un prêt vous permettra de choisir librement la marque ou le modèle de véhicule de même que le concessionnaire. Une fois l'argent du crédit sur votre compte bancaire, vous l'utilisez selon vos besoins, sans justificatifs à fournir! Vous souhaitez obtenir une offre? Contactez-nous!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
