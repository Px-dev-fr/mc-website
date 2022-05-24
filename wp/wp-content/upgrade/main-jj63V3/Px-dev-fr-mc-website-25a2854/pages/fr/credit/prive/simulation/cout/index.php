<?php
$h1="Quel sera le coût de votre prêt? Nos explications et solutions";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Coût du crédit: découvrez nos solutions de prêts</title>
<meta name="description" content="Quel sera le coût de votre emprunt? Entre taux d'intérêt et mensualité, découvrez nos offres aux meilleurs taux et demandez une offre sans engagement."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="cout-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avant de s'engager sur la voie d'un prêt personnel, il convient de se poser la question primordiale du coût: <b>quel sera le coût de l'emprunt</b>? Profitez des conseils d'un spécialiste et confiez-nous votre dossier pour une analyse de votre budget débouchant sur une proposition qui saura respecter votre capacité de remboursement.</p>
		<h2>Quels sont les coûts liés à un emprunt?</h2>
		<p>Essentiellement, il existe trois sortes de "coûts" lors de la prise d'un crédit personnel. Le remboursement du prêt, les intérêts à payer, et les éventuels autres frais:</p>
		<ul>
			<li>Le remboursement, ou amortissement, consiste à rembourser l'emprunt réalisé</li>
			<li>L'intérêt à payer représente le "coût réel" du prêt, et dépendra du taux d'intérêt, de la durée de remboursement, et du montant emprunté</li>
			<li>Les autres frais sont constitués de frais de dossiers et autres démarches</li>
		</ul>
		<h2>La mensualité</h2>
		<p>La mensualité correspond en finalité au montant mensuel que devra payer l'emprunteur une fois son crédit obtenu. Cette facture mensuelle:</p>
		<ul>
			<li>Est fixe</li>
			<li>Comprent à la fois l'amortissement du prêt et le paiement des intérêts</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Si un particulier emprunt 20'000 Chf sur 24 mois avec un taux d'intérêt de 6.9%, il payera alors une mensualité de <b>892.63 Chf</b> pour un intérêt total de <b>1'423 Chf</b>. Autrement dit:<b>
		<ul>
			<li>24 mensualités fixes de 892.63 Chf font un total de 21'423 Chf</li>
			<li>L'emprunteur rembourse donc son prêt de 20'000 Chf + 1'423 Chf d'intérêt</li>
		</ul>
		<h2>Un coût de crédit réduit grâce à nos services</h2>
		<p>Plus qu'un simple service de conseil en prêts privés, nous vous proposons une prise en charge globale de votre dossier afin de vous faire bénéficier des meilleurs taux du marché. En effet, nous gérons pour vous les étapes administratives liées à votre demande et négocions de meilleurs coûts auprès de nos partenaires bancaires. N'hésitez pas à nous contacter pour bénéficier <b>d'une proposition gratuite et sans engagement</b>.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
