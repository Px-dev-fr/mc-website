<?php
$h1="Banca di credito: un prestito per tutte le vostre esigenze";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Banca di credito: contattateci per una richiesta di finanziamento</title>
<meta name="description" content="Siete alla ricerca di un finanziamento ma non sapete a chi rivolgervi? Rivolgevi a noi, vi aiutiamo a scegliere la banca di credito che fa al caso vostro!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="banca-di-credito";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>State cercando una <b>banca di credito</b> che vi conceda un prestito adatto al vostro budget? Scoprite le nostre offerte, offriamo un servizio professionale e di qualità per aiutarvi a scegliere l'istituto di credito più adatto alle vostre esigenze. Seguiamo personalmente ogni cliente affinché possa ottenere il prestito che meglio si addice alla propria  situazione economica.</p>
		
		<h2>Scegliere la banca di credito giusta</h2>
		<p>In materia finanziaria le leggi svizzere sono precise e rigorose, per questo motivo per accedere ad alcuni servizi, come per esempio i crediti, bisogna soddisfare dei criteri molto restrittivi. Noi possiamo aiutarvi a sbrigare facilmente tutte le pratiche  amministrative. Non dovrete occuparvi di nulla! Siamo gli  intermediari tra voi e le banche di credito, negoziamo il vostro prestito e troviamo al vostro posto l'organismo capace di concedervi il finanziamento desiderato alle <b>migliori condizioni</b>!</p>
		
		<h2>Le nostre prestazioni</h2>
		<p> Ecco alcuni dei numerosi vantaggi nella scelta delle nostre prestazioni:</p>
		<ul>
			<li><b>Consigli su misura</b>: vi aiutiamo a scegliere la banca di credito adatta alle vostre esigenze</li>
			<li><b>Rapidità</b>: dalla firma del contratto riceverete la somma richiesta in soli 14 giorni lavorativi</li>
			<li><b>Professionalità</b>: il nostro team specializzato è a vostra disposizione per rispondere a tutte le vostre domande</li>
			<li><b>Tutto gratuito</b>: i nostri servizi sono completamente gratuiti e senza impegno</li>
		</ul>
		
		<h2> Inviate subito la vostra richiesta</h2>
		<p>Il nostro personale specializzato è attivo dal lunedì al venerdì per ricevere le vostre richieste e proporvi la banca di credito più adatta alle vostre esigenze. Compilate subito il formulario online qui in basso. Vi ricontatteremo il prima possibile!</p>
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
