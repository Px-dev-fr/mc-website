<?php
$h1=" Raggruppamento carte di credito: Visa, Mastercard e carte di debito";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head> 
<title>Carte di credito: raggruppamento di credito per Visa, Mastercard</title>
<meta name="description" content="I saldi delle vostre carte di credito sono troppo elevati? Multicrédit raggruppa i saldi delle vostre carte di credito insieme al leasing e prestiti personali."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="cartes-de-credit";$alt="Carte di credito";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avete progetti personali o d'affari che volete realizzare, ma avete già debiti in corso e non potete realizzarli? Avete accumulato delle fatture impagate delle vostre carte di credito e siete in difficoltà nel riuscire a saldarle? Nessun problema, il consolidamento debiti è soluzione giusta! Noi di Multicrédit possiamo raggruppare i saldi delle vostre <b>carte di credito</b> ed eventualmente anche accorparla al leasing della vostra auto e ad altri prestiti in corso, trasformando il tutto in un'unica rata mensile ad interessi ridotti. La nostra società è leader nel settore finanziario da <b>oltre 10 anni.</b> I nostri servizi sono affidabili, confidenziali e rapidi.</p>
		
		<h2>Quali sono i vantaggi?</h2>
		<ul>
		    <li>Carte di credito di nuovo <b>subito disponibili</b></li>
		    <li>Pagate tutto in <b>una sola fattura</b></li>
	        <li>Tassi d'interesse <b>più bassi, tra l'8% e il 12,9%</b></li>
			<li>Rate flessibili <b>da 12 a 84 mesi</b></li>
			<li>Trattamento <b>rapido e confidenziale</b></li>
			<li>Consulenza <b>gratuita e senza impegno</b></li>
		</ul>
		
	   <h2>Chiedeteci una consulenza!</h2>
		<p>Avete bisogno di trovare rapidamente una soluzione e siete interessati ad una consulenza gratutita con un nostro specialista in sovraindebitamento? Basta compilare e inviarci il formulario direttamente online. Il nostro team di esperti vi contatterà entro 24-48 ore per proporvi la migliore soluzione adatta alle vostre necessità.
		Siamo a vostra disposizione!</p>
		
		<a class="bouton" href="/it/credito/richiesta-credito">Richiesta online</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
