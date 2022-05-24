<?php
$h1="Simulation de crédit auto d'occasion: estimez le coût de votre achat";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation: votre crédit auto d'occasion sur mesure</title>
<meta name="description" content="Vous souhaitez financer l'achat d'une voiture d'occasion avec un crédit véhicule? Simulez le coût de votre prêt, bénéficiez d'une proposition sans engagement."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-credit-auto-occasion";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous envisagez d'acheter un véhicule de seconde main avec un prêt privé? Notre calculateur vous aide à estimer simplement et rapidement le coût de votre emprunt. En cas d'intérêt, nous prendrons également volontiers votre dossier en charge pour vous faire une proposition de prêt adaptée à votre besoin.</è>
		<h2>La question du taux d'intérêt</h2>
		<p>Le coût de l'emprunt dépendra essentiellement du montant emprunté, de la durée de remboursement, mais aussi et surtout du taux d'intérêt pratiqué. Ce dernier dépendra essentiellement <b>de la situation de l'emprunteur</b>. Chez Multicrédit, nous pouvons vous aider à profiter des meilleures offres possibles en négociant le taux directement auprès de nos partenaires. A titre indicatif, celui-ci varie de 4.8% à 9.9% en fonction de la situation de chaque client.</p>
		<h2>Simulation de votre prêt voiture d'occasion</h2>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Coût véhicule d'occasion</span>
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
		<p>Pourquoi ne pas concrétiser votre simulation de crédit auto d'occasion en nous confiant dès à présent votre projet d'achat? Notre équipe prendra volontiers votre dossier en charge pour vous faire une proposition sans engagement de manière rapide, gratuite et confidentielle!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
