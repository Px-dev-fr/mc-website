<?php
$h1="Collaboratori: i nostri specialisti del finanziamento";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Collaboratori: scoprite chi sono e di cosa si occupano</title>
<meta name="description" content=" La nostra società conta un personale specializzato ed esperto nel settore finanziario. Scoprite chi sono i collaboratori di Multicrédit e di che cosa si occupano!" >
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="courtiers-en-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Multicrédit è prima di tutto un <b>team di collaboratori professionisti, specializzati nel settore finanziario</b>. Siete alla ricerca di una soluzione di finanziamento? I nostri collaboratori sono a vostra completa disposizione per soddisfare le vostre esigenze personali e rispondere a tutte le vostre domande.</p>
		<h2>I nostri collaboratori</h2>
		<p>Scoprite chi sono <b>nostri collaboratori</b>, che si tengono a vostra disposizione nel caso in cui voi abbiate delle domande o bisogno di alcuni chiarimenti.</p>
	<?php include 'includes/collaborateurs.php';?>
		<h2>Chiedete un consiglio professionale!</h2>
		<p>Se siete alla ricerca di una soluzione di finanziamento, i nostri intermediari del credito sono in grado di offrirvi un <b>preventivo gratuito e senza nessun impegno</b> da parte vostra. Ottenete in tutta facilità la somma necessaria alla realizzazione dei vostri progetti. Completate il nostro formulario on-line per ottenere rapidamente un'offerta.</p>
		<a class="bouton" href="/it/credito/richiesta-credito">Richiesta di credito</a>
		</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
