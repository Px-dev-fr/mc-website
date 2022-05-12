<?php
$h1="Sind Sie selbstständig? Unsere Finanzierung optimiert Ihr Business!";
$link="/de/kmu/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include('includes/meta.php');?>
<title>Finanzierung für Selbstständige: Neutrale Beratung eines Spezialisten</title>
<meta name="description" content="Kredit, Leasing, Factoring, Rechnungskauf für Kunden, ... Sind Sie selbstständig tätig in der Schweiz? Unsere Finanzierung gibt Ihrem Business einen Vorteil!"/>
<style><?php echo file_get_contents("template/rubriques.css");?></style>
</head>
<body>
<div id="container">
	<?php $na=true;include('includes/header.php');?>
	<?php $alt="Finanzierung für selbstständige Tätigkeit";include('includes/rubriques/independants.php');?>
	<div id="mct">
		<p>Sind Sie selbstständig tätig und suchen eine Finanzierung für Ihre Projekte? Multicrédit berät seit <?php echo (date("Y")-1999);?> Jahren Selbstständige in der Schweiz zu ihren Möglichkeiten und findet für seine Kunden einfache, flexible und vor allem günstige Angebote. Wie können wir Ihnen helfen?</p>
		
		<h2>Unsere Produkte für Selbstständige</h2>
		<p>Da wir sowohl klassische Produkte wie Kredite als auch neue Lösungen wie Factoring anbieten, können Sie bei uns aus einer grossen Palette an Möglichkeiten diejenige auswählen, die Ihnen am besten passt:</p>
		<ul>
			<li><b>Kredit für Selbstständige</b>: Profitieren Sie von einer schnellen Lösung ohne administrative Komplikationen und sparen Sie dank dem besten Zinssatz der Schweiz!</li>
			<li><b>Leasing für Unternehmen</b>: Einfach jedes Produktionsmittel für Ihren Betrieb günstig finanzieren! Ein Spezialist wird Sie eingehend beraten.</li>
			<li><b>Lösungen für Ihre Kunden</b>: Bieten Sie Ihren Kunden den Kauf auf Rechnung an, während Sie gleichzeitig innerhalb von nur 24-48h Ihren Erlös erhalten!</li>
		</ul>
		
		<h2>Unsere Finanzierung - Ihre Vorteile</h2>
		<p>Durch eine umfassende Beratung und eine komplette Übernahme Ihres Dossiers profitieren Sie von unserem Know-How in Sachen Finanzierung von selbstständigen Unternehmen. Stellen Sie uns Ihr Projekt vor und kommen Sie in den Vorteil von:</p>
		<ul>
			<li>Einer neutralen Beratung durch einen Experten</li>
			<li>Einer Übernahme Ihres Dossiers von A bis Z</li>
			<li>Günstigen Alternativen dank Lösungen mit oder ohne Bank (Crowdlending)</li>
		</ul>
		
		<h2>Einfach, Schnell, Diskret</h2>
		<p>Verwalten Sie ein Business als Einzelunternehmer, Freiberufler oder als selbstständiger Unternehmer? Möchten Sie ein spezielles Vorhaben kurz-, mittel- oder langfristig finanzieren oder <b>Ihren Umsatz nachhaltig steigern</b>? Zögern Sie nicht damit, uns zu kontaktieren, um von einem unverbindlichen Gespräch mit einem Fachmann zu profitieren!</p>
		
		<a class="bouton" href="/de/kmu/beratung">Beratung verlangen</a>
	</div>
	<?php $nosub=true;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html> 
