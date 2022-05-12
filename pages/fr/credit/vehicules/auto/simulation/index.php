<?php
$h1="Découvrez notre outil de simulation de crédit auto";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Notre calculateur: simulez votre crédit voiture</title>
<meta name="description" content="Calculez le coût de votre emprunt automobile grâce à notre simulateur et demandez une offre sans engagement pour tout montant de 3'000 à 300'000 Chf."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-credit-auto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous souhaitez faire l'acquisition d'un véhicule neuf ou d'occasion prochainement et vous songez à un emprunt privé pour le financer? Notre simulateur de prêt auto vous permet de calculer rapidement le coût de votre futur emprunt.</p>
		<h2>Calcul du coût</h2>
		<p>Le coût d'un emprunt bancaire fait essentiellement référence <b>la mensualité</b> (la facture mensuelle) et <b>à l'intérêt</b> (l'intérêt payé en plus du remboursement). Notre simulateur de prêt automobile calcule ces coûts pour vous en fonction:</p>
		<ul>
			<li>Du montant nécessaire pour l'achat du véhicule</li>
			<li>De la durée de remboursement</li>
			<li>Du taux d'intérêt pratiqué</li>
		</ul>
		<h2>Quel taux pour votre prêt automobile? </h2>
		<p>Le taux d'intérêt dépendra essentiellement de votre situation et de vos éventuels antécédents financiers. En règle général, celui-ci varie sur une fourchette allant de 5.9% (rarement moins) à 9.9%. Chez Multicrédit, nous vous garantissons un taux bas. En effet, nous négocions directement auprès de nos partenaires le taux de prêt auto pour chaque client.</p>
		<h2>Simulation de crédit voiture</h2>
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
	
		<h3>Demandez une offre et concrétisez votre projet</h3>
		<p>Vous souhaitez connaître précisément quel taux de prêt automobile vous pourriez obtenir? Confiez votre projet à un spécialiste! Nous prenons en charge votre projet de manière rapide et confidentielle pour vous faire une proposition sans engagement dans les plus brefs délais!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
