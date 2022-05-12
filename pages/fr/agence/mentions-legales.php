<?php
$h1="MENTIONS LEGALES";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Mentions légales </title>
<meta name="description" content="Multicrédit: mentions légales. Vous trouverez ici les mentions légales pour nos demandes de crédits en Suisse"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
	<?php
			$url=("https://www.prestaflex-service.ch/crm/template/textes/clauses/disclaimer_fr.txt");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output = toSSL(curl_exec($ch));
			curl_close($ch);
			$output='<p>'.nl2br($output).'</p>';
			echo $output;
			?>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
