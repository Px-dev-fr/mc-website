<?php
$h1="Die Amortisationstabelle - Was bringt sie dem Verbraucher?";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Amortisationstabelle: Bei uns kostenlos mitenthalten! </title>
<meta name="description" content="Eine Amortisationstabelle zeigt die wichtigsten Informationen zur Rückerstattung Ihres Kredites. Bei uns erhalten Sie dieses Dokument kostenlos mit dem Vertrag!" />
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Eine Amortisationstabelle ermöglicht es, die wichtigsten Details Ihrer Amortisation, d.h. Ihrer Kreditrückzahlung, auf einen Blick einzusehen. Ein solches Dokument kann bei jeder Bank, bei der Sie einen Kredit gemacht haben, angefordert werden - Doch dieser Service kann <b>bis zu 200 CHF kosten</b>! Wenn Sie Ihr Darlehen jedoch über Multicrédit machen, liefern wir Ihre individuelle Amortisationstabelle gratis.</p>
	
	<h2>Was steht in der Amortisationstabelle?</h2>
	<p>Eine Amortisationstabelle besteht aus zwei Elementen. Erstens enthält sie so viele Zeilen, wie Sie Monatsraten für Ihren Kredit bezahlen müssen. Zweitens enthält sie mehrere Spalten, die <b>wichtige Kennzahlen für Ihr Darlehen</b> angeben. Die folgenden Informationen sind in jeder Amortisationstabelle mindestens enthalten:</p>
	<ul>
	<li><b>Nummer bzw. Datum</b>: Ein Kredit wird über mehrere Monatsraten zurückgezahlt. Jede Zeile auf dem Dokument hat eine Nummer, die einer Monatsrate entspricht. Eine Tabelle für einen Kredit auf 12 Monate enthält also 12 Zeilen, einer auf 24 Monate 24 Zeilen, usw.</li>
	<li><b>Zins in CHF</b>: Diese Spalte gibt an, welcher Betrag der Monatsrate für die Zahlung der Zinsen verwendet wird.</li>
	<li><b>Amortisation in CHF</b>: Dies gibt an, welcher Betrag der Monatsrate für die Rückzahlung des Kredites verwendet wird.</li>
	<li><b>Rate in CHF</b>: Diese Zahl entspricht der monatlich zu zahlenden Rate. Diese bleibt immer gleich.</li>
	<li><b>Restbetrag in CHF</b>: Dieser Betrag bleibt nach Ausführung der entsprechenden Zahlung noch offen.</li>
	</ul>
	<p>Schauen Sie sich zum besseren Verständnis die untenstehende Amortisationstabelle für einen Beispielkredit von 10'000 CHF auf 12 Monate zu einem Zinssatz von 8.9% an.</p>
	
	<table id="comparateur">
	<tr>
		<td>Nr.</td>
		<td>Zins</td>
		<td>Amort.</td>
		<td>Rate</td>
		<td>Rest</td>
	</tr>

	<tr>
		<td> 1</td>
		<td> 71.3</td>
		<td> 801.16</td>
		<td> 872.45</td>
		<td> 9198.8</td>
	</tr>

	<tr>
		<td> 2</td>
		<td> 65.59</td>
		<td> 806.87</td>
		<td> 872.45</td>
		<td> 8391.95</td>
	</tr>

	<tr>
		<td> 3</td>
		<td> 59.84</td>
		<td> 812.62</td>
		<td> 872.45</td>
		<td> 7579.35</td>
	</tr>

	<tr>
		<td> 4</td>
		<td> 54.04</td>
		<td> 818.42</td>
		<td> 872.45</td>
		<td> 6760.90</td>
	</tr>

	<tr>
		<td> 5</td>
		<td> 48.21</td>
		<td> 824.25</td>
		<td> 872.45</td>
		<td> 5936.65</td>
	</tr>

	<tr>
		<td> 6</td>
		<td> 42.33</td>
		<td> 830.13</td>
		<td> 872.45</td>
		<td> 5106.55</td>
	</tr>

	<tr>
		<td> 7</td>
		<td> 36.41</td>
		<td> 836.05</td>
		<td> 872.45</td>
		<td> 4270.50</td>
	</tr>

	<tr>
		<td> 8</td>
		<td> 30.45</td>
		<td> 842.01</td>
		<td> 872.45</td>
		<td> 3428.50</td>
	</tr>

	<tr>
		<td> 9</td>
		<td> 24.45</td>
		<td> 848.01</td>
		<td> 872.45</td>
		<td> 2580.45</td>
	</tr>

	<tr>
		<td> 10</td>
		<td> 18.40</td>
		<td> 854.06</td>
		<td> 872.45</td>
		<td> 1726.40</td>
	</tr>

	<tr>
		<td> 11</td>
		<td> 12.31</td>
		<td> 860.15</td>
		<td> 872.45</td>
		<td> 866.25</td>
	</tr>

	<tr>
		<td> 12</td>
		<td> 6.18</td>
		<td> 866.28</td>
		<td> 872.45</td>
		<td> 0</td>
	</tr>

