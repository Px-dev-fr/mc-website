<?php
$h1="Concorsi: finanziamo l'organizzazione dei vostri concorsi?";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Concorsi: finanziamo i vostri progetti</title>
<meta name="description" content="Volete organizzare un concorso o avete bisogno di uno sponsor per la vostra associazione regionale o sportiva? Scoprite le nostre soluzioni di sponsorizzazioni! " />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="concours";$alt="concorsi";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Desiderate organizzare un concorso o un evento? Noi di Multicrédit vogliamo partecipare attivamente allo <b>sviluppo e alla crescita  delle attività, dei club sportivi o delle associazioni regionali</b>.</p>
		
		<h2>Come fare?</h2>
		<p>Se siete alla ricerca di una sponsorizzazione per un concorso, un evento sportivo o regionale, saremo lieti di aiutarvi per garantirne il successo. 
		Inviateci in allegato ad ogni richiesta le seguenti informazioni:</p>
		<ul>
			<li>Tipo di organizzazione rappresentata: club sportivo, associazione o organizzazione</li>
			<li>Tipo di concorso da sponsorizzare: informazioni concorrenza, prezzi, termini di partecipazione, pubblico</li>
			<li>Opportunità per la pubblicità: quale forma di pubblicità è più indicata per il concorso? </li> 
			<li>Flyers? Biglietti da visita? Gadgets pubblicitari?</li>
		</ul>
		<h2>Contattateci!</h2>
		<p>Presentateci la vostra <b>richiesta di sponsorizzazione o di finanziamento</b> del vostro progetto, l'analizzeremo volentieri!</p>
		<a class="bouton" href="mailto:info@multicredit.ch">Inviateci una mail</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
