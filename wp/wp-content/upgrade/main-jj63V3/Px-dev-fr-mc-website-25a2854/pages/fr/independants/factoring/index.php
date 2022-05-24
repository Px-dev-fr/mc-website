<?php
$h1="Factoring / Affacturage: améliorez votre marge de manoeuvre financière";
$link="/fr/independants/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Des liquidités sans attendre grâce au factoring pour indépendants</title>
<meta name="description" content="S'adressant également aux indépendants, le factoring vous permet d'encaisser les montants facturés sans attendre sur le paiement de votre clientèle!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="factoring-affacturage-pour-independants";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Votre clientèle est composée d'entreprises en Suisse ou à l'étranger? Grâce à l'affacturage, encaissez les montants facturés sous 24h - 48h tout en permettant à vos clients de payer à 30, 60 ou 90 jours. Profitez <b>de liquidités immédiates</b> et financez votre marge de manoeuvre!</p>
		
		<h2>Qu'est-ce que l'affacturage pour indépendants?</h2>
		<p>Le factoring, aujourd'hui adopté par plus d'une entreprise sur 5 en Allemagne, vise essentiellement à <b>éliminer le délai qui s'écoule entre facturation et encaissement</b>. Spécialisés dans les nouvelles techniques de financement, nous proposons ce service aux indépendants et auto-entrepreneurs établis en Suisse. Grâce aux prestations du factor:</p>
		<ul>
			<li>Vous bénéficiez d'un cashflow régulier en encaissant rapidement tout montant facturé.</li>
			<li>Vous n'avez pas à travailler en flux tendu.</li>
			<li>Votre nouvelle marge de manoeuvre financière vous permet de négocier d'éventuels rabais auprès de vos fournisseurs.</li>
			<li>Progégez votre business des conséquences d'un retard ou défaut de paiement!</li>
		</ul>
		
		<h2>Un exemple: financement d'une facture de 6'000 Chf</h2>
		<p>Un jardinier-paysagiste indépendant facture ses services à une entreprise. Le montant de la facture, payable à 30 jours, s'élève à <b>6'000 Chf</b>. Grâce à nos services, il bénéficie de liquidités immédiates :</p>
		<ul>
			<li>Le jardinier facture ses prestations normalement à l'entreprise. Seul le no de référence change, indiquant le factor comme bénéficiaire.</li>
			<li>Une copie de la facture est envoyée au factor. Ce dernier verse sous 1-2 jours seulement <b>une avance de <?php echo cf("avance",6000, 30);?> Chf</b>.</li>
			<li>Les liquidités immédiates permettent au jardinier de payer ses propres fournisseurs en temps et en heure.</li>
			<li>L'entreprise paye le factor à 30 jours. Ce dernier s'occupe du contrôle des encaissement et relance clientèle. Une fois le paiement reçu, il verse au jardinier-paysagiste le solde de <?php echo cf("solde", 6000, 30);?> Chf.</li>
			<li>Au final, l'indépendant touche <b><?php echo cf("total", 6000, 30);?> Chf</b>, qui correspond au montant facturé moins les frais du factor (<?php echo cf("cout", 6000,30);?>.-)</li>
		</ul>
		
		<h2>Ne plus travailler en flux tendu</h2>
		<p>Vous êtes indépendant? Vous souhaitez en savoir plus sur cette solution de financement de factures? Améliorez durablement votre chiffre d'affaires <b>de 10% à 15%</b> grâce à nos services! Contactez-nous pour bénéficier d'un conseil neutre par un spécialiste en Suisse!</p>
		
		<a class="bouton" href="/fr/independants/factoring/demande">Formulaire de demande</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
