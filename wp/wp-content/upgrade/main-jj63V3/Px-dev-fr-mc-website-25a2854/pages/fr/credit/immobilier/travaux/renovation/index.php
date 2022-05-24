<?php
$h1="Prêt pour votre maison ou appartement par un spécialiste";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Rénovation: financez vos travaux avec un emprunt adapté</title>
<meta name="description" content="Découvrez nos offres flexibles et financez tout travaux de rénovation pour votre maison ou appartement. Prêt au meilleur taux jusqu'à 300'000 Chf."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-travaux";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous cherchez à financer des <b>travaux de rénovation</b>? Financez les rénovations de votre maison ou appartement avec Multicrédit vous permettra d'obtenir simplement le montant nécessaire. Confiez-nous votre dossier et bénéficiez d'une proposition gratuite et sans engagement dans les meilleurs délais!</p>
		<h2>Emprunt à la rénovation: quels sont vos besoins?</h2>
		<p>D'une situation à l'autre, les besoins comme le budget peuvent varier considérablement. Conscients de la diversité des projets de chacun, nous proposons à notre clientèle une solution flexible <b>qui s'adapte à vos projets</b>, quels qu'ils soient:</p>
		<ul>
			<li><b>Rénovation de maison</b>: travaux de rénovation, transformation, réparations, ...</li>
			<li><b>Rénovation d'appartement</b>: si par exemple vous souhaitez refaire une salle de bain ou la chambre à coucher de vos enfants</li>
			<li><b>Achat de mobilier</b>: meubles, cuisinières, machines à laver, ...</li>
			<li><b>Autres travaux de rénovation</b></li>
		</ul>
		<h2>Une proposition sur mesure</h2>
		<p>Vous seul connaissez le mieux vos besoins! Tout en prenant en charge le côté administratif de votre demande afin de vous simplifier la vie, nous vous laissons le libre choix des modalités de l'emprunt:</p>
		<ul>
			<li><b>Montant</b>: de 3'000 Chf à 300'000 Chf</li>
			<li><b>Durée</b>: remboursement sur 12 à 84 mois, mensualités fixes</li>
		</ul>
		<h2>Profitez d'un taux plus avantageux</h2>
		<p>Vous cherchez à financer vos projets de rénovation d'appartement ou maison? N'hésitez pas à nous solliciter pour bénéficier d'une offre sans engagement aux meilleurs taux du marché actuel!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
