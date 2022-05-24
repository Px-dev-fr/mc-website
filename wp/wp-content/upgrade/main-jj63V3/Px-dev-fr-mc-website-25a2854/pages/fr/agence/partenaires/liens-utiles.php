<?php
$h1="Liens utiles";
$link="/fr/credit/formulaire-demande-credit"; 
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Liens utiles: pour en savoir plus sur le crédit et la finance</title>
<meta name="description" content="Nous vous proposons également quelques liens utiles liés à la finance, aux administrations Suisses et différents articles de lois liés à la finance."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		 <?php echo "<h1>$h1</h1>";?>
		<p>Nous vous proposons également une sélection de liens utiles vers différents sites d'informations liés aux crédits, à différents articles de lois ou procédures administratives.</p>
		<h2>Répertoires web</h2>
		<p>Notre site est présent sur différents listings de sites web liés à la finance, au crédit en général:</p>
		<ul>
			<li>L'annuaire régional en Suisse, <a href="https://regio-business.ch/search?q=cr%C3%A9dit">Regio-business.ch</a>, dans la catégorie "crédits".</li>
			<li><a href="http://www.nosbanques.ch">NosBanques.ch, site de recherche de banques avec recommandations de Clients</a></li>
		</ul>
		<h2>Aller plus loin...</h2>
		<p>Découvrez également quelques liens utiles que nous vous proposons, des outils en ligne pour évaluer le coût d'un prêt ou d'une hypothèque ou autres services intéressants.</p>
		<ul>
			<li><b><a href="https://www.admin.ch/opc/fr/classified-compilation/20010555/index.html" target="new" rel="nofollow">LCC</a></b>: consultez en ligne la Loi sur le Crédit à la Consommation pour en savoir plus sur la législation liée à notre domaine d'activité.</li>
			<li><b><a href="https://www.admin.ch/opc/fr/classified-compilation/19860391/index.html" target="new" rel="nofollow">LCD</a></b>: la Loi contre la Concurrence Déloyale fixe également un certain nombre de cadres légaux pour le crédit à la consommation. A consulter en ligne également.</li>
		</ul>
		<h2>Des questions?</h2>
		<p>Vous avez des questions ou souhaiteriez nous proposer d'autres liens utiles à partager? N'hésitez pas à nous contacter pour nous soumettre votre proposition.</p>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
