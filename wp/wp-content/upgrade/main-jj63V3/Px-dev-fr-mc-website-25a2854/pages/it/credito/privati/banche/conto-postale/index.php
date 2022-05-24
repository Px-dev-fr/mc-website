<?php
$h1="Conto postale: accreditate il vostro prestito sul conto alla posta";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Conto postale: una soluzione si credito sul vostro conto alla posta</title>
<meta name="description" content="Dei problemi finanziari imprevisti? Avete bisogno di un prestito? Proponiamo crediti da 3'000 a 300'000 Chf, direttamente sul vostro conto postale!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="banque-postale";$alt="conto postale";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Siete svizzeri o stranieri con un permesso di soggiorno e avete un <b>conto postale</b>? Avete ricevuto  una fattura salata inaspettata e non avete liquidità per pagarla? Avreste bisogno di un finanziamento? Affidatevi alla nostra agenzia di credito, i nostri consulenti sono professionisti del settore e potranno offrirvi l'assistenza di cui avete bisogno. Offriamo consulenze personalizzate e gratuite per aiutarvi a trovare un prestito che meglio si adatti alle vostre finanze. Potrete ricevere la somma desiderata direttamente sul vostro conto postale!</p>
		
		<h2>Soluzioni flessibili per tutti</h2>
		<p>Con Multicredit siete voi a scegliere la durata e l'importo del prestito. Il rimborso si adatta perfettamente alla vostra disponibilità economica. Ecco le nostre proposte:</p> 
		<ul>
			<li><b>Prestiti da 3'000 a 300'000 Chf</b> con durata da 12 a 84 mesi 
			<li><b>Negoziamo per voi</b> gli interessi con le banche partner al tasso più conveniente!</li>
			<li><b>Crediti per stipendiati</b>, indipendenti, imprenditori, pensionati e AI</li>
			<li><b>Per svizzeri e stranieri</b> con permesso C, B, L, o G e titolari di una carta di legittimazione</li>
			<li><b>Risposta con conferma</b> di accettazione rapida, entro 24-48 ore 
			<li><b>Ricezione della somma</b> richiesta entro 14 giorni lavorativi, in contanti o sul tuo conto postale!</li>
		</ul>
		
		<p>Le nostre offerte sono gratuite e senza impegno da parte vostra. Sentitevi liberi di accettare o rifiutare la nostra proposta!</p>
		
		<h2>Costruite il vostro prestito su misura sul vostro conto postale</h2>
		<p>Riempite ora il formulario di richiesta online. In pochi minuti inoltrerete la vostra domanda e successivamente sarete ricontattati dai nostri consulenti con un'<b>offerta gratuita e senza nessun obbligo</b> da parte vostra! Una volta firmato il contratto, ricevete entro 14 giorni, il prestito direttamente sul vostro conto postale!</p>
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
