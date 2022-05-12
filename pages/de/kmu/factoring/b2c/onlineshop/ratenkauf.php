<?php
$h1="Ratenkauf anbieten und sofort bezahlt werden? Dank uns möglich!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Ratenkauf: Steigern Sie Ihren Umsatz im Onlineshop um 10-15%</title>
<meta name="description" content="Führen Sie einen Onlineshop? Möchten Sie Ihren Kunden den Ratenkauf ermöglichen? Kassieren Sie sofort ein, während Ihre Kunden durch 1-3 Raten bezahlen!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Der Ratenkauf ist eine der beliebtesten Zahlungsarten im Internet. Haben Sie einen Onlineshop und möchten Ihren Kunden diese Zahlungsmethode offerieren? <b>Dank B2C-Factoring ist der Ratenkauf risikolos möglich, denn Sie werden sofort bezahlt</b>, auch wenn Ihre Kunden auf Raten kaufen. Entdecken Sie unser innovatives Produkt!</p>
		
		<h2>Ihr Onlineshop erhält Erlös innert 24-48 Stunden!</h2>
		<p>Der Ratenkauf wird oftmals nicht angeboten, weil sich Verkäufer von Debitorenverlusten und langsamer Bezahlung fürchten. B2C-Factoring umgeht das Problem, indem <b>Ihre Verkaufsrechnungen vorfinanziert</b> werden. Dabei bezahlt Ihnen der sog. Factor Ihren kompletten Erlös, während Kunden durch 1-3 Raten beim Factor bezahlen. Das System funktioniert wie folgt:</p>
		<ul>
			<li>Ein Kunde bestellt in Ihrem Onlineshop. Sie erstellen eine Rechnung, die er in 1-3 Raten bezahlen kann.</li>
			<li>Daraufhin überweist der Factor Ihnen <b>den kompletten Verkaufspreis innert 24-48h</b>!</li>
			<li>Der Kunde bezahlt innert 30-90 Tagen direkt beim Factor (Refernznr. geändert).</li>
			<li>Um die Zahlungskontrolle, Mahnungen etc. kümmert sich der Factor.</li>
			<li>Sie erhalten sofort den Grossteil Ihres Erlöses und <b>gehen kein Risiko mehr ein</b>!</li>
		</ul>
		<p>Dieses System lässt sich simpel in Ihren Onlineshop integrieren. Es ermöglicht auch die automatische Erstellung von Rechnungen. Sie sparen Zeit und verschnellern gleichzeitig Ihren Cash Flow.</b>
		
		<h2>Beispiel für Ratenkauf mit B2C-Factoring</h2>
		<p>Ein Kunde kauft bei Ihnen online Elektrogeräte im Wert von 1200 CHF (inkl. Lieferung). Er möchte die Rechnung über 3 Raten bezahlen. Als Factoring-Nehmer profitieren Sie wie folgt:</p>
		<ul>
			<li>Eine Rechnung von <?php echo cf("facture", 1200, 30, "b2c");?> Chf wird automatisch erstellt und versendet. Auf der Rechnung ist der Ratenkauf vermerkt.</li>
			<li>Sie erhalten <b><?php echo cf("avance", 1200, 30, "b2c");?> Chf</b> innerhalb von max. 1-2 Tagen.</li>
			<li>Die Servicegebühren betragen für Sie <b>nur <?php echo cf("cout", 1200, 30, "b2c");?> Chf</b> und für den Kunden <?php echo cf("client", 1200, 30, "b2c");?> Chf.</li>
		</ul>
		<p>Laut Umfragen bezahlen bis zu 70% der Kunden am liebsten auf Rechnung und wenn möglich auf Raten. Dank dem Factoring-System profitieren Sie ohne Risiko von dieser Nachfrage und werden dazu noch schneller bezahlt! </p>
		
		<h2>Erfahrung seit 1999</h2>
		<p>Multicrédit hilft Verkäufern seit über 20 Jahren dabei, die besten Finanzprodukte zu finden. Lassen Sie sich von unseren Finanzexperten unverbindlich zu Ihren Möglichkeiten im Factoring-Bereich beraten! Wir freuen uns darauf, Ihnen weiterhelfen zu können.</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
