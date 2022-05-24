<?php
$h1="Des factures à payer pour vos frais de santé? Découvrez nos solutions de financement";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit médical: nous finançons vos frais de santé</title>
<meta name="description" content="Si votre assurance ne couvre pas vos frais médicaux actuels, un crédit médical vous permettra de financer simplement les prestations de votre médecin."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-medical";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Si la plupart des frais médicaux sont en principe couverts par votre assurance maladie, il peut arriver que certaines prestations ne soient pas couvertes. Un prêt privé pour votre sans permettra ainsi de financer des soins dont vous avez besoin en toute simplicité.</p>
		<h2>Notre solution</h2>
		<p>Certaines prestations n'étant pas remboursées par l'assurance, il peut arriver que le financement des soins devienne un problème, en particulier pour les cas suivants:</p>
		<ul> 
			<li>Utilisation de <b>médecines alternatives</b></li>
			<li><b>Chirurgie esthétique</b></li>
			<li>S'il vous manque la couverture complémentaire appropriée</li>
		</ul>
		<h2>Simplicité et rapidité</h2>
		<p>Conscients qu'il ne faut pas transiger avec les problèmes de santé, nous pouvons vous proposer une solution de financement sous la forme d'un emprunt flexible aux conditions avantageuses:</p>
		<ul>
			<li>Demandez une offre <b>gratuite qui ne vous engage à rien</b></li>
			<li>Obtenez votre argent facilement et <b>sans complications</b></li>
			<li>Libre choix de la durée de remboursement <b>jusqu'à 84 mois</b> (soit 6 ans)</li>
			<li>Une fois le contrat signé, vous recevez votre argent <b>dans les 7 jours</b></li>
		</ul>
		<h2>Accessible à tous</h2>
		<p>Vous avez besoin d'un emprunt pour financer des soins pour vous-même ou un membre de votre famille? Que vous soyez Suisse ou étranger travaillant en Suisse avec permis (B, C, L ou G), nous pouvons vous proposer une offre de prêt <b>gratuite et sans engagement</b>.</p>
		<h2>Offre confidentielle</h2>
		<p>Vous êtes intéressé ou souhaitez en savoir plus? N'hésitez pas à nous contacter pour une proposition de prêt! Nos conseillers prendront contact pour vous proposer un devis gratuit sans obligation.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Contact gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
