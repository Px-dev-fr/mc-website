<?php
$h1="Articles de presse et journaux";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Articles</title>
<meta name="description" content="A découvrir: on parle de nous! Découvrez les différents articles de presse parus dans différents journaux et liés à Multicrédit ou à notre activité."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="journal";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Multicrédit, c'est également une présence ponctuelle dans différents articles de presse. Que ce soit à travers un article présentant notre société ou faisant appel à nos compétences pour développer un sujet, nous sommes présents dans différents journaux et quotidiens:</p>
		<ul>
			<li><b>Décembre 2018 - Le Monde Economique: Grand Format</b>: interview de Mr Aslan afin de présenter le factoring comme solution de financement pour PME. <a href="/pdf/fr/12-2018-monde-economique.pdf" target="new">A découvrir ici !</a></li>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
