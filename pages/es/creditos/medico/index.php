<?php
$h1="Crédito médico";
$link="/es/creditos/solicitud-de-credito";
include('includes/first_loaded.php');
$lang="es";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Crédito para el médico</title>
<meta name="description" content="No deje que sus problemas de salud se conviertan en un problema financiero. Si necesita cubrir algún gasto médico imprevisto, solicite un préstamo médico!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credito-medico";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
    <p><i>"La salud no es todo pero sin ella todo lo demás no es nada" (Schopenhauer)</i></p>
		<p><i>"La primera riqueza es la salud" (Ralp W. Emerson)</i></p>
		<p>Los problemas de salud llegan siempre de forma imprevista y generan a menudo dificultades financieras. Concientes de los problemas que ocasiona el diagnostico de una enfermedad, pensamos en Usted y le brindamos un <strong>crédito médico</strong> que le permita asumir los gastos médicos imprevistos en cómodos plazos.</p>
    <h2>Un crédito médico: Su Salud ante todo</h2>
		<p>Algunas prestaciones medicas no están cubiertas por su seguro de enfermedad, en dicho caso resulta útil solicitar un <strong>crédito médico</strong>. Le ofrecemos préstamos con tasas de interés muy competitivas en toda Suiza.</p>
		<h2>Financiamos sus gastos médicos</h2>
		<p>Financiamos sus gastos médicos. Al elegir nuestros préstamos para financiar los gastos médicos, Usted puede optar por la modalidad de crédito más adecuada a sus necesidades: el importe que necesita y la duración del financiamiento!</p>
		<p>Para conocer las modalidades exactas de nuestras prestaciones, solicite ya sin tardar un <strong>crédito médico</strong>. Rellene nuestro formulario de solicitud de crédito en linea. Nos encargamos de contactarlo en 24 horas para un análisis gratuito de su dossier y ofrecerle una oferta sin compromiso!</p>
		<a class="bouton" href="/es/creditos/solicitud-de-credito">Solicitud de Crédito</a>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
