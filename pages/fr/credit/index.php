<?php
$h1="Le spécialiste du crédit à votre service: votre offre en toute simplicité";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Besoin d'une offre de crédit: votre prêt par un spécialiste</title>
<meta name="description" content="Confiez votre dossier au spécialiste du crédit et obtenez facilement une offre de prêt sans engagement pour tout montant de 3'000 à 300'000 Chf." />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="offres-de-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Chez Multicrédit, nous accordons une importance toute particulière à la situation de chaque client. Ainsi, nos offres de crédit s'adaptent aux besoins de chacun. Particuliers, indépendants, salariés, rentiers, nos spécialistes sont à votre disposition pour vous proposer des solutions sur mesure.</p>
		<h2>Faire un crédit en toute simplicité</h2>
		<p>Faire un crédit n'a jamais été aussi simple ni aussi avantageux! Confiez-nous votre dossier pour obtenir une offre de prêt sans complications administraitves. Nous prenons en effet en charge les démarches pour accélérer les procédures et vous communiquer une décision dans les plus brefs délais. Qu'il s'agisse de financer un achat, de palier à un manque de liquidités, de concrétiser un projet, nos offres de prêts s'adaptent à vos besoins!</p>
		<h2>Une solution flexible pour tout projet</h2>
		<p>De quel montant avez-vous besoin? Avec nos solutions, obtenez <b>une offre de prêt dont vous choisissez vous-même les modalités</b>. Ainsi, nos solutions flexibles permettent:</p>
		<ul>
			<li>D'obtenir tout montant dès 3'000 Chf et jusqu'à 300'000 Chf (en fonction de votre situation)</li>
			<li>D'obter pour un remboursement qui respecte votre budget: bénéficiez de mensualités fixes sur une durée de 12 à 84 mois</li>
			<li>D'assurer vos arrières avec une assurance mensualités en cas de décès, et optionnellement en cas de maladie, accident et incapacité de travail</li>
		</ul>
		<h2>Votre demande en quelques clics</h2>
		<p>Vous avez un projet à concrétiser? <b>Réalisez vos rêves très simplement</b>. Notre équipe vous aidera à déterminer la solution la plus adaptée adaptée grâce à proposition individualisée. Complétez notre formulaire de demande de crédit <b>en deux minutes seulement</b> pour recevoir une proposition sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Contact gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
