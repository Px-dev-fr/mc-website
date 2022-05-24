<?php
$h1="Kunden Ratenzahlung anbieten ganz ohne Risiken";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Ratenzahlung anbieten: So steigt Ihr Umsatz</title>
<meta name="description" content="Kunden zahlen gerne auf Raten. Haben Sie Angst, dass Sie nicht zu Ihrem Geld kommen? Dank B2C-Factoring können Sie Kunden ohne Risiken Ratenzahlung anbieten!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Bezahlen Ihre Kunden am liebsten auf Rechnung und innert mehrerer Monate? Ratenzahlung ist beliebt - doch Verkäufer fürchten sich vor unbezahlten Rechnungen und langsameren Einkünften. Dank B2C-Factoring <b>erhalten Sie Ihren Erlös innert 24 Stunden</b> und können Ihren Kunden risikolos Ratenzahlung anbieten!</p>
		
		<h2>Kunden profitieren und Sie auch</h2>
		<p>Das Funktionsprinzip von <b>B2C-Factoring</b> besteht darin, dass Sie Ihren Verkaufserlös nicht vom Kunden, sondern von Ihrem Geschäftspartner, dem sog. Factor, erhalten. Während der Kunde auf Raten beim Factor bezahlt, erhalten Sie innerhalb kurzer Frist (24-48 Stunden) den Grossteil Ihres Erlöses. Im Detail sieht das Produkt so aus:</p>
		<ul>
			<li>Sie erstellen dem Kunden automatisch eine Rechnung, die er durch 1-3 Raten bezahlt.</li>
			<li>Der Factor überweist Ihnen <b>Ihren kompletten Erlös</b> innerhalb von 24h-48h!</li>
			<li>Ihr Kunde bezahlt den Factor (Referenznr. geändert) über Ihre gesendete Rechnung.</li>
			<li>Das Verlustrisiko übernimmt der Factor für Sie - Garantierte Bezahlung</li>
		</ul>
		<p>Für Ihre Kunden ändert sich nichts. Abgesehen von einer kleinen Gebühr für die Ratenzahlung müssen sie keine Mehrkosten bezahlen und profitiert von längeren Zahlungszielen. Ihre Kunden bevorzugen dies - und <b>Ihr Umsatz steigt laut Studien um 10%-15%</b>.</b>
		
		<h2>Ein Beispiel für Sie</h2>
		<p>Familie Müller kauft in einem Online-Shop Sportartikel für die Eltern und die Kinder im <b>Wert von 600 CHF</b> (inkl. Lieferung). Sie entscheidet sich, die Ratenzahlung zu wählen und bezahlt pro Monat 204 CHF. Dank B2C-Factoring profitiert der Verkäufer:</p>
		<ul>
			<li>Eine Rechnung von <?php echo cf("facture", 600, 30, "b2c");?> Chf wird automatisch erstellt und dem Kunden gesendet. Dieser erhält 3 Einzahlungsscheine zu 204 CHF, einen für jeden Monat.</li>
			<li>Der Verkäufer profitiert von einem Vorschuss von <b><?php echo cf("avance", 600, 30, "b2c");?> Chf</b> (innerhalb von max. 1-2 Tagen).</li>
			<li>Die Factoring-Kosten betragen <b>nur <?php echo cf("cout", 600, 30, "b2c");?> Chf für den Verkäufer</b> und <?php echo cf("client", 600, 30, "b2c");?> Chf für den Kunden.</li>
		</ul>
		<p>Studien zeigen, dass bis zu 70% der Kundschaft am liebsten per Rechnung bezahlen. Wer diese Option anbietet, hat gegenüber seiner Konkurrenz einen Vorteil bei der Kundenbindung!</p>
		
		<h2>Einfach in Online-System integrierbar</h2>
		<p>Betreiben Sie einen Online-Shop? Das B2C-Factoring-System ist einfach in Ihren Shop integrierbar und lässt Sie Rechnungen automatisch erstellen. <b>Nutzen Sie unser Online-Formular</b>, um vom Service eines Factors zu profitieren und schneller einzukassieren - auch Ihre Kunden profitieren davon.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
