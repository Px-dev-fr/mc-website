<?php
$h1="Appartamento: acquistatene uno facendo richiesta di credito";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Acquisto appartamento: le nostre soluzioni di prestito</title>
<meta name="description" content="State pensando di acquistare un appartamento? I nostri prestiti flessibili si adattano a tutte le situazioni e tutte le esigenze, scegliete il vostro credito!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="immobilier-region";$alt="acquistare appartamento";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avete trovato la casa dei vostri sogni e avete bisogno di un prestito per <b>acquistare un appartamento</b>? Multicrédit, l'esperto dei prestiti personali, può aiutarvi a sfruttare al meglio le possibilità di credito esistenti in Svizzera e a realizzare i vostri progetti per diventare proprietari. </p>
		
		<h2>Acquistare un appartamento con un prestito Multicrédit</h2>
		<p>La nostra società è il vostro partner ideale se desiderate ottenere un prestito per <b>acquistare un appartamento</b>. Ci occupiamo di tutte le pratiche amministrative al vostro posto, Le nostre offerte sono totalmente gratuitee  comprendono:</p>
		
		<ul>
			<li><b>Valutazione</b> del vostro progetto e della vostra situazione finanziaria</li>
			<li><b>Finanziamenti flessibili</b> da 3'000 a 300'000 Chf alle migliori condizioni</li>
			<li><b>Durata del rimborso</b> a scelta da 6 a 84 mesi</li>
			<li><b>Assicurazione</b> per decesso, malattia o disoccupazione</li>
			<li><b>Consigli personalizzati </b> da parte di professionisti  </li>
		</ul>
		
		<h2>Come richiedere un credito per acquistare un appartamento</h2>
		<p> Completate la vostra richiesta online indicando l'importo di cui avete bisogno per acquistare il vostro appartamento e il termine per il rimborso del credito.
		I nostri consulenti vi ricontatteranno in 24-48 ore per proporvi un'offerta su misura al vostro caso.</p>
		
		<h2>Siamo a vostra disposizione</h2>
		<p>Il team Multicredit, composto da professionisti del settore finanziario, risponde volentieri a tutte le vostre domande ed è specializzato per offrire un servizio di qualità. Tutte le informazioni fornite saranno trattate con la massima confidenzialità.</p>
		<a class="bouton" href="/it/credito/richiesta-credito">Richiesta online</a>
</div>
	<?php include('includes/blocks.php');?>
	<?php 
		//include bottom Adress
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
