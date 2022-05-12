<?php
$h1="Kreditrechner: Wohnmobil finanzieren lassen";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kreditrechner: Die Kreditkosten Ihres Wohnmobiles</title>
<meta name="description" content="Dank unserem Kreditrechner wissen Sie genau, wie viel Sie für eine Fremdfinanzierung Ihres Wohnmobiles bezahlen. Unser Angebot ist unverbindlich und kostenlos!" />
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
		<p>Sie waren schon immer in Ihren Ferien auf Campingplätzen unterwegs? Das alte Wohnmobil hat ausgediehnt und Sie möchten nun ein neues fremdfinanzieren lassen? Dank unserem Kreditrechner erfahren Sie, was ein Wohnmobilkredit von Multicrédit kosten kann.</p>
		<h2>Selbst wählbare Modalitäten</h2>
		<p>Da wir unseren Kunden die grösstmögliche Freiheit ermöglichen möchten, können sie <b>zwischen 3'000 und 300'000 CHF</b> und <b>zwischen 12 bis 84 Monaten</b> ihren Kredit selbst zusammenstellen! Geben Sie dementsprechend in unserem untenstehenden Rechner Ihre gewünschte Summe, Laufzeit und Zinssatz ein und stellen Sie sich einen Kredit zusammen! Dies stellt hingegen noch kein Angebot dar, sondern dient nur zur Kundeninformation.</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Fahrzeugpreis</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Kreditlaufzeit</span>
			</div>
			<div class="input">
				<select id="taux">
					<?php for ($i=4.9;$i<=9.9;$i=$i+1) echo "<option value='$i'>$i %</option>";?>
				</select>
				<span class="label">Zinssatz</span>
			</div>
			<div class="input">
				<div>Monatsrate :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Totale Zinsen :</div>
				<div id="interet" class="value"></div>
			</div>	
		</div>
		</ul>
		<h2>Einige Ratschläge zum Kreditrechner</h2>
		<p>Der Kredit für Ihr neues Wohnmobil sollte gut überlegt sein, weshalb wir es uns erlauben, Ihnen einige zusätzliche Informationen zu liefern. Die <b>Laufzeit</b> beeinflusst die Kosten des Kredites beträchtlich, sowohl die Monatsrate als auch die Kreditzinsen. Je länger die Laufzeit, desto niedriger werden die monatlichen Kosten, doch desto höher wird die Zinsbelastung. Je kürzer die Laufzeit, desto höher sind die monatlichen Kosten, doch je weniger Zinsen werden fällig. Wir empfehlen:</p>
		<ul>
			<li><b>Hoher Kreditbetrag (teures Wohnmobil)</b>: Laufzeit möglichst lange wählen</li>
			<li><b>Niedriger Kreditbetrag (Teilfinanzierung des Fahrzeuges)</b>: Laufzeit möglichst kurz wählen</li>
			<li><b>Mittlerer Kreditbetrag (günstiges Wohnmobil)</b>: Laufzeit mittelfristig bis kurz wählen</li>
		</ul>
		<h2>Mit dem Kreditrechner zufrieden?</h2>
		<p>Wenn Sie mit den errechneten Ergebnissen einverstanden sind, bitten wir Sie darum, unser <b>unverbindliches Online-Formular</b> auszufüllen. Dadurch können Sie uns am einfachsten Ihre Bedürfnisse mitteilen. Unsere Berater werden Sie umgehend kontaktieren und Ihnen alle weiteren Abläufe erklären. Wir freuen uns darauf, Ihnen einen Kredit für Ihr neues Wohnmobil vermitteln zu können.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
