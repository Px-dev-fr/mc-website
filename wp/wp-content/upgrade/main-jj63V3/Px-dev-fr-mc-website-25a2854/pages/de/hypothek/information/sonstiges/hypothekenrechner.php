<?php
$h1="Hypothekenrechner";
$link="/de/hypothek/hypothek-offerte";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Hypothekenrechner</title>
<meta name="description" content="Sie planen Eigentümer zu werden? Unser Hypothekenrechner kann Ihnen Ihre monatlichen Ausgaben anzeigen und die Kreditfähigkeit beurteilen."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="calculateur-hypotheque";$alt="Hypothekenrechner";include('includes/img.php'); ?>
	<?php include('includes/arianne.php');?>
	<div id="mct" class="offres">
		<p>Sie wollen die Kosten für eine Hypothek wissen? Wir bieten auf dieser Seite einen <strong>Hypothekenrechner</strong> an. Unser Hypothekenrechner erlaubt es Ihnen,
		basierend auf Informationen die Sie bereitgestellt haben, die monatlichen Kosten für Ihre Hypothek zu sehen.</p>
	
		<h2>Brauchen Sie Hilfe?</h2>
		<p>Falls unser <strong>Hypothekenrechner</strong> Ihnen ein ein gutes Beispiel geben konnte, stimmt dies trotzdem nicht so genau mit Ihren monatlichen Kosten überein.
		Natürlich kommt es dann drauf an, wie hoch der Zinssatz bei der Bank ist. Damit Sie böse Überraschungen vermeiden, empfehlen wir Ihnen, eine professionelle Beratung in Anspruch zu nehmen.</b>.</p>
		<h2>Kostenlose Beratung</h2>
		<p>Bei Multicredit bieten wir Ihnen eine kostenlose und professionelle Beratung mit einem <b> mit einem Spezialisten für Hypotheken</b> an. Zögern Sie nicht, uns bei Interesse per Telefon oder E-Mail zu kontaktieren.</p>
		<a class="bouton" href="/de/hypothek/hypothek-offerte">Kostenlose Beratung</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
