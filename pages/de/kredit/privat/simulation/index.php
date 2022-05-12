<?php
$h1="Ihren Kredit online simulieren";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kredit Simulation: Berechnen Sie Ihren Kredit</title>
<meta name="description" content="Unsere Kunden wollen ganz genau wissen, wie viel ein Kredit bei uns kostet. Deshalb bieten wir eine kostenlose Simulation an, damit Sie Bescheid wissen." />
<?php include('includes/meta.php');?>
<link href="/template/forms.css" rel="stylesheet" type="text/css"/>
<style>
</style>
</head>
<body> 
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="kredit-simulation";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Tranparenz bei den Kreditkosten ist für jeden Kunden wichtig. Da es uns wichtig ist, dass unsere Klienten über ihren Kredit genau informiert sind, haben wir eine kostenlose Simulation erstellt, mit deren Hilfe sich die Kreditkosten genau berechnen lassen!</p>
		<h2>Erklärungen zur Simulation</h2>
		<p>Um Ihren Kredit zu simulieren, müssen sie lediglich die gewünschte Summe, Laufzeit und Zinssatz eingeben. Sie erhalten die genaue monatliche Rate sowie den totalen Zins. Die Elemente der Simulation setzen sich wie folgt zusammen:</p>
		<ul>
		<li><b>Summe</b>: Die ausgeliehene Geldmenge, je höher sie ist desto höher werden Monatsrate und Zinsen</li>
		<li><b>Laufzeit</b>: Je länger die Laufzeit, desto kleiner wird die Rate, doch desto höher werden die Zinsen</li>
		<li><b>Zinssatz</b>: Beeinflusst die Kosten, je höher desto teurer wird der Kredit</li>
		<li><b>Rate</b>: Beinhaltet die Amortisation sowie einen Teil des zu zahlenden Zinses</li>
		<li><b>Zinsen</b>: Entsprechen den eigentlichen Kosten des Kredits</li>
		</ul>
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
		<h2>Unverbindliches Angebot einholen</h2>
		<p>Wenn Sie mit der Simulation Ihres Kredites zufrieden sind, laden wir Sie ein, ein <b>unverbindliches Angebot online</b> einzuholen. Ein Fachmann wird Sie durch alle Schritte leiten, sobald wir Ihre Anfrage erhalten haben. Wir sind stolz darauf, Ihnen ein <b>Angebot innerhalb von 24-48 Stunden</b> nach Erhalt Ihrer Dokumente machen zu können! Wir hoffen, dass die Simulation Ihnen bei der Entscheidung zu Ihrem Kredit hilfreich war.</p> 
		</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
