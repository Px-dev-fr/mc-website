<?php
$h1="Online Kredi";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Online Kredi</title>
<meta name="description" content="Bir tıkla yanınızdayız! Online krediye başvurun, yorulmadan vakit kaybetmeden krediniz cebinize gelsin. Gerçekleştirmek istediğiniz projeler, satın almak istediğiniz ev veya araba, hepsine sahip olmak çok kolay">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-online";$alt="Online Kredi";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<h2>ONLİNE KREDİ</h2>
		<p><b>Basvuru yapması sizden hayallerinizi gerçekleştirmesi bizden!</b></p> 
		<ul>
		  <li>Ev kredisi</li>
		  <li>Araba kredisi</li>
		  <li>ihtiyaç kredisi</li>
		  <li>Eğitim kredisi</li>
		  <li>İşyeri kredisi</li>
		  <li>Tatil kredisi</li>
		  <li>Evlilik kredisi...</li>
		 </ul>
		  <p><b>hiç fark etmez!</b> Online kredi sayesinde hepsine ulaşmak <b>sadece bir TIK!</b> Yeni bir projem var nasıl gerçekleştirebilirim? mi diyorsunuz yada yıllardır hayalini kurduğunuz araba? Yada eğitiminiz için gitmek istiğiniz üniversite? <b>Isteklerim nasıl yerine gelir ki? düşüncesine son!</b> Online krediye başvurarak istediğiniz, hayalini kurduğunuz ne varsa hepsi yerine geliyor.</p> 
    <h2>Nasıl mı?</h2> 
    <p>Web sayfamızdaki online <b>başvuru formumuzu</b> dolduruyorsunuz ve <b>24 saat</b> içinde müşteri hizmetlerimiz sizinle irtibata geçiyor. Başvurmak bu kadar kolayken <b>daha ne bekliyorsunuz?</b></p>
    <h2>Fırsatlardan Sizde Yararlanın!</h2>
	  <p>Hiç yorulmadan, zaman harcamadan, ücret ödemeden fırsat ayağınızda. Evinizde, ofisinizde, yolda, seyehatte, heryerde bize ulaşmak mümkün!</p> 
	  <ul>
     <li><b>Esnek</b> ödeme fırsatları</li>
     <li><b>Ücretsiz</b> danışmanlık</li>
     <li><b>3.000 ila 150.000</b> arası kredi</li>
     <li><b>Kredi birleştirme</b> seçenekleri</li>
     <li>Erken ödemelerde <b>faizlerde indirim</b> olanakları</li>
     <li>Kredi kartları için <b>uygun ve düşük faiz oranları</b></li>
		 </ul>
	<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
