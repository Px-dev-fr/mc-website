<?php
$h1="Faiz Hesaplama";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Faiz Hesaplama</title>
<meta name="description" content="İsviçre'nin en düsük faizli kredisi burada! Faizini düşünmeden, ihtiyacınız olan nakit paraya sahip olabilirsiniz. Hadi faiz hesaplama işleminizi buradan yapın!">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="assurances-pme";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

			<p>Faiz hesaplama, kredi hesaplamalarında temel unsurlardan biridir. Faiz oranı, aylık taksitlerinizi ve toplam geri ödemelerinizi etkiler. Bu bakımdan genellikle kredi başvurusu yapacak olan kişiler öncelikle faiz oranına ve faiz hesaplama işlemine bakarlar.</p>
			<h2>Etkileri;</h2>
			<p>Faiz oranı, aylık taksitlerinizi ve toplam geri ödeme rakamlarınızı direk etkiler. Ancak tek başına belirleyici değildir. Örneğin; sahip olacagınız 10.000 CHF`lik krediye 12 ay vadeli ödeme yaptığınızda ödeyeceğiniz faiz oranı sadece 500-600 CHF arasında değişmektedir.</p>
			<h2>En Uygun Faizler</h2>
			<p>Artık vaktinizi harcayıp banka banka dolaşmaya, uygun faizli kredi aramaya gerek yok! İsviçre'de sahip olabileceğiniz en uygun faizli kredisi burada.</p>
			<ul>
				<li>3.000`den 250.000`e varan kredi imkanları</li>
				<li>6 ay ila 12 ay arası esnek geri ödeme seçenekleri</li>
				<li>Düşük faiz oranları</li>
				<li>Verginizi düşürme imkanı</li>
			</ul>
			<h2>Bize Ulaşın</h2>
			<p>Kredi ve faiz hesapmaları hakkında detaylı bilgi edinmek için hemen bize ulaşın.</p>
			<ul>
				<li>Telefonla arayarak</li>
				<li>Online başvurarak</li>
				<li>Ofisimizi ziyaret ederek</li>
			</ul>
			<p>bizimle iletişime geçebilir, ücretsiz danışmanlarımızdan faydalanabilirsiniz. Krediniz bir tık uzağınızda.</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
