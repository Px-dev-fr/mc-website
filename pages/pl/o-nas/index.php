<?php
$h1="NASI POSREDNICY KREDYTOWI";
$link="/pl/kredyt/prosba-o-kredyt"; 
include('includes/first_loaded.php');
$lang="pl";
?>
<!DOCTYPE html> 
<html lang="pl">
<head>
<title>NASI POSREDNICY KREDYTOWI</title>
<meta name="description" content="Szukasz porady finansowej? Pośrednicy kredytowi Multicredit za darmo i z przyjemnością odpowiedzą na Twoje pytania. Dyskrecja i profesjonalność gwarantowana!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Multicredit, to przede wszystkim profesjonalna ekipa kolaborantów, służąca naszym klientom odpowiedziami i radami w każdym momencie. Potrzebujesz rozwiązania finansowego? Nasi pośrednicy kredytowi są do Twojej dyspozycji.</p>
		<h2>Nasi współpracownicy</h2> 
		<p>Odkryj poniżej listę naszych profesjonalnych współpracowników, będących <b>do Twojej ciągłej dyspozycji</b>. Odpowiemy na wszystkie Twoje pytania tak szybko jak to możliwe z ogromną przyjemnością.</p>
	<?php include 'includes/collaborateurs.php';?>
		<h2>Potrzebujesz porady pośrednika kredytowego?</h2>  
		<p>Jeśli poszukujesz rozwiązania finansowego, nasi pośrednicy kredytowi mogą Ci zaproponować ofertę pomocy finansowej <b>za darmo i bez żadnych zobowiązań</b> z Twojej strony. Osiągnij potrzebną Ci kwotę pieniędzy na realizację Twoich pomysłów. Nie czekaj na wypełnienie naszego formularza on-line, aby szybko otrzymać jedną z ofert.</p> 
		<h2>Ekspresowy formularz</h2>
		<p>Aby szybko i łatwo, otrzymać jedną z naszych ofert kredytowych przygotowaną przez jednego z naszych pośredników kredytowych, wystarczy tylko abyś wypełnił nasz elektroniczny formularz. Wszystkie podane przez Ciebie <b>dane są prawnie chronione</b> a Twoja aplikacja jest rozpatrywana <b>z rzetelnością i w pełnej dyskrecji</b>. Na odpowiedź zaś nie każemy Ci czekać dłużej niż <b>od 24 do 48 godzin</b>.</p>
		<a class="bouton" href="/pl/kredyt/prosba-o-kredyt">Wypełnij formularz</a>
  </div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
