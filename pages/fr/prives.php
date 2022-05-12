<?php
$h1="Financement privé par un spécialiste: économisez grâce à un meilleur taux!";
$link="/fr/credit/formulaire-demande-credit"; 
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('includes/meta.php');?>
<title>Financement privé: votre crédit personnel par un spécialiste en Suisse</title>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
<meta name="description" content="Profitez d'un financement personnel quel que soit votre besoin! Crédit privé, prêt hypothécaire, nous vous garantissons les meilleurs taux. Offre gratuite."/>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="Financement pour personnes privées";include('includes/rubriques/prives.php');?>
	<div id="mct">
		<h2 id="mcth">Simulez le coût de votre financement privé!</h2>
		<div id="mcs">
			<div class="mcc" id="mcc-credit-prive">Crédit<br>privé</div>
			<div class="mcc" id="mcc-hypotheque">Financement<br>hypothécaire</div>		
		</div>
		<div id="ms"></div>
		<p>Crédits privés, prêts hypothécaires, Multicrédit vous aide à concrétiser vos projets grâce à des solutions de financement personnel <b>qui s'adaptent à vos besoins</b>. Avec plus de <?php echo (date("Y")-1999);?> années d'activité en Suisse et grâce à un partenariat solide avec de nombreux établissements financiers, nous vous aidons à économiser grâce aux meilleures offres du marché!</p>
		
		<h2>Nos produits pour personnes privées</h2>
		<p>Quels sont vos besoins? Nos spécialistes vous aider à obtenir <b>un financement personnel sur mesure</b> quels que soient vos projets. Découvrez nos différents services:</p>
		<ul>
			<li><b>Crédits privés</b>: de 3'000 à 300'000 Chf aux meilleurs taux de Suisse grâce à nos solutions avec ou sans banques. Choisissez un remboursement sur 12 à 84 mois selon vos préférences.</li>
			<li><b>Rachat de prêts</b>: regroupez vos engagement, simplifiez-vous la vie et économisez sur vos mensualités! Profitez d'une offre gratuite pour regrouper vos crédits, soldes de cartes de crédit ou leasing.</li>
			<li><b>Hypothèques</b>: résidence principale ou secondaire, maison ou appartement, notre spécialiste prendra en charge votre dossier de A à Z pour vous aider à financer simplement votre futur bien immobilier!</li>
		</ul>
		
		<h2>Votre financement personnel pris en charge de A à Z par un expert</h2>
		<p>Plus qu'un simple intermédiaire financier, notre agence vous propose un véritable service de conseil et de prise en charge. En nous confiant votre dossier:</p>
		<ul>
			<li>Vous profitez des services d'un spécialiste expérimenté qui prendra en charge votre dossier en toute simplicité</li>
			<li>Vous bénéficiez des meilleures offres du marché et économisez ainsi sur les coûts du financement (intérêts, ...)</li>
			<li>Vous disposez d'alternatives modernes sous la forme de nouvelles solutions de financement comme le crowdlending par exemple</li>
		</ul>
		
		<h2>Offre gratuite et sans obligation</h2>
		<p>Vous souhaitez en savoir plus sur nos conditions? Bénéficiez gratuitement d'une offre sans obligation quel que soit votre besoin! <b>Nos spécialistes en financement personnel sont volontiers à votre disposition</b> pour vous renseigner ou prendre en charge votre dossier!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande online</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<script>
	ajload("credit-prive", "/fr/credit/formulaire-demande-credit");
	document.getElementById("mcc-credit-prive").onclick = function(e){ajload("credit-prive", "/fr/credit/formulaire-demande-credit");}
	document.getElementById("mcc-hypotheque").onclick = function(e){ajload("hypotheque", "/fr/hypotheque/pret-hypothecaire");}
</script>
</body>
</html> 
