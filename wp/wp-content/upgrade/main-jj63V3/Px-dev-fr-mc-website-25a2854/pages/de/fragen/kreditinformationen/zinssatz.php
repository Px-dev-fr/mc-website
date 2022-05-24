<?php
$h1="Der Zins für den Kredit";
$link=""; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Glossar: Zinssatz</title>
<meta name="description" content="Der Zinssatz ist eine Zahl, wo man sieht, wie hoch der Zins wird. Leider wird der Zinssatz oft falsch berechnet, wir zeigen Ihnen die korrekte Methode."/>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="glossar-zinssatz";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Den Zinssatz kann man auch als &quot;Kosten&quot; für die Ausleihe vom Geld betrachten. Das Zusätzliche, was Sie zum Kredit dazu zahlen, ist der sogenannte Zinssatz. Die monatliche Rechnung stellt sich aus dem 
		eigentlichen Kredit und dem Zins zusammen.</p>
		<h2>So rechnet man den Zins aus: (Falsche Methode)</h2>
		<p>Der Zinssatz an einem persönlichen Kredit wird in Prozent ausgedrückt. Man könnte daher meinen - zu Unrecht -, dass 10% Zinsen auf einen Kredit von 10'000 chf gleich 1'000 chf entsprechen. 
		In der Tat ist diese Berechnungsmethode falsch, obwohl es die Mehrheit der Leute genauso ausrechnet.<br>
    <h2>So rechnet man den Zins aus (Richtige Methode)</h2>
	 <p>In der Tat, die Zinsen von einem Kredit wird als jährlicher Zinssatz ausgedrückt. Nehmen Sie zum Beispiel eine 12-monatige Rückzahlung eines Darlehens von CHF 10.000, mit einem Zinssatz von 10% als Beispiel.<br>
	  <ul>
	  <li>Angenommen Sie beantragen einen Kredit von 10'000 chf mit einem Zinssatz von 10% auf 12 Monate. Dann müssen Sie das so ausrechnen: Sie teilen den Kredit durch die 12 Monate. 10% davon sind die Zinsen. 
		(10'000 / 12) / 100 x 10 = 83 chf (Nur der Zins pro Monat.) Plus kommt die Rückzahlung dazu. 10'000 / 12 = 833<br>
	  Endsumme: 833 + 83 = <b>916 chf</b> zahlen Sie im ersten Monat!<br>
   </p>
	 </li>
	  <li>Im folgenden Monat ist die Rückzahlung kleiner, da man den Zins nicht mehr von 10'000 chf ausrechnet, sondern von 9084! (10'000 - 916 = 9084 chf)</li></ul>
		<p>
			Jetzt sollten Sie es besser verstehen, warum man auf 10'000 chf nur 650 chf Zins zahlt! Daher empfeheln wir unseren Kunden, dass man weniger auf die Zinsen und mehr auf die Kosten schaut.
		</p>
		<h2>Kostenlose Offerte</h2>
		<p>
			Bevor Sie auf irgendwelche Verpflichtungen eingehen, können Sie bei uns eine kostenlose und unverbindliche Offerte einholen. Dafür müssen Sie einfach unser Formular ausfüllen und innerhalb von
			48h unterbreiten wir Ihnen ein Angebot. Die Analyse, Beratung und Anfrage sind <b>kostenlos und unverbindlich</b>. Leihen Sie Geld aus von 3'000 CHF bis 300'000 CHF mit einer wählbaren
			Laufzeit von 12 bis 84 Monaten. Kontaktieren Sie uns, falls Sie noch Fragen haben, unsere Kundenberater stehen Ihnen zu Verfügung.
		</p>
</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
