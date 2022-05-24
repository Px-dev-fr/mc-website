<?php
$h1="Financez l'acquisition de votre voiture de collection!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Auto de collection: besoin d'un crédit pour financer votre achat?</title>
<meta name="description" content="Un crédit auto chez Multicrédit vous aidera à obtenir les fonds nécessaire pour tout achat de voiture de collection. Découvrez nos offres jusqu'à 300'000.-"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="achat-voiture-de-collection";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous cherchez à financer <b>l'achat d'un véhicule de collection</b>? Nous pouvons volontiers vous aider à obtenir les fonds nécessaires grâce à un prêt privé qui s'adapte à votre projet comme à votre situation. Profitez d'une solution flexible par un spécialiste en Suisse!</p>
		<h2>Pour toute voiture de collection</h2>
		<p>Spécialisés dans le financement pour privés, nous pouvons vous aider à concrétiser votre projet d'achat de véhicule et ce <b>quel que soit le prix, la marque ou le modèle du véhicule</b>. Au contraire d'un leasing, un crédit vous permet en effet d'obtenir le montant nécessaire pour votre achat sans aucune restriction:</p>
		<ul>
			<li>Confiez-nous le financement de votre futur bien avec un crédit allant jusqu'à 300'000 Chf.</li>
			<li>Bénéficiez d'une mensualité de remboursement adaptée à votre porte-monnaie. En combinant un taux avantageux avec des mensualités étalées sur 12 à 84 mois, nous vous assurons d'un remboursement flexible!</li>
		</ul>
		<h2>Financement total ou partiel</h2>
		<p>Avez-vous besoin de financer votre achat d'automobile de collection en totalité, ou disposez-vous déjà de fonds propres? Comme vous déterminez vous-même le montant emprunté, vous pouvez librement financer votre achat de manière totale ou partielle, s'il ne vous manque par exemple qu'une partie des liquidités.</p>
		<h2>Demande gratuite et sans engagement</h2>
		<p>Confier votre projet à Multicrédit, c'est vous adjoindre les services d'un spécialiste actif depuis plus de 15 ans dans toute la Suisse. Profitez d'une analyse gratuite débouchant sur une proposition sans engagement et laissez-nous prendre en charge les démarches administratives liées à votre prêt!</p>

		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
