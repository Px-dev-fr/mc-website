<?php
$h1="Döviz Kurları";
$link="/fr/formulaire-demande-credit.php"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Döviz Kurlari</title>
<meta name="description" content="Döviz kurları, altın, borsa, Isviçre frangı, döviz. Serbest piyasa kurları ve bankalara ait döviz kurları hakkında tüm bilgilere ulaşabilirsiniz.)
/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		 <p><b>Döviz kurlarıyla mi ilgileniyorsunuz?</b> Altın? Hisse senedi? Borsa? Peki ya İsviçre frangı?</p> 
     <p><b>Döviz kuru;</b> ulusal paranın yabancı para birimi karşısındaki değerini ifade eder. Kısaca döviz, <b>yabancı ülke parasına verilen isimdir.</b> Uluslararası piyasalarda her para biriminin genel kabul görmüş bir sembolü vardır.</p>
		 <p><b>Bunlardan bazıları;</b></p>
			<table>
				<tr>
					<td><b>PARA BİRİMİ</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><b>SEMBOL</b></td>
				</tr>
				<tr>
					<td>Isviçre frangı</td>
					<td>CHF</td>
				</tr>
				<tr>
					<td>Amerikan doları</td>
					<td>USD</td>
				</tr>
				<tr>
					<td>Euro</td>
					<td>EUR</td>
				</tr>
				<tr>
					<td>Türk lirası</td>
					<td>TL</td>
				</tr>	
			 </table>
     <p>İsviçre frangı tüm dünyada <b>en hızlı yükselen para</b> birimidir. Herkes bu para birimine sahip olmak ister. İsviçre'de yaşayan tüm vatandaşlar <b>bu para biriminin avantajlarından</b> sonuna kadar yararlanmalılardır. Nakit paranız bugün değer kazansın sizde harcamalarınızı en rahat şekilde yapın. <b>Peki nasıl mı?</b>
     <ul>
			 <li>18 Yaşını doldurmuş olanlar</li>
			 <li>İsviçre vatandaşı veya B,C,G Ausweis'ine sahip olanlar</li>
			 <li>Belirli bir miktar geliri olanlar</li>
			 <li>Ve hacizi olmayanlar</li>
		 </ul>
     <p>Döviz kurlarının da gösterdiği üzere <b>İsviçre frangı en avantajlı para birimlerinden biridir.</b> Sizde daha fazla nakit paraya sahip olmak ve yatırımınızı İsviçre frangı üzerinden değerlendirmek istiyorsanız <b>bizimle irtibata geçin.</b></p>
		 <ul>
       <li>web adresimizden başvurabilir</li>
       <li>telefondan ulaşabilir</li>
       <li>Veya ofisimize gelerek daha fazla bilgi alabilirsiniz</li> 
		 </ul>
	<a class="bouton" href="/fr/formulaire-demande-credit.php">Basvuru</a>
	</div>
	-
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
