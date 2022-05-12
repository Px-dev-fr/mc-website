<?php
$h1="Solution de paiement: proposez à vos clients de payer par facture!";
$link="/fr/independants/paiement/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('includes/meta.php');?>
<title>Paiement par facture pour votre clientèle</title>
<meta name="description" content="Améliorez vos ventes de 10% à 15% en proposant à votre clientèle de payer par factures en 1-3 mensualités. Intégration facile à votre business."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="paiement-facture-client";include('includes/img.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Vous souhaitez offrir à vos clients la possibilité de régler leurs achats par factures? Nous vous proposons une solution facile à intégrer qui vous permettra de <b>proposer le paiement par factures</b> en 1, 2 ou 3 tranches. Côté vendeur, chaque facture est pré-financée et vous permet donc d'encaisser des liquidités sans attendre!</p>
		
		<h2>70% des clients préfèrent payer par factures lorsque c'est possible</h2>
		<p>Assurez-vous d'entrées régulières en liquidités tout en améliorant votre chiffre d'affaires <b>de 10% à 15%</b>! Avec ce produit, aussi bien votre clientèle que vous-même bénéficiez de nombreux avantages:</p>
		<ul>
			<li>Vos clients peuvent choisir de régler leurs achats par factures en 1, 2 ou 3 mensualités. Ce choix, pratique côté client, vous permet d'augmenter vos ventes de 10% à 15%.</li>
			<li>Dès qu'une facture est émise, vous encaissez l'ensemble du montant sous 24h - 48h, sans avoir à attendre sur le versement du client.</li>
			<li>Vous n'avez plus à vous soucier de tout retard ou défaut de paiement éventuel. Non seulement vous économisez du temps, mais vous évitez toute perte lié à des impayés!</li>
			<li>Vous conservez intacte la relation entretenue avec vos clients.</li>
		</ul>
	
		<h2>Un exemple</h2>
		<p>Grâce à nos conseils, un indépendant qui gère une boutique d'articles de sport en ligne (e-commerce) propose désormais à ses clients de payer par facture. Un client souhaite faire <b>l'acquisition d'un article valant 750 Chf</b> (frais d'envoi compris) et décide de payer par facture:</p>
		<ul>
			<li>Une facture de <b><?php echo cf("facture", 750, 30, "b2c");?></b> Chf est automatiquement générée et envoyée au client (750 Chf + <?php echo cf("client", 750, 30, "b2c");?> Chf de frais).</li>
			<li>Le vendeur reçoit rapidement (1-2 jours maximum) un versement de <b><?php echo cf("avance", 750, 30, "b2c");?> Chf</b> (750 Chf - <?php echo cf("cout", 750, 30, "b2c");?> Chf de frais).</li>
			<li>Le vendeur n'a pas à se soucier du contrôle des encaissements ni des rappels ou frais de poursuites en cas d'impayé.</li>
		</ul>
	
		
		<h2>Envie d'en savoir plus?</h2>
		<p>Vous êtes indépendant, vous gérez une agence, un magasin physique, un commerce en ligne? Proposez simplement à vos clients de payer par factures et dynamisez votre chiffre d'affaires grâce à cette solution de financement! Envie d'en savoir plus? Profitez d'un conseil neutre par un spécialiste en Suisse!</p>
		
		<a class="bouton" href="/fr/independants/paiement/demande">Demande online</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html> 
