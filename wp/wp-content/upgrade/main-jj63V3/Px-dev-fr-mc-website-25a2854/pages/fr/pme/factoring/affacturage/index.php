<?php
$h1="Solutions d'affacturage en Suisse: nos conseils pour améliorer vos liquidités";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Affacturage en Suisse: solutions et conseils par un spécialiste</title>
<meta name="description" content="Vous êtes une société établie en Suisse? Découvrez nos conseils et solutions de factoring: accélérez vos encaissements pour toute facture émise."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Solution financière encore récente en Suisse, le factoring s'adresse aux sociétés de toutes tailles. Plus qu'un simple produit, il s'agit d'un package qui vise principalement à <b>garantir et sécuriser l'apport en liquidités sur le long terme</b>. Au plus proche de nos clients et spécialisés dans les nouvelles techniques de financement, nous pouvons vous aider à mettre en place des solutions de factoring et vous proposer des conseils pour accélérer vos encaissements.</p>
		<h2>Fonctionnement</h2>
		<p>Le factoring consiste à faire intervenir un troisième acteur dans les relations entre <b>l'entreprise</b> et <b>sa clientèle</b>. Celui-ci, nommé <b>le factor</b> pourra être sollicité à chaque fois que l'entreprise facture un bien ou un service envers un client:</p>
		<ul>
			<li>Une facture est émise pour un client, payable à 30, 60 ou 90 jours tandis qu'une copie est transmise au factor</li>
			<li>Ce dernier verse à l'entreprise une avance de 90% de la facture dans un délai de 48h seulement, moins les frais de services</li>
			<li>Le paiement du client s'effectue sur le compte du factor</li>
			<li>Une fois le montant payé par le client, le factor versera alors le solde (10%) à l'entreprise</li>
			<li>Les éventuels retards de paiement sont également gérés par le factor, qui s'occupe de la récupération des créances échues</li>
		</ul>
		<p>Cette technique permet de <b>recevoir des liquidités sans délai pour chaque facture émise</b> tout en <b>sécurisant ses encaissements</b>.</p>
		<h2>Un exemple de financement de facture par affacturage</h2>
		<p>Une entreprise active dans la vente de machines industrielles vent un bien à une société. La facture s'élève à 6'000 Chf. Grâce à la solution d'affacturage mise en place suite à nos conseils:</p>
		<ul>
			<li>Le client, une grande enseigne, bénéficie d'une facture payable à 90 jours</li>
			<li>Les frais de service du factor s'élèvent ici à <?php echo cf("cout", 6000, 90);?> Chf</li>
			<li>L'entreprise touche immédiatement une avance de <?php echo cf("avance", 6000, 90);?> Chf (90% moins les frais de service)</li>
			<li>Le factor verse le solde de <?php echo cf("solde", 6000, 90);?> Chf à 90 jours (après le paiement du client)</li>
			<li>L'entreprise touche un total de <?php echo cf("total", 6000, 90);?> Chf</li>
		</ul>
		<h2>Besoin d'un conseil en affacturage?</h2>
		<p>Avec des conseillers actifs dans le factoring en Suisse, nous pouvons vous apporter <b>un conseil global</b> débouchant sur <b>des propositions avantageuses</b>. Vous souhaitez <b>accélérer vos encaissements</b> ou vous faites face à des retards de paiement de votre clientèle? Laissez-nous vous proposer des solutions adaptées!</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
