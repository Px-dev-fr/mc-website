<?php
$h1="ZEK: la centrale d'informazione dei prestiti";
$link="/it/credito/richiesta-credito";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>ZEK: la banca dati centrale per la gestione delle informazioni sul credito</title>
<meta name="description" content="Che cos'è la ZEK? Per saperne di più consultate le informazioni che abbiamo raccolto per voi sulla Centrale d'informazione del credito in Svizzera."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
<?php include('includes/header.php');?>
	<?php $image="taux-pret-personnel";$alt="zek";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct" class="Full">

		<p>La <strong>ZEK</strong> è spesso citata dalle agenzie di credito. Vi proponiamo qui di seguito una spiegazione di cosè la ZEK, del ruolo che ricopre nel corso di una richiesta di credito e delle modalità da seguire per richiedere eventuali informazioni presso questo ente. </p>
		<h2>Che cos'è la ZEK?</h2>
		<p>La ZEK, o Centrale d'informazione del credito è un organismo svizzero che registra e conserva la traccia di ogni domanda di credito e, più in generale, di tutte le attività legate ai crediti in Svizzera. La ZEK si occupa solamente di soggetti privati, ovvero, di persone fisiche. Ciò significa che se proporrete una domanda di credito a vostro nome, questa sarà registrata presso la ZEK. Se invece la domanda di credito sarà inoltrata a nome della vostra società, la stessa non sarà registrata.</p>
		
		<h2>Qual è il ruolo della ZEK?</h2>
		<p>Una volta presentata una domanda di credito, la banca o l'intermediario provvederanno ad ottenere informazioni sul vostro conto. Se non siete inseriti nel registro ZEK significa che o non avete mai fatto domande di credito, oppure non avete mai avuto problemi di pagamento di fatture legate a un leasing o a una carta di credito. La banca o l'intermediario potranno, altresì, raccogliere informazioni circa i vostri precedenti finanziari e saranno allora in grado di sapere se in precedenza avete ritardato e/o mancato pagamenti e se avete avuto precetti esecutivi, ecc... L'organismo che rilascerà il credito si servirà delle informazioni fornite dalla ZEK anche per determinare se la vostra domanda potrà essere accettata oppure no ed eventualmente a quale tasso.</p>
		
		<h2>È possibile accedere al proprio dossier presso la ZEK?</h2>
		<p>Chiaramente avete il diritto di consultare il vostro dossier personale presso la ZEK. A tal fine è sufficiente collegarsi al <a href="https://www.zek.ch/popup.php?cID=1001">sito della ZEK</a> e completare il formulario online.</p>
		
		<h2>Quali sono i codici della ZEK?</h2>
		<p>Presso la ZEK, ad ogni credito personale corrisponde un'«entrata». Avete un'«entrata» alla ZEK e desiderate sapere a cosa corrisponde? Ciascuna registrazione alla ZEK è presente sottoforma di un codice che riassume le informazioni registrate.</p>
		<p>Codici legati a un credito personale attualmente in corso o passato:</p>
		<ul>
		<li><b>Codice 01:</b> Il saldo del vostro credito è stato trasferito su un'altra fattura</li>
		<li><b>Codice 02:</b> Avete effettuato regolarmente i pagamenti legati a un determinato credito</li>
		<li><b>Codice 03:</b> I vostri pagamenti sono stati prolungati o effettuati con ritardo</li>
		<li><b>Codice 04:</b> Ci sono state misure particolari durante il vostro credito (precetti esecutivi, ecc..)</li>
		<li><b>Codice 05:</b> Perdita: una banca ha perso del denaro a causa di una vostra pratica (siete stati segnalati come cattivi pagatori) </li>
		<li><b>Codice 06:</b> C'è o c'è stato un problema giuridico legato al vostro caso (molto raro)</li>
		</ul>
		
		<p>Codici legati alle fatture dei saldi delle carte di credito:</p>
		<ul>
		<li><b>Codice 21:</b> La vostra carta è stata bloccata o annullata</li>
		<li><b>Codice 22:</b> Un saldo è in corso di pagamento</li>
		<li><b>Codice 23:</b> Perdita: una banca ha perso del denaro a causa di una vostra pratica (siete stati segnalati come cattivi pagatori)</li>
		</ul>
		<a class="bouton" href="/it/credito/richiesta-credito">Richiesta online</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
