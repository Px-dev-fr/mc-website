<?php
$h1="Besoin d'un prêt pour votre maison? Nous finançons vos rénovations";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Travaux maison: prêt travaux au meilleur taux</title>
<meta name="description" content="Financez simplement vos travaux de rénovations et achats de mobilier avec un prêt qui s'adapte à vos besoins. Offre gratuite de 3'000 à 300'000 Chf."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-renovation";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous êtes propriétaire d'une maison ou d'un appartement? Vous avez des projets en vue? Achat, aménagements, rénovations, nous vous proposer un crédit travaux maison qui s'adapte aussi bien à vos projets qu'à votre budget. Confiez votre dossier à un spécialiste et bénéficiez des meilleurs taux du marché!</p>
		<h2>Montant et durée</h2>
		<p>Chez Multicrédit, <b>c'est vous qui décidez de la somme que vous souhaitez emprunter</b>. Déterminez le montant du crédit travaux dès 3'000 Chf et jusqu'à 300'000 Chf. Que vous souhaitiez refaire votre toit, réparer votre piscine ou rénover la façade de votre maison, tout est possible! En outre, avec une durée flexible allant de 12 à 84 mois, vous vous assurez de mensualités qui respectent votre budget!</p>
		<h2>Simple, rapide et confidentiel</h2>
		<p>Très simplement, nous vous proposons d'obtenir un prêt travaux au meilleur taux. Contactez-nous ou complétez notre formulaire en ligne en deux minutes seulement. Nous prendrons alors à charge votre dossier:</p>
		<ul>
			<li>Vous nous envoyez les documents nécessaires à l'étude du dossier. Ceux-ci seront traités dans la plus grande confidentialité.</li>
			<li>Nous vous faisons parvenir une proposition de crédit travaux maison rapidement. Celle-ci est bien entendu gratuite et ne vous engage à rien.</li>
			<li>En cas d'acceptation, vous recevez votre argent dans les 14 jours suivant la signature du contrat.</li>
		</ul>
		<h2>Des conditions plus avantageuses</h2>
		<p>De par notre expérience avec nos partenaires bancaires, nous pouvons vous assurer un taux d'intérêt inférieur à la moyenne. Grâce à la négociation directe de chaque dossier auprès des établissements bancaires, nous garantissons en effet:</p>
		<ul>
			<li>Un meilleur taux d'acceptation</li>
			<li>Un taux d'intérêt plus avantageux</li>
		</ul>
		<h2>Confiez-nous votre dossier</h2>
		<p>Intéressé à en savoir plus? Effectuez dès maintenant une demande gratuite et sans obligation:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
