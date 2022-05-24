<?php
$h1="Privatfinanzierung vom Spezialisten: Sparen Sie dank bestem Zinssatz!";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include('includes/meta.php');?>
<title>Privatfinanzierung: Wir übernehmen Ihr Dossier von A bis Z</title>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
<meta name="description" content="Profitieren Sie von unserer Privatfinanzierung, die sich Ihren Bedürfnissen anpasst! Privatkredit, Hypothek, Ablösung: Wir garantieren den besten Zinssatz."/>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="Privatfinanzierung in der Schweiz";include('includes/rubriques/prives.php');?>
	<div id="mct">
		<h2 id="mcth">Berechnen Sie die Kosten Ihrer Privatfinanzierung</h2>
		<div id="mcs">
			<div class="mcc" id="mcc-credit-prive">Privatkredit</div>
			<div class="mcc" id="mcc-hypotheque">Hypothekarfinanzierung</div>		
		</div>
		<div id="ms"></div>
		<p>Multicrédit hilft Ihnen bei der Finanzierung Ihrer privater Projekte dank <b>Lösungen, die sich an Ihre Bedürfnisse anpassen</b>! Egal ob Privatkredit oder Hypotheken, dank <?php echo (date("Y")-1999);?> Jahren Erfahrung auf dem Schweizer Kreditmarkt kann unser Team für Sie die besten Angebote unserer Partner vermitteln. Sparen Sie bei Ihrer privaten Finanzierung dank dem Service eines Spezialisten!</p>
		
		<h2>Privatfinanzierung: Unsere Produkte für Sie</h2>
		<p>Welchen Wunsch haben Sie? Unsere Spezialisten helfen Ihnen dabei, <b>eine massgeschneiderte idividuelle Finanzierung</b> für Ihr persönliches Vorhaben zu erhalten. Entdecken Sie unsere verschiedenen Dienstleistungen:</p>
		<ul>
			<li><b>Privatkredit</b>: Von 3'000 bis 300'000 CHF zum besten Zinssatz der Schweiz mit oder ohne Bank. Wählen Sie eine Rückzahlungsdauer zwischen 12 und 84 Monaten nach Ihren Wünschen.</li>
			<li><b>Kreditablösung</b>: Sparen Sie bei Ihren Kreditraten, entlasten Sie Ihr Budget und schaffen Sie Ordnung im Rechnungschaos! Sie profitieren von einer Ablösung Ihrer Kredit, Kreditkarten und Leasings.</li>
			<li><b>Hypotheken</b>: Erst- oder Zweitwohnsitz, Haus oder Wohnung, unser Experte übernimmt Ihr Dossier von A bis Z, um Ihnen die Finanzierung Ihrer zukünftigen Immobilie zu erleichtern.</li>
		</ul>
		
		<h2>Private profitieren von einer Betreuung von A bis Z</h2>
		<p>Wir sind mehr als ein einfacher Kreditvermittler, denn unsere Agentur bietet <b>kostenlose und unverbindliche Beratungen</b> sowie eine eingehende Dossieranalyse an. Wenn Sie uns Ihr Dossier anvertrauen:</p>
		<ul>
			<li>Erhalten Sie die Hilfe eines erfahrenen Spezialisten, der Ihr Dossier analysiert und optimiert.</li>
			<li>Profitieren Sie von den besten Angeboten auf dem Markt und <b>sparen Sie bei den Kosten Ihrer Privatfinanzierung</b> (Zinsen, etc.)</li>
			<li>Entdecken Sie morderne Alternativen zum Bankkredit, beispielsweise in Form von neuartigen Crowdlending-Angeboten.</li>
		</ul>
		
		<h2>Kostenloses und unverbindliches Angebot</h2>
		<p>Möchten Sie mehr über unsere Konditionen erfahren? Kommen Sie in den Vorteil eines unverbindlichen Angebotes für Ihre Bedürfnisse! <b>Unsere Experten für Ihre Privatfinanzierung stehen Ihnen zur Verfügung</b>, wenn Sie Informationen brauchen oder von einer kompletten Dossierbetreuung profitieren möchten.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Anfrage online</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<script>
	ajload("credit-prive", "/de/kredit/kredit-beantragen");
	document.getElementById("mcc-credit-prive").onclick = function(e){ajload("credit-prive", "/de/kredit/kredit-beantragen");}
	document.getElementById("mcc-hypotheque").onclick = function(e){ajload("hypotheque", "/de/kredit/kredit-beantragen");}
</script>
</body>
</html> 
