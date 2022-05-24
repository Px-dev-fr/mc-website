<?php
$h1="Affacturage B2B: la garantie d'entrées régulières en liquidités";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Factoring B2B: un conseil sur mesure par un spécialiste</title>
<meta name="description" content="L'affacturage B2B pour entreprise accélère les encaissements pour garantir une entrée régulière de liquidités. Profitez d'un conseil sur mesure!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Vous êtes une entreprise basée en Suisse? Votre clientèle est composée majoritairement d'autres entreprises (<i>business to customer</i>)? Le factoring B2B vous permet d'obtenir simplement <b>une avance sur toute facture émise</b> dans un délai de 24h. Nous vous proposons quelques informations sur ce produit et la possibilité d'obtenir sans engagement un rendez-vous avec un spécialiste qui vous orientera vers une solution adaptée.</p>
		<h2>Assurez vos entrées en liquidités</h2>
		<p>L'affacturage <i>business to business</i>, plus qu'un produit spécifique, désigne plus globalement <b>un ensemble de prestations</b> apportées par un factor et visant à accélérer vos encaissements tout en vous déchargeant de la gestion du poste clients. Concrètement, l'établissement d'un contrat avec un factor vous permet de céder en continu toute créance émise envers la clientèle composée d'autres entreprises et permet les avantages suivants:</p>
		<ul>
			<li><b>Des liquidités sans attendre</b>: vous recevez une avance de 90% des montants facturés (déduction faite des frais de service) dans les 24h dès qu'une facture est émise. Le solde est versé après le paiement du client à 30, 60 ou même 90 jours.</li>
			<li><b>Gain de temps et recouvrement facilité</b>: le factor prend en charge la vérification des encaissements. En cas de besoin, il gère également les procédures de recouvrement et assure une récupération plus facile des créances échues.</li>
			<li><b>Des factures assurées</b>: grâce à l'assurance-crédit, chaque créance est assurée en cas de non-paiement du client.</li>
		</ul>
		<h2>Un exemple: financement d'une facture B2B</h2>
		<p>Une société active dans la formation en entreprises facture ses services suite à l'intervention d'un formateur. Le montant facturé s'élève à 6'000 Chf, payable à 60 jours. Grâce au factoring B2B, une copie de la facture est envoyée au factor:</p>
		<ul>
			<li>Le factor verse à la société une avance de <?php echo cf("avance", 6000, 60);?> Chf dans les 24h.</li>
			<li>Le client paye sa facture à 60 jours. Seul le no de référence change, indiquant le factor comme bénéficiaire.</li>
			<li>Une fois que le factor a encaissé le montant facturé, il verse le solde de <?php echo cf("solde", 6000, 60);?> Chf à l'entreprise.</li>
			<li>Au total, l'entreprise reçoit <?php echo cf("total", 6000, 60);?> Chf de la part du factor, pour un coût de service de <?php echo cf("cout", 6000, 60);?> Chf.</li>
			<li>En cas de retard ou défaut de paiement, c'est le factor qui assume le risque et se charge du recouvrement</li>
		</ul>
		<h2>Bénéficiez des conseils d'un spécialiste</h2>
		<p>Vous souhaitez en savoir plus sur le factoring B2B? Nos conseillers sont volontiers à votre disposition pour vous renseigner et vous proposer des solutions visant à <b>protéger votre poste clients</b>. Contactez-nous pour en savoir plus!</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
