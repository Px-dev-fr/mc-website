<?php
$h1="";
$link="";
// Soumission du formulaire?
if ($_POST['soumission']==1){
	$postfields = array();
	foreach ($_POST as $key=>$value) $postfields[$key]=$value;
	$formtype=$_POST['formtype'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://crm.cashflex.ch/curl/formulaires/prives/credit/etape_3.php');
	curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//
	$return =curl_exec($ch);
	echo $return; 
	die;
}
?>
<?php 
// selection language
include('includes/first_loaded.php');
$lang="tr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Kredi Basvurusu</title>
<meta name="description" content="Isviçre'de kredi basvurusu. Size uygun en avantajli kredilerden yararlanmak için firsat ayaginizda. Sizde kredi basvurunuzu yapin, avantajlardan yararlanin."/>
<?php include('includes/meta.php');?>
<link href="/template/creditform.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php $nomenu=true;include('includes/header.php');?>
	<div id="mct" class="ptop credit">
	<h1 style="display:none;"></h1>
	<?php
				$montant=10000;$duree=12;
				$orig="";
				if (isset($_SESSION['orig'])) $orig=$_SESSION['orig'];	
				if (isset($_POST['montant'])) $montant=$_POST['montant'];
				if (isset($_POST['duree'])) $duree=$_POST['duree'];
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, 'https://crm.cashflex.ch/curl/formulaires/prives/credit/formulaire.php');
				curl_setopt($curl, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
				curl_setopt($curl, CURLOPT_COOKIESESSION, true);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);//				
				$postfields = array(
					'langue' => 'tr',
					'montant' => $montant,
					'duree' => $duree,
					'ip'=> $_SERVER['REMOTE_ADDR'],
					'orig' => $orig,	
					'signature' => 'Multicredit',
					'url' => 'www.multicredit.ch'
				);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
				$return =curl_exec($curl);
				curl_close($curl);
				echo $return; 
		?> 
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
