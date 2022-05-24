<?php
$h1="Finanziamento privato: consulenza specializzata e miglior tasso d'interesse";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html> 
<html lang="it">
<head>
<title>Finanziamento personale: affidatevi a Multicredit</title>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
<meta name="description" content="Un finanziamento personale con  una consulenza gratuita da parte di uno specialista del settore. Contattateci per maggiori informazioni, massima discrezione! "/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="Financement pour personnes privées";include('includes/rubriques/prives.php');?>
	<div id="mct">
		<h2 id="mcth">Simulate il costo del vostro futuro finanziamento!</h2>
		<div id="mcs">
			<div class="mcc" id="mcc-credit-prive">Credito<br>privato</div>
			<div class="mcc" id="mcc-hypotheque">Finanziamento<br>ipotecario</div>		
		</div>
		<div id="ms"></div>
		<p>Multicredit è lo specialista del credito in Svizzera, siamo attivi nel settore del <b>finanziamento privato</b> dal 1999. Ci occupiamo della vostra pratica dalla A alla Z e di tutta la parte amministrativa al vostro posto. Affidateci i vostri progetti da finanziare e beneficiate del miglior tasso d'interesse, senza nessuna spesa nascosta.</p>
		
		<h2>Gli specialisti del prestito in Svizzera</h2>
		<p> Il nostro team propone servizi di qualità e vanta un'esperienza decennale al servizio della clientela. Scegliere Multicredit per la vostra richiesta di <b>finanziamento privato</b>, vi permetterà di avere i seguenti vantaggi:</p>
		<ul>
			<li><b>Semplicità</b>: fate la vostra richiesta per telefono, e-mail o tramite il modulo online</li>
			<li><b>Flessibilità</b>: un prestisto privato in Svizzera da 3'000 a 300'000 Chf con un rimborso da 12 a 84 mesi</li>
			<li><b>Rapidità:</b> una volta pervenutaci la richiesta, vi contatteremo entro 24-48 ore</li> 
			<li><b>Confidenzialità:</b>
			trattiamo i vostri dati personali e la vostra documentazione con la massima discrezione</li>
		</ul>
		
		<h2> Un finanzaimento privato per cittadini svizzeri e stranieri</h2> 
		<p>Il nostro punto di forza è la  flessibilità. Adattiamo tutte le richieste di finanziamento privato sulla base delle vostre esigenze. Abbiamo sempre una soluzione per tutti i clienti. I nostri crediti personali si indirizzano principalmente al seguente pubblico:</p>
		<ul>
			<li><b>Stipendiati:</b> fissi o temporanei</li>
			<li><b>Indipendenti:</b> liberi professionisti e imprenditori</li>
            <li><b>Pensionati:</b> AVS e detentori di una rendita AI</li>
			<li><b>Svizzeri e stranieri</b> con permesso B,C,G o carta di legittimazione</li>
			
		<h2>Contattateci per una consulenza</h2>
        <p>Qualunque sia il vostro progetto da finanziare, saremo lieti di esserne partecipi. Il nostro obiettivo è quello di fornire al cliente un consulenza individualizzata al fine di proporre la migliore soluzione presente sul mercato. Volete saperne di più sulle nostre soluzioni di <b>finanziamente privato</b> o avete semplicemente bisogno di un consiglio? Compilate il nostro formulario online e ricevete rapidatamente un offerta di prestito, il tutto gratuitamente e con la massima discrezione!</p>
		
		<a class="bouton" href="/it/credito/richiesta-credito">Richiesta online</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<script>
	ajload("credit-prive", "/it/credito/richiesta-credito");
	document.getElementById("mcc-credit-prive").onclick = function(e){ajload("credit-prive", "/it/credito/richiesta-credito");}
	document.getElementById("mcc-hypotheque").onclick = function(e){ajload("hypotheque", "/it/ipoteche/richiesta");}
</script>
</body>
</html>
