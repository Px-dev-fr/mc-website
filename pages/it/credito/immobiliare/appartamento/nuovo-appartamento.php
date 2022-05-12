<?php
$h1="Credito immobiliare: concedetevi un  nuovo appartamento";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Nuovo appartamento: le soluzioni di credito per voi</title>
<meta name="description" content="Desiderate comprare l'appartamento dei vostri sogni, ma non avete la disponibilità economica necessari? Un prestito da Multicrédit è la soluzione giusta!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-immobilier";$alt="nuovo appartamento";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Avete voglia di cambiare casa? Desiderate un nuovo appartamento?  Multicrédit è specializzata in credito immobiliare. Affidandovi a  noi troverete delle ottime offerte su misura per <b>l'acquisto di un nuovo appartamento</b>!</p>
		
		<h2>Come ottenere un prestito</h2>
		<p>Le nostre offerte sono destinate ad un vasto pubblico e grazie alle nostre condizioni di credito flessibili, tutti possono approfittarne! Accordiamo   prestiti per l'acquisto di un nuovo appartamento fino a 300'000 CHF a:</p>
		<ul>
			<li><b>Stipendiati</b></li>
			<li><b>Pensionati AVS e AI</b></li>
			<li><b>Liberi professionisti</b></li>
		</ul>
		
		<h2>Un finanziamento flessibile</h2>
		<p>Proponiamo le migliori offerte di credito che possiate trovare in Svizzera e abbiamo la soluzione adeguata per finanziare <b>l'acquisto del vostro nuovo appartamento</b>. Grazie a Multicrédit potete approfittare dei seguenti vantaggi:</p>
		<ul>
			<li><b>Valutazione gratuita</b> della vostra situazione finanziaria</li>
			<li><b>Tassi d'interesse bassi</b> per venire incontro alle vostra esigenze</li>
			<li><b>Professionalità</b> del nostro team che vi accompagnerà fino alla fine del contratto </li>
			<li><b>Offerta gratuita</b> e senza impegno della vostra situazione finanziaria</li>
		</ul>
		
		<h2>La vostra richiesta immediata</h2>
		<p>Rendeteci partecipi del vostro progetto! Compilate il nostro formulario online, valuteremo la vostra situazione e le vostre esigenze. In breve tempo riceverete <b>un'offerta su misura</b>. Godetevi presto il vostro nuovo appartamento!</p>
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
