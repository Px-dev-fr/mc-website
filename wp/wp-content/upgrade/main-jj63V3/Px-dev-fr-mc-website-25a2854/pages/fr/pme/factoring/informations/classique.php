<?php
$h1="Factoring classique ou traditionnel: financez votre business";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Affacturage classique: la garantie de liquidités régulières pour votre PME</title>
<meta name="description" content="Le factoring classique permet un financement immédiat de toute facture émise envers la clientèle. Financez votre activité et découvrez nos solutions!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="affacturage-classique";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Solution visant à améliorer les liquidités d'une entreprise, le factoring se présente en principe comme un pack <i>all included</i> qui comprend le pré-financement de factures, l'externalisation du recouvrement, et l'assurance-crédit. On parle alors <i>d'affacturage classique</i>, ou même de <i>factoring traditionnel</i>.</p>
		<h2>Fonctionnement de l'affacturage traditionnel</h2>
		<p>Cette technique de financement consiste à faire appel à un factor dont le rôle sera de pré-financer toute facture émise envers la clientèle, de contrôler les encaissements, et de gérer le recouvrement des créances échues. Cette technique de financement permet <b>un apport immédiat de liquidités</b> grâce au factor et permet entre autre:</p>
		<ul>
			<li>D'assurer à son entreprise <b>un encaissement rapide</b> pour toute facture émise</li>
			<li>De <b>négocier ses prix d'achats</b> avec ses fournisseurs, qui peuvent être payés plus rapidement (rabais fournisseur)</li>
			<li>De se concentrer sur son activité principale, <b>économisant du temps et de l'argent</b> autrement consacré au recouvrement</li>
			<li>De <b>se protéger contre le risque de défaut de paiement</b> des créanciers grâce à l'assurance-crédit</li>
			<li>Globalement, <b>d'améliorer son chiffre d'affaires de 10% - 15%!</b></li>
		</ul>
		<h2>Un exemple: financement de facture grâce au factoring traditionnel</h2>
		<p>Une entreprise active dans l'installation de sanitaires facture à une grande enseigne la livraison et l'installation de matériel. Le montant s'élève à <b>25'000 Chf, payable par facture à 90 jours</b>. Grâce à l'affacturage, l'entreprise bénéficie alors de liquidités immédiates. En effet:</p>
		<ul>
			<li>Le factor reçoit une copie de la facture et verse une avance de <?php echo cf("avance", 25000, 90);?> (soit 90% du montant facturé, moins le coût du service)</li>
			<li>Le solde de <?php echo cf("solde", 25000, 90);?> Chf est versé après le paiement du client (à 90 jours)</li>
			<li>L'entreprise touche un total de <?php echo cf("total", 25000, 90);?> Chf, la majorité étant versée dans les 24h, et bénéficie donc de liquidités sans avoir à attendre sur le paiement du client</li>
			<li>Le risque de retard ou défaut de paiement est entièrement pris en charge par le factor</li>
		</ul>

		<h2>Nos prestations</h2>
		<p>Actifs dans le conseil aux entreprises et dans les solutions spécifiques pour PME, nous pouvons vous aider à mettre en place une solution d'affacturage. Bénéficiez d'un entretien avec un spécialiste qui vous renseignera sur les différentes options qui s'offrent à vous et vous permettra de bénéficier d'une proposition aux meilleures conditions du marché.</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
