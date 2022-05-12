<?php
$h1="Comment faire un calcul de prêt? Calculez les coûts de votre futur emprunt!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Calcul d'intérêt: découvrez notre calculateur de prêt</title>
<meta name="description" content="Comment se calcule l'intérêt d'un futur emprunt? Simulez votre mensualité avec notre calculateur de prêt. Confiez-nous votre dossier pour un meilleur taux."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="calculateur-de-pret";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous envisagez <b>un futur emprunt</b> prochainement? Qu'il s'agisse de financer un projet qui vous tient à coeur, d'acheter un véhicule ou de faire face à un manque temporaire de liquidités, savez-vous comment faire un calcul de prêt? Découvrez notre calculateur de prêt!</p>
		<h2>Estimer le coût de votre futur emprunt</h2>
		<p>Le coût d'un crédit privé dépend essentiellement de trois facteurs: le montant accordé, le taux d'intérêt, et la durée de remboursement. Chez Multicrédit:</p>
		<ul>
			<li>Nos clients choisissent librement le montant de 3'000 à 300'000 Chf ainsi que la durée de remboursement envisagée (12 à 84 mois)</li>
			<li>Nous négocions avec nos partenaires bancaires pour pouvoir proposer des taux d'intérêts les plus avantageux possibles</li>
		</ul>
		<h2>Un exemple: 20'000.- sur 24 mois</h2>
		<p>Par exemple, un futur emprunt de 20'000 Chf sur 24 mois utilisé pour effectuer des travaux de rénovation d'une toiture engendrera les coûts suivants:</p>
		<ul>
			<li>Taux de 5.9%: facture mensuelle de 884.- pour un intérêt de 1'219.-</li>
			<li>Taux de 7.9%: facture mensuelle de 901.- pour un intérêt de 1'627.-</li>
			<li>Taux de 9.9%: facture mensuelle de 918.- pour un intérêt de 2'033.-</li>
		</ul>
		<h3>Notre calculateur de prêt</h3>
		<p>N'hésitez pas à vous renseigner avant de vous engager! Notre outil vous permet d'estimer rapidement le coût de votre futur emprunt!</p>
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

		<h3>Bénéficiez d'un meilleur taux</h3>
		<p>Vous souhaitez profiter des meilleurs taux d'intérêt du marché? N'hésitez pas à nous confier votre dossier. Nous traiteront votre demande de crédit de manière rapide et confidentielle et négocions avec nos partenaires les meilleures conditions pour notre clientèle.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
