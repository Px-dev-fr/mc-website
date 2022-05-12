<?php
$h1="Was hat die IKO für eine Funktion?";
$link="/de/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>IKO - Der Verein zur Führung einer Informationsstelle für Konsumkredit</title>
<meta name="description" content="IKO heisst soviel wie Informationsstelle für Konsumkredit. Möchten Sie weitere Informationen über die IKO haben? Dann lesen Sie mehr darüber auf unserer Seite."/>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
	 <h2>Was macht die IKO?</h2>
		<p>Die <strong>IKO</strong> ist die vom Gesetzgeber vorgeschriebene schweizerische Informationsstelle für Konsumkredit. Sie registriert im Sinne des Konsumkreditgesetzes (KKG) vom 23. März 2001 Daten von Kredit- und Leasinggeschäften zu privaten Zwecken.</p>
	 <h2>Was ist dieser Verein?</h2>
		<p>
			Die IKO hat am 2. Januar 2003 ihren Betrieb aufgenommen. Der in der IKO verwaltete Datenbestand beschränkt sich strikt auf die 
			gemäss KKG zu sammelnden Daten. Zugang zur IKO haben nur die Kreditgeberinnen i.S. von Art. 2 KKG und nur für KKG-relevante Zwecke. Die Liste der zugelassenen Kreditgeberinnen ist öffentlich zugänglich.
			<br><br>Inhalt, Umfang und Zugriffsberechtigungen der IKO-Datenbank sind in der Verordnung zum Konsumkreditgesetz (VKKG) abschliessend vorgegeben.
			Die <strong>IKO</strong> ist mit der Zentralstelle für Kreditinformation (ZEK) organisatorisch und personell eng verbunden. Die beiden Stellen sind jedoch rechtlich voneinander unabhängig.
		</p>
		<a class="bouton" href="/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
