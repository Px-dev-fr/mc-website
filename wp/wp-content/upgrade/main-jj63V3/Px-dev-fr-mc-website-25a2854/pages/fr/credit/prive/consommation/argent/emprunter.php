<?php
$h1="Emprunter de l'argent en toute simplicité: découvrez nos offres!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Un meilleur taux: empruntez des liquidités sans complications grâce à nos services!</title>
<meta name="description" content="Besoin de liquidités pour réaliser un projet qui vous tient à coeur? Profitez d'un crédit de 3'000 à 300'000 Chf par un spécialiste! Proposition gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="emprunter-argent";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		
		<p>Vous cherchez à emprunter de l'argent pour concrétiser un projet qui vous tient à coeur? Grâce à notre agence, profitez d'un prêt privé qui s'adapte à vos projets comme à votre situation! Montant de <b>3'000 à 300'000 Chf</b> remboursable sur <b>12 - 84 mois</b>. Simple, facile, rapide, faites votre demande en ligne!</p>
		
		<h2>Simplicité et rapidité</h2>
		<p>Actifs dans le secteur du crédit <b>depuis plus de <?php echo (date("Y")-1999);?> années</b>, nous proposons à notre clientèle des solutions pour emprunter de l'argent très simplement. Confiez-nous votre besoin, nous nous occupons de votre dossier de A à Z:</p>
		<ul>
			<li>Définissez les modalités de votre emprunt (montant et durée de remboursement)</li>
			<li>Faites-nous parvenir les quelques documents nécessaires à l'analyse du dossier</li>
			<li>Recevez rapidement une offre gratuite, confidentielle et sans engagement</li>
			<li>En cas d'accord, vous recevez l'argent directement sur votre compte en banque</li>
		</ul>
		
		<h2>Un spécialiste à l'écoute de vos besoins</h2>
		<p>Multicrédit, c'est un spécialiste à votre disposition quelle que soit votre situation. Vous êtes salarié, indépendant, rentier? Vous êtes de nationalité suisse, ou étranger détenteur d'un permis de travail (B, C, ou G)? Vous travaillez au sein d'une ambassage ou ONG (carte de légitimation)? N'hésitez pas à nous contacter:</p>
		<ul>
			<li>Traitement gratuit et confidentiel de votre demande</li>
			<li>Proposition sans engagement pour le montant de votre choix</li>
		</ul>
		
		<h2>Contactez-nous</h2>
		<p>Bénéficiez d'un conseil neutre sans avoir à impliquer votre banque, profitez de solutions plus avantageuses! Notre équipe répondra volontiers à vos questions et pourra vous proposer, en cas d'intérêt, une proposition aux meilleurs taux du marché.</p>
		
		
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
