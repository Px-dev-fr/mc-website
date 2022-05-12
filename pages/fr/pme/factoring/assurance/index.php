<?php
$h1="Assurance crédit: une protection efficace contre les pertes débiteurs";
$link="/fr/pme/conseil";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Assurance-crédit pour PME: indemnisation garantie en cas d'impayé</title>
<meta name="description" content="Votre société fait face à des pertes? L'affacturage et l'assurance crédit permettent une protection efficace contre le défaut de paiement de votre clientèle!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="assurance-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>L'assurance-crédit est un produit spécifique pour PME et vise à <b>protéger votre business contre les pertes liées aux créances impayées</b>. Si ce produit s'inscrit généralement dans le cadre d'un contrat d'affacturage, il peut également être souscrit de manière individuelle. Actifs dans les solutions spécifiques pour entreprises, nous pouvons vous conseiller et vous orienter vers des produits adaptés.</p>
		<h2>Une protection complète contre le défaut de paiement</h2>
		<p>L'assurance crédit, comme son nom l'indique, permet d'assurer les factures émises envers la clientèle et donc <b>de se protéger du risque de non-paiement d'une créance</b>. En outre, ce produit permet de vérifier la solvabilité de sa clientèle avant de s'engager. Il s'agit d'une solution généralement associée au factoring et qui permet de bénéficier d'un ensemble complet de prestations visant à améliorer ses liquidités. Ainsi:</p>
		<ul>
			<li><b>L'affacturage</b>: permet de recevoir une avance sur toute facture émise envers un client</li>
			<li><b>Le recouvrement</b>: permet de récupérer simplement les montants échus des factures clients</li>
			<li><b>L'assurance-crédit</b>: vient compléter les précédentes solutions</li>
		</ul>
		<h2>Un exemple</h2>
		<p>Une société active dans le webmastering et webdesign facture régulièrement à sa clientèle professionnelle ses services pour des montants de 5'000 Chf ou plus. Grâce à l'affacturage et à l'assurance-crédit, une facture par exemple de 7'500 Chf payable en 30 jours sera financée comme suit:</p>
		<ul>
			<li>Une avance est versée par le factor sous 24h - 48h à hauteur de <b><?php echo cf("avance", 7500, 30);?> Chf</b>.</li>
			<li>Le solde de <b><?php echo cf("solde", 7500, 30);?> Chf</b> sera versé après le paiement du client.</li>
			<li>Au final, <b>l'entreprise touche <?php echo cf("total", 7500, 30);?> Chf</b>, soit 7'500 Chf moins le coût de  <?php echo cf("cout", 7500, 30);?> Chf.</li>
			<li>Le factor assume les risques de retard de paiement et se charge du recouvrement si nécessaire.</li>
			<li>Les créances sont en outre assurées grâce à l'assurance-crédit, éliminant de facto les conséquences d'une facture impayée.</li>
			<li>Au final, l'entreprise bénéficie non seulement <b>de liquidités immédiates</b>, mais diminue également le risque lié à des impayés!</li>
		</ul>

		<h2>Demande de conseil</h2>
		<p>Vous êtes une PME établie en Suisse? Vos clients sont constitués <b>majoritairement d'autres entreprises (B2B) ou de privés (B2C)</b>? Nos spécialistes peuvent vous proposer des solutions efficaces pour vous prémunir contre le défaut de paiement de ces derniers. Contactez-nous pour bénéficier d'un conseil sans engagement!</p>
		<a class="bouton" href="/fr/pme/conseil">Contact sans engagement</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
