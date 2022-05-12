<?php
$h1="Découvrez nos courtiers en crédit";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Nos collaborateurs: besoin d'un courtier en crédits?</title>
<meta name="description" content="Découvrez nos collaborateurs. Le spécialiste des crédits, hypothèques et services financiers est à votre disposition pour une offre gratuite sans engagement.">
<?php include 'includes/meta.php';?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="courtiers-en-credit";$alt="nostri collaboratori";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Multicrédit, c'est avant tout une équipe de <b>collaborateurs professionnels</b>, impliqués et disponibles pour répondre à vos besoins spécifiques. Vous êtes à la recherche d'une solution de financement? Nos courtiers en crédit se tiennent à votre disposition pour vous renseigner.</p>
		<h2>Nos collaborateurs</h2>
		<p>Découvrez ci-dessous la liste de nos collaborateurs à votre disposition pour toute question ou précision sur un dossier:</p>
		<?php include 'includes/collaborateurs.php';?>
		<h2>Avez-vous besoin des conseils de courtiers en crédit?</h2>
		<p>Si vous êtes à la recherche d'une solution de financement, nos spécialistes peuvent vous proposer une <b>offre gratuite sans obligation</b>:</p>
		<ul>
			<li>De <b>3'000 à 300'000 Chf</b></li>
			<li>Sur <b>12 à 84 mois</b></li>
			<li>Taux avantageux, offre personnalisée</li>
		</ul>
		<h2>Contactez-nous pour un devis confidentiel</h2>
		<p>Obtenez facilement la somme nécessaire à vos envies. N'hésitez pas à compléter notre formulaire en ligne pour obtenir une offre rapidement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande de prêt</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
