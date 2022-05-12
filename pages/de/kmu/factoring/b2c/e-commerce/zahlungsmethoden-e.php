<?php
$h1="Zahlungsmethoden für Ihren E-Commerce: Sie kassieren sofort ein!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Zahlungsmethoden: Im E-Commerce Rechnungskauf anbieten und sofort einkassieren</title>
<meta name="description" content="Sind Sie im E-Commerce tätig und wollen Ihre Kunden zufriedener machen? Bieten Sie attraktive Zahlungsmethoden an und kommen Sie schneller zu Ihrem Erlös!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Betreiben Sie einen Handel im Bereich E-Commerce? Dann wissen Sie sicher, dass <b>Kunden am liebsten auf Rechnung und durch monatliche Raten bezahlen</b>. Viele Verkäufer nutzen diesen Service aber nicht, da sie höhere Verluste und längere Wartezeiten für die Bezahlung fürchten. Mit B2C-Factoring wird das Problem umgangen: Ihr Verkauf wird vorfinanziert und das Risiko von einem Dritten übernommen! </p>
		
		<h2>Der Factor bezahlt Ihren E-Commerce</h2>
		<p>Neue Zahlungsmethoden in Ihren Onlineshop zu integrieren ist einfach: Beim Rechnungskauf schicken Sie Ihren Kunden Rechnungen, die sie in bis zu 3 Raten bezahlen können. <b>Dabei bezahlt Ihr Partner, der Factor, die Rechnung innert 24-48 Stunden komplett und übernimmt das Ausfallrisiko</b>, da der Kunde beim Factor bezahlt. Sobald Sie die Rechnung verschickt haben, müssen Sie sich um nichts mehr kümmern:</p>
		<ul>
			<li>Ihr Kunde erhält mit seinem Einkauf eine Rechnung bzw. 3 Einzahlungsscheine für Raten.</li>
			<li>Der Factor wird automatisch informiert und <b>bezahlt Ihnen den kompletten Verkauf</b> (abzgl. Servicegebühren)!</li>
			<li>Ihr Kunde profitiert von 30-90 Tagen Zahlungsfrist und bezahlt beim Factor direkt.</li>
			<li>Der Factor kümmert sich um die Zahlungskontrolle und ggf. um das Inkasso der Forderung.</li>
			<li>Sie werden innert 1-2 Tagen bezahlt, gehen kein Risko ein und müssen sich nicht um die Bezahlung des Kunden kümmern!</li>
		</ul>
		<p>Studien zeigen, dass bis zu 70% der Kunden am liebsten auf Rechnung einkaufen. <b>Dadurch kaufen Kunden häufiger bei Ihnen und pro Einkauf mehr</b>. Mit B2C-Factoring erhöhen Sie Ihr Verkaufsvolumen und Ihre Liquidität, während Sie gleichzeitig vor Debitorenverlusten geschützt sind.</b>
		
		<h2>Ihre neuen Zahlungsmethoden: Ein Beispiel</h2>
		<p>Sie nutzen den Service des Factors, um Ihren Kunden Rechnungen bzw. Ratenzahlungen anzubieten und um sofort einzukassieren. Ein Kunde kauft in Ihrem E-Commerce Waren im Wert von 1300 Chf ein (inkl. Lieferung) und wählt die Bezahlung auf Rechnung. Der Ablauf sieht wie folgt aus:</p>
		<ul>
			<li>Sie erstellen online automatisch eine Rechnung von <?php echo cf("facture", 1300, 30, "b2c");?> Chf und schicken sie dem Kunden.</li>
			<li>Der Factor wird informiert und Sie erhalten <b><?php echo cf("avance", 1300, 30, "b2c");?> Chf</b> innerhalb von nur 24-48 Stunden.</li>
			<li>Die <b>Servicekosten betragen nur <?php echo cf("cout", 1300, 30, "b2c");?> Chf für Sie</b> und <?php echo cf("client", 1300, 30, "b2c");?> Chf für Ihren Kunden.</li>
			<li>Der Factor übernimmt das komplette Verlustrisiko - Sie sparen Zeit und Nerven. </li>
		</ul>
		<p>Die Vorfinanzierung von Verkäufen belastet die Beziehung zur Kundschaft erfahrungsgemäss nicht. Neue Zahlungsmethoden über B2C-Factoring schaffen mehr Flexibilität für Ihre Kunden und erhöhen deren Zufriedenheit.</p>
		
		<h2>Umsatzsteigerung von 10-15% im E-Commerce möglich!</h2>
		<p>Kunden schätzen die Möglichkeit, heute einkaufen und später bezahlen zu können. Laut Studien können Anbieter von Rechnungskauf und Vorfinanzierung per Factoring ihren Umsatz um 10-15% erhöhen! Jeder Vertrag wird im Bereich Factoring für Sie speziell ausgearbeitet, weshalb Sie bei uns <b>von einer individuellen Beratung sowie einer umfassenden Finanzanalyse profitieren</b>! Nutzen Sie die Erfahrung unserer Experten, die schon seit 1999 auf dem Markt sind.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
