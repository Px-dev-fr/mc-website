<?php
$h1="Unser Zinsrechner kostenlos für Sie";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kostenloser Zinsrechner</title>
<meta name="description" content="Sind Sie auf der Suche nach einem einfachen, kostenlosen Zinsrechner? Dann sind Sie genau richtig bei uns! Berechnen Sie Ihren Zins jetzt auf unserer Website." />
<?php include('includes/meta.php');?>
<link href="/template/forms.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>
		Sind Sie auf der Suche nach einem kostenlosen <strong>Zinsrechner</strong>? Genau das bieten wir Ihnen an. Unser Online-Tool ermöglicht Ihnen die Berechnung der gesamten Kreditzinsen und der Monatsrate in Abhängigkeit von Zinssatz, Laufzeit und Kredithöhe.</p>
		</p>
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
		<p>
			Sobald Sie den <strong>Zins ausgerechnet</strong> haben und damit zufrieden sind, dann können Sie bei uns einen Kredit kostenlos beantragen.
			Dazu müssen Sie ledeglich unser Online-Formular ausfüllen und uns folgende Dokumente schicken:
		</p>
		<ul>
			<li>3 letzten Lohnabrechnungen</li>
			<li>Ihre Identität Vorder -und Rückseite kopiert</li>
			<li>Krankenkassenprämie (Ihre und Ihrer Familie)</li>
		</ul>
		<h2>Erfüllen Sie sich Ihre Wünsche</h2>
		<p>Haben Sie Projekte, Wünsche, Träume oder Ziele? Damit jemand seine Träume und Ziele verwirklichen kann, braucht es Geld. Scheuen Sie sich nicht, unser Kreditformular online auszufüllen. <br><br>Sie können die Kreditsumme von 3'000 CHF bis 300'000 CHF ausleihen, mit einer wählbaren Laufzeit von 12 bis 84 Monate. Nachdem die Dokumente bei uns eingegangen sind, erhalten Sie innerhalb von 48h eine Offerte. Wir hoffen, dass Ihnen unser kostenloser Zinsrechner nützlich war!</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a><br>
</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
