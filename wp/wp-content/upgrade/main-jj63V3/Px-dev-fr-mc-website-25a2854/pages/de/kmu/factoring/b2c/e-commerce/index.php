<?php
$h1="10-15% Umsatzsteigerung im E-Commerce dank neuen Zahlungsarten!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>E-Commerce: Neue Zahlungsarten erhöhen Ihr Verkaufsvolumen!</title>
<meta name="description" content="Vertreiben Sie per E-Commerce Waren an Ihre Kunden? Möchten diese auf Rechnung bezahlen? Dank neuen Zahlungsarten können Sie Ihren Umsatz um 10-15% steigern!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Möchten Sie Ihren Kunden die Möglichkeit geben, bequem auf Rechnung zu bezahlen und das in bis zu 3 Monatsraten? Dank Factoring <b>im Bereich B2C</b> (Business to customer, Kunden sind Privatpersonen) können Sie Ihren Kunden risikolos den Kauf auf Rechnung anbieten! Mit dieser einmaligen Lösung bieten Sie Ihren Kunden einen attraktiven Service, während Sie gleichzeitig kein Debitorenrisiko durch nichtzahlende Kundschaft eingehen!</p>
		
		<h2>Sie gehen kein grösseres Risiko ein!</h2>
		<p>Viele Unternehmen, die mit Privatkunden zu tun haben, scheuen sich davor, ihre Kunden auf Rechnung bezahlen zu lassen. Was tun, wenn ein Kunde seine Rechnung nicht bezahlt? Dank Factoring erhalten Sie den Grossteil Ihres Erlöses aus dem Verkauf sofort, während Ihr Partner, der Factor, Ihr Debitorenrisiko übernimmt:</p>
		<ul>
			<li>Sie schicken Ihrem Kunden eine Rechnung, die er innerhalb von 1-3 Raten bezahlen kann.</li>
			<li>Sie erhalten <b>Ihren kompletten Erlös innerhalb von 24h-48h</b> (abzgl. Servicegebühren)!</li>
			<li>Der Kunde bezahlt beim Factor zwischen 30 und 90 Tagen (Referenznr. geändert).</li>
			<li>Sollte der Kunde nicht bezahlen können, kümmert sich der Factor um Mahnungen, etc.</li>
			<li><b>Ihr Risiko bleibt gering</b>, da Sie selbst bei insolventer Kundschaft direkt bezahlt werden!</li>
		</ul>
		<p>Ihr Unternehmen erhält <b>im Bereich B2C einen dreifachen Vorteil</b>: Sie erhöhen Ihren Umsatz dank der bei Kunden beliebten Zahlung auf Rechnung, kassieren die verrechneten Beträge schneller ein und <b>verkleinern Ihr Risiko!</b>
		
		<h2>B2C und Rechnungsfinanzierung: Unser Beispiel</h2>
		<p>Ein Online-Shop verkauft einem Kunden Waren im Wert von 2500 CHF auf Rechnung. Der Privatkunde erhält die Ware sogleich und hat die üblichen 30 Tage Zahlungsfrist:</p>
		<ul>
			<li>Eine Rechnung von <?php echo cf("facture", 2500, 30, "b2c");?> Chf wird automatisch erstellt und dem Kunden gesendet (zahlbar durch 1-3 Monatsraten).</li>
			<li>Der Verkäufer erhält einen Vorschuss von <b><?php echo cf("avance", 2500, 30, "b2c");?> Chf</b> (innerhalb von max. 1-2 Tagen).</li>
			<li>Die Servicekosten betragen <b>nur <?php echo cf("cout", 2500, 30, "b2c");?> Chf für den Verkäufer</b> und <?php echo cf("client", 2500, 30, "b2c");?> Chf für den Kunden.</li>
		</ul>
		
		<h2>Im Bereich B2C 10%-15% Umsatzwachstum!</h2>
		<p>Factoring hat in Unternehmen <b>im Bereich B2C grosse Zukunftschancen</b>. Laut Umfragen bevorzugen bis zu 70% der Kundschaft die Bezahlung auf Rechnung. Experten schätzen, dass Unternehmen mit Privatkundschaft dadurch ihren Jahresumsatz um 10%-15% erhöhen können. Dies gekoppelt mit dem minimalen Risiko einer Kundeninsolvenz und der garantierten Bezahlung macht Factoring zur Finanzierungslösung der Zukunft! Wir freuen uns darauf, Sie über die Möglichkeit von Factoring in Ihrem Unternehmen zu informieren.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
