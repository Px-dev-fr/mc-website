<?php
$h1="E-Pasaport";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>E-Pasaport</title>
<meta name="description" content="E-pasaport, genel olarak makinede okunabilen pasaportların bir türü olmakla birlikte üst düzey güvenliğe sahip yeni nesil bir pasaport türüdür.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="e-konsolosluk";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Çipli pasaport ya da elektronik pasaport olarakda bilinen e-pasaport, genel olarak makinede okunabilen pasaportların bir türü olmakla birlikte daha ileri düzeyde güvenlik katmanlarına sahip, yeni nesil pasaport türüdür.</p>
		<h2>Avantajları</h2>
		<p>E-Pasaport, kişisel kimlik ve pasaport bilgilerinin yani sıra içinde fotoğraf, parmak izi, imza gibi biyometrik verilerin saklanabildigi çipli pasaportlardır. Üst düzey güvenliğe sahipdir.</p>
		<h2>Tarih Olarak;</h2>
		<p>Türkiye`de 1 Haziran 2010 tarihi itibariyla e-pasaport uygulamasına geçilmiştir. E-pasaport tüm dünyada giderek artarak bazı ülkelerde sınır geçişlerinde otomatik pasaport okuma/tanıma sistemleri kullanmakta, böylece pasaport kontrol işlemleri hızlı bir şekilde yapılmaktadır.</p>
		<h2>Başvuru</h2>
		<p>Sizde e-pasaporta başvurmak istiyorsanız en yakın Başkonsolosluğa gidebilir ya da epasaport.egm.gov.tr adresinden işlemlerinizi yapabilirsiniz. Yeni nesil pasaport artık çok daha güvenli.</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
