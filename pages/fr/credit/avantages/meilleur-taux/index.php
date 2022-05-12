<?php
$h1="Crédit au meilleur taux par un spécialiste en Suisse";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Le meilleur taux: économisez sur vos intérêts avec nos offres avantageuses!</title>
<meta name="description" content="Nous vous aidons à financer vos projets au meilleur taux! Confiez-nous votre dossier pour une proposition de prêt de 3'000 à 300'000 Chf pour tout projet."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Un prêt personnel n'est pas anodin. Sur la durée, une faible différence dans les intérêts peut mener à une différence importante en terme de coût. Souhaitant permettre à notre clientèle d'obtenir les conditions du marché les plus avantageuses, nous négocions chaque contrat en vue d'obtenir un crédit au meilleur taux.</p>

		<h2>Nos avantages</h2>
		<p>Vous avez un projet à réaliser et vous avez besoin d'une aide financière? Qu'il s'agisse d'acheter une nouvelle voiture, de meubler votre maison, de régler une facture imprévue, <b>nos offres aux meilleurx taux s'adaptent à vos besoins</b>:</p>
		<ul>
			<li><b>Libre choix du montant et de la durée</b>: choisissez le montant nécessaire à votre projet jusqu'à 300'000 Chf maximum avec une durée de remboursement extensible jusqu'à 84 mois.</li>
			<li><b>Economisez sur vos intérêts</b>: Notre équipe fera le maximum pour vous proposer le taux le plus bas possible en négociant directement auprès de nos partenaires bancaires.</li>
			<li>Enfin, <b>des mensualités fixes</b> vous permettent de planifier sereinement le remboursement du prêt sur la durée.
		</ul>
		<h2>Votre dossier entre de bonnes mains</h2>
		<p>Désireux de proposer un service à la fois aimable et professionnel, nous traitons chaque dossier avec le plus grand soins. En choisissant notre service de prêt, vous vous assurez non seulement du meilleur taux possible, mais aussi d'une équipe à votre disposition:</p>
		<ul>
			<li>Pour effectuer un suivi complet de votre dossier</li>
			<li>Pour tout supplément de crédit, baisse de taux (dès 6 mois de paiement minimum), ou offre de rachat</li>
		</ul>
		<h2>Demande gratuite sans engagement</h2>
		<p>Vous souhaitez en savoir plus ou bénéficier dès maintenant d'une offre <b>gratuite et sans engagement</b>? N'hésitez pas à prendre contact rapidement avec notre équipe pour bénéficier de nos services.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
