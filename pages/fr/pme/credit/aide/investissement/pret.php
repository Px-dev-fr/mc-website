<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Prêt sur mesure: financez tout investissement pour votre PME</title>
<meta name="Description" content="Vous cherchez à financer un investissement pour votre PME? Avec nos prêts investissements, bénéficiez d'une solution de 10'000 à 50'000'000 Chf."/>
<?php
$h1="Prêt investissement";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1;$image="pret-investissement";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Vous êtes à la recherche de liquidités afin de financer des investissements pour votre société? Découvrez nos solutions de prêts pour sociétés! Simples, rapides, pratiques, nos prêts à l'investissements vous permettront d'assurer à votre société le budget nécessaire pour prospérer!</p>
		<h2>Une solution pour chaque situation</h2>
		<p>Chaque société étant unique avec des besoins propres, nous proposons des solutions individualisées. Ainsi, notre offre de prêt à l'investissement s'adapte à vos besoins ainsi qu'à la capacité de remboursement de votre business:</p>
		<ul>
			<li><b>Modalités flexibles</b>: vous déterminez le montant à emprunter nécessaire pour vos investissements. Obtenez un prêt de 10'000 à 300'000 sur une durée de 12 à 84 mois.</li>
			<li><b>Mensualités fixes</b>: quelle que soit la durée de remboursement envisagée, nous vous proposons des mensualités fixes assorties d'un taux d'intérêt des plus avantageux.</li>
			<li><b>Simples, rapide, pratique</b>: avec Multicrédit, vous obtenez une offre très facilement et sans aucune complication administrative. Notre équipe se chargera de tout, et vous pourrez ainsi <b>vous concentrer sur vos projets</b>!</li>
			<li><b>Un prêt idéal pour vos investissements</b>: que vous ayez besoin de rénover vos locaux, de faire l'acquisition de matériel afin de maintenir votre entreprise au mieux de sa compétitivité, ou de liquidités à injecter dans votre trésorerie, nous pouvons vous faire une proposition adaptée à vos besoins!</li>
			<li><b>Solutions sur mesure</b>: nous proposons également en cas de besoin des solutions de rachats de dettes liées à votre entreprise.</li>
		</ul>
		<h2>Une offre en toute simplicité</h2>
		<p>Vous gérez une société et cherchez un financement pour de futurs investissements? N'hésitez pas à nous contacter afin de bénéficier <b>d'une offre confidentielle qui ne vous engage à rien</b>! Effectuez votre demande par téléphone, via notre formulaire, ou contactez-nous pour un rendez-vous avec l'un de nos conseillers!</p>
		<a class="bouton" href="/fr/pme/credit/demande">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
