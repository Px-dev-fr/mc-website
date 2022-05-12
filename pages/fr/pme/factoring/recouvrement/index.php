<?php
$h1="Externalisez le recouvrement de vos factures impayées";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Des problèmes de factures impayées? Découvrez nos solutions</title>
<meta name="description" content="Service dédié aux entreprises de toutes tailles, l'externalisation du recouvrement permet un gain de temps et permet la récupération facile des impayés."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Toutes les entreprises font face à un moment où un autre à la problématique du recouvrement des factures impayées. Aux pertes liées au non-paiement d'une créance s'ajoute encore <b>le temps passé à la récupération des montants échus</b>. Spécialisés dans les techniques de financement modernes, nous pouvons vous aider à trouver des solutions de type factoring pour externaliser le service de recouvrement des créances échues tout en garantissant des entrées régulières de liquidités.</p>
		<h2>Affacturage et recouvrement</h2>
		<p>Sous la forme d'un pack <i>all included</i>, l'affacturage, ou factoring, consiste à faire appel à un factor qui interviendra dans la relation entreprise-clientèle. Concrètement, les créances sont cédées en continu au factor. Ce dernier:</p>
		<ul>
			<li>Versera une avance sur toute facture émise à la clientèle (le solde étant versé après le paiement du client)</li>
			<li>S'occupera de vérifier les encaissements et gérera à votre place toutes les procédures de relance clientèle</li>
			<li>Mettra en oeuvre, si nécessaire, les processus liées au recouvrement des factures impayées: relances, arrangements à l'amiable, volet juridique</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Une entreprise active dans le photovoltaïque facture la vente et l'installation de panneaux solaires à une grande enseigne. Le montant de la facture, payable à 90 jours, s'élève à <b>48'000 Chf</b>. Une copie de la facture est envoyée au factor (ou société d'affacturage):</p>
		<ul>
			<li>Le factor verse à l'entreprise dans les 48h une avance de <?php echo cf("avance", 48000, 90);?> Chf, qui correspond à 90% de la facture moins les frais du service (<?php echo cf("cout", 48000, 90);?> Chf).</li>
			<li>En cas de retard de paiement du client, après 90 jours, c'est le factor qui gère l'ensemble des démarches liées au recouvrement de la facture impayée. Cela représente pour l'entreprise un gain de temps conséquent, et permet en outre d'améliorer les chances de récupération des montants échus.</li>
			<li>En cas de défaut de paiement, la facture est en outre assurée grâce à <b>l'assurance-crédit</b>.</li>
		</ul>
		<h2>Liquidités immédiates et récupération des factures impayées</h2>
		<p>Toujours à la recherche de solutions novatrices pour nos clients, nous proposons aux entreprises basées en Suisse des solutions spécifiques pour <b>améliorer ses entrées en liquidités</b>, gagner du temps et se protéger contre les conséquences d'une créance en souffrance. Vous souhaitez en savoir plus et bénéficier des conseils d'un spécialiste? Bénéficiez d'un entretien sans engagement avec un conseiller spécialisé!</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
