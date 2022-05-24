<?php
$h1="Kredit für alle Unternehmensformen";
$link="/de/kmu/kredit/kredit-beantragen";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kredit für Unternehmen: Unsere Spezialisierung</title>
<meta name="description" content="Suchen Sie einen Kredit für Ihr Unternehmen? Wir sind spezialisiert auf gewerbliche Kredite in der ganzen Schweiz und haben über 15 Jahre Erfahrung."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');$pme=1;?>
	<?php $image="kredit-firma"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
			<p>Führen Sie ein eigenes Unternehmen in der Schweiz? Sind Sie an einer Finanzierung per gewerblichem Kredit interessiert? Als erfahrener, unabhäniges Kreditinstitut suchen wir für Sie Betriebskredite in der ganzen Schweiz.</p>
		<h2>Unser Engagement</h2> 
			<p>Unser Dienst eignet sich für alle Unternehmen, die einen unverbindlichen <b>Kredit zu den besten Konditionen</b> erhalten möchten. Der Dienst unserer Firma zeichnen sich durch die grosse Freiheit aus, die der Kunde bei uns hat:</p>
			<ul>
				<li><b>Kreditbetrag</b>: Legen Sie die Höhe Ihres Betriebskredites selber fest.</li>
				<li><b>Laufzeit</b>: Auch die Laufzeit Ihres Darlehens können Sie individuell wählen.</li>
				<li><b>Angebote</b>: Aufgrund Ihrer Wünsche suchen wir für Sie <b>attraktive Zinssätze</b></li>
			</ul>
		<h2>Unternehmen durch Kredit finanzieren</h2>
			<p>Ihr gewerblicher Kredit ist an keinen Verwendugszweck gebunden. Somit können Sie die erhaltenen Mittel <b>frei in Ihrem Unternehmen investieren</b>. Wollen Sie einen neuen Mitarbeiter einstellen? Soll das Büro renoviert werden? Wir haben eine kleine Liste mit Punkten, in die Sie Ihren Kredit in Ihrem Unternehmen gewinnbringend investieren können:</p>
				<ul>
					<li><b>Fahrzeuge</b>: Firmenwagen, Transportfahrzeuge, Traktoren, Werbeautos, etc.</li>
					<li><b>Materialien</b>: Kaufen Sie Rohstoffe, Verbrauchsmittel, etc.</li>
					<li><b>Maschinen</b>: Verschiedene Produktionsmittel aller Art.</li>
					<li><b>Immobilien</b>: Kredit als Aufstockung der Eigenmittel.</li>
					<li><b>Liquidität</b>: Aufstockung Ihres Umlaufvermögens.</li>
				</ul>
		<h2>Online-Formular ausfüllen</h2>
			<p>Wir empfehlen Ihnen, unser Online-Formular für einen unverbindlichen Kontakt auszufüllen. Geben Sie Ihre Wünsche zur Finanzierung Ihres Unternehmens an und unsere Berater werden Sie durch die weiteren Abläufe führen. Am Ende erhalten Sie ein <b>individuelles Angebot für Ihren gewerblichen Kredit</b>. Wir freuen uns darauf, Ihnen weiterhelfen zu können!</p>
		<a class="bouton" href="/de/kmu/kredit/kredit-beantragen">Sofortige Kreditanfrage</a>
	</div> 
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
