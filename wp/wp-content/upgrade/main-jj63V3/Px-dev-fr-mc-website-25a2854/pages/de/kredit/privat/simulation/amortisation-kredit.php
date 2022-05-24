<?php
$h1="Wie bei der Amortisation des Darlehens profitieren?";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Amortisation und Kredit: Wie funktioniert die Rückerstattung?</title>
<meta name="description" content="Bei einem Kredit bedeutet Amortisation nichts anderes als die Rückzahlung des Darlehens. Profitieren Sie von verschiedenen Laufzeiten bei Zins und Rate!" />
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
		<p>Amortisation eines Kredites bedeutet nichts anderes, als den Kredit zurückzuzahlen. Bei jeder Form der Ausleihe muss das Darlehen komplett oder teilweise zurückgezahlt werden, beim Privatkredit gilt die erste Regel. Bei der Amortisation gibt es normalerweise eine <b>Laufzeit</b>, die bestimmt, innerhalb welcher Frist der Kredit zurückgezahlt werden muss. Dabei können Sie sich erhebliche Vorteile verschaffen!</p>
		<h2>Amortisation beeinflusst Kosten und Zinsen!</h2>
		<p>Je länger die Dauer der Amortisation, desto <b>niedriger</b> werden die Monatsraten. Dies bedeutet, dass Sie mit einer längeren Laufzeit von einer kleineren monatlichen Belastung profitieren als mit einer kürzeren Laufzeit. Infolge haben Sie die möglichkeit, <b>grössere Kreditsummen</b> aufzunehmen, da die Belastung niedriger ist. Es gilt aber ebenfalls, dass eine längere Amortisationsdauer die Zinsen des Darlehens insgesamt höher werden. Unser Amortisationsrechner liefert Ihnen einige Hinweise:</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Summe (Chf)</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Dauer (Mois)</span>
			</div>
			<div class="input">
				<select id="taux">
					<?php for ($i=5.9;$i<=9.9;$i=$i+1) echo "<option value='$i'>$i %</option>";?>
				</select>
				<span class="label">Zinssatz</span>
			</div>
			<div class="input">
				<div>Monatsrate :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Totaler Zins :</div>
				<div id="interet" class="value"></div>
			</div>
		</div>

		<h2>Strategie für die Amortisation Ihres Kredites</h2>
		<p>Bei Multicrédit sind wir stolz darauf, unseren Kunden die maximale Freiheit garantieren zu können. Deshalb können die <b>Kreditsumme (3'000 - 3'000 CHF) sowie die Laufzeit (12 - 84 Monate)</b> individuell gewählt werden. Wie Sie die Amortisation wählen, hängt von Ihren Bedürfnissen, Ihrem Budget und den individuellen Präferenzen ab. Grundsätzlich gilt aber:</p>
		<ul>
		<li><b>Grosses Budget verfügbar</b>: Die Amortisation möglichst kurzfristig wählen</li>
		<li><b>Kleines Budget verfügbar</b>: Die Amortisation möglichst langfristig wählen</li>
		<li><b>Möglichst günstiger Kredit</b>: Die Amortisation möglichst kurzfristig wählen</li>
		<li><b>Möglichst günstige Monatsrate</b>: Die Amortisation möglichst langfristig wählen</li>
		</ul>
		<h2>Wir beraten Sie zur Amortisation Ihres Kredites</h2>
		<p>Wenn Sie eine Beratung zu der für Sie besten Laufzeit in Abhängigkeit von Ihrer Situation möchten, werden unsere Mitarbeiter Sie <b>kostenlos und fachmännisch beraten</b>. Sollten Sie sich für eine gewisse Kreditsumme und - laufzeit entschieden haben, laden wir Sie dazu ein, unser Online-Formular auszufüllen. Nach Erhalt Ihrer Dokumente können wir Ihnen innerhalb von nur <b>24-48 Stunden ein Angebot</b> vorschlagen. Wir freuen uns darauf, Sie bedienen zu dürfen.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
