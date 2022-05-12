<?php
$h1="Simulation de crédit camping car";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation: quel coût pour un financement de camping car?</title>
<meta name="description" content="Estimez les coûts de votre futur emprunt pour financer l'achat d'un véhicule de loisir grâce à notre simulateur, effectuez simplement votre demande en ligne."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-credit-camping-car";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous envisagez de financer l'acquisition d'un véhicule de loisir grâce à un emprunt bancaire? Spécialisés dans le crédit privé pour véhicules, nous pouvons vous accompagner dans vos démarches et vous faire une offre qui réponde à vos besoins spécifiques.</p>
		<h2>Quels sont les éléments qui influencent les coûts?</h2>
		<p>Notre outil de simulation vous permettra d'estimer rapidement le coût éventuel d'un emprunt privé destiné à l'achat du véhicule. Indiquez simplement <b>le montant nécessaire</b>, miaus <b>la durée de remboursement envisagée</b> et <b>le taux d'intérêt pour le calcul</b>, nous vous indiquerons alors pour divers taux d'intérêt:</p>
		<ul>
			<li>Le coût mensuel: à savoir le montant de la facture mensuelle</li>
			<li>L'intérêt total, qui correspond au coût de l'emprunt</li>
		</ul>
		<h2>Quel taux indiquer au simulateur?</h2>
		<p>Le taux d'intérêt pour un emprunt personnel varie en Suisse entre 5.9% et 10% (maximum autorisé par la loi). Chez Multicrédit, nous vous proposons des offres avant des taux allant <b>de 5.9% à 9.9%</b> en fonction de votre situation propre. Vous souhaitez obtenir un financement de camping car au meilleur taux? Confiez-nous votre dossier:</p>
		<ul>
			<li>Nous négocions vos dossier auprès de nos partenaires afin d'améliorer vos chances d'acceptation de la demande</li>
			<li>Nous vous garantissons, grâce à ces négociations, un meilleur taux d'intérêt</li>
			<li>Votre demande est gratuite, confidentielle et sans engagement</li>
		</ul>
		<h2>Notre simulateur</h2>
		<p>N'hésitez pas à consulter notre calculateur pour vous faire une idée du coût mensuel et total de votre emprunt.</p>
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
	
		<h3>Obtenir une offre définitive</h3>
		<p>Vous souhaitez pouvoir profiter d'une offre <b>rapide</b>, <b>gratuite</b> et <b>sans obligation</b>? N'hésitez pas à nous solliciter: nous vous proposerons une solution individualisée dans les plus brefs délais.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
