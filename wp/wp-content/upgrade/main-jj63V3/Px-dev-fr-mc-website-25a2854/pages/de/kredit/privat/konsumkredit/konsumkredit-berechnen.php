<?php
$h1="Die Kosten für Ihren Konsumkredit berechnen";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Konsumkredit berechnen: Über die Kosten Bescheid wissen</title>
<meta name="description" content="Viele Kunden wollen genau wissen, wie viel sie ihr Konsumkredit kosten wird. Mit unserem praktischen Tool können Sie hier Ihren Konsumkredit berechnen!" />
<?php include('includes/meta.php');?>
<link href="/template/forms.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="konsumkredit-berechnen"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
		<p>Als Kunde auf der Suche nach einer Privatfinanzierung möchten Sie sicher wissen, wie viel Ihr Konsumkredit kosten wird, sowohl an Zinsen als auch an monatlichen Raten. Auf unserer Seite können Sie <b>die genauen Kosten für Ihren Konsumkredit berechnen</b>. Unser Online-Tool steht Ihnen zur Verfügung.</p>
		<h2>Unser Online-Rechner</h2>
		<p>Da wir das Bedürfnis unserer Kunden nach Klarheit bei der Kreditvergabe kennen, haben wir einen Online-Rechner erstellt. Geben Sie einfach die gewünschten Parameter ein und schon können Sie Ihren Konsumkredit berechnen:</p>
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
		</p>
		<h2>Unsere Empfehlungen zur Kostenrechnung</h2>
		<p>Die Rückzahlungsdauer sollte der Situation und den Bedürfnissen des Kreditnehmers angepasst werden. Wir empfehlen, dass Sie folgende Punkte berücksichtigen, wenn Sie die Kosten für Ihren Konsumkredit berechnen:</p>
		<ul>
		<li><b>Kurze Laufzeit</b>: Macht die Zinsen für das Darlehen günstiger, doch die Monatsrate viel höher. Empfehlenswert bei kleineren Krediten.</li>
		<li><b>Lange Laufzeit</b>: Macht die Zinsen für das Darlehen höher, doch die Monatsrate viel günstiger. Empfehlenswert bei hohen Kreditbeträgen.</li>
		<li><b>Mittlere Laufzeit</b>: Zinsen sowie Monatsrate befinden sich im mittleren Bereich. Ideal für Kunden, die einen ausgewogenen Kredit suchen.</li>
		</ul>
		<h2>Online ein Angebot verlangen</h2>
		<p>Wir hoffen, dass Sie erfolgreich Ihren Konskredit berechnen konnten. Wenn Sie nun mit dem Ergebnis zufrieden sind, laden wir Sie dazu ein, unser Online-Formular unverbindlich auszufüllen. Unsere Berater erhalten so eine Vorstellung von Ihren Wünschen und können Ihnen nach Erhalt Ihrer Dokumente innerhalb von nur <b>24-48 Stunden ein Angebot</b> erstellen. Wir freuen uns auf Sie.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
