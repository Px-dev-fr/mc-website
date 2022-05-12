<?php
$h1="Ihren Kunden Rechnungskauf anbieten steigert Ihren Umsatz um 10-15%";
$link="/de/kmu/beratung"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include('includes/meta.php');?>
<title>Wer seinen Kunden Rechnungskauf anbieten kann, wird profitieren</title>
<meta name="description" content="70% der Kunden bezahlen am liebsten auf Rechnung. Dank unserem Produkt können Sie Ihren Kunden den Rechnungskauf anbieten und Ihren Umsatz um 10-15% steigern!"/>

</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
		<?php $image="paiement-facture-client";$alt="Heute noch Rechnungskauf anbieten"; include('includes/img.php');?>
		<?php include('includes/arianne.php');?>
		<div id="mct">
		
		<p>Studien zeigen, dass <b>ca. 70% der Kunden die Rechnung als bevorzugtes Zahlungsmittel wählen</b>. Diese Option in Ihren Online-Shop oder Ihren POS zu integrieren, kann Ihnen deshalb massive Vorteile bringen. Häufig zögern Verkäufer aber, ihren Kunden diese Zahlungsmöglichkeit anzubieten. Unser Produkt ermöglicht hingegen eine risikofreie Integration des Rechnungskaufes in Ihrem Unternehmen!</p>
		
		<h2>Unser Produkt eliminiert das Debitorenrisiko</h2>
		<p>Viele Verkäufer haben Angst, mit einer Bezahlung auf Rechnung ein höheres Risiko tragen zu müssen. Was tut man, wenn der Kunde die Rechnung nicht bezahlt? Auch <b>profitieren Kunden beim Rechnungskauf von 30, 60 oder 90 Tagen Zahlungsfrist</b>, doch der Verkäufer muss länger warten, bis er bezahlt wird. Eine Rechnungsfinanzierung im B2C-Bereich eliminiert diese Risiken, denn:</p>
		<ul>
			<li><b>Sofortiges Einkassieren</b>: Anstelle Ihrer Kunden bezahlt Sie ein Dritter innerhalb von nur 24-48 Stunden!</li>
			<li><b>Kleineres Ausfallrisiko</b>: Sie erhalten den Grossteil Ihres Erlöses, auch wenn Ihr Kunde nicht zahlen kann.</li>
			<li>Inkasso-Optionen: Ihr Partner kümmert sich um Mahnungen und Betreibungen säumiger Kunden.</li>
			<li>Kundenzufriedenheit: Ihre Kundschaft profitiert von längeren Zahlungzielen.</li>
			<li>Umsatzsteigerung: Ihre Conversions erhöhen sich, da Kunden bei Ihnen mit Vorteil einkaufen.</li>
		</ul>
		
		
		<h2>Wie das Produkt funktioniert - Ein Beispiel</h2>
		<p>Ein selbstständiger Händler mit einer Online-Boutique für Sportartikel bietet dank unserer Vermittlung seinen Kunden nun den Rechnungskauf an. Ein Kunde möchte <b>Artikel im Wert von 750 CHF kaufen</b> (inkl. Lieferkosten) und entscheidet sich, auf Rechnung zu kaufen:</p>
		<ul>
			<li>Eine Rechnung über <b><?php echo cf("facture", 750, 30, "b2c");?></b> CHF wird automatisch erstellt und dem Kunden gesendet (750 Chf + <?php echo cf("client", 750, 30, "b2c");?> CHF Gebühren).</li>
			<li>Der Händler erhält innerhalb von max. 1-2 Tagen eine Überweisung von <b><?php echo cf("avance", 750, 30, "b2c");?> CHF</b> (750 CHF - <?php echo cf("cout", 750, 30, "b2c");?> CHF Gebühren).</li>
			<li>Er muss sich nicht mehr um die Zahlungskontrolle und allfällige Mahnungen und Betreibungen bei Zahlungsausfall kümmern.</li>
		</ul>
		<p>Der Händler erhält dadurch einen <b>dreifachen Vorteil</b>: Er erhält fast sofort den Grossteil seines Erlöses, muss sich nicht mehr um die Zahlung des Kunden kümmern und bindet seine Kunden an sich, da diese von einer längeren Zahlungsfrist profitieren!</p>
		
		<h2>Wer den Rechnungskauf anbieten kann, profitiert langfristig</h2>
		<p>Möchten Sie mehr zur Rechnungsfinanzierung im B2C-Bereich erfahren? Unsere Experten stehen Ihnen mit individuellen Beratungsgesprächen zur Verfügung. Multicrédit ist seit <b><?php echo (date("Y")-1999);?> Jahren auf dem Markt</b>, um Selbstständigen die neusten Finanzierungstechniken zu vermitteln - Profitieren Sie mit uns!</p>
		
		<a class="bouton" href="/de/kmu/beratung">Anfrage online</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html> 
