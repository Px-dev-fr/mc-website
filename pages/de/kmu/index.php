<?php
$h1="Lösungen für KMU: Finanzierung mit oder ohne Bank";
$link="/de/kmu/beratung";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include('includes/meta.php');?>
<title>Unsere Finanzierung Ihres KMU: Entdecken Sie die Produkte</title>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
<meta name="description" content="Für Inhaber eines KMU ist es häufig schwierig, eine Finanzierung von der eigenen Bank zu bekommen. Unser Service beginnt dort, wo derjenige Ihrer Bank aufhört!" />
<style><?php echo file_get_contents("template/rubriques.css");?></style>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="KMU Finanzierung";include('includes/rubriques/pme.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Inhaber von KMU haben es in der Schweiz häufig nicht leicht, eine passende Finanzierung von ihrer Stammbank zu erhalten. Haben Sie sich bereits nach einer Lösung umgesehen, wurden aber enttäuscht? Für Kredite, Leasings, Factoring, Hypotheken und andere Produkte suchen wir die besten alternativen Angebote auf dem Markt für Sie - neutral und unverbindlich. Profitieren Sie von innovativen Lösungen mit oder ohne Bankgeschäft!</p>
		<h2>Finanzierung mit oder ohne Bank</h2>
		<p>Liquiditätsprobleme lassen sich häufig nicht durch eine einzige Lösung beheben. Sollte man einen KMU-Kredit aufnehmen, um sofort über Cash zu verfügen, den man aber zurückzahlen muss? Oder wäre eine Finanzierung per Factoring sinnvoller, bei der man schneller zu Liquidität aus dem Kerngeschäft gelangt? Die Spezialisten von Multicrédit bieten <b>eine grosse Palette an Produkten</b> für Ihr Unternehmen an, entweder über eine klassische Bank oder über die Alternative Crowdlending.</p>
		<h2>Entdecken Sie unsere Produkte</h2>
		<p>Da wir überzeugt sind, dass wir für jedes Finanzproblem eine Lösung finden können, bieten wir Ihnen eine umfassende und neutrale Beratung an. Unser Reporting hat die besten Angebote auf dem Markt zum Ziel:</p>
		<ul>
			<li><b>Kredite für KMU</b>: Erhalten Sie einfach Liquidität für jedes Bedürfnis. Rückzahlung auf kurze, mittlere oder lange Frist. Sie behalten Ihre aktuelle Bankverbindung.</li>
			<li><b>Factoring</b>: Dank der Vorfinanzierung von Kundenrechnungen sichern Sie Ihrem KMU einen stetigen Cash Flow, während Sie gleichzeitig vor Zahlungsausfällen Ihrer Kunden geschützt sind.</li>
			<li><b>Unternehmen-Leasing</b>: Finanzieren Sie ganz simpel verschiedene Produktionsmittel für Ihren Betrieb. Dadurch behalten Sie Ihr Investitionskapital für andere Projekte bei.</li>
			<li><b>Kommerzielle Hypothek</b>: Eine neutrale Beratung durch einen Spezialisten ermöglicht es Ihnen, schnell eine Hypothek für die Immobilienprojekte Ihres Unternehmens zu erhalten.</li>
		</ul>
		<h2>Eine individuelle Beratung für Ihre Finanzierung</h2>
		<p>Führen Sie ein KMU in der Schweiz? Suchen Sie einen Spezialisten für ein spezifisches Produkt, das Sie gewinnbringend in Ihr Unternehmen integrieren möchten? Unsere Berater informieren Sie gerne über alle unsere <b>Finanzierungslösungen für KMU</b>. Wir freuen uns darauf, Sie kennenzulernen!</p>
		<a class="bouton" href="/de/kmu/beratung">Beratung verlangen</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
