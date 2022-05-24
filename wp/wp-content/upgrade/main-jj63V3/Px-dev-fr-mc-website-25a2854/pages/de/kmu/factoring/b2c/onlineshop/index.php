<?php
$h1="Attraktivere Zahlungssysteme für Ihren Onlineshop steigern Umsatz";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Onlineshop Zahlungssysteme: B2C-Factoring schafft neue Möglichkeiten</title>
<meta name="description" content="Neue Zahlungssysteme, vor allem Rechnungskauf und Ratenzahlung, steigern den Umsatz und sind mit B2C-Factoring problemlos in Ihren Onlineshop integrierbar."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Es gibt gewisse Zahlungssysteme, die für Kunden attraktiver sind als andere: Bis zu 70% der Kunden bevorzugen die Rechnung als Zahlungsmöglichkeit. Dank B2C-Factoring können Sie <b>risikolos Rechnungskauf auf 1-3 Raten in Ihren Onlineshop integrieren</b> und werden dazu noch sofort bezahlt! Entdecken Sie diese neue Form der Verkaufsfinanzierung!</p>
		
		<h2>Neue Zahlungssysteme erhöhen die Verkaufszahlen</h2>
		<p>Kunden, die eine Zahlungsfrist von 30-90 Tagen erhalten, kaufen in Onlineshops mehr ein. Fürchten Sie sich aber vor unbezahlten Rechnungen und langsamerem Geldfluss? Was tun, wenn ein Kunde doch nicht zahlt? Bei B2C-Factoring werden <b>Ihre Verkäufe von einem sog. Factor finanziert, der Sie unabhängig vom Kunden bezahlt</b> und dies innerhalb von nur 24-48 Stunden! Das Prinzip sieht wie folgt aus:</p>
		<ul>
			<li>Ihr Kunde bestellt bei Ihnen Waren und erhält eine Rechnung in Form von 1-3 Monatsraten.</li>
			<li><b>Der Factor bezahlt Ihnen den kompletten Einkaufspreis innert 24-48h</b> (abzgl. Servicegebühren)!</li>
			<li>Ihr Kunde bezahlt daraufhin direkt beim Factor (Referenznr. geändert).</li>
			<li>Der Factor kümmert sich um die Zahlungskontrolle, Mahnungen, etc.</li>
			<li><b>Sie werden schneller und garantiert bezahlt</b>, auch wenn der Kunde insolvent ist.</li>
		</ul>
		<p>Die Integration neuer Zahlungssysteme in Ihren Onlineshop ist also dank B2C-Factoring risikolos möglich. Ihre Kunden kaufen mehr ein - während Sie schnell und ohne Verlustrisiko bezahlt werden!</b>
		
		<h2>Ein praxisnahes Beispiel</h2>
		<p>Sie betreiben online einen Versandhandel für Kleidung. Ein Kunde bestellt bei Ihnen Waren im Wert von 800 CHF (inkl. Lieferung). Als Factoring-Nehmer profitieren Sie von attraktiven Vorteilen:</p>
		<ul>
			<li>Sie erstellen automatisch eine Rechnung von <?php echo cf("facture", 800, 30, "b2c");?> Chf und schicken Sie dem Kunden (zahlbar durch 1-3 Monatsraten).</li>
			<li>Der Factor bezahlt Ihnen <b><?php echo cf("avance", 800, 30, "b2c");?> Chf</b> innerhalb von max. 1-2 Tagen.</li>
			<li>Ihr Kunde bezahlt seine Rechnung innerhalb von 30-90 Tagen direkt beim Factor.</li>
			<li>Die Servicekosten betragen <b>nur <?php echo cf("cout", 800, 30, "b2c");?> Chf für Sie</b> und <?php echo cf("client", 800, 30, "b2c");?> Chf für den Kunden.</li>
		</ul>
		<p>Dabei ändert sich für Ihren Kunden nichts. Er erhält für einen kleinen Aufpreis die Möglichkeit, 3 Raten zu bezahlen und kauft deshalb tendenziell mehr. <b>Ihr Umsatz kann sich um 10-15% erhöhen
		</b>, indem Sie dieses simple Produkt nutzen.</p>
		
		<h2>Zahlungssysteme einfach in Onlineshop integrierbar!</h2>
		<p>B2C-Factoring lässt sich simpel in Ihr Verkaufssystem integrieren und ermöglicht es Ihnen, Rechnungen automatisch zu erstellen und zu versenden. Unsere Experten stehen Ihnen zu allen technischen und finanziellen Fragen zur Verfügung. Multicrédit arbeitet <b>seit 1999</b> mit Verkäufern zusammen, um ihnen die besten Finanzierungsprodukte zu vermitteln!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
