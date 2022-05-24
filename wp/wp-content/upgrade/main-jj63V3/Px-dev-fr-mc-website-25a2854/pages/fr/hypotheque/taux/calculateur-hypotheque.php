<?php
$h1="Simulateur d'hypothèque";
$link="/fr/hypotheque/pret-hypothecaire";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Calculateur d'hypothèque</title>
<meta name="description" content="Vous envisagez de devenir propriétaire? Notre calculateur d'hypothèque vous permettra d'en évaluer les dépenses mensuelles ainsi que votre capacité d'emprunt."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php'); ?>
	<?php include('includes/arianne.php');?>
	<div id="mct" class="ptop">
		<?php include('includes/dsimuls/hypotheque.php');?>
		<p>Vous souhaitez pouvoir évaluer le coût d'une hypothèque? Nous vous proposons sur cette page un <b>calculateur d'hypothèque</b>. Notre simulateur d'hypothèque vous permettra, en fonction des informations fournies, d'estimer le coût mensuel de votre hypothèque.</p>
		
		<h2>Besoin d'aide?</h2>
		<p>Si notre <b>simulateur d'hypothèque</b> vous permettra de vous faire une idée du coût mensuel d'un prêt hypothécaire, le coût indiqué reste <b>une estimation</b>. Pour connaître précisément le taux d'intérêt qu'une banque pourra vous offrir et les coûts liés à une hypothèque, nous vous recommandons, en complément à notre calculateur d'hypothèque, de <b>demander des conseils à un professionnel</b>.</p>
		<h2>Bénéficiez d'un conseil gratuit</h2>
		<p>Chez Multicrédit, nous pouvons vous proposer un <b>entretien gratuit</b> avec un spécialiste en hypothèque. N'hésitez pas à profitez de notre offre dès maintenant pour obtenir un rendez-vous.</p>
		<a class="bouton" href="/fr/hypotheque/pret-hypothecaire">Rendez-vous gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
