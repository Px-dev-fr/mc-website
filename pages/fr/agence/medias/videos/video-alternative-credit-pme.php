<?php
$h1="Alternatives au crédit pour PME";
$link="/fr/credit/formulaire-demande-credit?pme=1";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Interview de Mr Aslan: les alternatives aux crédits PME</title>
<meta name="description" content="Quelle est la politique actuelle des banques en termes d'octroi de crédits pour PME, et quelles sont les alternatives aux crédits PME? Interview vidéo."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Les PME ont-elles de plus en plus de peine à accéder au crédit? Quelle est l'influence des restrictions bancaires qui suivent les <i>accords de Bâle III</i> pour les PME souhaitait avoir accès aux marchés du crédit pour financer un projet?</p>
		<p>L'interview de Mr Aslan, réalisée par Mr Thierry Dime, pour Le Monde Economique, vous propose des éléments de réponse.</p>
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/rP9i1EnLZJg" frameborder="0" allowfullscreen></iframe>
		<p>Vous gérez vous-même une PME et souhaiteriez connaître les alternatives existantes pour le crédit PME? N'hésitez pas à nous contacter pour une offre gratuite et sans engagement:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit?pme=1">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
