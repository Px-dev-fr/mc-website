<?php
$h1="Der Online-Rechner für Ihre Fahrzeugfinanzierung";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Autokredit Rechner: Berechnen Sie Ihre Autofinanzierung</title>
<meta name="description" content="Mit unserem Rechner für Ihren Autokredit haben Sie die Kosten Ihrer Fahrzeugfinanzierung im Griff! Erfahren Sie sofort, was Ihre Finanzierung kosten wird." />
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-credit-auto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
		<p>Wenn Kunden ein Fahrzeug, häufig handelt es sich um ein Auto, fremdfinanzieren wollen, ist Klarheit bei den Kosten für das Darlehen einer der wichtigsten Punkte. Damit Sie <b>von einer passenden Finanzierung profitieren</b> können, bieten wir Ihnen unseren Rechner für einen Autokredit an, der Ihnen die Monatsrate und Zinsen genau angibt.</p>
		<h2>Kredit selbst ausrechnen</h2>
		<p>Der Autokredit für unsere Kunden weist ein Maximum an Flexibilität auf, denn <b>die Kredithöhe und Laufzeit sind frei wählbar</b>. Somit können Sie selbst bestimmen, wie viel und auf welche Dauer Sie ausleihen möchten. Mit dem untenstehenden Rechner für Ihren Autokredit rechnen Sie anhand Ihrer Wünsche die monatlichen Kosten sowie die gesamten Zinsen im Handumdrehen aus.</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Summe (Chf)</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<option value=""></option>
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Dauer (Monate)</span>
			</div>
			<div class="input">
				<select id="taux">
					<option value=""></option>
					<?php for ($i=5.9;$i<=9.9;$i=$i+1) echo "<option value='$i'>$i %</option>";?>
				</select>
				<span class="label">Zinssatz</span>
			</div>
			<div class="input">
				<div>Monatliche Rate :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Totaler Zins :</div>
				<div id="interet" class="value"></div>
			</div>	
		</div>
		<h2>Erklärungen zum Rechner</h2>
		<p>Die Kreditkosten für Ihren Autokredit werden durch drei Faktoren bestimmt: Die Kredithöhe, die Laufzeit und den Zinssatz. Wenn Sie diese drei Faktoren anpassen, erhalten Sie den Kredit, der Ihnen am besten passt. Die Modalitäten beeinflussen die Monatsrate und den Zinssatz wie folgt:</p>
		<ul>
		<li><b>Kredithöhe</b>: Je mehr Sie ausleihen, desto höher werden die Monatsrate und die Kreditzinsen.</li>
		<li><b>Laufzeit</b>: Je länger die Laufzeit, desto niedriger wird die Monatsrate, doch die Zinsen werden dafür höher. Je kürzer die Laufzeit, desto niedriger werden die gesamten Zinsen, doch die Monatsrate steigt.</li>
		<li><b>Zinssatz</b>: Je niedriger, desto günstiger sind Monatsrate und Zinsen. Wir garantieren unseren Kunden attraktive Zinssätze!</li>
		</ul>
		<h2>Ausgerechneten Kredit beantragen</h2>
		<p>Wenn Sie mit den Ergebnissen des Rechners für Ihren Autokredit zufrieden sind, empfehlen wir Ihnen, unser Online-Formular auszufüllen. Teilen Sie unserem Team Ihre Wünsche mit und erhalten Sie nach Eingang Ihrer Dokumente <b>kostenlos ein unverbindliches Angebot innert 24-48 Stunden</b>. Unsere Mitarbeiter stehen Ihnen für jegliche Auskünfte und Beratungsgespräche zur Verfügung. Wir freuen uns auf Ihren Auftrag!</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