</table>


	<h2>Weitere Informationen</h2>
	<p>Jede gezahlte Monatsrate verringert den noch offenen Kreditbetrag um den Betrag der Rate. Die Monatsrate enthält gleichzeitig einen Teil der zu zahlenden Zinsen und einen Teil der Rückzahlung - <b>Die Monatsrate an sich bleibt aber immer gleich</b>. Was sich aber ändert sind die Beträge, die für Rückzahlung und Zinsen verwendet werden:</p>
	<ul>
	<li>Sobald der Kunde seine erste Rate bezahlt hat, verringert sich seine Kreditschuld.</li>
	<li>Auf den Restbetrag wird der Zinssatz erhoben. Da der Restbetrag nun kleiner ist als der ursprüngliche Kredit, verringern sich die Zinsen bei der nächsten Zahlung.</li>
	<li>Der Zinsteil der Rate nimmt somit mit jeder Zahlung weiter ab.</li>
	<li>Da die Rate aber immer gleich bleibt, muss bei abnehmendem Zinsanteil der Anteil der Amortisation mit jeder Zahlung zunehmen.</li>
	</ul>
	<p>In der obenstehenden Amortisationstabelle ist dieser Trend ersichtlich. Bei Rate Nummer 1 werden von 872.45 CHF 71.3 CHF für die Zinsen und 801.16 CHF für die Rückzahlung verwendet. Bei Rate Nummer 10 werden von demselben Ratenbetrag nur noch 18.40 CHF für die Tilgung der Zinsen verwendet, aber 854.06 CHF für die Amortisation. Für den Kunden hat dies aber keine Bedeutung, er bezahlt immer denselben Betrag.</p>
	
	<h2>Vorzeitige Rückzahlung ist immer möglich</h2>
	<p>Natürlich können Sie Ihren Kredit jederzeit komplett zurückzahlen. Dadurch zahlen Sie immer zu viele Zinsen, die Ihnen aber zurückserstattet werden. Ihre Amortisationstabelle gibt Ihnen darüber Aufschluss: Bei einer kompletten Rückzahlung im bspw. zweiten Monat bezahlt der Kreditnehmer 11 Raten sofort, also 11 x 872.45 CHF = 9'596.95 CHF. Der offene Restbetrag beträgt im zweiten Monat jedoch nur 9198.8 CHF. <b>Sie erhalten die Differenz von 398.15 CHF</b> - Durch eine vorzeitige Rückzahlung zu sparen ist also möglich (dies kann jedoch Servicekosten verursachen).</p>
	</p>
	<p><a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a></p>
	</div>
	
	<style>
#comparateur{
    background: #eee;
    border: 1px solid #3C8200;
    padding: 10px;
    max-width:1000px;
    box-sizing: border-box;
    min-width: 270px;
    margin: auto;
}


#comparateur, #comparateur tr, #comparateur td{font-size:inherit;font-family:inherit;padding:5px;min-width:120px;}
#comparateur tr:not(:first-of-type) td{font-size:0.9em;}

@media screen and (max-width: 800px){ #comparateur td{min-width:50px;}}
@media screen and (max-width: 600px){#comparateur{font-size:0.9em;padding:2.5px;}#comparateur td{padding:0.5px;}} 
@media screen and (max-width: 400px){#comparateur{font-size:0.8em;}} 
</style>

	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
