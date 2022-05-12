<?php
$h1="Bireysel Emeklilik";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Bireysel Emeklilik</title>
<meta name="description" content="Sizde bireysel emeklilik sisteminden faydalanmak istiyorsanız İsviçre-Banklar yanınızda! Yapmanız gereken sadece başvurmak! İşin maddi kısmını artık düşünmeyin.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="recouvrement";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
			<p>Bireysel emeklilik sistemi, kişilerin çalıştıkları dönemdeki hayat standartlarını emeklilik dönemlerinde de devam ettirmeleri için bugünden düzenli birikim yapma imkanı veren, devlet katkısıyla desteklenmiş bir tasarruf yatırım sistemidir.</p>
			<h2>Genel Olarak;</h2>
			<ul>
				<li>Bireylerin emeklilik dönemlerinde, kendi birikimleri oranında ek bir gelir sağlamaya yönelik</li>
				<li>Özel emeklilik şirketleri tarafından faaliyetleri yürütülen</li>
				<li>Türkiye`de gönüllü katılıma dayalı, kamu-sosyal güvenlik sistemlerini tamamlayıcı bir emeklilik sistemidir.</li>
			</ul>
			<h2>Sizde Başvurun</h2>
			<p>Türkiye`ye yerleşmek nasıl olurdu? Güzel bir emekliliğin tadını çıkarmak?</p>
			<p>1 Ocak 2013`te başlayan yeni Bireysel emeklilik dönemiyle birlikte, artık BES daha avantajlı. Çünkü devlet tüm BES katılımcılarına ödedikleri katkı payının %25'i oranında ek katkı sağlıyor. Örneğin, hesabınıza 200 TL katkı payı yatırarak 50 TL devlet katkısından yararlanabilecek ve 250 TL`lik birikim yapabileceksiniz.</p>
			<h2>Bize Ulaşın</h2>
			<ul>
				<li>3.000`den 150.000`e varan kredi imkanları</li>
				<li>12 aydan 84 ay`a kadar ödeme seçenekleri</li>
				<li>Avantajlı, uygun faizli kredi çözümleri ile</li>
			</ul>
			<p>sizde Türkiye`de bir gelir elde etmek, geleceğiniz için  bugünden harekete geçerek bireysel emeklilik sisteminden faydalanmak istiyorsanız İsviçre-Banklar yanınızda. Yapmanız gereken sadece bize ulaşmak ve gerisini bize bırakmak. Hadi sizde bu fırsattan yararlanın!</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
