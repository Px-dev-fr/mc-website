<?php
$h1="Rechnungskauf ist beliebt - Liquiditätssteigerung ohne Risiko";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Rechnungskauf: Kunden in Ihrem Onlineshop kaufen am liebsten auf Rechnung</title>
<meta name="description" content="Wer in seinem Onlineshop den Rechnungskauf anbieten kann, erhöht seinen Umsatz! Über unser neues Produkt können Sie risikolos Ihre Verkaufszahlen steigern!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		<p>Der Rechnungskauf ist mit Abstand die beliebteste Zahlungsart in der Schweiz: 70% der Kunden geben an, am liebsten auf Rechnung zu bezahlen. Trotzdem bieten viele Onlineshops diese Option noch nicht an, denn Verluste scheinen wahrscheinlich und die Zahlungsfrist zu lang. <b>Doch dank Factoring werden Sie unabhängig vom Kunden innerhalb von 48 Stunden sofort bezahlt!</b> Entdecken Sie den risikolosen Rechnungskauf für Ihr E-Business!</p>
		
		<h2>Keine Verzögerung, kein Risiko</h2>
		<p>Rechnungskauf hat gegenüber anderen Zahlungsarten die Nachteile, dass die Bezahlung später erfolgt und das Verlustrisiko für den Verkäufer steigt. Factoring im B2C-Bereich (business to customer) umgeht das Problem, indem Ihre Verkäufe vorfinanziert werden. <b>Ihr Businesspartner (der Factor) übernimmt die offenen Rechnungen und gleichzeitig das Risiko von Debitorenverlusten</b>. Der Ablauf ist schnell, einfach und für Ihre Kunden transparent und ermöglicht mehr Flexibilität:</p>
		<ul>
			<li>Ihr Kunde kauft in Ihrem Onlineshop. Sie schicken ihm eine Rechnung (zahlbar innert 1-3 Raten).</li>
			<li><b>Nach maximal 48 Stunden erhalten Sie automatisch Ihre Bezahlung vom Factor</b>.</li>
			<li>Ihr Kunde kann nun seine Rechnung innert 30 oder 90 Tagen über 3 Raten bezahlen (falls gewünscht).</li>
			<li><b>Der Kunde bezahlt den Factor direkt, dieser übernimmt das Ausfallrisiko</b>.</li>
			<li>Sie gehen kein Debitorenrisiko ein und werden schneller bezahlt.</li>
		</ul>
		<p>Kunden, die den Rechnungskauf nutzen können, konsumieren im Schnitt mehr. Dadurch erhöhen sich Ihre Verkaufszahlen und durch die sofortige Bezahlung durch den Factor auch Ihre Liquidität. Unsere Erfahrung zeigt, dass Factoring-Nehmer ihren <b>Umsatz um 10-15% steigern können</b>, indem sie dieses simple Produkt nutzen!</p>
		
		<h2>Ein Beispiel für Rechnungskauf im Onlineshop</h2>
		<p>Ein Verkäufer bietet Privatkunden Fahrräder über das Internet an. Ein Kunde bestellt ein hochwertiges Rad zum Preis von 2500 Chf (inkl. Lieferung) und entscheidet sich für den Rechnungskauf. Als Factoring-Nehmer profitiert der Verkäufer wie folgt:</p>
		<ul>
			<li>Eine Rechnung von <?php echo cf("facture", 2500, 30, "b2c");?> Chf wird automatisch erstellt und dem Kunden geschickt.</li>
			<li>Max. 48 Stunden nach der Sendung erhält der Verkäufer <b><?php echo cf("avance", 2500, 30, "b2c");?> Chf vom Factor</b>.</li>
			<li>Der Kunde profitiert von 30 Tagen Zahlungsfrist und bezahlt den Factor direkt.</li>
			<li>Die Servicekosten betragen <b> <?php echo cf("cout", 2500, 30, "b2c");?> Chf für den Verkäufer </b> und <?php echo cf("client", 2500, 30, "b2c");?> Chf für den Kunden.</li>
		</ul>
		<p>Sollte der Kunde im Beispiel nicht bezahlen können, kümmert sich der Factor um die ausstehende Zahlung. Ihr Partner hat Erfahrung im Forderungseinzug und arbeitet kulanter und flexibler als bspw. Inkassounternehmen. <b>Sie sparen Zeit</b>, da Sie sich nicht mehr um Mahnungen etc. kümmern müssen.</p>
		
		<h2>Flexible Offerten für Onlineshop von Experten erarbeitet</h2>
		<p>Bei B2C-Factoring wird jedes Angebot für Sie speziell erstellt. Deshalb profitieren Sie als Händler bei unseren Experten von einer <b>unverbindlichen Beratung und einem umfassenden Finanzreporting</b>, woraufhin Ihr Berater für Sie das beste Angebot mit Factoring-Unternehmen aushandelt. Sie erhalten in jedem Fall ein individuelles, flexibles und passendes Produkt nach Mass. Wir freuen uns darauf, Sie kennenzulernen!</p>
		
		
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
