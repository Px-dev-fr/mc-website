<?php
$h1="Kredi Toplamak";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Kredi Toplamak</title>
<meta name="description" content="Kredi birlestirme ile borçlarınızı teke indirin. Tek fatura ödeme kolaylığından yararlanın. Kredi bütçenizi düzeltin, yeni kredi faturanızı yapılandırın."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="kredi-birlestirmek";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Zaman içerisinde aldığınız kredilerin sayısı gittikçe artıyor ve içinden çıkmaz hale mi geliyorsunuz? Borçlarınız git gide katlanarak derdiniz mi artıyor? Artık Multicredit kredi sayesinde <b>borç da tek dert de!</b></p>
		<h2>Kredi Toplamak</h2>
		<p>Multicredit krediyle tüm kredilerinizi <b>aynı çatı altında toplamak</b> artık mümkün. Hem de bütçenize uygun aylık ödeme fırsatlarıyla birlikte. Tek yapmanız gereken, <b>Multicredit krediye basvurmak!</b> Bu finansal çözüm sayesinde <b>tek bir fatura ödeme</b> kolaylığına sahip olacaksınız.</p>
		<ul>
			<li>Kredi kartı</li>
			<li>Kiralar</li>
			<li>Kredi</li>
			<li>Ve daha birçok faturalar</li>
		</ul>
		<p><b>Tüm faturalarınız Multicredit kredi sayesinde birleşiyor!</b> Ödemeniz gereken sadece bir faturanız olacak. Kredi bütçelerinizi düzenleyip, tüm sorunlarınıza çözüm bulmak için ekibimiz sizlerle! Multicredit kredi sayesinde <b>mali sıkıntılarınızdan kurtulacaksınız.</b></p>
		<h2>Borçlanmayı Azaltmak</h2>
		<p><b>Çoklu kredi</b> aşağıdaki hizmetleri sizler için sunmaktadır;</p>
		<ul>
			<li>İp uçları ve durumunuza en uygun çözüm yolları</li>
			<li>Geçerli tüm kredileri satın alma ve kredi finansmanı sağlama</li>
		</ul>
		<h2>Kredi Birleştirme ne yapar?</h2>
		<p>Sahip olduğunuz tüm borçlarınız Multi kredit tarafından satın alınır. <b>Borçlarınız yeniden yapılandırılır</b>
		. Birleştirilen kredileriniz sizin için uygun şartlarda ve uzun vaadelerde yeniden kredilendirilir. Bu <b>yeniden kredilenme</b> sonrasında daha fazla borca girmezsiniz. Kredi toplama sayesinde <b>aylık ödeme planınızda rahatlama göreceksiniz!</b> </p>
		<h2>Ücretsiz Teklif</h2>
		<p>Multicredit krediden <b>ücretsiz ve bağlayıcı olmayan teklif</b> almak mümkün! Bunun için tek yapmanız gereken; <b>formumuzu doldurmak</b> e-posta yada posta yoluyla gerekli belgeleri bize göndermek. Belgeler elimize geçtikten <b>24 saat</b> içinde müşteri hizmetlerimiz sizinle irtibata geçecektir.</p>
	<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a>
	</div>
	-
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
