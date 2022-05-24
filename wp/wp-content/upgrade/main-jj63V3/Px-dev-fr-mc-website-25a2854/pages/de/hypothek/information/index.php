<?php
$h1="Informationen zu Ihrer Hypothek";
$link="/de/hypothek/hypothek-offerte"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Hypothekinformationen</title>
<meta name="description" content="Haben Sie noch Fragen zum Thema Hypotheken? Wir bieten Ihnen Informationen zu Ihrer zukünftigen Hypothek an, über Zinsmodelle, Amortisation, Eigenmittel, etc."/>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="hypotheque-taux-fixe"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/hypotheque.php');?>
		
		<p>Beim Erwerb von Wohneigentum geht ein grosser Traum in Erfüllung. Das bringt aber auch viele Verpflichtungen mit sich. Wir bieten Ihnen auf dieser Seite <b>Informationen zu Ihrer Hypothek</b> an, mit denen Sie eine bessere Übersicht über die verschiedenen Produkte erhalten. Informieren Sie sich!</p>
		<h2>Informationen zu Amortisation, Eigenkapital, etc.</h2>
		<p>Klicken Sie auf den untenstehenden Link, um alle Informationen zu relevanten Themen wie Hypothekarzinsen, Eigenkapital und Amortisation zu erhalten. Ausserdem finden Sie dort auch unseren spezialisierten <b>Hypothekenrechner</b>.</p>
		<h2>Wissenswertes über Zinsmodelle Ihrer Hypothek</h2>
		<p>Den verschiedenen Zinsmodellen haben wir eine eigene Kategorie gewidmet. Klicken Sie auf den untenstehenden Link auf der rechten Seite, um Informationen über die verschiedenen Modelle einer Hypothek zu erhalten. Egal ob <b>Fixzins, Libor oder variabel</b>, unsere Berater haben sich die Mühe gemacht, Ihnen die nötigen Informationen zur Verfügung zu stellen.</p>
		<h2>Kostenloses Angebot</h2>
		<p>Sind irgendwelche Unklarheiten aufgetreten oder möchten Sie einfach nur professionelle und seriös beraten werden?
		Kein Problem! Multicredit bietet <b>kostenlose und unverbindliche Beratungen</b> im Bereich Hypothek an. Sie können uns jeder Zeit per Online-Formular kontaktieren und die Hilfe eines professionellen Beraters erhalten.</p>
		<a class="bouton" href="/de/hypothek/hypothek-offerte">Kostenlose Hypothekanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
