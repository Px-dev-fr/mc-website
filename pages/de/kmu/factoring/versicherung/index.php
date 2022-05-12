<?php
$h1="Kreditversicherung: Sie werden auch bei insolventer Kundschaft bezahlt!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kreditversicherung: Factoring verkleinert Ihr Risiko!</title>
<meta name="description" content="Die Kreditversicherung garantiert die Bezahlung für Verkäufe, selbst wenn der Kunde insolvent ist. Sie werden in jedem Fall bezahlt und verhindern Verluste!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Haben Sie immer wieder Probleme mit nicht zahlender Kundschaft? Fahren Sie Verluste ein, da ihre Kunden zu spät oder gar nicht bezahlen? Die <b>Kreditversicherung im Factoring-Paket ist die Lösung</b> um Debitorenverluste vorzubeugen. Wir zeigen Ihnen, wie vielfältig Sie Factoring in Ihrem Business nutzen können und wie Sie damit u.a. Ihr Debitorenrisiko abtreten!</p>
		
		<h2>Die Kreditversicherung zahlt, auch wenn Ihre Kundschaft insolvent ist!</h2>
		<p>Rechnungen, die Ihre Kunden innert 30, 60 oder 90 Tagen bezahlen müssen, sind im weitesten Sinn Kredite. Eine Kreditversicherung versichert diese Beträge, damit Sie bei Nichtzahlung Ihrer Kunden trotzdem Ihr Geld erhalten! Eine solche Kreditversicherung ist ein Bestandteil von <b>Factoring, eine innovative Finanzierungstechnik</b>:</p>
		<ul>
		<li><b>Vorfinanzierung</b>: Erhalten Sie den Grossteil Ihres Erlöses sofort!</li>
		<li><b>Forderungseinzug</b>: Lassen Sie Ihren Partner sich um Ihr Inkasso kümmern.</li>
		<li><b>Kreditversicherung</b>: Schützt den Factoring-Nehmer vor Verlusten durch Zahlungsausfälle.</li>
		</ul>
		<p>Diese Produkte können Sie beliebig miteinander kombinieren, je nach Ihren Bedürfnissen und Wünschen. Das komplette Factoring mit allen Produkten <b>garantiert maximalen Schutz</b>, einen schnelleren Cashflow und stetig steigende Liquidität!</p>
		
		<h2>Beispiel: Factoring mit Kreditversicherung</h2>
		<p>Ein Grafikunternehmen mit eigener Druckerei entwirft und druckt für seinen Kunden, ein bekannter Online-Händler, Material für eine grosse Werbekampagne. Dafür berechnet der Grafiker seinem Kunden <b>15'000 CHF</b>, zahlbar innerhalb von <b>45 Tagen</b>. Das Grafikunternehmen arbeitet auch mit einem Factor zusammen, der Factoring inklusive Kreditversicherung betreibt:</p>
		<ul>
			<li>Der Factor überweist dem Grafikunternehmen <b>sofort <?php echo cf("avance", 15000, 45);?> CHF</b> (90% der Rechnung abzgl. Kommission)!</li>
			<li>Der Online-Händler bezahlt seine Rechnung beim Factor, woraufhin das Grafikunternehmen weitere <?php echo cf("solde", 15000, 45);?> CHF (10% des Saldos) erhält.</li>
			<li>Der Factor übernimmt das Debitorenrisiko und kümmert sich um den Einzug des Schuldbetrages.</li>
			<li>Sollte der Online-Händler nicht bezahlen, tritt die <b>Kreditversicherung</b> in Kraft.</li>
			<li>In diesem Fall wird das Grafikunternehmen für die ausstehenden 1500 CHF (10% des Saldos) entschädigt.</li>
		</ul>
		<p>Der Factoring-Nehmer profitiert also <b>dreifach</b>: Er erhält den Grossteil seiner Bezahlung sofort und verfügt darum über mehr Liquidität, muss sich nicht mehr um Mahnungen kümmern und spart dadurch Zeit und wird dank Kreditversicherung bezahlt, auch wenn sein Kunde insolvent ist!</p>
		
		<h2>Beratung zu Factoring, Kreditversicherung und mehr</h2>
		<p>Möchten Sie nun Ihr Debitorenrisiko minimieren, indem Sie die Kreditversicherung des Factors nutzen? Oder wollen Sie das gesamte Paket, um ebenfalls die Liquidität in Ihrem Unternehmen zu steigern und das Inkasso auszulagern? Wir freuen uns darauf, Sie über die Möglichkeiten von Factoring in Ihrer Firma zu beraten. Profitieren Sie von individuell zusammenstellbaren Verträgen von Experten in der Schweiz!</p>
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
