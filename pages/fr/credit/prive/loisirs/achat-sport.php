<?php
$h1="Quel est le prix de votre sport? Avez-vous besoin d'un prêt pour vos loisirs?";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Sports: crédit à l'achat de matériel sportif</title>
<meta name="description" content="Découvrez nos offres de prêts flexibles de 3'000 à 300'000 Chf idéales pour financer l'achat de matériel sportif. Offre gratuite, démarches simplifiées."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-materiel-sportif";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>L'achat de matériel sportif peut vite représenter une charge importante sur le budget d'un particulier, tout particulièrement en fonction de l'activité pratiquée. Multicrédit vous aide à financer vos projets avec une gamme de crédits flexibles qui s'adaptent à chaque situation.</p>
		<h2>Sport et prix de l'équipement</h2>
		<p>Certaines activités sportives nécessitent l'achat d'un équipement onéreux. Qu'il s'agisse de sports nautiques, moto, VTT, golf, etc., le prix de tels sports peut représenter une charge certaine sur votre budget. Avec un prêt privé à l'achat de matériel sportif:</p>
		<ul>
			<li>Vous définissez le montant nécessaire pour concrétiser vos achats</li>
			<li>Vous choisissez la durée de remboursement envisagée (12 - 84 mois</li>
			<li>Nous prenons en charge votre dossier de manière rapide, gratuite et confidentielle</li>
			<li>Nous vous proposons une offre au meilleur taux du marché</li>
		</ul>
		<h2>Financez simplement votre équipement sportif</h2>
		<p>Multicrédit vise avant tout la simplicité pour nos clients. Pour cette raison, notre équipe prend en charge votre dossier de A à Z et négocie auprès des banques pour vous assurer:</p>
		<ul>
			<li>De meilleures chances de voir votre demande de financement acceptée</li>
			<li>Un meilleur taux d'intérêt</li>
		</ul>
		<h2>Votre offre gratuite et sans engagement</h2>
		<p>Vous envisagez d'acheter du matériel sportif mais il vous manque les fonds nécessaires? Pourquoi ne pas nous confier votre dossier? De manière rapide et confidentielle, nous vous ferons une proposition sans engagement!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
