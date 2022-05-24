<?php
$h1="Crédito al consumo";
$link="/es/creditos/solicitud-de-credito";
include('includes/first_loaded.php');
$lang="es";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>crédito al consumo</title>
<meta name="description" content="¿Necesita un préstamos al consumo? Financie su televisión plasma, cambie el equipo de música ...? Dese el gusto ahora y disfrute de forma inmediata!" />
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credito-consumo";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>¿Necesita un préstamo para cubrir gastos de la vida de todos los días? Con nuestros préstamos al consumo Usted puede disponer del dinero necesario para financiar los bienes de consumo que Usted desee.</p>
		<p>Con nuestros <strong>créditos al consumos</strong> le ayudamos a cubrir gastos imprevistos o a concretizar sus deseos. Le ponemos al alcance de su mano el dinero en efectivo para realizar sus proyectos, sueños e ilusiones.</p>
		<h2>Nuestras condiciones de créditos al consumo</h2>
		<p>Concedemos créditos a partir de 3'000 CHF para realizar sus sueños. Elija la modalidad que más le convenga con las cuotas o plazos de amortización que Usted decida : de <b>12 a 84 meses.</b></p>
		<p>Solicite su <strong>crédito al consumo</strong> a través de nuestro formulario en línea y le haremos llegar cuanto antes una proposición sin compromiso de su parte.</p>
		<a class="bouton" href="/es/creditos/solicitud-de-credito">Solicitud de Crédito</a>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
