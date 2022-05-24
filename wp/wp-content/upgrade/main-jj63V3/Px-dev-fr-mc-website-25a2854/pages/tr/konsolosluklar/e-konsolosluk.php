<?php
$h1="E-Konsolosluk";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>E-Konsolosluk</title>
<meta name="description" content="E-konsolosluk sitemi, yurtdışındaki temsilciliklerimizden  internet üzerinden randevu alarak yapılabilmesini sağlayan 7 / 24 ulaşılabilen bir web portalıdır.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="loan-company";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>E-konsolosluk ile birçok işlem ve yurtdışındaki temsilciliklerimizden internet üzerinden yapılabilmesini sağlamakta olup, T.C Dışisleri Bakanlığı tarafından hazırlanıp yurtdışındaki vatandaşların hizmetine sunulmustur.</p>
		<h2>Gerekli Belgeler</h2>
		<p>E-konsolosluk üzerinden işlem yapacak tüm vatandaşların mutlaka T.C kimlik numaraları olması gerekir. Aksi halde sistem işlem yapmanıza izin vermeyecektir. Eğer hala eski tip nüfus cüzdanı kullanıyorsanız size en yakın Türk konsolosluğuna giderek değişim yapabilirsiniz. Ayrıca e-konsolosluktan randevu almak için e-posta adresinizin de olması gerekiyor.</p>
		<h2>Randevu Almak</h2>
		<p>Pasaport, nüfus, doğum, vatandaşlık, vize, askerlik, evlilik ve adli konular hakkında ayrıntılı bilgi ve randevu alarak ilgili konsolosluktan işleminizi gerçekleştirebilirsiniz.</p>
		<h2>Nasıl Ulaşabilirim?</h2>
		<p>E-konsolosluk sistemine internet dışında çağrı merkezini arayarakta ulaşabilirsiniz. + 90 312 292 29 29 telefon numarasına 7 gün 24 saat boyunca aramak mümkün. Ayrıca randevu sistemine  https://www.konsolosluk.gov.tr adresinden ulaşabilirsiniz.</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
