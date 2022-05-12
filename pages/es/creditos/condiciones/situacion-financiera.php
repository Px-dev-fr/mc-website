<?php
$h1="Situación financiera: cuando puedo obtener un crédito?";
$link="credito-salariado.php";
include('includes/first_loaded.php');
$lang="es";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Situación financiera</title>
<meta name="description" content="Multicrédit, otorga créditos a salariados, temporales, autónomos y jubilados AVS/AI. Descubra nuestras condiciones en nuestra rubrica situación financiera."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="situation-financiere";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Desde luego, su <strong>situación financiera</strong> es un factor primordial a la hora de considerar y determinar la obtención o no de su crédito. Para obtener una respuesta positiva a una solicitud de crédito Usted debe:</p>
		<h2>1. Tener un ingreso mensual de 2900 CHF neto como mínimo.</h2>
		<p>En efecto, tendrá que tener un ingreso neto de 2900 CHF al mes para poder solicitar el crédito. Llegado el caso, no dude en declarar también los ingresos de su cónyuge con el fin de incrementar sus posibilidades de obtención del crédito. Por otra parte, usted debe estar en una de las situaciones siguientes:</p><ul>
		<ul>
			<li><a href="credito-salariado.php">Asalariado en una empresa:</a> desde hace <b>tres meses</b> como mínimo</b></li>
			<li><a href="credito-para-temporales.php">Empleado temporales</a>: desde hace <b>seis meses</b> como mínimo</li>
			<li><a href="credito-para-independientes.php">Independiente o empresario</a>: desde hace <b>dos años</b> como mínimo</b></li>
			<li><a href="credito-para-jubilados-avs-ai.php">Rentier AVS / AI</a>: depuis au moins <b>trois mois</b></li>
		</ul>
		<h2>Ser Solvente:</h2>
		<p>Si no posee ningún proceso por falta de pago ni embargo de bienes, en dicho caso usted es una <b>persona solvente</b>. Las situaciones siguientes pueden plantear problemas:</p>
		<ul>
			<li>Si Usted esta en proceso por falta de pago: reembolse primeramente sus deudas y verifique que lo hayan borrado del registro de endeudamiento.</li>
			<li>Si Usted tiene o ha tenido problemas con la <a href="zek.php">ZEK</a>: espere tres meses antes de realizar su solicitud de crédito.</li>
		</ul>
		<p>Si Usted no se considera solvente, en dicho caso puede enviar su solicitud de crédito por medio de su esposo/a (siempre que éste sea solvente).</p>
		<p>Para mas preguntas: no dude en consultar nuestra pagina de <a href="condiciones.php">condiciones para obtener un crédito</a></p>
	<a class="bouton" href="/es/creditos/solicitud-de-credito">Solicitud de Crédito</a>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
