<?php
$h1="Le prêt affecté pour le financement de biens ou sercice";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit affecté: prêt sur mesure pour l'achat d'un bien</title>
<meta name="description" content="Un prêt affecté est un emprunt qui vous permettra de financer aisément l'acquisition d'un bien. Découvrez nos offres aux meilleurs taux du marché."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php //include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous souhaitez obtenir des fonds pour financer un projet qui vous tient à coeur? Le prêt affecté est une forme d'emprunt peu connu qui consiste à prendre un emprunt destiné exclusivement à financer un bien spécifique. Spécialisés dans le financement de biens pour privés et PME, nous pouvons vous aider.</p>
		<h2>Concrétisez simplement vos projets</h2>
		<p>Au plus proche de notre clientèle, nous souhaitons avant tout proposer des solutions flexible qui s'adaptent aux besoins de chacun. Vous souhaitez obtenir un prêt affecté auprès d'une banque? Nous négocions pour vous de meilleures conditions d'emprunt:</p>
		<ul>
			<li>Obtenez tout montant dès 3'000 Chf et jusqu'à 300'000 Chf</li>
			<li>Remboursez à votre propre rythme avec un contrat sur 12 à 84 mois</li>
			<li>Assurez votre budget grâce à des mensualités fixes</li>
			<li>Nous prenons en charge votre dossier</li>
		</ul>
		<h2>Rapide et simple</h2>
		<p>Financez un bien n'a jamais été aussi facile qu'avec Multicrédit! Avec une prise en charge des aspects administratifs de votre demande, <b>nous vous simplifions la vie</b>. Faites votre demande en ligne ou par téléphone en envoyez-nous les documents nécessaires à l'analyse du dossier, nous nous occupons du reste et vous ferons parvenir rapidement <b>une offre de financement de biens gratuite et sans engagement</b>.</p>
		<h2>Demande gratuite et sans engagement</h2>
		<p>N'hésitez pas à nous contacter si vous cherchez à obtenir un prêt affecté. Notre équipe de spécialiste se fera un plaisir de traiter votre demande et de vous faire parvenir une proposition qui s'adapte à vos besoins.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
