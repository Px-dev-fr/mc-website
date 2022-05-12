<?php
$h1="İhtiyaç Kredisi";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Ihtiyaç Kredisi</title>
<meta name="description" content="İsviçre'de ihtiyaçlara tek çözüm. Multicredit İhtiyaç kredisinin avantajlarından sizde yararlanın. Siz ihtiyacınız 
olanı söyleyin biz fazlasını verelim!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="ihtiyac-kredisi";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		      <p><b>Gerçekleştirmek istediğiniz hayalleriniz mi var?</b> Hayallerinizi gerçeğe dönüştürmek için Multicredit size kredi vermeye her zaman hazır! <b>Ev, araba, makina, eşinizle ne zamandır yapmayı düşündüğünüz tatil...</b> Siz sadece ne istediğinize karar verin, ihtiyaç krediniz anında sizin olsun! <b>15 yılı aşkın tecrübemize</b> dayanarak sizlere dilediğiniz hizmetleri vermekten mutluluk duyacağız.</p>
		 <h2>Avantajlar neler mi?</h2>
		 <ul>
			<li>-<b>Esnek, avantajlı, uygun faizli</b> kredi çözümleri</li>
			<li>-<b>Daha yüksek bir limite</b> ulaşma fırsatları</li>
			<li>-Kredi birleştirmelerinde <b>%40 a kadar tasarruf</b> elde etme olanakları</li>
			<li>-<b>3.000'den 150.000'e</b> varan kredi imkanları</li>
			<li>-<b>12 aydan 84 aya</b> kadar ödeme kolaylıkları</li>
			<li>-<b>Ücretsiz</b> danışmanlık</li>
		</ul>
    <h2>İrtibata nasıl geçerim?</h2>
		<p>Tek yapmanız gereken bizimle irtibata geçmek! <b>İhtiyaçlarınızı ertelemekten vazgeçin.</b> Şimdiye kadar hep sonraya bıraktığınız ihtiyaçlarınızı gerçekleştirmek için fırsat ayağınızda! Aşağıdaki belgeleri <b>e-posta, fax yada posta yoluyla</b> bize gönderin. <b>24 saat içinde</b> sizinle irtibata geçelim.</p>
		<h2>Başvuru için gerekli belgeler;</h2>
		<p>Bireysel ihtiyaçlarımı nasıl karşılarım? Nakit para sıkıntımı nasıl gideririm diye düşünmeyin! <b>Multicredit ihtiyaç kredisiyle</b> istediğiniz krediye sahip olabilirsiniz. <b>Siz ihtiyacınız olanı söyleyin biz fazlasını verelim!</b></p>
		<ul>
		  <li>-Kimlik kartı veya ikametgah izninin (Ausweis) önlü arkalı kopyası</li>
		  <li>-Sağlık sigorta poliçeniz</li>
		  <li>-Son 3 aylık maaş bordronuzun kopyası</li>
		</ul>
	<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a>
	</div>
	-
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
