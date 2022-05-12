<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Entrepreneurs: un financement adapté à vos besoins</title>
<meta name="Description" content="Vous êtes un entrepreneur à la recherche d'un financement pour votre société? Avec nos crédits PME, obtenez un prêt flexible et centré sur vos besoins."/>
<?php
$h1="Financement entrepreneurs";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1;$image="financement-entrepreneur";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Vous êtes un entrepreneur à la recherche d'une solution de financement pour un projet? Spécialisés dans les crédits pour PME, nous pouvons vous proposer un prêt centré sur vos besoins. Bénéficiez d'un devis personnalisé et confidentiel de la part de notre équipe!</p>
		<h2>Vos besoins avant tout</h2>
		<p>Grâce à un financement pour entrepreneur flexible, c'est vous-même qui définissez les modalités de votre prêt <b>en fonction des besoins de votre entreprise</b>. Ainsi, nos offres de prêts sauront s'adapter quelle que soit votre situation:</p>
		<ul>
			<li>Vous souhaitez investir dans de nouvelles machines afin d'assurer à votre entreprise de rester aussi compétitive que possible?</li>
			<li>Vous avez besoin d'argent pour palier à un manque de liquidité temporaire?</li>
			<li>Vous cherchez à financer des projets professionnels, à étendre votre entreprise?</li>
			<li>
		</ul>
		<h2>Sans complications administratives</h2>
		<p>Parce que nous souhaitons pouvoir proposer à nos clients des solutions les plus rapides possibles, <b>nous prenons en charge</b> les démarches pour obtenir votre financement comme entrepreneur. Laissez-nous vous guider et bénéficier d'une offre adaptée sans obligation:</p>
		<ul>
			<li>Bénéficiez du montant de votre choix, de 10'000 à 300'000 chf.</li>
			<li>Choisissez librement la durée de remboursement comprise entre 12 et 84 mois.</p>
		</ul>
		<h2>Offre immédiate</h2>
		<p>Vous êtes entrepreneur, gérant, associé, indépendant, directeur d'une société? Vous êtes à la recherche d'un financement pour entrepreneur? Laissez-nous vous accompagner dans votre démarche! Effectuez votre demande directement par téléphone ou complétez notre formulaire sécurisé.</p>
		<a class="bouton" href="/fr/pme/credit/demande">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
