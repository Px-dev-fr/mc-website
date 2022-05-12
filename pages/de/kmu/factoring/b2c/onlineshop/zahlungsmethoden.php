<?php
$h1="Risikolos attraktive Zahlungsmethoden in Ihrem Onlineshop anbieten";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Zahlungsmethoden: So erhöht Ihr Onlineshop sein Verkaufsvolumen</title>
<meta name="description" content="Möchten Sie Ihren Kunden attraktive Zahlungsmethoden anbieten? Mit unserem Produkt können Sie die Ratenzahlung risikolos in Ihren Onlineshop integrieren."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Betreiben Sie einen Onlineshop und möchten Kunden attraktive Zahlungsmethoden anbieten? <b>Studien zeigen, dass bis zu 70% der Kunden am liebsten auf Rechnung zahlen</b>. Rechnungskauf auf mehrere Raten bedeutet heutzutage kein Risiko für den Verkäufer mehr, denn dank B2C-Factoring erhalten Sie Ihren Erlös direkt vom Factor innert 24-48h!</p>
		
		<h2>Attraktive Zahlungsmethoden erhöhen das Verkaufsvolumen</h2>
		<p>Kunden kaufen mehr ein, wenn sie später und vor allem auf Raten bezahlen können. Viele Onlineshop-Betreiber scheuen sich aber vor dieser Option, da Verluste wahrscheinlicher sind und sie lange auf Ihren Erlös warten müssen. <b>B2C-Factoring umgeht Debitorenverluste und lässt Sie schneller einkassieren</b>. Wir stellen Ihnen dieses neue und stark wachsende Produkt vor:</p>
		<ul>
			<li>Ein Kunde kauft in Ihrem Onlineshop Waren. Sie schicken ihm eine Rechnung in Form von 1-3 Raten.</li>
			<li>Der Factor überweist Ihnen <b>den kompletten Erlös innert 1-2 Tagen</b> (abzgl. Gebüren).</li>
			<li>Der Kunde bezahlt seine Rechnung(en) innert der gegebenen Frist beim Factor (Referenznr. geändert).</li>
			<li>Der Factor kümmert sich um die Zahlungskontrolle des Kunden sowie eventuelle Mahnungen etc.</li>
		</ul>
		<p>Durch dieses System <b>profitieren Sie dreifach</b>: Schnellerer Cash Flow dank vorfinanziertem Erlös, höheres Verkaufsvolumen dank Ratenzahlung und Zeitgewinn durch die Zahlungsadministration des Factors.</b>
		
		<h2>Unser Beispiel für Ihren Onlineshop</h2>
		<p>Eine Kundin kauft bei Ihnen hochwertige Kosmetikprodukte im Wert von 500 CHF (inkl. Lieferung). Sie entschliesst sich für einen Ratenkauf auf 3 Monatsraten. Als Factoring-Nehmer läuft der Prozess für Sie folgendermassen ab.</p>
		<ul>
			<li>Sie erstellen automatisch eine Rechnung von <?php echo cf("facture", 500, 30, "b2c");?> Chf und senden sie dem Kunden (3 Monatszahlungen sind vermerkt).</li>
			<li>Sie erhalten innert 24-48 Stunden vom Factor <b><?php echo cf("avance", 500, 30, "b2c");?> Chf</b> im Voraus.</li>
			<li>Die Kundin bezahlt 3 Raten à 170 Chf beim Factor.</li>
			<li>Die Servicekosten betragen <b>nur <?php echo cf("cout", 500, 30, "b2c");?> Chf für Sie </b> und <?php echo cf("client", 500, 30, "b2c");?> Chf für die Kundin.</li>
		</ul>
		<p>B2C-Factoring lässt sich ganz einfach in Ihren Onlineshop integrieren und erlaubt das automatische Erstellen von Kundenrechnungen. Lassen Sie sich zu den technischen Details von unseren Experten beraten!</p>
		
		<h2>Neue Zahlungsmethoden = Mehr Umsatz für Sie</h2>
		<p>Studien zeigen, dass sich der Umsatz von Händlern mit einem Onlineshop <b>um 10%-15% erhöhen lässt</b>, nur indem sie Rechnungskauf auf Raten anbieten. Unsere Erfahrung zeigt, dass Kunden bei Ihnen lieber einkaufen, wenn Sie diese Option offerieren. Unsere Berater stehen Ihnen für unverbindliche Erstgespräche sowie eine komplette Dossieranalyse zur Verfügung. Wir freuen uns auf Sie!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
