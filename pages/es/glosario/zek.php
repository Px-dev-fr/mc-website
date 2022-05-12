<?php
$h1="El Zek";
include('includes/first_loaded.php');
$link="/es/creditos/solicitud-de-credito"; 
$lang="es";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>¿Qué es el ZEK?</title>
<meta name="description" content="El ZEK o central de información de crédito, registra y realiza un seguimiento de todos los créditos y registra los pagos o falta de pagos de cada solicitante."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>El ZEK es a menudo citado por las agencias de crédito. Ofrecemos aquí una explicación relativa a la ZEK ¿Cuál es su papel en una solicitud de crédito, y cómo consultar la información disponible en el ZEK.</p>
		<h2>¿Qué es el ZEK?</h2>
		<p>ZEK o central de información de crédito, es un organismos exclusivamente suizo que registra y realiza un seguimiento de todo crédito y, más generalmente cualquier actividad relacionada con los préstamos en Suiza. Le ZEK se interesa sólo las personas privadas. Es decir, si usted está solicitando un crédito a su nombre, se ha registrado en el ZEK. Si usted está solicitando en nombre de su empresa, por ejemplo, su nombre no será registrado.</p>
		<h2>¿Cuál es el papel de ZEK?</h2>
		<p>Cuando usted solicita un préstamo (en un banco o broker), lo primero que el prestamista hará es ir a informarse sobre su cuenta en la ZEK. Si usted no tiene ninguna entrada en el ZEK, significa que 1) usted nunca ha hecho una solicitud de crédito y 2) Nunca he tenido un problema con el pago de facturas en relación con un contrato de leasing o una tarjeta crédito. En ZEK, el prestamista puede preguntar acerca de sus antecedentes financieros y será capaz de ver cualquier incumplimiento, retrasos en los pagos de su procesamiento de un préstamo anterior, etc ... La agencia emisora ​​del crédito utilizará la información proporcionada por el ZEK para determinar si su solicitud será aceptada o no, y en caso afirmativo, a qué porcentaje o tasa de interés.</p>
		<h2>¿Puedo ver mi archivo en el ZEK?</h2>
		<p>Por supuesto que Usted tiene derecho a consultar su propio registro en la ZEK. Para ello, basta con ir al sitio <a href="https://www.zek.ch/popup.php?cID=1001">web de la ZEK</a> y completar el formulario en línea.</p>
		<h2>¿Cuáles son los ZEK códigos?</h2>
		<p>Ha ingresado el ZEK, y usted quiere saber a lo que corresponde la entrada? Cada entrada en el ZEK se presenta la forma bajo forma de código que resume la información registrada.</p>
		<p>Los códigos relacionados con un préstamo personal actual o pasado:</p>
		<ul>
		<li><b>Código 01:</b> El saldo de su préstamo ha sido aplazado o enviado en otra factura.</li>
		<li><b>Código 02:</b> Usted a efectuado regularmente los pagos de sus créditos.</li>
		<li><b>Código 03:</b> Sus pagos han tenido largas demoras.</li>
		<li><b>Código 04:</b> Ha habido medidas especiales para su crédito (actas, acuerdos, etc …).</li>
		<li><b>Código 05:</b> Pérdida: El banco ha perdido dinero en su con crédito (mal pagador).</li>
		<li><b>Código 06:</b> Existe o ha existido incertidumbre jurídica relacionada con su caso (muy raro).</li>
		</ul>
		<p>Les codes liés à des factures de soldes de cartes de crédits:</p>
		<ul>
		<li><b>Código 21:</b> Su tarjeta ha sido bloqueada o cancelada</li>
		<li><b>Código 22:</b> Un saldo de su deuda está siendo pagado en cuotas</li>
		<li><b>Código 23:</b> Pérdida: código idéntico al 05 de los crédito (muy raro)</li>
		</ul>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
