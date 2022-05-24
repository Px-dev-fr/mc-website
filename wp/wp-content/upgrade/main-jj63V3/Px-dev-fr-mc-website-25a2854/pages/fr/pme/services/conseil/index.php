<?php
$h1="Finances pour PME: vos questions - nos réponses";
$link="/fr/pme/conseil";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Vos questions: des problèmes liés aux finances de votre PME?</title>
<meta name="description" content="Un problème liée à votre PME? Nous vous proposons quelques réponses aux questions les plus courantes et restons à votre disposition pour tout besoin." />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="glossaire";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>En Suisse, il existe de nombreux produits spécifiques pour PME et indépendants. Ces solutions ne sont pourtant pas toujours connues, tout particulièrement des petites entreprises ou des PME. Sensibles au fait de rendre ces produits accessibles à tous, nous vous proposons, outre un conseil spécialisé sur demandes, <b>un glossaire PME</b> regroupant différents termes parfois <i>techniques</i> et fréquemment utilisés pour présenter les produits de financement et assurances pour entreprises.</p>
		<h2>Un conseil spécialisé</h2>
		<p>Vous êtes vous-même auto-entrepreneur ou vous gérez une petite ou moyenne entreprises? Vous avez des problèmes liés aux finances de votre PME? Nos conseillers vous renseigneront volontiers sur notre gamme de produits. Simplement et rapidement, bénéficiez d'un conseil spécialisé débouchant <b>sur des solutions avantageuses</b>.</p>
		<a class="bouton" href="/fr/pme/conseil">Demande de conseil</a>
	</div>
	<?php $subtitre="Nos explications sur les sujets suivants";include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
