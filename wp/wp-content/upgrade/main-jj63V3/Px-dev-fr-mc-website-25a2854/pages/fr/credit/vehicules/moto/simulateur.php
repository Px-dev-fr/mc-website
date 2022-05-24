<?php
$h1="Comparateur de crédit moto: découvrez notre simulateur et profitez d'un meilleur taux";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation de prêt: notre simulateur de prêt moto</title>
<meta name="description" content="Quels seront les coûts engendrés par un emprunt? Découvrez notre simulateur de crédit moto. Confiez-nous votre projet pour bénéficier du meilleur taux!"/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulateur-credit-moto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous envisagez de financer l'achat d'un véhicule neuf ou d'occasion avec un emprunt privé? Chez Multicrédit, nous vous aidons à bénéficier d'un prêt moto au meilleur taux. Estimez les coûts grâce à notre comparateur de taux!</p>
		<h2>Utiliser notre comparateur de crédit moto</h2>
		<p>Notre outil de simulation vous propose très simplement de calculer les mensualités de votre emprunt, ainsi que le coût total en fonction:</p>
		<ul>
			<li>Du montant du prêt: soit le prix du véhicule, ou une partie du prix si vous bénéficiez déjà d'une réserve pour financer celui-ci en partie</li>
			<li>De la durée de l'emprunt: une durée plus élevée fera baisser les mensualités, mais augmentera l'intérêt payé au total</li>
			<li>Du taux d'intérêt: celui-ci est en principe compris entre 5.9% et 9.9% en fonction de la situation de chaque demandeur</li>
		</ul>
		<h2>Quel o espérer ou comment obtenir un meilleur taux?</h2>
		<p>Notre calculateur de crédit moto vous propose un taux indicatif entre 5.9% et 9.9%. Lors de l'établissement d'une offre, le taux qui vous sera proposé dépendra:</p>
		<ul>
			<li>De votre budget</li>
			<li>De votre situation</li>
			<li>De vos antécédants financiers</li>
		</ul>
		<p>Chez Multicrédit, nous pouvons prendre en charge votre dossier pour optimiser ce dernier et <b>négocier auprès de nos partenaires</b> afin de vous proposer les meilleures offres du marché.</p>
		<h2>Simulation de crédit moto</h2>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Coût du véhicule</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Durée du prêt</span>
			</div>
			<div class="input">
				<select id="taux">
					<?php for ($i=4.9;$i<=9.9;$i=$i+1) echo "<option value='$i'>$i %</option>";?>
				</select>
				<span class="label">Taux d'intérêt</span>
			</div>
			<div class="input">
				<div>Facture mensuelle :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Intérêt total :</div>
				<div id="interet" class="value"></div>
			</div>	
		</div>
		<h3>Avez-vous besoin d'un conseil ou d'une offre individualisée?</h3>
		<p>Notre équipe s'occupera volontiers de votre dossier. Profitez d'une analyse gratuite, confidentielle et sans engagement débouchant sur une proposition concrète de prêt privé au meilleur taux du marché!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande en ligne</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
