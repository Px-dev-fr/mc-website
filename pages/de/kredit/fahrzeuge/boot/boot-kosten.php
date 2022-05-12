<?php
$h1="Die Kosten eines Kredites für Ihr Boot";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Bootkredit Kosten: Die Finanzierung für Ihr Boot berechnet</title>
<meta name="description" content="Möchten Sie sich ein Boot anschaffen und dafür eine Finanzierung erhalten. Wir informieren Sie unverbindlich über die Kosten eines Kredites für Ihr Boot." />
<?php include('includes/meta.php');?>
<link href="/template/forms.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
		<p>Sie möchten sich ein Boot, eine Yacht oder ein sonstiges Wasserfahrzeug zulegen? Wir bieten unseren Kunden, die Wassersport betreiben, eine Finanzierung für ihr Fahrzeug per günstigem Kredit. Damit Sie wissen, wie hoch die Kosten einer solchen Fremdfinanzierung für ein Boot sein können, haben wir für Sie einen Online-Rechner erstellt.</p>
		<h2>Die Kosten der Bootsfinanzierung ausrechnen</h2>
		<p>Dank unserem praktischen Online-Tool können Sie die Kosten Ihrer Bootsfinanzierung ausrechnen. Dazu müssen Sie lediglich die Modalitäten Ihrer Wahl, nämlich die Kredithöhe, die Laufzeit und den Zinssatz angeben. Der Rechner gibt Ihnen die genaue Monatsrate sowie die Zinsen an, damit Sie die Ausgaben für Ihr Boot genau kennen.</p>
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
				<div>Totaler Zins: :</div>
				<div id="interet" class="value"></div>
			</div>	
		</div>
		<h2>Hinweise zu den Kosten</h2>
		<p>Die Laufzeit, die Kreditsumme und der Zinssatz beeinflussen die Kosten der Fremdfinanzierung in unterschiedlicher Weise. Für die Kreditsumme und den Zinssatz gilt: Je <b>höher</b> sie sind, desto <b>teurer</b> werden Monatsrate und Zinsen. Bei der Laufzeit verhält es sich ein wenig komplizierter:</p>
		<ul>
		<li><b>Lange Laufzeit</b>: Die Monatsrate wird sehr günstig, doch die Kreditzinsen steigen</li>
		<li><b>Kurze Laufzeit</b>: Die Monatsrate wird relativ teuer, doch die Zinsen sind minimal</li>
		</ul>
		<p>Indem Sie diese Faktoren im Rechner anpassen, können Sie sich ein mögliches Angebot zusammenstellen, dass Ihren Kostenwünschen für Ihr finanziertes Boot entspricht.</p>
		<h2>Kostenlos Offerte einholen</h2>
		<p>Sind Sie mit den Kosten für das unverbindliche Kreditangebot zufrieden? In diesem Fall laden wir Sie ein, unser Online-Formular kostenlos auszufüllen. Unser Mitarbeiterteam wird Sie daraufhin kontaktieren, um Ihnen alle weiteren Abläufe zu erklären. Zusätzliche Beratungsgespräche sowie die gesamte Administration sind <b>unverbindlich und kostenlos</b>. Wir freuen uns darauf, Ihnen einen ausgezeichneten Service bieten zu können.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
