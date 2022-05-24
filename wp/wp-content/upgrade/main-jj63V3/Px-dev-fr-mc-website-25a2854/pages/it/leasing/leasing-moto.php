<?php
$h1="Leasing moto";
$link="/it/leasing/richiesta";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Leasing moto: scegliete la convenienza con Multicredit</title>
<meta name="description" content="Voglia di sfrecciare con vostra nuova moto? State pensando ad un leasing moto? Prendete contatto con Multicredit e scoprite le nostre offerte di leasing" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="credit-moto";$alt="leasing moto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/leasing.php');?>
		<p>State sognando di sfrecciare in sella alla vostra nuova moto? Voglia di scampagnate in tutta libertà? Il leasing è generalmente considerato il metodo di finanziamento più flessibile e il più utilizzato in Svizzera. In effetti, ricorrere a questo servizio, vi permetterà di ottenere un veicolo di qualità, riducendo al minimo l'impatto sul budget. Se non potete permettervi l'acquisto di una moto, nuova o usata, con il <b>leasing moto</b> troverete la soluzione.</p>
		
		<h2>Leasing moto: i vostri vantaggi con Multicrédit</h2>
		<p>Siamo una società composta da professionisti del settore, facciamo da tramite tra i clienti e i nostri partner finanziari. Il nostro obiettivo principale è quello di soddisfare il cliente, proponendo sempre il servizio più adatto alle sue esigenze cercando i migliori vantaggi per lui. Scegliendo la nostra agenzia potrete usufruire  sempre delle seguenti <b>condizioni</b>:</p>
		<ul>
			<li><b>Rapidità</b>: la vostra richiesta di leasing moto sarà valutata in 24 - 48 ore</li>
			<li><b>Facilità</b>: nessuna pratica amministrativa a vosto carico, pensiamo a tutto noi!</li>
			<li><b>Confidenzialità</b>: tutti i vostri dati personali con noi sono al sicuro</li>
		</ul>
		<h2>Condizioni convenienti</h2>
		<p>Selezioniamo per voi il miglior partner bancario per il leasing della vostra nuova moto! Gariantiamo le migliori condizioni possibili e un tasso d'interesse concorrenziale. Negoziamo il tasso d'interesse  al vostro posto, occupandoci personalmente di tutte le noiose pratiche burocatriche, scegliendo sempre la miglior offerta per voi.</p>
		
		<h2>Fate la tua domanda online</h2>
		<p>Volete ricevere gratuitamente e senza impegno un'offerta di leasing per la vostra nuova moto? Non aspettate ancora, riempite il nostro formulario online, vi contatteremo rapidamente con la nostra migliore proposta. La moto dei vostri sogni potrebbere essere a breve tra le vostre mani! </p>
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
