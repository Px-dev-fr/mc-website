<?php
$h1="Kämpft Ihr Unternehmen mit mangelnder Liquidität?";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Factoring und Vorfinanzierung: Schnellerer Cashflow dank Factoring</title>
<meta name="description" content="Factoring erlaubt es Ihnen, innerhalb von nur 24h einen Grossteil der Bezahlung aus Ihren Geschäften zu erhalten. Finanzieren auch Sie Ihre Rechnungen vor!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Leidet Ihr Unternehmer an einem Liquiditätsproblem? Trifft die Bezahlung für Ihre Dienste so spät ein, dass Sie kaum genug Liquidität besitzen, um laufende Ausgaben zu begleichen? Dank Factoring <b>erhalten Sie sofort einen Grossteil der Bezahlung aus Ihren Geschäften</b>, da der Factor Ihre Verkaufsrechnungen vorfinanziert. Erfahren Sie mehr!</p>
		<h2>Dank Factoring schneller bezahlt werden</h2>
		<p>Ihre Kunden bezahlen wahrscheinlich innerhalb von 30-90 Tagen, doch Ihre laufenden Ausgaben müssen schneller bezahlt werden. Die Folge ist ein Mangel an Liquidität. Factoring behebt genau dieses Problem auf einfache Art:</p>
		<ul>
			<li>Senden Sie Ihren Kunden eine Rechnung und dem Factor eine entsprechende Kopie.</li>
			<li>Der Factor überweist Ihnen einen <b>Vorschuss von 90% der Rechnungssumme</b> innerhalb von 24h  (abzgl. Kommission)!</li>
			<li>Der Kunde bezahlt daraufhin seine Rechnung direkt beim Factor (Referenznr. geändert).</li>
			<li>Sobald der Kunde diese bezahlt hat, überweist der Factor Ihnen die restlichen 10%.</li>
		</ul>
		<p>Der offensichtliche Vorteil beim Factoring ist, dass Ihr <b>Liquiditätsfluss verschnellert wird</b>. Doch Sie profitieren auch von einem zusätzlichen Schutz, da der Factor sich um die Eintreibung fälliger Rechnungen kümmert! Bei Nichtzahlung müssen Sie sich also <b>nicht mehr um Mahnungen etc. kümmern</b>, da der Factor dies übernimmt.
		
		<h2>Factoring an einem Beispiel erklärt</h2>
		<p>Ein Lebensmittelhersteller verkauft einem grossen Detailhändler Waren im Wert von <b>40'000 CHF</b>. Der bekannte Detailhändler profitiert dabei von einer langen <b>Zahlungsfrist von 90 Tagen</b>. </p>
		<ul>
			<li>Die Kosten für das Factoring hängen u.a.  von der Rechnungshöhe ab, in diesem Fall <?php echo cf("cout", 40000, 90);?> CHF.</li>
			<li>Der Lebensmittelhersteller erhält vom Factor direkt <?php echo cf("avance", 40000, 90);?> CHF innerhalb von 24 Stunden (90% der Rechnung abzgl. Kommission)</li>
			<li>Sobald der Detailhändler seine Rechnung direkt beim Factor beglichen hat, erhält der Lebensmittelhersteller<?php echo cf("solde", 40000, 90);?> CHF (10% des Saldos)</li>
			<li>Aus dem Verkauf erhält der Lebensmittelhersteller also <b><?php echo cf("total", 40000, 90);?> CHF</b>, den Grossteil davon sofort und trägt ein kleineres Risiko von Debitorenverlust.</li>
		</ul>
		
		<h2>Factoring in Europa auf dem Vormarsch</h2>
		<p>In der Schweiz entwickelt sich die Factoring-Branche nur langsam, doch im Rest Europas ist diese Technik bereits etabliert. Beispielsweise nutzen in Grossbritannien 40%, in Italien 30% und in Deutschland 20% der Unternehmen Factoring zur Vorfinanzierung ihrer Rechnungen. Wir setzen uns dafür ein, dass auch in der Schweiz immer mehr Unternehmen <b>von dieser innovativen Finanzierungsart profitieren</b> können! Jeder Factoring-Vertrag wird dabei individuell erstellt und kann von Ihnen angepasst werden, damit nur die Rechnungen Ihrer Wahl vorfinanziert werden. Wir freuen uns auf Ihren Auftrag!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
