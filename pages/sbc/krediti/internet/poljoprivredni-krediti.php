<?php
$h1="Poljoprivredni krediti";
$link="/sbc/krediti/besplatni-zahtjev"; 
include('includes/first_loaded.php');
$lang="sbc";
?>
<!DOCTYPE html>
<html lang="sbc">
<head>
<title>Poljoprivredni krediti</title>
<meta name="description" content="Poljoprivrednik ste? Potreban Vam je kredit? Mi Vam nudimo kredite u iznosu do 250 000 franaka koje možete dobiti putem naše besplatne ponude za samo nekoliko trenutaka!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
		<p>Multicrédit, agencija specijalizirana za kredite Vam nudi kredite za individualne poljoprivrednike. Jednostavno financirajte svoje poljoprivredne strojeve, opremu ili životinje . Dovoljno je imati minimalni godišnji prihod od 60 000 franaka kako biste dobili kredit za poljoprivredne kredite u iznosu od 3 000 do 250 000 franaka.</p>
		<h2>Atraktivni krediti za poljoprivrednike</h2>
		<p>Većina banaka ne prihvaća financirati poljoprivrednike. Mi pregovaramo s bankama u Vaše ime ne samo kako biste dobili kredit koji Vam je potreban, već kako biste ste uživali <b>najpovoljnije i najmanje kamatne stope</b>. Što Vam je sve potrebno?</p>

		<p>Potreban Vam je novi traktor? Za kupnju novih životinja ili cijelog krda? Trebali biste popraviti svoje alate ili strojeve potrebne za svakodnevni rad? Nemojte se ustručavati informirati nas po pitanju svih Vaših potreba, zajedničkom suradnjom ćemo Vam napraviti ponudu za kredit prilagođenu Vašoj situaciji, a zatim na Vama ostaje donijeti odluku u kojem vremenskom periodu želite otplatiti zatraženi kredit. Imate mogućnost na otplatu u vremenskom periodu <b>od 12 do 84 mjeseca.</b></p>
		<h2>Naše ponude</h2>
		<p>Odabirom agencije specijalizirane za kredite, sigurni ste da ćete ostvariti mnoge prednosti. Naš tim nastoji ponuditi pristupačan zajam svim našim klijentima i samim tim osigurati im:</p>
		<ul>
			<li><b>Brzu obradu</b>: naši stručnjaci za financije će učiniti sve kako bi Vam napravili brzu ponudu za kredit. Dakle, čim zatražite poljoprivredni kredit, na nama ostaje pobrinuti se za sve pogodnosti, napraviti Vam ponudu za kredit i zatim poslati ju u narednih <b>24 do 48 sati.</b>
			<li><b>Povoljne uvjete</b>: naše ponude za kredit su idealne za samostalne poljoprivrednike. <b>Manje financijskih formalnosti, potpuna iskrenost i diskretnost</b> je ono što nudimo!</li>
			<li><b>Porezne olakšice</b>: Jeste li znali da ako se odlučite za kredit možete odbiti kamate na kredit pri povrat poreza i samim tim uštedjeti novac?</li>
		</ul>
		<h2>Zahtjev kojim možete ostvariti instatnu ponudu za kredit</h2>
		Pošaljite nam Vaš zahtjev za <b>kredit za poljoprivrednike</b> izravno putem našeg online obrasca. Mi ćemo Vas kontaktirati što je <b>brže moguće/b> kako bi Vam ponudili kredit bez obveze! Proces je <b>besplatan i potpuno povjerljiv</b>.
		<a class="bouton" href="/sbc/krediti/besplatni-zahtjev">Besplatna aplikacija</a>
  </div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
