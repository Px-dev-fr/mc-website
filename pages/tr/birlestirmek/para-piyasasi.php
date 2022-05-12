<?php
$h1="Para Piyasası";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Para Piyasası</title>
<meta name="description" content="Kısa vadeli fon arz ve talebinin karşılaştığı piyasa. Para piyasası, mali piyasanın bir alt piyasasıdır. Vadesinin kısa, sermaye piyasasıdan ayrılmaktadır.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="factoring";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
			<p>Para piyasası, kısa vadeli fon arz ve talebinin karşılaştığı piyasayı ifade etmektedir. Para piyasası, mali piyasanın bir alt piyasasıdır. Vadesinin kısa olması nedeniyle sermaye piyasasıdan ayrılmaktadır. Buna göre vadesi 1 yıldan kısa olan fon arz talebinin karşılaştığı piyasalara para piyasası denmektedir.</p>
			<h2>Para Piyasalarının İşleyişi</h2>
			<p>Para piyasası da tıpkı sermaye piyasası gibi işlemektedir. En belirgin farkı ise; sermaye piyasasında aracı ihraç eden bir ihracatçı olması ve ihracatçı ile doğrudan karşılaşılan birinci piyasayı takip eden piyasanın Borsa ya da forex piyasası olmasıdır.</p>
			<h2>Paraya mı İhtiyacınız Var?</h2>
			<ul>
				<li>18 yaşını dolduranlar</li>
				<li>İsviçreli veya çalışma iznine sahip olanlar (B, C, L veya G)</li>
				<li>Aylık sabit net gelire sahip olanlar</li>
				<li>Haciz sorunları yaşamayanlar</li>
			</ul>
			<p>Bu özelliklere sahip olup yatırım yapmak isteyen kişiler, internet aracığıyla çok kolay yoldan istediğiniz para miktarına ulaşabilirsiniz.</p>
			<h2>Bizimle İletişime Geçin</h2>
			<p>Yapmanız gereken sadece bizimle iletişime geçmek.</p>
			<ul>
				<li>Telefonla arayarak</li>
				<li>Online başvurarak</li>
				<li>veya ofisimizi ziyaret ederek bizimle irtibata geçebilirsiniz.</li>
			</ul>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
