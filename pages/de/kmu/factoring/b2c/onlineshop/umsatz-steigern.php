<?php
$h1="Durch Rechnungskauf Umsatz in Ihrem Onlineshop steigern";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Umsatz steigern: Führen Sie Ihren Onlineshop zum Erfolg</title>
<meta name="description" content="Kunden bezahlen am liebsten auf Rechnung. Steigern Sie den Umsatz in Ihrem Onlineshop ganz einfach, indem Sie die Bezahlung auf Rechnung risikolos anbieten!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Es gibt verschiedene Methoden, um den Umsatz Ihres Onlineshops zu steigern. Eine davon ist, seinen Kunden attraktivere Zahlungsmethoden anzubieten. <b>Kunden, die auf Rechnung bestellen können, konsumieren im Schnitt mehr als solche, die sofort bezahlen müssen</b>. Fürchten Sie höheres Ausfallrisiko und langsameren Geldfluss? Dank B2C-Factoring kassieren Sie sofort ein und das Risiko übernimmt Ihr Partner!</p>
		
		<h2>Steigern Sie Ihre Verkaufszahlen durch B2C-Factoring</h2>
		<p>Factoring ist eine Finanzierungstechnik, bei der <b>Ihr Partner, der sog. Factor, Ihre Verkäufe anstelle des Kunden innert 24-48 Stunden bezahlt</b>. B2C bedeutet lediglich, dass ein Unternehmen Waren an Privatpersonen verkauft (business to customer). Nicht nur bezahlt der Factor Sie schneller als der Kunde, sondern er übernimmt auch Ihr Ausfallrisiko, da der Kunde direkt beim Factor bezahlt. Sie müssen sich nach Erhalt der Zahlung nicht mehr um die Zahlungskontrolle kümmern:</p>
		<ul>
			<li>Sie verkaufen einem Kunden in Ihrem Onlineshop Waren. Er erhält dafür eine Rechnung.</li>
			<li>1-2 Tage nach der Rechnungssendung <b>erhalten Sie den kompletten Erlös vom Factor</b> (abzgl. Gebühren).</li>
			<li>Ihr Kunde bezahlt direkt beim Factor. Dieser kümmert sich um Zahlungskontrolle, Mahnungen, etc.</li>
			<li>Sie werden schneller bezahlt, gehen kein Risiko ein und sparen Zeit beim Forderungsmanagement!</li>
		</ul>
		<p>Für Ihre Kunden ändert sich nichts. Sie bezahlen einfach per Einzahlungsschein direkt beim Factor (Referenznr. angepasst) und profitieren von 30 Tagen Zahlungsfrist. Ihre Kundschaft ist zufriedener und kauft mehr - während Sie sofort einkassieren!</b>
		
		<h2>Ein Beispiel für B2C-Factoring</h2>
		<p>Sie betreiben einen Onlineshop, der hochwertige Kleidung verkauft. Ein Kunde bestellt bei Ihnen Waren im Wert von 2500 Chf (inkl. Lieferung) und entscheidet sich für einen Kauf auf Rechnung. Als Factoring-Nehmer ist der Ablauf für Sie einfach und schnell:</p>
		<ul>
			<li>Online erstellen Sie automatisch eine Rechnung von <?php echo cf("facture", 2500, 30, "b2c");?> Chf und schicken diese dem Kunden.</li>
			<li>Der Factor wird automatisch benachrichtigt und überweist Ihnen <b><?php echo cf("avance", 2500, 30, "b2c");?> Chf</b>.</li>
			<li>Ihr Kunde bezahlt unkompliziert per Einzahlungsschein direkt beim Factor.</li>
			<li>Die Servicekosten betragen für Sie <b>nur <?php echo cf("cout", 2500, 30, "b2c");?> Chf </b> und <?php echo cf("client", 2500, 30, "b2c");?> Chf für den Kunden.</li>
		</ul>
		<p>Integrieren Sie dieses System ganz einfach in Ihren Onlineshop! Rechnungen lassen sich automatisch erstellen und verschicken, inklusive der Option Ratenzahlung durch 1-3 monatliche Raten. Dies ist für Ihre Kunden noch attraktiver!</p>
		
		<h2>Umsatz lässt sich um 10-15% erhöhen!</h2>
		<p>In Umfragen wurde herausgefunden, dass 70% der Kunden am liebsten auf Rechnung bezahlen. Wer seinen Kunden den Rechnungskauf anbietet, kann seinen Umsatz Studien zufolge um 10-15% steigern. <b>Nutzen Sie die Erfahrung unserer Finanzexperten</b>, um mehr über das Produkt B2C-Factoring zu erfahren. Sie profitieren von individuellen Beratungsgesprächen sowie einem umfassenden Finanzreporting, aufgrund dessen ein massgerechtes Produkt für Sie erstellt wird. Wir freuen uns auf Sie!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
