<?php
$h1="Dank Factoring erhalten Sie Lösungen für Ihr Liquiditätsproblem";
$link="/de/kmu/factoring/anfrage";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Klassisches Factoring: Lösungen für schnelleren Cashflow</title>
<meta name="description" content="Suchen Sie nach Lösungen für den Liquiditätsmangel Ihrer Firma? Dank Factoring kassieren Sie 90% Ihrer Rechnungen sofort ein! Entdecken Sie unsere Lösungen."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/factoring.php');?>
		<p>Arbeitet Ihr Unternehmen andauernd mit mangelnder Liquidität? Bezahlen Ihre Kunden so spät, dass kaum genug Mittel bereitstehen, um ihre Lieferanten zu bezahlen? Factoring hilft, indem Sie <b>jede Verkaufsrechnung sofort in Liquidität umwandeln</b> lassen können. Entdecken Sie unsere innovativen Lösungen!</p>
		
		<h2>Welche Lösungen bringt Factoring?</h2>
		<p>Das Prinzip von Factoring ist es, einen dritten Akteur in die Beziehung zwischen Ihrem Unternehmen und Ihrer Kundschaft einzubeziehen. Dieser sogenannte <b>Factor</b> wird jedes Mal kontaktiert, wenn Sie einem Kunden ein Gut oder einen Service liefern:</p>
		<ul>
		<li>Einem Kunden wird eine Rechnung ausgestellt. Der Factor erhält eine Kopie derselben.</li>
		<li>Der Factor überweist Ihnen einen Vorschuss von 90% der Rechnungssumme innerhalb von 24h.</li>
		<li>Der Kunde bezahlt daraufhin nicht bei Ihnen, sondern beim Factor (Referenznr. geändert).</li>
		<li>Sobald Ihr Kunde beim Factor bezahlt hat, überweist dieser Ihnen die restlichen 10%.</li>
		<li><b>Sie erhalten somit den Grossteil Ihrer Bezahlung sofort</b>!</li>
		</ul>
		<p>Das schnellere Einkassieren ist nur eine der Lösungen, mit der Factoring Ihnen hilft. Der Factor kümmert sich auch um die Mahnung der Kundschaft und die Eintreibung von Beträgen. Somit vereinfachen Sie zusätzlich Ihre Administration!</p>
		
		<h2>Erklärung anhand eines Beispiels</h2>
		<p>Ein Temporärbüro vermittelt einer Hochbaufirma Handwerker für ein Projekt. Das Temporärbüro verrechnet für die Vermittlung sowie die Lohnkosten einen Betrag von <b>50'000 CHF</b>, die Baufirma hat <b>60 Tage Zahlungsfrist</b>.</p>
		<ul>
		<li>Das Temporärbüro bezahlt dem Factor einen Grundbetrag für seinen Service je nach Rechnungshöhe, in diesem Fall <?php echo cf("cout", 50000, 60);?> CHF.</li>
		<li>Das Temporärbüro erhält direkt <?php echo cf("avance", 50000, 60);?> CHF (90% der Rechnung abzgl. Kommission)</li>
		<li>Die Hochbaufirma bezahlt seine Rechnung direkt beim Factor, das Temporärbüro erhält daraufhin <?php echo cf("solde", 50000, 60);?> CHF (die ausstehenden 10%)</li>
		<li>Das Temporärbüro erhält für seine Dienste <b><?php echo cf("total", 50000, 60);?> CHF</b> und profitiert von sofortiger Liquidität!</li>
		</ul>
		<h2>Wir bieten massgeschneiderte Lösungen an</h2>
		<p>Wenn nun auch Sie die Liquidität in Ihrer Firma steigern, von sofortiger Bezahlung und einfacherer Administration profitieren möchten, ist es uns ein Vergnügen, Ihnen unsere Lösungen anzubieten. Jeder <b>Factoring-Vertrag wird individuell nach Ihren Wünschen angepasst</b>, damit Sie die Kontrolle über Ihre Rechnungen behalten. Wir freuen uns auf Sie!</p>
		<a class="bouton" href="/de/kmu/factoring/anfrage">Beratung verlangen</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
