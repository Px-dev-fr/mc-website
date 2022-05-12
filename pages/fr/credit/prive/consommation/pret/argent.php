<?php
$h1="Crédit d'argent urgent: confiez-nous votre projet";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Prêt d'argent: besoin d'un crédit urgent?</title>
<meta name="description" content="Vous souhaitez obtenir un prêt d'argent urgent pour palier à un manque de liquidités ou financer un projet? Confiez-nous votre projet. Offre gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pret-argent";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Qu'il s'agisse de payer une facture, de se faire plaisir ou encore d'effectuer des travaux dans sa maison, un <b>emprunt d'argent</b> peut s'avérer la solution de financement idéale. Spécialisés dans le crédit depuis plus de 15 ans, nous pouvons vous proposer des solutions flexibles qui s'adaptent à vos besoins.</p>
		<h2>Besoin d'un prêt d'argent urgent?</h2>
		<p>En choisissant Multicrédit comme partenaire pour financer vos projets, vous choisissez une société de renom et bénéficierez d'une solution flexible et adaptée. Découvrez nos prestations en un coup d'oeil:</p>
		<ul>
			<li>Choisissez librement le montant à emprunter selon vos besoins, dès 3'000 Chf et <b>jusqu'à 300'000 Chf</b>!</li>
			<li>En fonction de votre budget, nous définirons ensembles une durée de remboursement. Notre flexibilité vous permettra ainsi de choisir un remboursement sur une durée allant de 12 à 84 mois.</li>
			<li>Des mensualités fixes vous permettent de planifier sereinement le remboursement de l'emprunt.</li>
			<li><b>Confidentialité</b>: nul besoin de justifier la raison de l'emprunt: achat d'une piscine, rénovation de maison ou toute autre raison!</li>
		</ul>
		<h2>Nos avantages</h2>
		<p>Quel que soit votre besoin, nous pourrons trouver une solution adaptée. Chez Multicrédit, vous pourrez nous soumettre vottre dossier de manière <b>gratuite et confidentielle</b>. En choisissant notre société, vous vous assurez:</p>
		<ul>
			<li>D'une assurance qui couvrira le remboursement de votre emprunt d'argent en cas de maladie, accident, décès.</li>
			<li>De la possibilité de bénéficier du montant emprunté <b>selon votre convenance</b> (vous n'avez pas à justifier les raisons de votre prêt).</li>
			<li>D'une prise en charge globale de votre dossier par un spécialiste</li>
		</ul>
		<h2>Simplicité, rapidité, confidentialité</h2>
		<p>Vous êtes intéressé? N'hésitez pas à demander, via notre formulaire en ligne, une <b>offre gratuite, confidentielle et sans engagement</b>. Notre équipe vous répondra le plus rapidement possible pour vous proposer une offre adaptée à votre situation.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
