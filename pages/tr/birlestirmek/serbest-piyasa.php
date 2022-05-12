<?php
$h1="Serbest Piyasa";
$link=""; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Serbest Piyasa</title>
<meta name="description" content="Serbest piyasa, arz ve talebine hükümet müdahalesi yapılmayan, ürünün fiyatının alıcı ve satıcının karşılıklı olarak anlaşmasıyla belirlendiği piyasa.">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="rachat-et-regroupement-de-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

			<p>Serbest piyasa ve bankaların güncel döviz kurlarından haberdarmısınız? Peki İsviçre frangının Türk lirası karşısındaki yükselişinden bilginiz var mı? Sizde frangın yüksek değerinden yararlanmak için harekete geçin. Yatırım yapmanın şimdi tam zamanı.</p>
			<h2>Tanım Olarak;</h2>
			<p>Serbest piyasa, ürünün fiyatının alıcı ve satıcının karşılıklı olarak anlaşmasıyla belirlendiği, arz ve talebine hükümet tarafından müdahale yapılmayan bir piyasadır.</p>
			<ul>
				<li>İsviçreli veya çalışma iznine sahip olanlar (B, C, L veya G)</li>
				<li>Aylık sabit net gelire sahip olanlar</li>
				<li>18 yaşını dolduranlar</li>
			</ul>
			<p>Eğer sizde bu özelliklere sahipseniz istediğiniz miktarda kredi alabilir, İsviçre frangının yüksek değerinden yararlanabilirsiniz.</p>
			<h2>Bize Ulaşın</h2>
			<p>Yapmanız gereken sadece bize ulaşmak.</p>
			<ul>
				<li>Telefonla arayarak</li>
				<li>Online başvurarak</li>
				<li>veya ofisimizi ziyaret ederek</li> 
			</ul>
			<p>bizimle irtibata geçebilirsiniz. Başvurmak için hemen tıklayın!</p>
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
