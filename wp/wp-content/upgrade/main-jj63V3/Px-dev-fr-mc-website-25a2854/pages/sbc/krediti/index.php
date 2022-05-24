<?php
$h1="Krediti";
$link="/sbc/krediti/svicarskoj/";
include('includes/first_loaded.php');
$lang="sbc";
?>
<!DOCTYPE html>
<html lang="sbc">
<head>
<title>Naše ponude kredita</title>
<meta name="description" content="Željeli biste dobiti povoljnu kreditnu ponudu uz niske kamatne stope? Otkrijte naše ponude kredita u iznosu od 3 000 do 250 000 franaka." />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
		<?php $image="krediti";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Imate li dovoljno novca za realizaciju Vaših projekata? Kod Cashflex Multicrédit, nudimo Vam <b>povoljne kredite, prilagođene Vašoj situaciji i Vašim potrebama</b>. Koji su Vaši projekti? Otkrijte naše ponude kredita.</p>
		<h2>Povoljni uvjeti</h2>
		<p>Uz fleksibilne mogućnosti financiranja, predlažemo Vam ponude kredita koje su prilagođene Vašim potrebama pri realizaciji Vaših planova. Cilj nam je da osmislimo ponudu <b>kredita s niskom kamatnom stopom</b>, uz mogućnost <b>otplate od 12 do 84 mjeseca</b> i samim tim osiguramo našim klijentima prilagođene mjesečne otplate, <b>čak i za visoke iznose zajma</b>. <b>Zajedničkom suradnjom</b> osmisliti ćemo kredit kojim ćete ostvariti sve Vaše projekte i <b>bezbrižno isplaćivati</b> Vaš kredit s obzirom na Vaše mogućnosti.</p>
		<h2>Otkrijte naše ponude kredita</h2>
		<p>Već ste razmislili na koji način ćete realizirati Vaše projekte i koliko Vam je novca otprilike potrebno? S Cashflex Multicrédit, dobiven novac možete slobodno uložiti za ono što planirate, bez prethodnog objašnjenja. Dakle, naše kreditne ponude su savršeno smišljene za različite situacije kojima je potrebno financijsko rješenje.</p>
		<div class="block">
			<a href="/sbc/krediti/svicarskoj/"><img src="https://static.multicredit.ch/images/header/small/uvjeti-za-kredit-u-svicarskoj.jpg" alt="Uvjeti za kredit u Švicarskoj"><div>u Švicarskoj</div></a>
			<a href="/sbc/krediti/auto/"><img src="https://static.multicredit.ch/images/header/small/auto-krediti.jpg" alt="Uvjeti za kredit u Švicarskoj"><div>Auto krediti</div></a>
			<a href="/sbc/krediti/internet/"><img src="https://static.multicredit.ch/images/header/small/internet-kredit.jpg" alt="Internet kredit"><div>Internet kredit</div></a>
			<a href="/sbc/krediti/gotovinski/povoljan-kredit"><img src="https://static.multicredit.ch/images/header/small/povoljan-kredit.jpg" alt="povoljan kredit"><div>Povoljan</div></a>
		</div>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
