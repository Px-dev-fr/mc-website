<?php
$h1="Notre calculateur de crédit";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Calcul de prêt: évaluez correctement le coût de votre emprunt</title>
<meta name="description" content="Vous envisagez de demander un financement pour un projet? Savez-vous à combien s'élèveront les intérêts? Découvrez explication sur le calcul de prêt."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="calcul-de-pret";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Calculer le coût d'un emprunt n'est pas toujours évident. Bien souvent les gens n'évaluent pas correctement le coût de leur financement lorsqu'ils effectuent une demande. Nous vous proposons quelques explications sur la manière d'estimer le coût d'un emprunt ainsi qu'un <i>calculateur de prêt</i>.</p>
		<h2>Les fausses idées</h2>
		<p>Une erreur commune est d'appliquer le taux d'intérêt sur la somme empruntée sans prendre en compte la durée du contrat. Avec cette méthode, un emprunt de 10'000 Chf avec un taux de 10% coûterait donc 1'000 Chf. En réalité, <b>cette manière procéder n'est pas la bonne</b> ne serait-ce parce qu'elle ne prend pas en compte la durée de remboursement.</p>
		<h2>Notre outil</h2>
		<p>La méthode de calcul elle-même peut s'avérer compliquée à faire de tête, c'est pourquoi nous vous proposons <b>un calculateur de crédit</b> qui vous permettra d'estimer simplement le coût de votre futur emprunt. Ce dernier prend en compte:</p>
		<ul>
			<li>Le montant emprunté</li>
			<li>La durée de remboursement</li>
			<li>Le taux d'intérêt</li>
		</ul>
		<h2>Notre calculateur de prêt</h2>
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
		<h3>Avez-vous besoin d'un conseil ou d'une offre?</h3>
		<p>Si vous envisagez d'opter pour un emprunt privé prochainement, et que vous n'êtes pas certain du coût estimé de celui-ci, n'hésitez pas à nous contacter. Notre équipe présente dans toute la Suisse vous soumettra une <b>proposition gratuite et sans engagement</b>. Nous nous chargerons du calcul du prêt pour vous proposer un contrat à la mensualité fixe et <b>sans frais cachés</b>:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
