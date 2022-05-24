<?php
$h1="Casa nuova: un credito per costruire la vostra nuova abitazione";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Casa nuova: costruite la casa dei vostri sogni</title>
<meta name="description" content="Volete comprare una casa nuova? Avete trovato quello che fa al caso vostro, ma avete bisogno di un finanziamento? Approfittate subito dei vostri servizi!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="nuova-casa";$alt="casa nuova ";include('includes/img.php');?>
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Volete acquistare una <b>casa nuova</b>? Avete trovato l'abitazione che fa al caso vostro, ma avete bisogno di un sostegno finanziario? La vostra famiglia si è allargata e avete bisogno di più spazio? Un prestito da Multicrédit è la soluzione ideale!</p>
		<h2>Le nostre offerte per una casa nuova </h2>
		<p>L'acquisto o la costruzione di una casa implica anche avere dei capitali  propri che non sempre si hanno a disposizione o che a volte non sono sufficienti a coprire le spese dell'anticipo. Cerchiamo di proporre dei prestiti con delle modalità molto flessibili in modo da renderli accessibili ad un vasto pubblico. Proponiamo finanziamenti a svizzeri e stranieri in possesso di un permesso di soggiorno, indipendentemente dalla situazione professionale. I nostri crediti possono arrivare <b>fino a 300'000 Chf</b> e si indirizzano principalmente a:</p> 
		<ul>
			<li><b>Salariati</b>, fissi o temporanei</li>
			<li><b>Liberi professionisti</b> e imprenditori</li>
			<li><b>Pensionati AVS e AI</b> (fino a 67 anni)</li>
		</ul>
		
		<h2>Come funziona?</h2>
		<p>I nostri servizi sono gratuiti e vi permettono di ottenere le migliori condizioni di prestito possibili senza che vi dobbiate preoccupare di nulla. Infatti siamo noi ad occuparci di tutte le pratiche amministrative. Questo significa che facciamo da intermediari con le banche e negoziamo per voi i tassi di interesse. Tutto questo vi permetterà di ottenere più facilmente e rapidamente il montante desiderato per l'acquisto di una   <b>casa nuova</b>.</p>
		
		<h2>Contattateci subito</h2>
		<p>Desiderate avere un preventivo gratuito? È facile! Basta riempire il nostro formulario online. Vi contatteremo al più presto per confermare la vostra domanda di presito e per proporvi un'<b>offerta gratuita e senza nessun impegno</b> da parte vostra!</p>
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
