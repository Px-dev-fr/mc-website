<?php
$h1="Nasze oferty kredytów";
$link="/pl/kredyt/kredyt-dla-pracownika";
include('includes/first_loaded.php');
$lang="pl";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>Oferty kredytu</title>
<meta name="description" content="Potrzebujesz pieniędzy aby zrealizować swoje marzenia? Nie czekaj dłużej i sprawdź teraz oferty kredytu Multicredit, specjalnie dopasowane do Twojego budżetu!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container"> 
	<?php include('includes/header.php');?>
	<?php $image="oferty-kredytu";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Czy Twój budżet pozwala Ci na pełną realizację wymarzonych projektów? Cashflex Multicredit proponuje oferty kredytów, <b>dopasowane do Twojej indywidualnej sytuacji finansowej</b>. Chcesz zainwestować, wyjachać na wakcaje lub odnowić Twoje mieszkanie? Zobacz jak wiele różnych ofert mamy Ci do zaproponowania!</p>
		<h2>Korzystne warunki</h2>
		<p>Wraz z naszymi <b>elastycznymi rozwiązaniami finansowymi</b>, jesteśmy w stanie idealnie dopasować kredyt do stanu budżetu jak i projektów, każdego z naszych klientów. Dzięki kombinacji <b>korzystnego oprocentowania</b> z dogodnymi okresami spłaty, <b>od 12 do 72óch miesięcy</b>, gwarantujemy Ci swobodną zdolność spłaty zaciągniętych kredytów, nawet tych wysokich!</p>
		<h2>Odkryj bogactwo naszych ofert</h2>
		<p>Pragniesz zrealizować jeden z projektów o którym marzysz już od bardzo długiego czasu? Poprzez oferty kredytowe w Multicredit, możesz swobodnie zdobyć potrzebne Ci pieniądze, aby spełnić to czego sobie życzysz. A oto właśnie szeroki wachlarz naszych ofert kredytowych, stanowiących idealne rozwiązanie na wiele różnorodnych sytuacji:</p>  
		<div class="block">
			<a href="/pl/kredyt/kredyt-dla-pracownika"><img src="https://static.multicredit.ch/images/header/kredyt-dla-pracownika.jpg" alt="kredyt dla pracownika"><div>Pracownika</div></a>
			<a href="/pl/kredyt/kredyt-emerytalny"><img src="https://static.multicredit.ch/images/header/kredyt-emerytalny.jpg" alt="kredyt emerytalny"><div>Emerytalny</div></a>
			<a href="/pl/kredyt/kredyt-z-pozwoleniem-c-b-l"><img src="https://static.multicredit.ch/images/header/kredyt-z-pozwoleniem-c-b-l.jpg" alt="kredyt z pozwoleniem"><div>Pozwoleniem C-B-L</div></a>
			<a href="/pl/kredyt/kredyt-dla-niezaleznych"><img src="https://static.multicredit.ch/images/header/kredyt-dla-niezaleznych.jpg" alt="kredyt dla niezaleznych"><div>Niezaleznych</div></a>
		</div>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
