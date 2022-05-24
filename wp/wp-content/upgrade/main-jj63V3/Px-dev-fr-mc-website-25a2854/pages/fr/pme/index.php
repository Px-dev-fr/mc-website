<?php
$h1="Solutions pour PME: financement avec ou sans banques";
$link="/fr/pme/conseil";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Nos solutions de financement pour PME: découvrez nos produits</title>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
<meta name="description" content="Nos solutions pour entreprises s'adaptent à vos besoins: crédits, factoring, assurances, leasing. Bénéficiez d'un conseil sans engagement par un spécialiste." />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $na=true;$mtel="076 412 37 89";include('includes/header.php');?>
	<?php $alt="financement pour PME en Suisse";include('includes/rubriques/pme.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<h2 id="mcth">Simulez le coût de votre futur financement!</h2>
		<div id="mcs">
			<div class="mcc" id="mcc-credit-pme">Crédit<br>PME</div>
			<div class="mcc" id="mcc-leasing">Leasing<br>PME</div>
			<div class="mcc" id="mcc-factoring">Factoring<br>Affacturage</div>		
		</div>
		<div id="ms"></div>	
		<p>Spécialisés dans le financement pour PME, nous pouvons vous apporter notre savoir-faire en matière de solutions spécifiques. Crédit, leasing, factoring, hypothèques ou autres produits, nous cherchons pour vous les meilleures alternatives du marché. Profitez d'un conseil neutre de la part d'un spécialiste et améliorez durablement vos liquidités!</p>
		
		<h2>Des alternatives avec ou sans banques</h2>
		<p>Bien souvent, un problème de liquidités ne possède pas qu'une solution. Vaut-il mieux opter pour un crédit entreprise afin de bénéficier d'un apport de liquidités important, mais qu'il faudra rembourser? Ou vaut-il mieux mettre en place une solution d'affacturage afin d'améliorer ses encaissements? Multicrédit vous propose <b>une large gamme de produits</b> avec ou sans banques à même de financer de manière pérenne votre entreprise.</p>
		
		<h2>Nos différents produits</h2>
		<p>Persuadés que chaque problème possède au moins une solution, nous avons à coeur de vous apporter un conseil neutre et global débouchant sur les meilleures solutions du marché:</p>
		<ul>
			<li><b>Crédits commerciaux</b>: obtenez simplement des liquidités pour tout besoin. Remboursement à court, moyen ou long terme. Vous conservez votre relation bancaire actuelle.</li>
			<li><b>Affacturage / factoring</b>: assurez à votre entreprise une entrée régulière en liquidités grâce au pré-financement de factures et protégez votre activité contre le défaut de paiement de vos débiteurs en Suisse comme à l'étranger.</li>
			<li><b>Leasing entreprise</b>: financez simplement tout bien de production lié à votre activité, ceci sans immobiliser votre capital acquis qui reste disponible pour d'autres besoins.</li>
			<li><b>Hypothèques commerciales</b>: un conseil neutre par un spécialiste vous permettra d'obtenir rapidement une offre hypothécaire pour financer tout projet immobilier lié à votre entreprise.</li>
		</ul>

		<h2>Un conseil individualisé</h2>
		<p>Vous êtes une entreprise établie en Suisse? Vous cherchez un spécialiste pour un produit spécifique lié à votre activié professionnelle? Nos conseillers vous présenteront volontiers <b>nos solutions pour PME</b>. Bénéficiez d'un conseil global et de solutions sur mesure.</p>
		<a class="bouton" href="/fr/pme/conseil">Demande de conseil</a>
	
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<script>
	ajload("credit-pme", "/fr/pme/credit/demande");
	document.getElementById("mcc-credit-pme").onclick = function(e){ajload("credit-pme", "/fr/pme/credit/demande");}
	document.getElementById("mcc-leasing").onclick = function(e){ajload("leasing", "/fr/pme/leasing/demande");}
	document.getElementById("mcc-factoring").onclick = function(e){ajload("factoring", "/fr/pme/factoring/demande");}
</script>
</body>
</html>
