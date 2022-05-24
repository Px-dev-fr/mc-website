<?php
$h1="Profitez d'un prêt au meilleur taux pour l'achat de votre auto d'occasion";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Voiture d'occasion: un crédit pour financer votre achat</title>
<meta name="description" content="Financez tout achat de voiture d'occasion grâce à un prêt au meilleur taux. Devis gratuit sans engagement dès 3'000 Chf, remboursement sur 12 - 84 mois."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="voiture-occasion";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous cherchez à financer l'achat d'un véhicule de seconde main? Avec un prêt auto d'occasion au meilleur taux chez Multicrédit, vous vous assurez des services d'un spécialiste en financement bénéficiant de <b>plus de 15 ans d'expérience</b> dans le financement de véhicules.</p>
		<h2>Pour toute automobile d'occasion</h2>
		<p>Choisir notre agence pour financer votre projet, c'est vous assurer <b>d'une totale flexibilité</b> dans le choix du bien à financer:</p>
		<ul>
			<li>Toute marque</li>
			<li>Tout modèle</li>
			<li>Achat auprès d'un concessionnaire ou d'un particulier</li>
			<li>Financement partiel ou total du bien</li>
		</ul>
		<h2>Le meilleur taux pour votre prêt voiture d'occasion</h2>
		<p>Confiez-nous votre dossier pour bénéficier <b>d'une prise en charge complète</b> de votre demande. Non seulement vous vous assurez d'un traitement rapide en toute confidentialité, mais également de conditions plus avantageuses. En effet, nous négocions votre taux d'intérêt auprès de nos partenaires bancaires et vous garantissons ainsi le taux le plus bas possible.</p>
		<h2>Analyse gratuite, proposition sans engagement</h2>
		<p>Vous avez trouvé la voiture d'occasion de vos rêves? Laissez-nous vous aider à concrétiser vos projets grâce à un prêt automobile adapté à vos besoins comme à votre budget!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
