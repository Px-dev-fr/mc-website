<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation de prêt: estimez le coût de votre prêt à la consommation</title>
<meta name="Description" content="Simulez le coût de votre futur emprunt et bénéficiez d'un taux avantageux pour tout montant de 3'000 à 300'000 Chf. Nous prenons votre demande en charge!"/>
<?php
$h1="Découvrez notre simulateur de crédit conso et bénéficiez d'une offre sur mesure";
$link="/fr/credit/formulaire-demande-credit"; include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		simulation pret conso
		pret conso simulation
		simulation pret consommation
	simulation crédit consommation
		simulateur

		<p>Un emprunt privé est un engagement qui peut se prolonger à moyen ou long terme, tout particulièrement sur des durées importantes. Avant de s'engager, de nombreux consommateurs souhaitent ainsi effectuer <b>une simulation de crédit conso</b>. Afin de vous aider à mieux évaluer le futur coût de votre emprunt, Multicrédit vous propose également un outil de simulation de prêt conso.</p>
		<h2>Montant, durée, et taux d'intérêt</h2>
		<p>Le montant maximal d'un emprunt varie en fonction de la situation de chaque client. Notre agence propose des solutions <b>jusqu'à 300'000 Chf</b>. La durée de remboursement, généralement laissée au choix du client, peut se prolonger jusqu'à 84 mois. Le taux d'intérêt, qui influence directement le coût final du prêt, dépendra également de la situation, mais aussi <i>de sa capacité à négocier avec les banques</i>. Chez Multicrédit:</p>
		<ul>
			<li>Vous n'avez pas à vous soucier de négocier votre taux: nous nous chargeons de tout</li>
			<li>En cherchant à optimiser votre dossier et en négociant directement le taux de chaque client avec nos partenaires bancaire, nous pouvons garantir les taux les plus avantageux du marché!</li>
		</ul>
		<h2>Prêt conso: simulation des coûts liés à votre emprunt</h2>
		<p>Notre outil vous permettra, en fonction du montant souhaité et de la durée de remboursement envisagée, d'estimer simplement le coût total (intérêt payé) et le coût mensuel (mensualité comprenant le remboursement du prêt ainsi que le paiement des intérêts) de votre emprunt en fonction du taux d'intérêt.</p>
		<h2>Calculez votre futur emprunt!</h2>
		<p>Notre outil de simulation de crédit à la consommation vous permet de calculer le caux de différents scénarios pour des taux de 4.9% à 9.9% (le maximum autorisé par la loi étant de 10%).</p>
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
		<h3>Envie de concrétiser une simulation effectuée via notre outil?</h3>
		<p>N'hésitez pas à nous contacter: nous prenons en charge votre dossier de manière rapide, gratuite et confidentielle pour vous faire une offre <b>au meilleur taux du marché</b>.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
