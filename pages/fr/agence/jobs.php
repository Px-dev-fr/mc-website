<?php
$h1="Postes vacants";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Jobs: travailler chez Multicredit</title>
<meta name="description" content="Chez Multicrédit, nous sommes régulièrement à la recherche de nouveaux collaborateurs! Découvrez nos postes vacants et faites-nous part de votre CV!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Nous ne sommes à la recherche d'aucun nouveau collaborateur ou nouvelle collaboratrice pour le moment! Le cas échéant, n'hésitez pas à nous <a href="https://www.facebook.com/multicredit" target="new" rel="nofollow">suivre sur Facebook</a>! Nous postons systématiquement sur la page de notre sociétés d'éventuelles offres d'emploi.</p>
		<h3>Les avantages chez Multicrédit</h3>
		<p>Travailler au sein de notre agence, c'est disposer d'un travail stable situé dans nos locaux au centre-ville, assorti de conditions flexibles. Multicrédit, c'est:</p>
		<ul>
			<li>L'un des acteurs majeur dans le domaine du crédit en Suisse</li>
			<li>Une agence innovante toujours à la recherche de solutions novatrices</li>
			<li>Une équipe jeune et dynamique parlant de nombreuses langues</li>
			<li>Des formations régulières dispensées par l'entreprise</li>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
