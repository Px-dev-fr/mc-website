<?php
$h1="Ratenzahlung für Ihren Onlineshop verfügbar - Sie kassieren sofort ein!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Ratenzahlung: Ihre Kunden im Onlineshop profitieren - und Sie auch</title>
<meta name="description" content="Möchten Sie die Option Ratenzahlung in Ihren Onlineshop integrieren? Dank B2C-Factoring ist dies risikolos möglich und sie erhalten Ihren Erlös innert 24-48h!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Ratenzahlung ist beliebter denn je: Umfragen zufolge bevorzugen 70% der Konsumenten den Kauf auf Rechnung. Möchten auch Sie in Ihrem Onlineshop die Option Ratenzahlung anbieten? <b>Ihre Kunden bezahlen innert 30-90 Tagen und Sie werden sofort bezahlt</b> mit dem Produkt B2C-Factoring. Entdecken Sie die Vorteile der Verkaufsvorfinanzierung!</p>
		
		<h2>Das Risiko übernimmt Ihr Vertragspartner</h2>
		<p>Viele Verkäufer scheuen sich davor, eine Ratenzahlung zu akzeptieren: Zu hoch das Risiko von Verlusten, zu langsam die Einkünfte. Doch B2C-Factoring umgeht diese beiden Probleme gleichzeitig. Das Prinzip ist es, <b>die Zahlung des Kunden über einen sog. Factor vorfinanzieren zu lassen</b>. Dadurch erhalten Sie innerhalb von 24-48 Stunden Ihren Erlös (abzgl. Gebühren) und gehen kein grösseres Risiko ein:</p>
		<ul>
			<li>Sie schicken Ihrem Kunden eine Rechnung in Form von 1-3 Raten für den Einkauf in Ihrem Onlineshop.</li>
			<li>Sie erhalten <b>den kompletten Kaufbetrag innert 1-2 Tagen</b> (abzgl. Gebühren) vom Factor.</li>
			<li>Ihr Kunde bezahlt daraufhin den Factor innert 30-90 Tagen (1-3 Raten).</li>
			<li>Das Risiko eines Zahlungsausfalles bleibt beim Factor - Sie werden in jedem Fall bezahlt.</li>
			<li>Für Ihre Kunden ändert sich nichts - Ihre Einzahlungsscheine werden automatisch angepasst.</li>
		</ul>
		<p>Onlineshop-Betreiber profitieren von der Ratenzahlung über B2C-Factoring. Studien zufolge erlaubt das simple Anbieten von Rechnungskauf eine <b>Umsatzsteigerung von 10%-15%</b> - Nutzen Sie diese Chance!</b>
		
		<h2>Ein Beispiel für vorfinanzierte Ratenzahlung</h2>
		<p>Eine Grossmutter kauft für ihre Enkelkinder zu Weihnachten in Ihrem Onlineshop Artikel im Wert von 300 Chf. Der Kauf auf 3 Monatsraten mit nur geringen Mehrkosten scheint ihr günstig. Für Sie als Factoring-Nehmer sieht die Rechnung wie folgt aus:</p>
		<ul>
			<li>Ihrer Kundin wird automatisch eine Rechnung für <?php echo cf("facture", 300, 30, "b2c");?> Chf geschickt (3 Monatsraten sind  auf Rechnung ersichtlich).</li>
			<li>Der Factor überweist Ihnen <b><?php echo cf("avance", 300, 30, "b2c");?> Chf</b> innerhalb von 24-48h.</li>
			<li>Die Kundin bezahlt 3 Raten à 101 Chf beim Factor innerhalb von je 30 Tagen.</li>
			<li>Die Servicekosten betragen für Sie <b>nur <?php echo cf("cout", 300, 30, "b2c");?> Chf</b> und für Ihre Kundin nur <?php echo cf("client", 300, 30, "b2c");?> Chf.</li>
			<li>Sobald der Factor Sie bezahlt hat, gehen Sie kein weiteres Risiko mehr ein!</li>
		</ul>
		<p>Gegen eine kleine Gebühr profitieren Sie und Ihre Kunden. Sie werden sofort und ohne Risiko bezahlt, während Ihre Kunden von längerer Zahlungsfrist bei kleinen Mehrkosten profitieren!</p>
		
		<h2>Einfach in Ihren Onlineshop integrierbar</h2>
		<p>B2C-Factoring lässt sich simpel in Ihr Verkaufssystem integrieren und lässt Sie Rechnungen automatisch erstellen und versenden. Sie sparen Zeit, während Sie von attraktiven Finanzvorteilen profitieren! Unsere Experten stehen für alle technischen Fragen zum Produkt zu Ihrer Verfügung. Wir freuen uns darauf, Sie kennenzulernen.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
