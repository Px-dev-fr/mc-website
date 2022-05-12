<?php
$h1="Financement de voilier avec un prêt qui s'adapte à vos besoins";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit voilier: un financement sur mesure pour votre projet</title>
<meta name="description" content="Financez simplement l'achat d'un voilier grâce à nos solutions de prêts. Bénéficiez d'un prêt jusqu'à 300'000.- pour votre futur véhicule nautique!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-voilier";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Bateau neuf ou d'occasion, un prêt voilier vous permettra de financer simplement votre future acquisition. Bénéficiez des conseils d'un spécialiste du domaine et profitez d'une offre avantageux aux meilleurs taux du marché!</p>
		<h2>Pour tout projet</h2>
		<p>Grâce à nos offres de financement flexibles, vous pouvez financer tout type d'achat. En effet, chez Multicrédit, c'est vous qui définissez votre emprunt, avec un montant flexible <b>de 3'000.- à 300'000.-</b> remboursable sur une durée allant <b>jusqu'à 84 mois</b>! De cette manière, vous pourrez facilement financer l'achat de tout bateau de type:</p>
		<ul>
			<li>Voilier, yacht à voile, quillard</li>
			<li>Dériveur / Yole</li>
			<li>Bateau de sport</li>
			<li>Autre type de véhicule nautique</li>
		</ul>
		<h2>Financement au meilleur taux</h2>
		<p>Présents sur le marché du prêt privé depuis des années, nous collaborons avec plusieurs banques du marché afin de pouvoir proposer à nos clients les meilleures alternatives. Confiez-nous votre dossier:</p>
		<ul>
			<li>Nous nous chargeons des démarches administraitves</li>
			<li>Nous négocions votre contrat auprès de nos partenaires pour vous garantir le meilleur taux</li>
			<li>Vous obtenez votre argent rapidement, de manière confidentielle et sans complications</li>
		</ul>
		<h2>Votre demande en toute simplicité</h2>
		<p>Vous souhaitez pouvoir bénéficier d'une offre sans engagement? Nous étudions votre dossier gratuitement, en toute confidentialité. Contactez-nous par téléphone ou faites votre demande en ligne via notre formulaire sécurisé: notre spécialiste vous contactera dans les plus brefs délais!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
