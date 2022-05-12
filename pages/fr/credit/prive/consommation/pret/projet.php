<?php
$h1="Financez votre projet avec un prêt adapté";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Votre projet: bénéficiez d'un prêt pour tout besoin</title>
<meta name="description" content="Notre solution de prêt vous permet d'obtenir facilement tout montant de 3'000 à 300'000 Chf. Confiez-nous votre dossier et profitez d'un meilleur taux!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pret-projet";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous avez un projet qui vous tient à coeur et vous vous demandez comment le financer? Chez Multicrédit, nous pouvons vous aider avec un <b>prêt projet</b>. En toute simplicité, effectuez votre demande de crédit et profitez de nos opportunités à bas taux!</p>
		<h2>Votre besoin</h2>
		<p>Avec notre solution, vous n'avez pas à justifier la raison de votre emprunt. Ainsi, l'argent obtenu pourra être utilisé librement pour un ou plusieurs projets, en fonction de vos besoins. Par exemple, <b>financez votre projet</b> quel qu'il soit:</p>
		<ul>
			<li>Des travaux de rénovation pour votre maison ou appartement.</li>
			<li>L'achat d'un véhicule, qu'il s'agisse d'une voiture neuve ou d'occasion, d'une moto, voir même d'un bateau!</li>
			<li>Un déménagement: le crédit couvrira alors l'achat du mobilier, la décoration, et pourquoi pas même la caution de loyer!</li>
			<li>Finalement, la concrétisation de ce qui vous tient à coeur!</li>
		</ul>
		<h2>Des conditions intéressantes</h2>
		<p>Nos solutions de crédits s'adapte à vos besoins, mais sont également assorties de conditions flexibles idéales pour tout budget. Ainsi:</p>
		<ul>
			<li>Bénéféciez de nos modalités flexibles et <b>définissez vous-mêmes</b> les modalités (montant et durée) du crédit.</li>
			<li>Assurez-vous en cas de maladie, accident décès: notre assurance crédit <b>prendra en charge vos mensualités</b> en cas d'incapacité de remboursement.</li>
		</ul>
		<h2>Demandez un devis immédiat</h2>
		<p>Vous souhaitez en savoir plus et <b>profiter de nos services financiers</b>? N'hésitez pas à effectuer une requête en ligne ou même directement par contact téléphonique direct. Quel que soit votre besoin, nos conseillers vous aideront à trouver la meilleure solution financière possible!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
