<?php
$h1="Financement de votre prêt moto: confiez-nous votre projet!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit moto: un prêt avantageux pour financer votre achat</title>
<meta name="description" content="Découvrez nos offres de prêt moto pas cher et profitez d'une solution sur mesure. Offre gratuite, modalités flexibles et taux plus avantageux."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-moto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous souhaitez vous offrir une nouvelle moto? Chez Multicrédit, nous nous ferons un plaisir de vous proposer un <b>crédit moto pas cher</b> adapté tant à vos envies comme à votre budget. Nouvelle acquisition ou véhicule d'occasion, nous nous chargeons de trouver un financement adapté!</p>
		<h2>Notre offre</h2>
		<p>Spécialisés dans les solutions de financement, nous pouvons vous proposer une offre flexible qui convienne à vos besoins. Définisez en outre les modalités de l'emprunt:</p>
		<ul>
			<li>Vous choisissez le montant nécessaire pour financer votre projet d'achat</li>
			<li>Vous définissez la durée de remboursement <b>en fonction de votre budget et de vos préférences</b></li>
			<li>Nous nous occupons des formalités administratives!</li>
			<li>Nous négocions un taux d'intérêt le plus bas possible pour vous obtenir <b>un crédit moto pas cher</b>!</li>
		</ul>
		<h2>Simplicité, rapidité, confidentialité</h2>
		<p>Pourquoi vous compliquer la vie? Nous nous chargeons des modalités administratives pour vous proposer le meilleur prêt du marché. Une fois les documents nécessaires à l'analyse du dossier, nous vous ferons une offre rapidement!</p>

		<h2>Votre demande en ligne</h2>
		<p>En choisissant Multicrédit, vous choisissez un courtier totalement indépendant qui n'est affilié à aucune marque. Vous vous assurez ainsi de choisir votre véhicule en toute indépendante et d'obtenir néanmoins une offre la plus intéressante possible. N'attendez-pas, faites votre demande maintenant!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Formulaire de demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
