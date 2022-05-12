<?php
$h1="Le factoring pour entreprises: une technique de financement moderne";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Affacturage entreprise: optimisez vos liquidités grâce au factoring!</title>
<meta name="description" content="Le factoring est idéal pour les entreprises qui cherchent à optimiser de manière durable leurs entrées en liquidités. Profitez des conseils d'un spécialiste!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>L'affacturage pour entreprises est généralement proposé sous la forme d'un <i>pack de services</i> délivrés par un factor. Cette technique de financement moderne vise avant tout à <b>garantir un afflux régulier de liquidités au sein de sa société</b>. Spécialisés dans les produits financiers pour PME de toutes tailles, nous vous renseignons volontiers et vous aidons à financer durablement votre croissance!</p>
		<h2>Une technique de financement moderne pour PME</h2>
		<p>L'affacturage pour entreprises se veut comme une réponse efficace à la problématique du délai qui s'écoule entre facturation et encaissement. De fait, il s'agit d'établir un contrat avec <i>un factor</i> dont le rôle sera d'agir comme intermédiaire dans la relation client-entreprise. Ainsi:</p>
		<ul>
			<li>L'entreprise continue à facturer ses prestations payables à 30, 60 ou même 90 jours. Seul le no de référence change, indiquant le factor comme bénéficiaire.</li>
			<li>Une copie de chaque facture est envoyée au factor.</li>
			<li>Le factor verse une avance de 90% du montant facturé, garantissant par-là même <b>un encaissement sous 24h dès l'émission d'une facture</b>!</li>
			<li>Au paiement du client, le factor verse le solde à l'entreprise.</li>
			<li>En outre, le factor est également en charge du <b>contrôle des paiements</b> et de la <b>récupération des créances échues</b>, permettant un gain important de temps.</li>
			<li>Enfin, toutes les créances émises sont <b>couvertes contre le risque de défaut de paiement</b> grâce à l'assurance-crédit.</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Une entreprise active dans le secteur juridique facture à une autre société ses prestations. Le montant de la prestation s'élève à <b>12'000 Chf, payable dans les 90 jours</b>. Sans passer par un factor, l'encaissement pourrait prendre jusqu'à 90 jours. Grâce au factoring pour entreprise:</p>
		<ul>
			<li>Une copie de la facture est envoyée au factor, qui verse à l'entreprise une avance de 90% du montant moins les frais, soit <?php echo cf("avance", 12000, 90);?> Chf encaissés dans les 24h</li>
			<li>Le client paye normalement à 90 jours, suite à quoi l'entreprise encaisse le solde de <?php echo cf("solde", 12000, 90);?> Chf</li>
			<li>Au total, l'entreprise reçoit du factor <b>un montant de <?php echo cf("total", 12000, 90);?> Chf</b>, pour un coût de service de <b><?php echo cf("cout", 12000, 90);?> Chf</b></li>
		</ul>
		<h2>Assurez la pérennité de votre entreprise</h2>
		<p>Vous souhaitez <b>accélérez vos encaissements</b> ou <b>protéger votre activité contre les retards de paiement</b> de votre clientèle? Nous pouvons vous proposer des solutions adaptées. Profitez d'un conseil spécialisé par un expert!</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
