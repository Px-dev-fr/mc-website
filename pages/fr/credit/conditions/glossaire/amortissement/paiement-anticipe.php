<?php
$h1="Paiement anticipé et remboursement des intérêts payés en trop";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head> 
<title>Paiement anticipé: économisez sur les intérêts de votre prêt</title>
<meta name="description" content="Avec Multicrédit, vous avez la possibilité d'effectuer un paiement anticipé pour rembourser votre crédit, et nous vous rembourserons la différence d'intérêt."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Choisir un crédit chez Cashflex Multicrédit, c'est vous assurer de bénéficier non seulement de <b>conditions intéressantes assorties d'un taux bas</b>, mais aussi de la possibilité d'effectuer un paiement anticipé. En effetuant un ou plusieurs paiements anticipés:</p>
		<ul>
			<li>Vous remboursez votre prêt plus rapidement que ce qui a été prévu par le contrat</li>
			<li>Vous bénéficiez d'un remboursement par la banque des intérêts payés en trop</li>
		</ul>
		<h2>Besoin d'un prêt sur mesure?</h2>
		<p>Vous avez un projet en tête et besoin d'argent pour financer ce dernier? N'hésitez pas à nous contacter pour connaître nos modalités d'emprunt flexibles et avantageuses. Bénéficiez d'une offre gratuite sans engagement et de la possibilité d'effectuer des paiements anticipés pour économiser sur vos intérêts!</p>
		<h2>Offre gratuite et confidentielle</h2>
		<p>Nos conseillers se tiennent volontiers à votre disposition pour vous renseigner ou pour tout renseignement complémentaire. N'hésitez pas à nous contacter.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
