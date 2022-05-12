<?php
$h1="Factoring: définition, informations, explications";
$link="/fr/pme/factoring/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Informations, explications: avez-vous des questions sur l'affacturage?</title>
<meta name="description" content="Besoin d'informations sur le factoring? Découvrez notre définition et nos solutions d'affacturage pour PME et indépendants. Conseil sans engagement."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="factoring-information";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		
		<?php include('includes/dsimuls/factoring.php');?>
		<p>L'affacturage, ou factoring, est un produit relativement nouveau sur le marché suisse. Répondant à la problématique du délai qui s'écoule entre facturation et encaissement, cette technique de financement vise à améliorer durablement et significativement les liquidités d'une entreprise. Spécialisés dans ces nouvelles solutions financières, <b>nous apportons notre expérience pour tout besoin d'information</b>, d'explications, ou pour aider à mettre en place un produit <b>adapté aux besoins de votre PME</b>.</p>
		<h2>Définition de l'affacturage</h2>
		<p>La définition de l'affacturage la plus commune est qu'il s'agit d'un <i>transfert de créances d'une entreprise à un organisme financier qui se charge, contre rémunération, de leur recouvrement en supportant les risques de non-paiement</i>. Concrètement, les factures sont cédées à un <i>factor</i> qui se charge alors:</p>
		<ul>
			<li><b>De pré-financer toute facture dans un délai de 24h</b>: l'entreprise reçoit une avance sur toute facture émise</li>
			<li><b>De gérer le poste clients</b>: qui comprend le contrôle des encaissements, et le recouvrement en cas de retard ou défaut de paiement</li>
			<li><b>De supporter le risque de non-paiement</b>: les factures étant couvertes par une assurance-crédit</li>
		</ul>
		<h2>Un exemple: financement d'une facture</h2>
		<p>Une société active dans l'import et la vente de biens manufacturés livre régulièrement des marchandises à un magasin de meubles. Comment fonctionne par exemple le financement d'une facture de 12'000 Chf payable à 60 jours?</p>
		<ul>
			<li>La facture est envoyée au client avec la marchandise, tandis qu'une copie est transmise au factor.</li>
			<li>Le factor verse une avance de <?php echo cf("avance", 12000, 60);?> Chf à l'entreprise dans un délai de 24h. Cette avance correspond à 90% du montant facturé, moins le coût du service (ici <?php echo cf("cout", 12000, 60);?>).</li>
			<li>Lorsque le client paye (à 60 jours), le factor verse le solde de <?php echo cf("solde", 12000, 60);?> Chf à l'entreprise, qui aura touché <b>un total de <?php echo cf("total", 12000, 60);?> Chf</b>.</li>
			<li>En cas de retard ou défaut de paiement, le factor assume le risque et se charge du recouvrement.</li>
		</ul>
		<h2>Les avantages</h2>
		<p>Le factoring pour entreprises se définit comme une technique de financement moderne s'adressant aux PME de toutes tailles et qui permet les bénéfices suivants:</p>
		<ul>
			<li>Une accélération des entrées en liquidités</li>
			<li>Une amélioration du fonds de roulement</li>
			<li>La possibilité de négocier ses prix d'achats en payant ses fournisseurs plus rapidement</li>
			<li>La libération du temps autrement consacré au contrôle des encaissements ainsi qu'au recouvrement</li>
			<li>Une protection contre le défaut de paiement</li>
		</ul>
		<h2>Besoin d'informations ou d'explications sur ce produit?</h2>
		<p>Vous souhaitez en savoir plus sur l'affacturage ou étudier la possibilité de choisir ce type de protection pour votre activité professionnelle? Nos conseillers sont volontiers à votre disposition pour vous renseigner ou vous proposer des produits adaptés.</p>
		<a class="bouton" href="/fr/pme/factoring/demande">Demande de conseil</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
