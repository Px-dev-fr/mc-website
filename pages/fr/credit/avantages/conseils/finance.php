<?php
$h1="Besoin d'un conseil financier lié à un emprunt?";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Conseil en finance: crédit financier par un spécialiste</title>
<meta name="description" content="Besoin d'un conseil financier pour un prêt en cours ou envisagé? Confiez-nous votre dossier et bénéficier des meilleures solutions du marché!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="conseil-en-finance";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous souhaitez bénéficier d'un conseil en finance pour un prêt? Notre spécialiste sera ravi d'évaluer votre situation financière et de vous proposer une offre de prêt personnalisée. Bénéficiez simplement de tout montant de 3'000 à 300'000 Chf sur 12 à 84 mois.</p>
		<h2>Besoin d'un prêt personnel</h2>
		<p>Pratique, simple et rapide, tels sont les adjectifs qui s'appliquent à nos solutions de prêt. Confiez-nous votre projet et bénéficiez d'un conseil financier débouchant sur les meilleures solutions. Avec Multicrédit, vous bénéficiez:</p>
		<ul>
			<li>D'une offre personalisée et adaptée à votre situation personnelle</li>
			<li>D'un conseil en finance pour tout ce qui touche au prêt conso et rachat de prêt</li>
			<li>De la prise en charge de votre dossier de financement par un spécialiste</li>
		</ul>
		<h2>Le meilleur taux du marché</h2>
		<p>Financez votre projet au meilleur taux avec Multicrédit. Experts dans le domaine du prêt et du conseil en finance depuis plus de 15 ans, nos conseillers pourront vous convier à un entretien pour vous proposer:</p>
		<ul>
			<li>Une analyse gratuite de votre situation budgétaire</li>
			<li>Une somme d'argent allant de <b>3'000 à 300'000 Chf</b>, sous la forme d'un <b>crédit financier</b> utilisable sans justificatifs à donner</li>
			<li>Des mensualités de remboursement allégées étalées sur <b>84 mois maximum</b></li>
			<li>Un supplément d'argent pour réaliser de nouveaux projets si vous avez déjà un contrat en cours</li>
		</ul>
		<h2>Complétez notre formulaire!</h2>
		<p>Un conseil en finance vous interésse? Vous souhaitez demander un prêt? Tous nos conseillers sont à votre service pour vous accompagner tout au long de votre démarche. Complétez simplement notre formulaire en ligne et nous vous ferons une <b>offre gratuite et sans engagement</b> dans les plus brefs délais et de manière confidentielle.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
