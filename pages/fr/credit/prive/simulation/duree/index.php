<?php
$h1="Quelle durée d'emprunt choisir? Nous vous aidons à faire le meilleur choix!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Durée du crédit: profitez d'un prêt sur 12 à 84 mois</title>
<meta name="description" content="Besoin d'un prêt privé? Nos experts vous conseillent sur la durée de ce dernier et peuvent vous proposer une offre sur 12 à 84 mois au meilleur taux."/>
<?php include('includes/meta.php');?>
<style>
</style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-de-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Chez Multicrédit, nous souhaitons pouvoir proposer à notre clientèle des prêts flexibles aussi bien sur le montant que sur <b>la durée d'emprunt</b>. Ainsi, vous pouvez librement choisir la période de remboursement sur 12 à 84 mois en fonction de vos préférences et de votre budget.</p>
		<h2>Quel impact pour votre budget?</h2>
		<p>L'impact de la durée du crédit sur le coût total est souvent sous-estimé. D'un point de vue budgétaire, le choix de la période de remboursement a ainsi une influence importante:</p>
		<ul>
			<li>Remboursement à court terme: un remboursement sur 1-2 ans permet souvent de bénéficier d'un intérêt plus bas, mais impliquera des mensualités plus élevées<li>
			<li>Remboursement à moyen terme: un remboursement sur 3-4 ans donne plus de liberté à votre budget, avec des mensualités plus basses, mais augmentera le coût total du prêt</li>
			<li>Remboursement à long terme: choisir une période de remboursement sur 5, 6 ou 7 ans permet d'obtenir <b>les mensualités les plus basses</b>, mais augmente encore l'intérêt payé</li>
		</ul>
		<h2>Quelques exemples</h2>
		<p>Soit un crédit privé de 20'000.- proposé avec un taux d'intérêt de 6.9%:</p>
		<ul>
			<li><b>Sur 12 mois</b>: mensualité de 1'727.- pour un intérêt total de 732.-</li>
			<li><b>Sur 24 mois</b>: mensualité de 892.- pour un intérêt total de 1'423.-</li>
			<li><b>Sur 36 mois</b>: mensualité de 614.- pour un intérêt total de 2'129.-</li>
			<li><b>Sur 48 mois</b>: mensualité de 476.- pour un intérêt total de 2'850.-</li>
			<li><b>Sur 60 mois</b>: mensualité de 393.- pour un intérêt total de 3'586.-</li>
			<li><b>Sur 72 mois</b>: mensualité de 338.- pour un intérêt total de 4'337.-</li>
			<li><b>Sur 84 mois</b>: mensualité de 298.- pour un intérêt total de 5'102.-</li>
		</ul>
		<h2>Quelle durée d'emprunt choisir?</h2>
		<p>Le choix d'une période de remboursement idéale dépendra de chaque situation. Chez Multicrédit, nous pouvons vous aider à déterminer quelle durée de crédit choisir en fonction du montant emprunté et de votre situation financière. De plus, <b>nous négocions pour vous le taux d'intérêt auprès de nos partenaires bancaires</b> afin de pouvoir vous faire profiter des meilleures offres du marché!</p>
		<h2>Confiez-nous votre dossier</h2>
		<p>Vous hésitez à prendre un prêt? Nous prenons en charge votre dossier et vous accompagnons dans les démarches pour obtenir une proposition sur mesure qui convienne à vos projets comme à votre budget! N'hésitez pas à nous contacter pour bénéficier d'une offre gratuite, confidentielle et sans engagement par un spécialiste!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
