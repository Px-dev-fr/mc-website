<?php
$h1="Patrocinamos o seu clube desportivo";
$link="/pt/credito/pedido-de-credito";
include('includes/first_loaded.php');
$lang="pt";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Patrocinador</title>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
	 <p>A <strong>MultiCrédit</strong> patrocina os clubes desportivos oferecendo equipamentos. Pode contactar-nos para mais informações. </p>
	 <p><a class="bouton" href="mailto:info@cashflex.ch">Contacte-nos por email</a></p>
	 </div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
