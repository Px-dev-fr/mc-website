<?php
$h1="Arsa Kredisi";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Arsa Kredisi</title>
<meta name="description" content="İleride değerleneceğini düşündüğünüz ya da kullanmayı planladığınız bir arsayı kolayca satın alabilmek için arsa kredisi imkanından faydalanabilirsiniz.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="maison-a-construire";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Yatırım araçları arasında kişilerin oldukça fazla tercih ettiği arsa kredisi, imarlı ya da bazen imarsız arsa alımı için kullanılan bir bireysel tüketici kredisidir.</p>
			<h2>Geleceğe Yatırım</h2>
			<p>Türkiye`de yaygın olan yatırım yollarından biri arsa satın almaktır. İleride değerleneceğini düşündüğünüz ya da kullanmayı planladığınız bir arsayı artık kolayca satın alabilirsiniz.</p>
			<p>Arsayı sadece yatırım amaçlı olarak değil tarım işleri ile uğraşmak veya konut yaptırmak içinde kullanabilirsiniz. Günümüzün en değerli yatırımlarında arsa için sizde bir adım atın, geleceğe yatırım yapın!</p>
			<h2>Avantajlarımız</h2>
			<ul>
				<li>3.000`den 250.000`e varan kredi seçenekleri</li>
				<li>12 ila 84 ay arası esnek geri ödeme seçenekleri</li>
				<li>Uygun ve düşük faiz oranları</li>
				<li>Ücretsiz danışmanlık</li>
			</ul>
			<h2>Bize Ulaşın</h2>
			<p>Arsa kredisinden faydalanmak istiyorsanız hemen bize ulaşın, fırsatlarımızdan yararlanın!</p>
			<ul>
				<li>Telefonla arayarak</li>
				<li>E-posta yazarak</li>
				<li>Ya da ofisimizi ziyaret ederek</li>
			</ul>
			<p>bize ulaşabilirsiniz. Hadi ne duruyorsunuz, ücretsiz ve güvenilir danışmanlarımızdan sizde faydalanın.</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
