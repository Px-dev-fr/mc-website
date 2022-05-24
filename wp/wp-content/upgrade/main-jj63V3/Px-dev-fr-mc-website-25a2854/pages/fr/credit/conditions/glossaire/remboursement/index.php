<?php
$h1="Découvrez nos modalités de remboursement de prêt";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Nos modalités de prêt: un crédit remboursé à votre rythme</title>
<meta name="description" content="Vous envisagez de prendre un crédit? Chez Multicrédit, le remboursement de votre emprunt s'effectue tout simplement selon les modalités que vous choisissez."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="remboursement-emprunt";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous êtes un particulier ou un indépendant à la recherche d'un prêt à la fois <b>flexible et avantageux</b>? Avec Multicrédit, vous bénéficiez de modalités de remboursement d'emprunt flexibles et d'une équipe à votre service!</p>
		<h2>Nos modalités de remboursement</h2>
		<p>Chez Cashflex Multicrédit, vous pouvez <b>sélectionner vous-même</b> les termes de votre contrat. Ainsi, en toute liberté, choisissez:</p>
		<ul>
			<li>La <b>durée de l'emprunt</b>, en fonction de votre bilan et vos préférences, entre 1 et 7 ans</li>
			<li>Le <b>montant emprunté</b>: en fonction de vos projets, choisissez la somme nécessaire de 3'000 Chf et <b>jusqu'à 300'000 Chf</b></li>
		</ul>
		<p>En outre, vous avez toujours la possibilité d'effectuer un <i>remboursement anticipé</i> si vous souhaitez solder votre prêt avant l'échéance du contrat. Vous récupérez ainsi les intérêts payés en trop.</p>

		<h2>Taux d'intérêt avantageux</h2>
		<p>Nous aimons à considérer que chaque client possède une situation propre et des besoins propres. Ainsi, quelle que soit votre situation, nous ferons le maximum pour vous proposer une offre:</p>
		<ul>
			<li>Assortie d'un taux d'intérêt avantageux déterminé au plus bas en fonction de votre situation</li>
			<li>Avec des mensualités fixes permettant de planifier sereinement votre budget sur la durée</li>
			</li>
			<li>Bénéficiant d'un taux d'intérêt négocié au plus bas auprès de nos partenaires</li>
		</ul>
		<h2>Une proposition sur mesure</h2>
		<p>N'hésitez pas à contacter notre équipe pour bénéficier d'une <b>offre gratuite et sans engagement</b>. Besoin de rénover votre maison? D'acheter une voiture? Contactez-nous!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php $subtitre="Plus d'explications sur les sujets suivants";include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
