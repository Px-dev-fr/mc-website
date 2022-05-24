<?php
$h1="Un crédit pour toute situation professionnelle";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Situation professionnelle: nos conditions d'emprunt</title>
<meta name="description" content="Vous êtes salarié professionnel, cadre, temporaire, indépendant? Profitez d'une offre de prêt sans engagement par un expert et bénéficiez du meilleur taux!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-professionnel";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Avez-vous assez d'argent pour réaliser vos projets? Si vous avez un revenu en Suisse, nous pouvons certainement vous proposer une solution de prêt! Confiez-nous votre dossier pour de meilleures conditions et chances d'acceptation!</p>
		<h2>Votre situation</h2>
		<p>Chez Multicrédit, nous faisons notre maximum pour simplifier les démarches d'obtention d'un prêt et permettre à tout à chacun d'obtenir une proposition sur mesure. N'hésitez pas à nous contacter si vous êtes:</p>
		<ul>
			<li>Salarié fixe depuis minimum 3 mois auprès du même employeur</li>
			<li>Salarié temporaire depuis minimum 6 mois auprès du même employeur</li>
			<li>Indépendant depuis minimum 2 ans: auto-entrepreneur, membre d'une profession libérale ou salarié de votre propre société</li>
			<li>Rentier AVS ou rentier AI (sans prestations complémentaires)</li>
		</ul>
		<h2>Un meilleur taux d'acceptation</h2>
		<p>En nous confiant votre dossier, non seulement vous vous simplifiez la vie grâce à une prise en charge globale de votre demande, mais vous améliorez également vos chances d'obtenir un prêt. En effet, nous négocions chaque dossier avec nos partenaires bancaires et garantissons ainsi à nos clients:</p>
		<ul>
			<li>De meilleures chances d'obtenir un crédit</li>
			<li>De meilleures conditions avec un taux d'intérêt plus avantageux</li>
		</ul>
		<h2>Demande rapide, gratuite et confidentielle</h2>
		<p>Vous avez besoin d'argent pour un projet? N'attendez plus, faites sans plus tarder votre demande quelle que soit votre situation professionnelle! Profitez d'une <b>offre gratuite et individualisée</b>. Complétez notre formulaire pour effectuer votre demande:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
