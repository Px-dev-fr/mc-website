<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit PME: un prêt au meilleur taux</title>
<meta name="Description" content="Un prêt chez Multicrédit vous permettra d'obtenir facilement et sans complications administratives le montant nécessaire pour financer votre entreprise."/>
<?php
$h1="Nos solutions de prêts pour PME";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1; $image="credit-pme";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>

		<p>Vous gérez une entreprise en tant que directeur, associé, gérant? Vous êtes indépendant, auto-entrepreneur? Chez Multicrédit, nous proposons également des solutions de financement pour sociétés sous la forme de <b>prêt PME</b> au meilleur taux. Confiez-nous votre dossier et bénéficier d'une offre sur mesure!</p>
		<h2>De nombreuses années d'expérience à votre service</h2>
		<p>Des années passées au service d'indépendants et d'entreprises de toutes tailles nous ont permis d'acquérir une solide expérience en matière de crédit pour entreprises. Vous cherchez une solution de crédit pour combler un manque de liquidités ou pour financer un projet? N'hésitez pas à nous contacter:</p>
		<ul>
			<li>Etude de votre dossier et comparaison des solutions du marché</li>
			<li>Prise en charge de la gestion administrative</li>
			<li>Négociation avec nos partenaires en vue d'obtenir un meilleur taux pour votre prêt</li>
			<li>Traitement rapide et confidentiel de votre demande</li>
		</ul>
		<h2>De quel montant avez-vous besoin?</h2>
		<p>Nos modalités flexibles s'adaptent aux besoin de chaque société. Ainsi, en choisissant notre agence comme partenaire pour votre prêt PME, vous définissez vous-même votre crédit:</p>
		<ul>
			<li><b>Montant</b>: dès 10'000 Chf et jusqu'à 10'000'000 Chf</li>
			<li><b>Durée</b>: de 12 à 84 mois, profitez d'un remboursement à court, moyen ou long terme</li>
		</ul>
		<h2>Rapide et sans complications</h2>
		<p>Spécialisés dans les services aussi bien pour les particuliers que les entrepreneurs, nous pouvons vous proposer un prêt assorti des meilleures conditions du marché. N'hésitez pas à nous contacter pour convenir d'un rendez-vous sans engagement avec notre spécialiste!</p>
		<a class="bouton" href="/fr/pme/credit/demande">Contact avec un spécialiste</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
