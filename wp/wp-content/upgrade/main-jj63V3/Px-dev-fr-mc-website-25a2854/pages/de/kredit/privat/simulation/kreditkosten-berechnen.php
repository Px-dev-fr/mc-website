<?php
$h1="Die Kreditkosten online genau berechnen";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kreditkosten berechnen: Nutzen Sie unseren Onlinerechner</title>
<meta name="description" content="Viele Konsumenten fragen sich, wie viel sie ein bestimmter Kredit genau kostet. Hier können Sie über unseren Online-Rechner Ihre Kreditkosten berechnen." />
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
		<p>Bevor man einen Kreditvertrag unterschreibt, ist es absolut notwendig, sich über die Kosten im Klaren zu sein. Dies gilt nicht nur für die Höhe der Monatsrate, sondern auch für die Zinsen, welche die eigentlichen Kreditkosten widerspiegeln. Unser Online-Tool gibt Ihnen genau Auskunft.</p>
		<h2>Monatsrate und Zinsen: Wo sind die Unterschiede?</h2>
		<p>Viele Kunden sind sich nicht bewusst, was die Monatsrate von den Kosten des Kredites unterscheidet. Wenn Sie ein verzinstes Darlehen aufnehmen, leihen Sie Geld aus und zahlen innert einer definierten Frist den Kredit und einen zusätzlichen Betrag, die Zinsen, zurück. Deshalb wird monatlich ein Teilbetrag fällig: <b>die Monatsrate</b>. Diese Monatsrate beinhaltet zwei Dinge: Zum einen einen Teil der <b>Amortisation</b>, also die Rückzahlung, und zum anderen einen Teil der Zinsen, welche die <b>realen Kosten</b> des Kredits darstellen. Kurz gesagt:</p>
		<ul>
		<li><b>Monatsrate</b>: Wird monatlich fällig und beinhaltet einen Teil der Amortisation und der Zinsen</li>
		<li><b>Zinsen</b>: Stellen die Kreditkosten dar und sind abhängig von Summe, Zinssatz und Laufzeit</li>
		</ul>
		<p>Mit unserem Rechen-Tool können Sie hier Ihre Kreditkosten berechnen. Simulieren Sie ein Angebot, das Ihnen entspricht.</p>
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

		<h2>Gibt es weitere Kosten beim Kreditangebot?</h2>
		<p>Wir bei Mutlicrédit verlangen <b>keinerlei administrative Gebühren</b>: Die Kreditanfrage, Beratung, Dossierstudium und Angebotssuche sind für unsere Kunden kostenlos und unverbindlich. Wenn Sie über unseren Service Ihre Kreditkosten berechnen, können Sie sicher sein, dass Sie lediglich diese Ausgaben zu tragen haben. Deshalb rühmen wir uns einer grossen <b>Transparenz</b> bei der Kreditvergabe sowie eines <b>besonders kundenfreundlichen Dienstes</b>.</p>
		<h2>Online Angebot anfordern</h2>
		<p>Sie konnten Ihre Kreditkosten berechnen und sind zufrieden mit dem Ergebnis? Wir freuen uns darüber, Ihnen unser Online-Formular zur <b>kostenlosen und unverbindlichen Kreditanfrage</b> anzubieten. Teilen Sie uns Ihre Vorstellungen mit und ein Berater wird Ihnen alle weiteren Schritte erklären. Unser Service garantiert Ihnen ein Angebot innerhalb von nur <b>24-48 Stunden</b> nach Erhalt Ihrer Dokumente.</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
