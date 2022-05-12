<?php
$h1="Nuestros créditos en Suiza";
$link="/es/creditos/solicitud-de-credito";
include('includes/first_loaded.php');
$lang="es";
?>
<!DOCTYPE html>
<html lang="es">
<head> 
<title>Nuestros créditos</title>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="nuestros-creditos";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		
		<?php include('includes/dsimuls/credit.php');?>
		
		<p>Aumente su poder adquisitivo con el dinero en efectivo de una agencia líder en créditos personales y con una tasa de interés que negociamos con los bancos asociados.</p>
		<div class="block">
			<a href="/es/creditos/banco-suiza"><img src="https://static.multicredit.ch/images/header/small/banco-suiza.jpg" alt="Banco suiza"><div>Banco suiza</div></a>
			<a href="/es/creditos/credito-agricola"><img src="https://static.multicredit.ch/images/header/small/credito-agricola.jpg" alt="Crédito agricola"><div>Crédito agricola</div></a>
			<a href="/es/creditos/credito-inmobiliario"><img src="https://static.multicredit.ch/images/header/small/credito-inmobiliario.jpg" alt="Crédito inmobiliario"><div>Crédito inmobiliario</div></a>
			<a href="/es/creditos/credito-empresa"><img src="https://static.multicredit.ch/images/header/small/credito-empresa.jpg" alt="Crédito empresa"><div>Crédito empresa</div></a>
		</div>
		<a class="bouton" href="/es/creditos/solicitud-de-credito">Solicitud de crédito</a>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	
	<?php include('includes/last.php');?>
</div>
</body>
</html>
