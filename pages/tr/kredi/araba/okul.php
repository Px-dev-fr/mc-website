<?php
$h1="İşyeri Kredisi";
$link="/tr/kredi/basvuru"; 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>BLABLAS</title>
<meta name="description" content="BLABLA">
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="leasing-pme";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>blabla</p>
		<h2>Sub</h2>
		<p>BlA BLA</p>
		<a class="bouton" href="/tr/kredi/basvuru">Basvuru</a> 
	</div>
	<?php include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
