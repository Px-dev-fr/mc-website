<?php
$h1="Notre calculateur d'amortissement de prêts";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Calcul d'amortissement: calculez votre futur emprunt</title>
<meta name="description" content="Comment se calcule l'amortissement d'un crédit? Estimez le coût de votre emprunt en fonction de la durée et du montant. Offre et conseils gratuits."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous envisagez de prendre un crédit, mais vous avez des interrogations liées aux modalités du paiement de ce dernier? Chez Multicrédit, le remboursement du prêt s'effectue de manière simple et flexible. Découvrez notre offre.</p>
		<h2>Un remboursement facile et flexible</h2>
		<p>Commencez par choisir librement le montant emprunt de 3'000 à 300'000 Chf. En fonction de votre budget et de votre capacité de remboursement, vous pourrez définir vous-même la durée de remboursement envisagée:</p>
		<ul>
			<li>Vous choisissez la <b>durée du contrat</b>, de 12 à 84 mois</li>
			<li>Nous vous proposons un taux d'intérêt fixe et avantageux</li>
			<li>Bénéficier de <b>mensualités fixes</b>.</li>
			<li>Dès le premier mois suivant la réception de votre argent, vous recevez tous vos bulletins de versement en une seule fois et pourrez planifier sereinement votre budget</li>
			<li>Libre à vous de payer une facture chaque mois, ou de choisir d'effectuer un remboursement anticipé pour économiser sur vos intérêts</li>
		</ul>
		<h2>Autres avantages</h2>
		<p>Choisir notre société pour un emprunt, c'est non seulement s'assurer d'une solution sur mesure, mais aussi des avantages suivants:</p>
		<ul>
			<li>Une assurance mensualité qui couvrira vos mensualités du prêt en cas de maladie, accident, décès, chômage involontaire.</li>
			<li>Des possibilités de rachat et regroupement de prêts sur demande.</li>
		</ul>
		<h2>Notre calculateur d'amortissement</h2>
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
				<div>Mensualité :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Intérêt total :</div>
				<div id="interet" class="value"></div>
			</div>
		</div>
		<h3>Demandez une offre dès maintenant</h3>
		<p>Vous souhaitez obtenir un prêt pour un projet personnel? N'hésitez pas à nous contacter en cas de question ou pour obtenir une offre rapide, gratuite et confidentielle</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
