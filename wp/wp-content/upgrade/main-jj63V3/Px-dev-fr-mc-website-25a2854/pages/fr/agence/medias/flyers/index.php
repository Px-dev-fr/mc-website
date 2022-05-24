<?php
$h1="Nos flyers";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Nos flyers</title>
<meta name="description" content="Découvrez nos différents flyers et brochures vous présentant nos produits pour privés et PME tels que crédits, leasing, hypothèques, factoring etc."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="flyers";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Vous souhaitez en savoir plus sur nos produits spécifiques? N'hésitez pas à télécharger et / ou partager nos flyers de présentation. Ceux-ci sont mis à jour sur une base régulière afin de refléter l'ensemble de nos produits tout en y incluant nos nouveautés.</p>

		<h2>Notre brochure pour PME</h2>
		<p>Notre brochure pour PME vous présente l'ensemble de nos produits destinés aux indépendants et PME établis en Suisse.</p>
		<ul>
			<li><a href="/pdf/fr/brochure_pme_web.pdf" target="new">Voir / télécharger la brochure</a>
		</ul>
		<h2>Notre brochure pour privés</h2>
		<p>Notre brochure de présentation pour privés expose nos produits destinés aux particuliers: crédits, rachats de crédits, cartes de crédit et hypothèques.</p>
		<ul>
			<li><a href="/pdf/fr/brochure_prives_web.pdf" target="new">Voir / télécharger la brochure</a>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
