<?php
$h1="Simulateur de prêt personnel: notre calculateur à l'usage des futurs emprunteurs!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulez votre prêt: estimez le coût de votre crédit conso</title>
<meta name="description" content="Calculez le coût de votre futur emprunt grâce à nous outil de simulation de prêt. Concrétisez vos projets avec une offre au meilleur taux par un spécialiste!"/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulateur-de-pret";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Les raisons d'hésiter à prendre un emprunt privé peuvent être nombreuses. En particulier, le coût de l'emprunt (remboursement et intérêt) peut vite inquiéter. Afin de vous permettre d'estimer au mieux ces coûts, nous vous proposons <b>un simulateur de prêt à la consommation</b> et restons à votre disposition pour vous faire une offre sans engagement en cas d'intérêt.</p>
		<h2>Quels sont les éléments qui déterminent le coût réel d'un emprunt?</h2>
		<p>Bien entendu, <b>le taux d'intérêt</b> influence l'intérêt payé. Ce dernier dépendra également <b>du montant emprunté</b>. Cependant, il ne faut pas oublier non plus <b>la durée de remboursement</b>, élément souvent sous-estimé des demandeurs, qui a pourtant une influence majeur dans le coût réel payé par le consommateur:</p>
		<ul>
			<li>Une durée plus longue permet de faire diminuer la mensualité, alors qu'une durée plus courte implique un remboursement mensuel plus élevé</li>
			<li>Cependant, une durée plus longue engendre également plus de frais, avec un intérêt total plus élevé, alors qu'une durée réduite permet d'économiser sur les intérêts à payer</li>
		</ul>
		<p>Pour mieux se rendre compte de l'influence de la durée et du taux, le mieux reste de <b>tester différentes variantes avec notre simulateur de prêt conso</b>!</p>
		<h2>La question du taux</h2>
		<p>L'expérience montre que la majorité des emprunteurs obtiennent un taux d'intérêt compris entre 7.9% et 9.9%, le maximum fixé par la loi suisse étant de 10%. En optimisant la situation de notre clientèle et en négociant chaque dossier auprès de nos banques partenaires, Multicrédit peut vous proposer un taux dès 5.9% tout en garantissant de meilleures chances d'acceptation.</p>

		<h2>Notre simulateur de prêt personnel à la consommation</h2>
		<p>Vous souhaitez connaître le prix d'un futur emprunt? Notre outil de simulation vous permettra d'obtenir facilement le coût mensuel et total d'un emprunt.</p>
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

		<h3>Concétisez vos projets avec une offre sans engagement</h3>
		<p>Quel sera le taux d'intérêt que vous pourrez réellement obtenir? Confiez-nous votre dossier: nous défendrons ce dernier auprès de nos partenaires bancaires pour vous proposer une solution aux meilleurs taux du marché! Demande rapide, gratuite et sans obligation.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
