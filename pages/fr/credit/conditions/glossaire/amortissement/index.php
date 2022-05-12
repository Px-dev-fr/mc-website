<?php
$h1="Amortissement d'un crédit: tout savoir pour rembourser votre emprunt";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Amortissement: remboursez sereinement votre crédit</title>
<meta name="description" content="Définissez vous-même les modalités d'amortissement de votre prêt! Libre choix du montant et de la durée de remboursement. Demandez une offre  gratuite!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="amortissement-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous souhaitez rembourser le montant emprunté dans les meilleures conditions possibles? Chez Multicrédit, non seulement nous nous chargeons de votre dossier lors de l'établissement de la demande, mais nous vous garantissons également un suivi tout au long de la durée contractuelle de l'emprunt.</p>
		<h2>Explications</h2>
		<p>On parle d'amortissement pour désigner <i>le remboursement d'un crédit</i>. Ainsi, dans emprunt de 15'000 Chf sur 24 mois, l'amortissement désigne simplement le fait de rembourser le montant emprunté par plusieurs mensualités sur une durée totale de 2 ans.</p>
		<h2>Les coûts d'un emprunt</h2>
		<p>Au remboursement du montant obtenu, il faut encore ajouter l'intérêt, qui désigne en finalité le coût de l'emprunt lui-même. Au final, l'emprunteur devra payer pour un emprunt:</p>
		<ul>
			<li>Le remboursement du montant obtenu</li>
			<li>L'intérêt lié à l'emprunt, qui dépendra du montant, de la durée et du taux d'intérêt</li>
		</ul>
		<h2>Une seule et même facture</h2>
		<p>Chez Multicrédit, amortissement et intérêt sont réunis au seins de la même facture. L'emprunteur bénéficie donc <b>de mensualités fixes</b> permettant de planifier sereinement son budget sur la durée.</p>
		<h2>Offre gratuite et confidentielle</h2>
		<p>Vous souhaitez en savoir plus sur nos offres ou connaître les modalités  que nous pouvons vous proposer? Nous restons à votre disposition pour vous renseigner. N'hésitez pas non plus à effectuer une demande en ligne <b>gratuite et confidentielle</b> pour recevoir rapidement une offre flexible.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Proposition gratuite</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
