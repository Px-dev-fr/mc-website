<?php
$h1="Financement pour indépendant: découvrez nos solutions simples et rapides";
$link="/fr/independants/credit/demande"; 
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('includes/meta.php');?>
<title>Financement pour indépendants: un conseil neutre par un spécialiste</title>
<meta name="description" content="Crédit, leasing, factoring, solution de paiement pour vos clients, ... Financez simplement votre activité indépendant grâce à nos produits flexibles!"/>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="Financement pour indépendants";include('includes/rubriques/independants.php');?>
	<div id="mct">
		<p>Multicrédit vous aide à financer votre activité indépendante! Profitez d'un conseil neutre par un spécialiste à même de vous proposer des solutions simples, flexibles et surtout avantageuses! Avec plus de <?php echo (date("Y")-1999);?> années d'activité en Suisse, nous vous aidons à financer durablement votre croissance!</p>
		
		<h2>Nos produits pour indépendants</h2>
		<p>Actifs aussi bien dans les produits de financement classiques que les nouvelles techniques comme l'affacturage, nous avons à notre disposition un large panel de services à même de répondre aux besoins de votre business:</p>
		<ul>
			<li><b>Crédit pour indépendants</b>: profitez d'une solution plus rapide, sans complications administratives et économisez grâce à un meilleur taux!</li>
			<li><b>Leasing commercial</b>: financez simplement tout bien de production lié à votre activité, bénéficiez d'un conseil sur mesure par un spécialiste!</li>
			<li><b>Solutions de paiement clientèle</b>: proposez à vos clients de payer par factures tout en encaissant les montants facturés dans un délai de 24h-48h grâce à nos produits!</li>
		</ul>
		
		<h2>Nos prestations - vos avantages</h2>
		<p>A travers un conseil global et la prise en charge complète de chaque dossier, nous souhaitons apportons à notre clientèle un savoir-faire issu d'années d'expérience dans le domaine du financement pour indépendants! Confiez-nous votre projet pour bénéficier:</p>
		<ul>
			<li>D'un conseil neutre par un expert</li>
			<li>D'une prise en charge de A à Z de votre dossier</li>
			<li>De solutions plus avantageuses grâce à nos alternatives avec ou sans banques</li>
		</ul>
		
		<h2>Simple, rapide, discret</h2>
		<p>Vous gérez un business en tant qu'auto-entrepreneur, membre d'une profession libérale ou indépendant à votre propre compte? Vous cherchez à financer votre activité à court, moyen ou long terme ou à <b>améliorer durablement votre chiffre d'affaires</b>? N'hésitez pas à nous contacter pour bénéficier d'un entretien sans engagement avec un spécialiste!</p>
		
		<a class="bouton" href="/fr/independants/credit/demande">Demande online</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html> 
