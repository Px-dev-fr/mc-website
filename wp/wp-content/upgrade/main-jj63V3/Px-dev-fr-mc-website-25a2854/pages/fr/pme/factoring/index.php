<?php
$h1="Découvrez le factoring pour entreprises - accélérez vos entrées en liquidités";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Factoring pour PME: nos solutions pour entreprises</title>
<meta name="description" content="Le factoring pour PME permet le financement rapide de vos factures clientèles. Recevez une avance de 90% das les 48h sur toute facture émise."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Le factoring, ou affacturage, est une techniques de financement visant à <b>assurer l'entrée régulière de liquidités</b> pour les entreprises. Il s'agit d'un produit flexible qui s'adapte à tous types de PME. Spécialisés dans ces nouvelles solutions, nous pouvons vous aider à améliorer durablement votre budget!</p>

		<h2>Le principe du factoring pour PME</h2>
		<p>Une société qui propose à sa clientèle de payer à 60 ou 90 doit gérer financièrement le délai qui s'écoule entre facturation et encaissement. L'affacturage permet alors d'éliminer ce délai grâce aux services d'un <i>factor</i> (ou société d'affacturage). Plus précisément:</p>
		<ul>
			<li>Dès qu'une facture est émise pour un client, une copie de la facture est envoyée au factor</li>
			<li>Ce dernier verse alors à l'entreprise <b>une avance de 90% du montant</b> dans un délai de 1-2 jours maximum, moins le coût du service</li>
			<li>Le client payera alors directement le factor (via le no de référence sur la facture) à 60 ou 90 jours</li>
			<li>A réception du paiement, le factor reverse à l'entreprise le solde des 10% manquants</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Une société active dans la vente de matériel de construction facture des biens pour un total de 9'000 Chf à une PME, la facture étant payable à 60 jours. Grâce à l'affacturage:</p>
		<ul>
			<li>Le factor verse une avance de <b><?php echo cf("avance", 9000, 90);?></b>.- à l'entreprise, qui correspond à 90% du montant facturé moins les frais de service (<?php echo cf("cout", 9000, 90);?>.-)</li>
			<li>Après 60 jours et le paiement du client, la société touche le solde de <b><?php echo cf("solde", 9000, 90);?>.-</b></li>
			<li>Au final, l'entreprise a touché <b><?php echo cf("total", 9000, 90);?>.-</b></li>
			<li>En outre, l'entreprise n'a plus à se soucier du contrôle de l'encaissement ou du problème des créances en souffrance</li>
		</ul>
		<h2>Un pack "all in one"</h2>
		<p>Outre l'affacturage "classique" qui consiste à financer les factures, <b>le factoring entreprises inclut d'autres solutions</b> destinées à faciliter la gestion de l'entreprise et à protéger cette dernière contre les retards ou défauts de paiement. Ainsi, le factor propose également:</p>
		<ul>
			<li><b>L'externalisation du recouvrement</b>: qui consiste à céder les créances au factor, qui se chargera alors de récupérer les montants impayés</li>
			<li><b>L'assurance crédit</b>: qui garantir d'être payé même en cas de défaut de paiement des créanciers</li>
		</ul>
		<h2>Une solution sur mesure</h2>
		<p>Le factoring pour entreprises reste une solution qui doit s'adapter à chaque besoin: chaque proposition est ainsi  individualisée. Passer par un spécialiste comme Multicrédit vous garantit <b>de bénéficier de prestations adaptées au meilleur prix</b>. En cas d'intérêt ou pour plus de précisions, nos conseillers se tiennent volontiers à votre disposition pour vous renseigner et vous proposer une offre individualisée.</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
