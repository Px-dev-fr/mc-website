<?php
$h1="Kreditne kartice";
$link="/sbc/krediti/besplatni-zahtjev"; 
include('includes/first_loaded.php');
$lang="sbc";
?>
<!DOCTYPE html>
<html lang="sbc">
<head>
<title>Kreditne kartice</title>
<meta name="description" content="Imate kreditne kartice i niste u mogućnosti podmiriti sve Vaše račune? Otkrijete koja rješenja Vam nudimo pri otplati Vaših kreditnih kartica."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Kod Multicrédit, mi Vam nudimo otkup iznosa novca na Vašim karticama kojeg ste dužni podmoriti a nema dovoljno sredstava za platiti ga. Otkrijte naše objašnjenja.</p>
		<h2>Što je to otkup kreditnih kartica?</h2>
		<p>Otkup iznosa novca na Vašim kreditnim karticama je <b>plaćanje duga na Vašim kreditnim karticama</b>od strane naše agencije. Mi ćemo isplatiti sav dug koji Vam je ostao i ponuditi Vam krediti sa što manjim kamata. Zajedničkom suradnjom možemo sve postići!</p>
		<h2>Od koje koristi je otkup kreditnih kartica?</h2>
		<p>Ako nemate mogućnost uplatiti iznos kojeg ste prethodno platili Vašim kreditnim karticama, i imate minus na Vašim kreditnim karticama, uvijek postoji mogućnost da zatražite otkup Vašeg minusa i da s nama u suradnji podmirite sva Vaša dugovanja. Kod Cashflex Multicrédit mi Vam nudimo kredite s manjim i povoljnijim kamatama od onih koje ćete morati platiti zbog dugovanja na Vašim kreditnim karticama. Isto tako, odabirom naše ponude, imate sljedeće pogodnosti :</p>
		<ul>
		<li><b>Povoljne kamate</b></li>
		<li>Rok otplate prilagođene Vašoj situaciji: Vi odabirete u kojem vremenskom roku želite isplatiti Vaš kredit, a mi Vam nudimo period <b>od 6 do 84 mjeseca</b></li>
		<li>Nakon isplate Vašeg duga imate mogućnost zatražiti još jedan dodatan kredit<li>
		</ul>
		<h2>Računi na Vašim karticama se počinju nagomilavati?</h2>
		<p>Željeli biste ostvariti otkup Vaših kreditnih kartica i zainteresirani ste za našu besplatnu ponudu bez obveza. Iskoristite našu ponudu i zatražite otkup Vaših kartica na način da ispunite naš obrazac putem interneta.</p>
		<a class="bouton" href="/sbc/krediti/besplatni-zahtjev">Besplatna aplikacija</a>
  </div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
