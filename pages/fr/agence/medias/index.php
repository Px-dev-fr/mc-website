<?php
$h1="Médias";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Média - Vidéos</title>
<meta name="description" content="Découvrez nos différents médias et vidéos: Flyers, Documentation, Vidéos promotionnelles, Guide du crédit, Articles parus dans des journaux, ..."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Chez Multicrédit, nous sommes également actifs à travers différents médias. Découvrez nos différents documents disponibles sur cette page:</p>
		<ul>
			<li><b>Flyers</b>: présentation de nos services, nos avantages, mais aussi flyers spécifiques à certaines manifestations sponsorisées.</li>
			<li><b>Interviews</b>: interviews réalisés pour différents documentaires, magasines, ...</li>
			<li><b>Vidéos</b>: vidéos promotionnelles, mais aussi présentant nos activités de crédits à travers la Suisse.</li>
		</ul>
		<p>Vous souhaitez faire une demande de crédit chez Multicrédit? N'hésitez pas à compléter vos informations via notre formulaire en ligne. Un conseiller vous contactera alors au plus vite pour une évaluation gratuite et sans engagement!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit?pme=1">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
