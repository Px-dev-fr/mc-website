<?php
$h1="Fahrzeugfinanzierung in der Schweiz";
$link="/de/kredit/kredit-beantragen";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Fahrzeugfinanzierung</title>
<meta name="description" content="Brauchen Sie eine günstige und transparente Fahrzeugfinanzierung in der Schweiz? Dann sind Sie bei uns richtig! Unsere Mitarbeiter beraten Sie kostenlos!" />
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Brauchen Sie ein neues Fahrzeug für die Arbeit oder einfach nur zum Vergnügen? Ist Ihr Budget schmaler und Ihr altes Modell zu teuer geworden? Bei uns erhalten Sie von Spezialisten aus der Schweiz eine transparente <b>Fahrzeugfinanzierung</b>, die Sie sich leisten können!</p>
		<h2>Fahrzeugfinanzierung nach Ihren Wünschen</h2>
		<p>Multicrédit bietet Ihnen einen Kredit zur Fahrzeugfinanzierung an, welchen Sie individuell gestalten können. Bei unserem Geschäftsmodell hat der Kunde die Freiheit, die Kreditmodalitäten wie Betrag und Laufzeit selbst bestimmen zu können. Somit können Sie Ihr Darlehen auf Ihr Budget genau abstimmen! Folgende Dinge zeichnen unsere flexiblen Kredite aus:</p>
		<ul>
		<li><b>Individueller Betrag</b>: Beantragen Sie eine beliebige Summe <b>zwischen 3'000 und 300'000 CHF</b>!</li>
		<li><b>Flexible Laufzeit</b>: Bestimmen Sie die Laufzeit Ihrer Fahrzeugfinanzierung selbst: Zwischen <b>6 und 84 Monaten</b>!</li>
		<li><b>Fairer Zinssatz</b>: Unter zahlreichen Angebote wählen wir eines aus, das <b>einen attraktiven Zinssatz</b> aufweist.</li>
		<li><b>Kostenlose Beratung</b>: Wenn Sie mehr Informationen zum Kredit möchten, werden unsere Finanzexperten Sie <b>kostenlos</b> beraten.</li>
		<li><b>Keine Nebenkosten</b>: Unsere Kredite sind frei von Bearbeitungsgebühren und versteckten Kostenfallen!</li>
		</ul> 
		<h2>Kredit oder Leasing, unsere Empfehlung</h2>
		<p>Zur <b>Fahrzeugfinanzierung</b> bieten sich Kredit und Leasing an. Doch das Leasing ist nur in bestimmten Fällen vorteilhaft. Nachteile sind die begrenzte Kilometerzahl, die aufgezwungene Kaskoversicherung und vor allem die nicht vorhandenen Eigentümerrechte. Mit einem Kredit sind Sie aber generell freier, denn das Fahrzeug gehört Ihnen! Ausserdem kann das Leasing mit allen Nebenkosten in gewissen Fällen fast genauso teuer sein wie ein <b>günstiger Konsumkredit</b>. Aus diesem Grund raten wir Ihnen zur Finanzierung per Kredit! Mehr Informationen finden Sie <a href="https://www.multicredit.ch/de/kredit/privat/fahrzeuge/auto/kredit-oder-leasing">hier</a>.</p>
		<h2>Direkte Finanzierung aus der Schweiz</h2>
		<p>Um eine Fahrzeugfinanzierung bei uns zu beantragen, müssen Sie nur einige kurze Schritte machen:</p>
		<ul>
		<li>Unser <b>Online-Formular</b> in einigen Klicks ausfüllen.</li>
		<li>Dem Dossier für unsere Analyse einige wichtige <b>Dokumente beifügen</b>.</li>
		<li>Uns das Dossier elektronisch oder per Post <b>zuschicken</b>.</li>
		<li>Unsere Antwort per Mail oder Post in den nächsten <b>48 Stunden</b> abwarten.</li>
		</ul>
		<p>Wie Sie sehen, ist die Kreditanfrage bei uns kinderleicht. Unsere Experten arbeiten <b>vertraulich</b> und mit grösster Sorgfalt, um Ihnen ein unverbindliches und attraktives Angebot zu machen. Nehmen Sie unseren kostenlosen Service in Anspruch!</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
<style>
.mytable{
	background:#eee;
	border:1px solid #666;
	overflow:visible!important;
	}
.mytable tbody{border-top:none;}
.mytable tr:nth-of-type(1){background:rgba(0,0,0,0.2);font-weight:bold;border-bottom:1px solid #666;}
.mytable tr:nth-of-type(even){background:rgba(0,0,0,0.1);}
.mytable tr td{width:30%;padding:15px;font-weight:bold;text-align:center;height:60px;border:1px solid #666;}
.mytable tr td span{display:block;font-weight:normal;text-align:left;font-size:0.9em;font-style:italic;}
.mytable tr td:first-of-type{width:40%;text-align:left;}
.mytable tr td.oui{background:rgba(0,200,0,0.5);}
.mytable tr td.non{background:rgba(200,0,0,0.5);}
.mytable tr td.neutre{background:rgba(200,200,0,0.3);}
@media screen and (max-width: 1200px){
	.mytable tr td{height:40px;width:25%;}
	.mytable tr td:first-of-type{width:50%;}
	.mytable tr td{font-size:0.9em;}
	.mytable tr td span{display:none;}
}
@media screen and (max-width: 800px){
	.mytable tr td{font-size:0.8em;padding:10px;}
	.mytable tr td{height:30px;line-height:1.1em;}
}
@media screen and (max-width: 600px){
	.mytable tr td{width:20%;font-weight:normal;font-size:0.7em;padding:5px;}
	.mytable tr td:first-of-type{width:60%;}
}
@media screen and (max-width: 500px){
	.mytable tr td{width:15%;}
	.mytable tr td:first-of-type{width:70%;}
}
</style>
