<?php
$h1="L'exemple d'Alex et Steph: achat d'un kayak avec un prêt privé";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Alex & Steph: crédit à l'achat d'un kayak</title>
<meta name="description" content="Un crédit peut également permettre l'achat de matériel comme un kayac. Découvrez le cas d'Alexandre et Stéphanie ou contactez-nous pour une offre en ligne."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="alexandre-stephanie";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Alexandre est médecin-vétérinaire, tandis que Stéphanie est coiffeuse. Tous deux vivent en concubinage depuis maintenant 2 ans. Afin de tenter de nouvelles aventures, le couple a décidé de s'offrir deux kayaks, et se sont penché sur la solution du prêt privé afin de financer ce projet.</p>
		<h2>Le projet: le choix du modèle de kayak</h2>
		<p>S'il est possible d'acheter des kayaks gonflables pour des prix avoisinnant les 500 Chf, le couple a préféré choisir la qualité. Au final, ils ont opté pour:</p>
		<ul>
			<li>Deux kayaks de loisir, monoplace, à 1680.- chacun</li>
			<li>Une remorque de transport pour kayaks valant 2'200.-</li>
			<li>Soit un coût total de <b>4'580.-</b></li> 
		</ul>
		<h2>A quel nom faire la demande d'emprunt?</h2>
		<p>Alexandre et Stéphanie n'étant pas mariés, ils ont n'ont pas eu la possibilité faire une demande "commune" qui prenne en compte leurs revenus combinés. Comme Alexandre, médecin de profession et employé dans une clinique, gagne plus que Stéphanie, ils ont décidé de réaliser l'emprunt en son nom. Comme tous deux habitent cependant ensembles, il a cependant été possible d'optimiser le budget en ne considérant qu'Alex ne paye "que" la moitié du loyer.</p>
		<h2>L'offre</h2>
		<p>Alexandre ayant une bonne situation, notre équipe a pu leur proposer un prêt de 5'000 Chf sur 12 mois. Avec une durée de remboursement courte, la mensualité est un peu plus élevée, mais l'intérêt total très avantageux. En effet, avec un taux de 6.9%, le couple n'aura à payer <b>que 183 Chf d'intérêt au total</b>! Avec l'argent obtenu, le couple a pu financer l'achat d'un kayak chacun sans difficulté.</p>
		<h2>Besoin d'une proposition sans engagement?</h2>
		<p>Si vous avez besoin d'une solution pour financer du matériel de loisir comme par exemple l'achat d'un kayak, notre équipe prendra volontiers en charge votre dossier de manière gratuite et confidentielle. Bénéficiez d'une proposition aux meilleures conditions du marché très simplement grâce à Multicrédit!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
