<?php
$h1="Conto bancario: ottenete un prestito direttamente sul vostro conto";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Conto bancario: tutte le possibilità di richiedere un credito</title>
<meta name="description" content="Avete un conto bancario in Svizzera? Avete bisogno di liquidità per finanziare un progetto? Proponiamo crediti flessibili da 3'000 fino a 300'000 Chf! Approfittatene!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="conto-bancario";$alt="conto bancario";include('includes/img.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avete un <b>conto bancario</b> in Svizzera? Avete  un progetto in mente, un sogno da realizzare, ma non avete la disponibilità economica necessaria? Vi piacerebbe ricevere un credito direttamente sul vostro conto bancario? Da Multicrédit offriamo numerose soluzioni per il finanziamento dei vostri progetti!</p>
		
		<h2>Ottenete un prestito sul vostro conto bancario</h2>
		<p> Vi aiutiamo a soddisfare i vostri desideri grazie a dalle condizioni di prestito flessibili che si adattano ad ogni situazione e ad ogni esigenza. Se siete detentori di un conto bancario in Svizzera potete ottenere un credito fino a 300'000 Chf. Scegliendo una delle nostre soluzioni approfittate di:</p>
		<ul>
		<li><b>Condizioni di prestito flessibili</b>: siete voi a scegliere l'importo e la durata</li>
		<li><b>Condizioni vantaggiose</b>: negoziamo per voi il prestito con le banche partners</li>
		<li><b>Analisi gratuita </b>del vostro budget e della vostra situazione finanziaria</li>
		<li><b>Consigli professionali</b>: il nostro staff è composto solo da esperti del settore </li>
		
		<h2>Fate la vostra domanda online </h2>
		<p>Se inviate la vostra richiesta tramite il nostro modulo online, riceverete una risposta <b>entro solo 24-48 ore</b>. I nostri specialisti faranno del loro meglio per accelerare il più possibile il processo con le banche. Dalla firma del contratto potrete ottenere la somma desiderata in soli 14 giorni, direttamente sul vostro <b>conto bancario</b>!</p>
		
		<p>Approfittare dei nostri servizi è molto semplice, vi basta inoltrare la richiesta direttamente sul nostro sito internet. Potrete ricevere rapidamente un finanziamento vantaggioso. Il preventivo è gratuito e senza impegno!</p>
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
