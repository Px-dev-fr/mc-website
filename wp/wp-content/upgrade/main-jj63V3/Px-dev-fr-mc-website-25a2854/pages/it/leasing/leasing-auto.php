<?php
$h1="Leasing auto";
$link="/it/leasing/richiesta";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Leasing auto: la migliore soluzione per voi</title>
<meta name="description" content="Volete comprare un'auto nuova,ma non avete la somma necessaria? Il leasing auto è la soluzione giusta! Fate una richiesta a Multicredit, siamo a vostra disposizione!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="leasing-auto";$alt="leasing auto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/leasing.php');?>
		<p>La vostra auto vi ha lasciato a piedi ed è arrivato il momento di cambiarla? Volete acquistare l'auto dei vostri sogni, ma non disponete della liquidità necessaria? Il  <b>leasing auto</b> è una valida soluzione in alternativa ad una richiesta di prestito.</p>
		
		<h2>Un leasing auto con Multicredit</h2>
		<p> Scegliendo la nostra agenzia sarete sicuri di garantirvi la migliore offerta. La nostra equipe si occuperà della vostra pratica, cercando la soluzione più vantaggiosa ai vostri bisogni. Avrete sempre la garanzia di avere: </p>
		<ul>
			
			<li><b>La libera scelta del modello</b> d'auto di cui avete bisogno</li>
			<li><b>Una consulenza specializzata</b> da parte di professionisti del settore finanziario</li>
			<li><b>La ricerca della migliore offerta</b>, negoziando per voi il tasso con i nostri partner bancari</li>
			<li><b>La presa in carica delle pratiche</b> amministrative e di tutta la noiosa parte burocratica </li>
		</ul>
		
		<h2>Richiedete subito un'offerta</h2>
		<p>Se pensate che la soluzione per l'acquisto del vostro nuovo veicolo è scegliere un <b>leasig auto</b>, allora contattateci tramite il nostro formulario online. Prenderemo contatto con voi entro due giorni lavorativi con la nostra migliore offerta! I nostri consulenti sono a vostra disposizione per darvi tutte le informazioni necessarie.</p>
		<a class="bouton" href="/it/leasing/richiesta">Richiesta online</a>
</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
