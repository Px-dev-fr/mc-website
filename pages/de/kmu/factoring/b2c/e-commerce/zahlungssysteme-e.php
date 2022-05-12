<?php
$h1="Neue Zahlungssysteme im E-Commerce verbessern Ihre Liquidität, da Sie sofort bezahlt werden!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Zahlungssysteme: Rechnungskauf und Ratenzahlung für Ihren E-Commerce</title>
<meta name="description" content="Betreiben Sie einen E-Commerce und wollen schneller bezahlt werden? Diese Zahlungssysteme erhöhen Ihr Verkausvolumen und Ihre Liquidität dank B2C-Factoring!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Bestellen Ihre Kunden am liebsten auf Rechnung und bezahlen wenn möglich noch lieber durch bis zu 3 Monatsraten? Dank B2C-Factoring können Sie diesen Service nun risikolos und mit verschnellertem Gewinn anbieten! <b>Ihr Finanzpartner, der Factor, bezahlt Sie anstelle des Kunden innert 24-48 Stunden</b> und Sie gehen kein Verlustrisiko beim Rechnungskauf mehr ein!</p>
		
		<h2>Neue Zahlungssysteme sind kein Risiko</h2>
		<p>Viele Verkäufer bieten keine Rechnungen an, da sie sich vor langsamem Cash Flow und höheren Debitorenverlusten fürchten. <b>Der Factor übernimmt hingegen Ihr Risiko komplett</b>, da der Kunde seinen Einkauf direkt bei ihm bezahlt. Sie werden nicht nur schneller bezahlt, sondern sparen auch noch Zeit bei der Zahlungskontrolle und dem Mahnwesen, da Ihre Bezahlung über den Factor erfolgt. Das System im Detail </p>
		<ul>
			<li>Ihr Kunde bestellt bei Ihnen auf Rechnung Produkte im E-Commerce.</li>
			<li>1-2 Tage nach der Rechnungssendung <b>bezahlt der Factor Ihnen den kompletten Verkauf</b> (abzgl. Servicegebühren)!</li>
			<li>Ihr Kunde bezahlt nicht bei Ihnen, sondern beim Factor (innert 30-90 Tagen).</li>
			<li>Selbst wenn der Kunde den Factor nicht bezahlen sollte, erhalten Sie Ihren Erlös.</li>
			<li>Um die gesamte Zahlungskontrolle, Mahnungen, etc. kümmert sich der Factor - Und Sie wurden bereits bezahlt.</li>
		</ul>
		<p>B2C-Factoring ist also <b>doppelt vorteilhaft</b>: Zum einen erhalten Sie Ihre Bezahlung schneller und zum anderen gehen Sie kein Risiko von Debitorenverlusten mehr ein!</b>
		
		<h2>Kunden im E-Commerce profitieren: Ein Beispiel</h2>
		<p>Sie betreiben einen Online-Handel, der Privatpersonen Elektromaterial verkauft. Ein Kunde kauft bei Ihnen auf Rechnung im Wert von 800 CHF (inkl. Lieferung). Mit B2C-Factoring profitieren sowohl Sie als auch Ihre Kunden:</p>
		<ul>
			<li>Über das Online-System erstellen Sie automatisch eine Rechnung von <?php echo cf("facture", 800, 30, "b2c");?> Chf und schicken diese dem Kunden.</li>
			<li>Sie erhalten vom Factor <b><?php echo cf("avance", 800, 30, "b2c");?> Chf</b> automatisch nach 24-48 Stunden.</li>
			<li>Für Sie betragen die <b>Servicekosten nur <?php echo cf("cout", 800, 30, "b2c");?> Chf</b> und <?php echo cf("client", 800, 30, "b2c");?> Chf für Ihren Kunden.</li>
			<li>Sobald Sie bezahlt wurden, ist der Verkauf beendet - Und Ihr Kunde profitiert von 30-90 Tagen Zahlungsfrist.</li>
		</ul>
		<p>Kunden, die jetzt bestellen und später bezahlen können, kaufen tendenziell mehr und häufiger dort ein, wo Rechnungskauf und Ratenoptionen angeboten werden. Diesen <b>Trend können Sie gewinnbringend nutzen</b> - Während Sie gleichzeitig Ihren Cash Flow dank Vorfinanzierung verbessern!</p>
		
		<h2>Ihr E-Commerce wird von Zahlungssystemen mit Factoring profitieren!</h2>
		<p>Studien zufolge können Anbieter von Rechnungskauf und Vorfinanzierung per Factoring ihren Umsatz um 10-15% erhöhen! <b>Multicrédit arbeitet seit 1999 mit Händlern zusammen</b>, um ihnen die besten Verträge vermitteln zu können. Nutzen Sie die Erfahrung unserer Experten, um von einer umfassenden Beratung und speziellen Finanzanalysen zu profitieren - Daruch erhalten Sie ein passendes und individuell ausgehandeltes Produkt.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
