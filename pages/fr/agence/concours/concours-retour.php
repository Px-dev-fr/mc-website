<?php
$h1="Notre concours";
$link="/fr/credit/formulaire-demande-credit"; 
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Notre concours</title>
<meta name="Description" content=""/>
<?php include('includes/meta.php');?>
</head> 
<body>
<!-- Google Code for Demande effectu&eacute;e Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 962106312;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "hzRlCLjctwMQyKfiygM";
var google_conversion_value = 60.00;
var google_conversion_currency = "CHF";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/962106312/?value=60.00&amp;currency_code=CHF&amp;label=hzRlCLjctwMQyKfiygM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div id="container">
	<?php echo "<h1>$h1</h1>";?>
	<?php include('includes/header.php');?>
		<?php
			if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';
			foreach($_POST as $key=>$value) { $fields_string .= $key.'='.$value.'&';}
			rtrim($fields_string, '&');					
			$url=("https://www.prestaflex-service.ch/crm/php/curl_access/formulaire_externe_retour.php");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output = toSSL(curl_exec($ch));
			curl_close($ch);
			echo $output;
			?>
		<?php if (trim($output)==""):?>
				<p>Nous vous remercions d'avoir participé à notre concours! N'oubliez pas également d'aimer notre page Facebook: <a href="http://www.facebook.com/multicredit">http://www.facebook.com/multicredity</a>!</p>
		<?php endif;?>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
