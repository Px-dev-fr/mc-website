<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Aide à l'investissement: nos solutions pour PME</title>
<meta name="Description" content="Avez-vous besoin d'argent pour votre société? Une aide à l'investissement sous la forme d'un crédit chez Multicrédit vous aidera à atteindre vos objectifs!"/>
<?php
$h1="Aide à l'investissement pour votre société";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1;$image="aide-investissement";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Maintenir son entreprise au meilleur de sa compétitivité n'est pas toujours chose facile. Quel que soit le domaine d'activité, la concurrence est rude et il n'est pas toujours facile de trouver le financement nécessaire pour réaliser ses projets. Chez Multicrédit, nous pouvons vous proposer une <b>aide à l'investissement</b> pour votre société. Quel que soit votre besoin, nous pouvons vous proposer un crédit PME <b>adapté et individualisé</b> qui répondre à vos attentes.</p>
		<h2>Quels sont vos projets?</h2>
		<p>Notre solution d'aide à l'investissement vous permettra d'obtenir le financement nécessaire pour réaliser vos projets professionnels, quels qu'ils soient:</p>
		<ul>
			<li><b>Acquisition de matériel et outillage</b>: vous avez besoin de machines spécialisées liées à votre domaine d'activité?</li>
			<li><b>Rénovation de vos locaux ou investissements immobiliers</b>: vous avez besoin de rénover ou d'agrandir votre surface de production ou de vente?</li>
			<li><b>Injection de liquidités dans votre trésorerie</b>: notre solution d'emprunt pour PME vous aidera également à palier à un manque temporaire de liquidités.</li>
		</ul>
		<h2>Offre confidentielle en toute simplicité</h2>
		<p>Conscients qu'obtenir une solution sous la forme d'un prêt pour investir dans sa société n'est pas toujours facile à obtenir, <b>nous faisons le maximum afin de simplifier nos démarches</b>. En toute simplicité, contactez-nous pour obtenir une offre sans obligation tout en profiter de nos conditions <b>spécialement avantageuses</b>:</p>
		<ul>
			<li><b>Modalités de l'aide</b>: de 10'000 à 300'000 Chf sur 12 à 84 mois.</li>
			<li><b>Taux d'intérêt</b>: fixé au plus bas et assorti de mensualités fixes.</li>
		</ul>
		<h2>Demande en ligne</h2>
		<p>Vous souhaitez obtenir une offre? Rien de plus facile! Effectuez votre demande directement en ligne ou par téléphone. Nous traiterons votre dossier dans les plus brefs délais.</p>
		<a class="bouton" href="/fr/pme/credit/demande">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
