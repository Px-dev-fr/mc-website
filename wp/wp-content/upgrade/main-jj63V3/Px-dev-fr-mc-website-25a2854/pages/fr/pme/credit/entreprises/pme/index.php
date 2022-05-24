<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Emprunt PME: financement de vos besoins en liquidités</title>
<meta name="Description" content="Vous cherchez à financer un bien pour votre activité? Nos solutions d'emprunt PME s'adaptent à vos besoins. Profitez d'une offre sur mesure au meilleur taux!"/>
<?php
$h1="Nos solutions d'emprunt pour petites et moyennes entreprises";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1;$image="emprunt-pme";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>

		<p>Toujours à la recherche des meilleures solutions pour nos clients, nous vous proposons un emprunt PME centré sur vos besoins et adapté au budget de votre société. Investissements, besoin de liquidités, achat de matériel, ... Notre équipe mettra tout en oeuvre pour vous proposer un produit aux meilleures conditions du marché.</p>
		<h2>Petites et moyennes entreprises</h2>
		<p>Vous gérez une société? Bien conscients <b>que c'est vous qui êtes la personne la mieux placée pour connaître les besoins spécifiques de votre société</b>, nous vous laissons libre choix pour les modalités du prêt:</p>
		<ul>
			<li><b>Modalités flexibles et avantageuses</b>: de 10'000 à 50'000'000 Chf sur 12 à 84 mois.</li>
			<li><b>Proposition sans engagement</b>: notre équipe mettra tout en oeuvre pour trouver avec vous la meilleures solution, qui respecte le budget de votre société tout en restant centrée sur les besoins de celle-ci.</li>
			<li><b>Mensualités fixes</b> afin de vous permettre de budgétiser le remboursement de l'emprunt en toute simplicité.</li>
			<li><b>Taux avantageux</b>: nous proposons un taux fixe, déterminé en fonction du risque et négocié au plus bas.</li>
		</ul>
		<h2>Offre confidentielle</h2>
		<p>Un emprunt pour votre PME vous semble nécessaire pour concrétiser un projet ou rester à la pointe de votre domaine? N'hésitez pas à nous contacter: notre équipe se tient à votre disposition pour une évaluation confidentielle et sans engagement, tout en assurant la sécurité de vos données.</p>
		<a class="bouton" href="/fr/pme/credit/demande">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
