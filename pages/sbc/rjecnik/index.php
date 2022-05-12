<?php
$h1="Financijski rječnik";
$link="/sbc/krediti/besplatni-zahtjev"; 
include('includes/first_loaded.php');
$lang="sbc";
?>
<!DOCTYPE html>
<html lang="sbc">
<head>
<title>Financijski rječnik</title>
<meta name="description" content="Imate li pitanja u vezi kredita, zajmova, ili općenito financija? Poslužite se našim financijskim rječnikom kako bi pronašli željene informacije."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
		<?php $image="finansijski-rjecnik";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Nudimo Vam listu pojmova vezanu za svijet kredita i financije u cjelini. Za više informacija o pojedinom pojmu, kliknite na dolje naveden pojam o kojem biste željeli saznati nešto više.<p>
		<h2>Financijske institucije</h2>
		<ul>
		<li><b>ZEK:</b>centralna informacija vezana za kredit, koju nazivamo ZEK je organizacija koja bilježi sve aktivnosti vezane za kredite privatnih osoba u Švicarskoj.</li>
		<li><b>ZEFIX:</b>godišnji katalog svih tvrtki u Švicarskoj; kojeg možete konzultirati i putem interneta. Apsolutno svi imaju uvid u ovaj registar svih poduzeća u Švicarskoj.</li>
		<li><b>Kreditna unija:</b>financijske zadruge ujedinjene i rezervirane samo za članove putem kojih članovi navedene zadruge ostvaruju povoljne kredite.</li>
		</ul>
		<h2>Termini vezani za financije i općenito kredite:</h2>
		<ul>
		<li><b>Osiguranje po želji:</b>Potvrda dobrovoljnog osiguranja u slučaju invaliditeta, radne nesposobnosti i nezaposlenosti. Ono Vas pokriva u slučaju poteškoća prethodno navedenih.</li>
		<li><b>Kamata:</b> ljudi se često zanimaju za iznos kamatnih stopa više nego za ukupni trošak kredita.</li>
		<li><b>Platežna sposobnost:</b>je sposobnost pojedinca da isplati kredit. Ovaj pokazatelj ovisi o Vašoj financijskoj situaciji, i uvijek se izračunava prema određenim elementima.</li> 
		<li><b>Kupnja kredita:</b>je financijsko rješenje za smanjenje mjesečnih troškova. Krediti, lizing, kreditne kartice mogu se otkupiti po povoljnim cijenama.</li>
		<li><b>Oslobađanje:</b>je dokument kojim vjerovnik (obično banka) potvrđuje da je dužnik u potpunosti otplatio svoj kredit.</li>
		</ul>
		<h2>Dozvola za rad u Švicarkoj:</h2>
		<ul>
		<li><b>Dozvola za rad:</b> se sastoji od dozvole ustanovljene i dodijeljene strancima koji borave i rade u Švicarskoj. Postoji više tipova dozvola:<b>dozvola C</b>,<b>dozvola B</b>,<b>dozvola L</b>i za sve državljane koji rade u Švicarskoj, a prebivaju u jednoj od zemalja koja graniči s Švicarskom<b>dozvola G</b>.</li>
		<li><b>Legitimacijska karta(osobna karta)</b>: se sastoji od službenog dokumenta namijenjenoga 
		strancima koji rade u međudržavnim konzultacijama, ambasadama i konzulatima.</li>
		</ul>
		<a class="bouton" href="/sbc/krediti/besplatni-zahtjev">Besplatna aplikacija</a>
  </div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
