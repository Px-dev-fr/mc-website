<?php
$h1="Simulation de crédit conso: simulez votre futur emprunt!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation de crédit: estimez le coût de votre emprunt</title>
<meta name="description" content="Calculez le coût de votre futur emprunt grâce à nous outil de simulation de prêt. Concrétisez vos projets avec une offre au meilleur taux par un spécialiste!"/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-de-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous avez besoin d'argent pour financer un projet ou pour palier à un manque temporaire de liquidités? Notre <b>simulateur de crédit</b> vous permettra de calculer très simplement le coût mensuel et total d'un emprunt.</p>
		<h2>Quels éléments détermine le coût total?</h2>
		<p>Les éléments déterminant pour simuler un crédit sont <b>le montant emprunté</b>, <b>la durée du prêt</b> et <b>le taux d'intérêt</b>. Notre simulateur de crédit vous permet d'entrer très simplement ces différents éléments pour calculer le coût de votre futur prêt personnel.</p>

		<h2>Quel taux utiliser?</h2>
		<p>Notre outil de simulation de crédit conso propose une sélection du taux entre 5.9% et 9.9%. Le taux réel dépendra de la situation de chaque demandeur, sachant que:</p>
		<ul>
			<li>Le taux maximum fixé par la loi est de 10%</li>
			<li>Le taux réel fixé dépendra du budget et des antécédants du demandeur: un client considéré comme "moins risqué" bénéficiera d'un taux plus avantageux</li>
		</ul>
		<p>En confiant votre demande à Multicrédit, vous vous assurez en outre <b>d'un meilleur taux</b>: nous négocions en effet chaque demande auprès de nos partenaires bancaires pour garantir à notre clientèle les meilleures conditions de prêt.</p>
		<h2>Simulez votre crédit personnel!</h2>
		<p>Indiquez simplement dans notre outil le montant, la durée de l'emprunt et le taux d'intérêt pour obtenir la mensualité (coût mensuel comprenant le remboursement) et l'intérêt payé au total.</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Montant (Chf)</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Durée (Mois)</span>
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

		<h3>Besoin de concrétiser un projet?</h3>
		<p>Vous souhaitez concrétiser le montant calculé sur notre simulateur de crédit conso? N'hésitez pas à nous contacter pour nous confier votre dossier et bénéficiez d'une offre gratuite, sans engagement, et traitée dans la plus grande confidentialité.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
