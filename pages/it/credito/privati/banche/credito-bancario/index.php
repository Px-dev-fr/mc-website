<?php
$h1="Credito bancario: una soluzione di prestito per tutti i nostri clienti";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Prestito: richiedete un credito online</title>
<meta name="description" content="Avete un progetto da realizzare e non avete la disponibilità economica necessaria? Con i nostri servizi otterrete il prestito bancario al miglior tasso sul mercato!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="prestito-bancario";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avete un progetto in mente e state cercando una modalità di finanziamento per realizzarlo? Un <b>prestito bancario</b> può essere la soluzione per far fronte a questo problema! Da Multicrédit mantenere il controllo totale sul vostro budget è facile. Siete voi a scegliere l'importo dei vostri prestiti e la durata del rimborso sulla base delle disponibilità economiche presenti.</p>
		
		<h2>Un prestito bancario su misura</h2>
		<p>Siamo disposti ad aiutarvi per qualsiasi tipo di progetto da realizzare, che sia per la casa, personale o per la vostra famiglia. 
		Scoprite le condizioni e i vantaggi dei nostri prodotti finanziari:</p>
		
		<ul>
			<li>Scelta dell'importo da 3'000 a 300'000 Chf e durata delle rate mensili  da 6 a 84 mesi</li>
			<li>Negoziazione con le banche dei più bassi tassi d'interesse </li>
			<li>Possibilità di estinguere il prestito anticipatamente </li>
			<li>Condizioni favorevoli garantite per tutti i nostri clienti
		</ul>
		
		<h2>Approfittate dei nostri servizi</h2>
		<p>I nostri servizi sono interamente gratuiti e di facilissimo accesso. Vi basta compilare il nostro formulario online qui in basso e inviare la documentazione richiesta. Una volta inoltrata la domanda riceverete entro due giorni un'offerta gratuita e senza nessun impegno. Dal momento dell'accettazione dell'offerta e la firma del contratto di finanziamento, disporrete della somma desiderata <b>entro 14 giorni</b>. Siamo a vostra disposizione per fornirvi tutte le informazioni necessarie alla richiesta del vostro <b>prestito bancario</b>!</p>
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
