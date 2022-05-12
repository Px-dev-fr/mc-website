<?php
$h1="Dank den Informationen zu Factoring erhöhen Sie Ihre Liquidität!";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Factoring Informationen: Lernen Sie die Finanzierungsalternative kennen</title>
<meta name="description" content="Erhalten Sie alle Informationen zu Factoring wie Kosten, Anwendungsbereich, etc. kennen. Factoring ist die Lösung für schnelle Liquiditätsbeschaffung!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Factoring ist in der Schweiz noch eine neue Finanzierungstechnik. Aus diesem Grund bieten wir auf unserer Seite zahlreiche Informationen zur Rechnungsvorfinanzierung und weiteren Factoring-Techniken an. Das Ziel ist es, dass Ihr Unternehmen <b>jede Rechnung aus dem Kerngeschäft sofort in Liquidität umwandeln</b> kann.</p>
		<h2>Informationen zum Factoring-Ablauf</h2>
		<p>Die wichtigsten Informationen zu Factoring sind, dass es sich um eine Technik handelt, mit der der Liquiditätsfluss in Ihrem Unternehmen verschnellert wird. Dabei bezahlt ein Partner, der Factor, Ihnen den Grossteil Ihres Erlöses aus Rechnungen sofort! Dies funktioniert so:</p>
		<ul>
			<li>Sie schicken Ihrem Kunden eine Rechnung für Ihre Dienste. Der Factor erhält davon eine Kopie.</li>
			<li>Der Factor überweist Ihnen <b>90% des Rechnungsbetrages</b> innerhalb von 24 Stunden.</li>
			<li>Der Kunde bezahlt seine Rechnung innerhalb der Zahlungsfrist beim Factor (Referenznr. geändert)</li>
			<li>Sobald dies geschehen ist, überweist der Factor die ausstehenden 10%</li>
			<li>Sie profitieren somit von <b>sofortiger Bezahlung</b> und schnellerem Liquiditätsfluss</li>	
		</ul>
		<p>Es gibt zu diesem Service noch weitere Informationen. Die stets laufende Liquidität gibt Ihnen eine bessere Verhandlungsbasis mit Ihren Lieferanten. <b>Verhandeln Sie die Einkaufspreise mit Ihren Lieferanten</b>, da Sie sie immer rechtzeitig bezahlen können!</p>
		<h2>Ein praktisches Beispiel</h2>
		<p>Ein Warenimporteur verkauft einem Schweizer Detailhändler Waren im Wert von <b>30'000 CHF</b>. Sein Kunde hat <b>90 Tage</b> Zeit, um die Rechnung zu begleichen. Factoring funktioniert wie folgt:</p>
		<ul>
			<li>Der Importeur zahlt für den Factoring-Service je nach Rechnungshöhe einen Betrag, in diesem Fall <?php echo cf("cout", 30000, 90);?> CHF.</li>
			<li>Der Importeur erhält vom Factor umgehend <?php echo cf("avance", 30000, 90);?> CHF (90% der Rechnung abzgl. Kommission).</li>
			<li>Der Detailhändler bezahlt seine Rechnung beim Factor, der Importeur erhält daraufhin <?php echo cf("solde", 30000, 90);?> CHF (die ausstehenden 10%).</li>
			<li>Aus dem Verkauf erhält der Importeur total <b><?php echo cf("total", 30000, 90);?> CHF</b>, davon den Grossteil sofort und erhöht somit seine Liquidität nachhaltig.</li>
		</ul>
		<h2>Informationen zur Bankverbindung</h2>
		<p>Die Zusammenarbeit mit dem Factor läuft komplett unabhängig vom Banksystem. Weder ist der Factor eine Bank, noch arbeitet er mit diesen zusammen. Für Sie als Factoring-Nehmer <b>ändert sich nichts</b> bei der Rechnungsstellung oder bei der Zusammenarbeit mit der Bank Ihres Unternehmens. Einzig und allein die Referenznummer auf Ihrem Einzahlungsschein ändert sich, damit der Kunde den Factor zuerst bezahlt.</p>
		
		<p>Wenn Sie nun weitere Informationen zum Factoring, zu den genauen Kosten, den zu finanzierenden Rechnungen etc. haben, freuen wir uns, Sie zu beraten. Prestaflex bietet massgeschneidere Lösungen an, die Sie <b>individuell nach Ihren Wünschen</b> zusammenstellen können. Wir freuen uns auf Ihre Zusammenarbeit!</p>
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
