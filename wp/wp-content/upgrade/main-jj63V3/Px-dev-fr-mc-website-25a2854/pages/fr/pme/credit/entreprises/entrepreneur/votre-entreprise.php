<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Votre entreprise: besoin d'un crédit flexible?</title>
<meta name="Description" content="Un financement d'entreprise chez Multicrédit vous permettra d'obtenir un prêt dont vous définissez les modalités. Notre expert est à votre disposition!"/>
<?php
$h1="Financement sur mesure pour votre entreprise par un spécialiste";
$link="/fr/pme/credit/demande"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $pme=1;$image="financement-entreprise";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>

		<p>Vous êtes à la tête d'une SA, SARL, société en nom propre, ou associé dans une société en nom collectif? Qu'il s'agisse d'investir dans de l'équipement onéreux, d'acquérir de nouveaux véhicules de fonction, ou encore de palier à un manque de liquidité, <b>nous pouvons vous aider</b>. Spécialisés dans le prêt pour PME, nous privilégions les solutions simples et centrées sur vos besoins.</p>
		<h2>Un spécialiste en financement à votre disposition</h2>
		<p>Là où certaines agences exigent de nombreux documents ou procédures administratives, nous <b>simplifions au maximum</b> les demandes pour nos clients. Vous gérez une PME et souhaitez faire appel à nos services? Avec un financement entreprise chez Multicrédit, vous êtes certain de pouvoir:</p>
		<ul>
			<li>Bénéficier d'une <b>offre individualisée</b> qui prenne en compte vos besoins aussi bien que le budget de votre entreprise.</li>
			<li>Choisir vous-même les modalités du prêt: déterminez librement le montant nécessaire pour vos projets, ainsi qu'une durée de remboursement pouvant aller <b>jusqu'à 84 mois</b>.</li>
			<li>Obtenir une <b>offre confidentielle et sans engagement</b>. Sans complication administrative, notre équipe vous proposera rapidement une offre adaptée à vos besoins!</li>
			<li>Profiter d'un taux d'intérêt bas et de mensualités fixes pour vous permettra de planifier votre budget en toute sécurité.</li>
		</ul>
		<h2>Quels que soient vos projets</h2>
		<p>Avec un crédit entreprise chez Multirédit, <b>c'est vous qui déterminez librement</b> l'utilisation de l'argent prêté. Besoin de rénover vos locaux? De renflouer votre trésorerie suite à des difficultés temporaires? D'investir dans du matériel de pointe afin de mieux vous positionner sur le marché? N'hésitez pas à nous faire part de vos projets!</p>
		<h2>Demande en ligne</h2>
		<p>Vous souhaitez en savoir plus sur nos modalités? Contactez-nous ou compléter notre formulaire sécurité. En toute confidentialité, nous vous ferons parvenir une offre au plus vite!</p>
		<a class="bouton" href="/fr/pme/credit/demande">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
