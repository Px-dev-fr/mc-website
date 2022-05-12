<?php
$h1="Conto privato: un prestito personale  direttamente sul vostro conto";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Conto privato: chiedete un prestito bancario</title>
<meta name="description" content="Volete ottenere un credito direttamente sul vostro conto privato? Noi vi aiutiamo a trovare il finanziamento su misura per voi. Scoprite le nostre offerte!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="banque-online";$alt="conto privato";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Siete svizzeri, abitate o lavorate in Svizzera e avete un conto presso una <b>banca privata</b>? State attraversando un periodo difficile e avete bisogno di un prestito rapidamente? Avete un progetto in mente e vi manca il capitale per poterlo realizzare? Noi possiamo aiutarvi, scoprite come!</p>
		
		<h2>Banche private e restrizioni</h2>
		<p>Le banche private che propongono delle soluzioni di credito applicano dei criteri molto restrittivi e risulta spesso difficile ottenere il finanziamento sperato. Infatti le banche pretendono generalmente un reddito annuo minimo e si informano, generalmente, sugli antecedenti finanziari del richiedente presso la ZEK per poter valutare l'idoneità della richiesta.</p>
		
		<h2>Quali sono le condizioni di credito?</h2>
		<p>Per ottenere un prestito sul proprio conto privato è necessario sottostare ad alcune condizioni che potrebbero variare da un'istituto di credito all'altro. La nostra agenzia vi aiuta a selezionare la banca privata che fa al caso vostro e <b>alle condizioni che desiderate</b>.</p>
		
		<h2>Come funziona?</h2>
		<p>Semplice, voi non dovete occuparvi praticamente di nulla! Inoltrateci la vostra richiesta nella quale indicate le modalità desiderate per il vostro credito (somma, durata del prestito, ecc.). Procediamo alla <b>valutazione della vostra situazione e del vostro budget</b> e in seguito negoziamo per voi le condizioni del vostro credito con i nostri partner finanziari. In breve tempo vi presenteremo la proposta più conveniente.</p>
		
		<h2>Richiesta online</h2>
		<p>Soli pochi clic vi separano dal vostro credito. Compilate ora il nostro formulario di richiesta online, sarete ricontattati rapidamente da un nostro consulente! Tutti i nostri servizi sono completamente <b>gratuiti</b>, approfittarne non costa nulla!</p>
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
