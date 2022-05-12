<?php
$h1="Factoring: Lösungen für einen schnelleren Cash-Flow";
$link="/de/kmu/beratung"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include('includes/meta.php');?>
<title>Factoring: Unsere Lösungen für Ihre Selbstständigkeit</title>
<meta name="description" content="Bezahlen Ihre Kunden erst nach 30, 60 oder 90 Tagen? Entdecken Sie unsere Lösungen durch Factoring und kassieren Sie Ihre Rechnungen innert 48 Stunden ein!"/>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
</head>
<body>
<div <div id="container">
	<?php include('includes/header.php');$pme=1;?>
		<?php $image="factoring-affacturage-pour-independants"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/b2c.php');?>
		
		<p>Sind Sie Selbstständiger in der Schweiz mit einer Kundschaft, die vor allem aus in- und ausländischen Unternehmen besteht? Mit Factoring erhalten Sie die Bezahlung für Ihre Geschäfte innert 24h - 48h, während Ihre Kunden weiterhin 30, 60 oder 90 Tage Zahlungsfrist haben. Dadurch finanzieren Sie Ihre Liquidität im Handumdrehen und vergrössern Ihren finanziellen Spielraum !</p>
		
		<h2>Welche Lösungen bietet Factoring für Selbstständige?</h2>
		<p>Factoring wird heute in Deutschland schon von 20% der Unternehmen genutzt und <b>soll vor allem das Einkassieren von Rechnungen aus Verkauf und Dienstleistung verschnellern</b>. Da wir uns auf dieses neue Produkt spezialisiert haben, bieten wir unseren Service Selbstständigen und Einzelunternehmern in der Schweiz an. Dank den Lösungen aus dem Bereich Factoring profitieren Sie von:</p>
		<ul>
			<li>Einem <b>regelmässigen Cashflow</b>, da Sie jede Rechnung schnell in Liquidität umwandeln.</li>
			<li>Einer <b>besseren Verhandlungsbasis und Skonto</b> mit Ihren Lieferanten, da Sie diese dank besserer Liquidität rechtzeitig bezahlen können.</li>
			<li>Einem <b>Schutz vor Zahlungsausfall</b>, da Sie Ihre Bezahlung unabhängig von der Zahlung des Kunden erhalten.</li>
		</ul>
		<p>Jeder Factoring-Vertrag ist einzigartig und wird für Ihr Unternehmen eigens angefertigt. Unsere globale Unternehmensanalyse mit Reporting sichert Ihnen ein passendes Produkt und individuelle Lösungen.</p>
		
		<h2>Ein Beispiel: Finanzierung einer Rechnung von 6'000 CHF</h2>
		<p>Ein selbstständiger Landschaftsgärtner berechnet seinem Kunden, einem Unternehmen, seinen Service. Der Auftrag kostet seinen Kunden 6'000 CHF, zahlbar innert 30 Tagen. Dank Factoring profitiert er von sofortiger Liquidität:</p>
		<ul>
			<li>Der Gärtner schickt dem Kunden eine normale Rechnung. Nur die Referenznr. ändert sich, was den <b>Factor</b> als Begünstigten auszeichnet.</li>
			<li>Der Gärtner schickt dem Factor eine Kopie der Rechnung. Letzterer überweist <b>innerhalb von nur 1-2 Tagen einen Vorschuss von <?php echo cf("avance",6000, 30);?> Chf</b>.</li>
			<li>Dank diesem sofortigen Gewinn kann der Gärtner seine eigenen Lieferanten fristgerecht bezahlen.</li>
			<li>Der Kunde bezahlt den Factor innert 30 Tagen. Dieser kümmert sich um die Zahlungskontrolle des Kunden. Sobald die Zahlung erhalten wurde, überweist der Factor dem Gärtner den ausstehenden Restbetrag <?php echo cf("solde", 6000, 30);?> Chf.</li>
			<li>Der Gärtner erhält schlussendlich <b><?php echo cf("total", 6000, 30);?> Chf</b>, welche dem ursprünglichen Betrag abzüglich den Factoring-Kosten entsprechen: (<?php echo cf("cout", 6000,30);?> CHF)</li>
		</ul>
		
		<h2>Sichern Sie sich stetige Liquidität!</h2>
		<p>Möchten Sie mehr über diese neuartige Finanzierungslösung erfahren? Unsere Experten stehen Ihnen zur Verfügung, um Sie zu diversen Factoring-Lösungen zu beraten. Unsere Erfahrung zeigt, dass Factoring-Nehmer ihren <b>Jahresumsatz um 10%-15% erhöhen können</b>! Kontaktieren Sie uns, um von der Beratung eines Schweizer Spezialisten zu profitieren.</p>
		
		<a class="bouton" href="/de/kmu/beratung">Anfrage online</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html> 
