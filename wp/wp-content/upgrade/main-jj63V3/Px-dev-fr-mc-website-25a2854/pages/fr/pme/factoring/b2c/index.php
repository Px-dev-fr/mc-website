<?php
$h1="Affacturage B2C: proposez le paiement par factures à vos clients";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Factoring B2C: améliorez durablement votre chiffre d'affaires!</title>
<meta name="description" content="Avec l'affacturage B2C, vous proposez le paiement par factures en 1-3 tranches tout en encaissant les montants facturés sous 48h! Découvrez nos produits!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Alors que le factoring classique permet uniquement de financer les créances émises envers la clientèle commerciale (B2B), nous proposons également <b>une solution de factoring B2C</b> (<i>business-to-consumer</i>) qui permet à votre clientèle de régler leurs achats par tranches et vous assure un encaissement rapide. Vous cherchez à diversifier les moyens de paiement proposés à vos clients? A améliorer votre chiffre d'affaires? A sécuriser vos encaissements? Nous pouvons vous aider à mettre en place une solution sur mesure!</p>
		<h2>Payer en 1-3 tranches</h2>
		<p>Les études montrent que <b>70% de la clientèle préfère payer par factures lorsque c'est possible</b>. Le produit que nous proposons permet non seulement à vos clients de payer en 1 à 3 mensualités, mais vous garantit également un encaissement immédiat des montants facturés. En effet:</p>
		<ul>
			<li>Vous bénéficiez d'un système simple à intégrer permettant de facturer vos biens ou services de manière pratique et rapide</li>
			<li>Vos clients peuvent payer en 1 à 3 tranches (30 à 90 jours)</li>
			<li>De votre côté, vous recevez immédiatement les montants facturés (délai de 1-2 jours)</li>
			<li>L'ensemble des processus liés au contrôle des encaissements et relance clients est délégué à un tiers: vous pouvez vous concentrer sur votre activité</li>
			<li>Les créances sont assurées à hauteur de 5'000 Chf: vous n'avez rien à rembourser en cas de défaut de paiement</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Un magasin d'articles électroménagers <b>a récemment mis en place une solution d'affacturage B2C</b> et peut désormais proposer à sa clientèle de payer par factures. Un client achète une machine à laver d'une valeur de 3'000 Chf:</p>
		<ul>
			<li>Une facture de <?php echo cf("facture", 3000, 30, "b2c");?> Chf est automatiquement générée et envoyée au client (possibilité de payer en 1-3 mensualités)</li>
			<li>Le vendeur reçoit rapidement (1-2 jours maximum) un versement de <b><?php echo cf("avance", 3000, 90, "b2c");?> Chf</b></li>
			<li>Le coût du service s'élève à <b>seulement <?php echo cf("cout", 3000, 90, "b2c");?> Chf pour le vendeur</b> et <?php echo cf("client", 3000, 90, "b2c");?> Chf pour le client</li>
		</ul>
		<h2>Gain de 10% à 15% du CA grâce au à l'affacturage business to consumer</h2>
		<p>Outre l'aspect "pratique", proposer à sa clientèle de payer par mensualités permet bien souvent d'améliorer son chiffre d'affaire de 10% à 15% en moyenne. Vous souhaitez en savoir plus sur ce produit ou mettre en place le factoring B2C pour votre business? N'hésitez pas à nous contacter pour un conseil spécialisé débouchant sur la mise en place d'une solution spécifiquement adaptée à votre situation!</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
