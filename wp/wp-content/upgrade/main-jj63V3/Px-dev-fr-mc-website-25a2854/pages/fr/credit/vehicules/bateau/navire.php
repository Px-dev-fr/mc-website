<?php
$h1="Crédit navire: nous finançons l'achat de votre projet de manière simple et flexible";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Achat de navire: financez votre projet avec un crédit</title>
<meta name="description" content="Découvrez nos solutions de financement privé pour l'achat de tout bateau, navire ou autre véhicule nautique. Profitez d'une offre gratuite par un spécialiste!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-achat-navire";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous rêvez de sillonner le Lac Léman à bord de votre voilier? Vous songez à acheter un navire pour vos loisirs? Nos solutions de prêts s'adaptent à vos besoins! Financement total ou partiel, profitez d'une solution sur mesure!</p>
		<h2>Pour tout projet</h2>
		<p>Si l'achat d'un navire concerne en général l'acquisition d'un bateau de fort tonnage et destiné à un usage commercial, on parle également d'achat de navires privés pour particuliers. Qu'il s'agisse de financer un bateau destiné à être utilisé en Suisse ou d'un navire plus imposant destiné à un usage en mer, nous pouvons vous aider:</p>
		<ul>
			<li>Solutions flexibles qui s'adaptent à vos projets</li>
			<li>Financement total ou partiel si par exemple vous disposez déjà de fonds</li>
			<li>Nous cherchons les meilleures alternatives possibles</li>
		</ul>
		<h2>Exemple de financement de navire</h2>
		<p>Vous avez pour projet de faire le tour du monde en catamaran? Vous avez déjà des sponsors, mais il vous manque les fonds nécessaires pour l'acquisition du matériel? Nous pouvons vous proposer une offre:</p>
		<ul>
			<li>Conseil gratuit et sans engagement</li>
			<li>Prêt sur mesure avec un remboursement sur 12 à 84 mois</li>
			<li>Possibilité de remboursement anticipé: la différence d'intérêts vous sera remboursée</li>
		</ul>
		<h2>Contactez-nous!</h2>
		<p>N'hésitez pas à nous contacter si vous cherchez un coup de pouce afin de concrétiser un projet! Nous répondrons volontiers à vos questions et vous proposerons, le cas échéant, une offre individualisée!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
