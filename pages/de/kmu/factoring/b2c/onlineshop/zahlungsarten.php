<?php
$h1="Neue Zahlungsarten erhöhen Ihre Liquidität - Das Geheimnis ist B2C-Factoring";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Zahlungsarten: Mit dieser Innovation erhöht Ihr Onlineshop seine Verkäufe </title>
<meta name="description" content="Kauf auf Rechnung ist eine der beliebtesten Zahlungsarten der Schweiz. Auch Ihr Onlineshop kann seine Verkaufszahlen dank Rechnungskauf risikolos steigern!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Bieten Sie Ihren Kunden bereits Rechnungskauf oder sogar Ratenkauf an? Die Rechnung ist noch immer eine der beliebtesten Zahlungsarten der Schweiz: 70% der Kunden bevorzugen die Zahlung auf Rechnung. <b>Kunden, die von 30-90 Tagen Zahlungsziel profitieren, kaufen in Ihrem Onlineshop mehr ein</b>. Von dieser Nachfrage können Sie ganz simpel profitieren - dank B2C-Factoring.</p>
		
		<h2>Keine Angst vor Verlusten! Ihr Partner übernimmt das Risiko</h2>
		<p>Neue Zahlungsarten wie Rechnungskauf sorgen bei Verkäufern manchmal für Besorgnis. Was tun, wenn ein Kunde nicht zahlt? Erhalte ich mein Geld nicht viel zu spät? <b>Beim Factoring bezahlt Ihr Vertragspartner, der Factor, die Einkäufe des Kunden innerhalb von max. 48 Stunden</b>. So profitieren Sie gleich dreifach: Sie werden sofort bezahlt, steigern dadurch Ihre Liquidität und das Risiko eines Zahlungsausfalles übernimmt der Factor. In einem Onlineshop kann das Produkt wie folgt genutzt werden:</p>
		<ul>
			<li>Ihr Kunde kauft bei Ihnen online ein. Sie schicken Ihm eine Rechnung mit 1-3 Einzahlungsscheinen.</li>
			<li><b>Sie erhalten den kompletten Erlös vom Factor innerhalb von nur 48 Stunden</b> (abzgl. Gebüren).</li>
			<li>Ihr Kunde profitiert nun von 30 bis 90 Tagen Zahlungsfrist und bezahlt beim Factor.</li>
			<li>Sollte keine Zahlung des Kunden stattfinden, kümmert sich der Factor um das Problem.</li>
			<li><b>Ihr Onlineshop wird garantiert und schnell bezahlt</b> - um das Übrige kümmert sich Ihr Partner.</li>
		</ul>
		<p>Für den Factor ist die Zufriedenheit Ihrer Kunden ein wichtiges Anliegen. Bei verspäteten Zahlungen kümmert er sich deeskalierend und kulant um Mahnungen, Zahlungsvereinbarungen etc.</b>
		
		<h2>Neue Zahlungsarten in Ihrem Onlineshop: Ein Beispiel</h2>
		<p>Sie betreiben einen Onlineshop, der Parfüm und Kosmetik an Privatpersonen verkauft. Ein Kunde kauft bei Ihnen Waren im Wert von 450 Chf ein. Der Kauf auf 3 Raten scheint ihm günstig, weshalb er sich für diese Option entscheidet. Als Verkäufer sieht das Geschäft für Sie so aus:</p>
		<ul>
			<li>Über Ihr Verkaufssystem erstellen Sie automatisch eine Rechnung über <?php echo cf("facture", 450, 30, "b2c");?> Chf für den Kunden.</li>
			<li>Ihr Kunde erhält 3 Einzahlungsscheine à 153 Chf und insgesamt 90 Tage Zahlungsfrist.</li>
			<li><b>Spätestens 48 Stunden nach der Rechnungssendung überweist der Factor Ihnen <?php echo cf("avance", 450, 30, "b2c");?> Chf</b></li>
			<li>Die Servicekosten betragen <b>nur <?php echo cf("cout", 450, 30, "b2c");?> Chf für Sie </b> und <?php echo cf("client", 450, 30, "b2c");?> Chf für die Kundin.</li>
			<li>Ihr Kunde bezahlt seine Raten beim Factor - Sie müssen sich um nichts mehr kümmern.</li>
		</ul>
		<p>Diese Finanzierungstechnik bewirkt eine merkliche und schnelle Veränderung Ihres Cash Flows. Erträge können dank der Finanzierung durch den Factor schneller einkassiert werden, was <b>Ihre Liquidität nachhaltig und stetig erhöht</b>. Nutzen Sie die gewonnenen Mittel, bspw. zur frühen Bezahlung Ihrer Lieferanten, wodurch Sie von Skonto profitieren!</p>
		
		<h2>Simpel in Onlineshop integrierbar</h2>
		<p>Mit B2C-Factoring lassen sich neue Zahlungsarten wie Rechnungs- und Ratenkauf ganz einfach in Ihr Verkaufssystem integrieren. Durch diese Option können Sie Rechnungen ausserdem automatisch erstellen und versenden. Unsere Berater stehen Ihnen zur Verfügung, falls Sie technische Fragen haben oder genauere Informationen zur Finanzierung haben möchten. Multicrédit unterstützt Verkäufer in der Schweiz <b>seit über 20 Jahren</b> mit individuellen und flexibel anpassbaren Finanzprodukten - Wir beraten Sie gerne!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
