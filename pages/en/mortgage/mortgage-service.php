<?
include('includes/first_loaded.php');
$lang="en";
$h1="Get a free mortgage service offer";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mortgage service: ask for a free contact with a mortgage specialist</title>
<meta name="Description" content="Would you like to profit from a mortgage service? We would be glad to advise you on a funding solution for your future house. Free advice, no obligation."/>
<?php
$h1="Get the best support you can have! Contact Multicredit.";$image="none";
$link=""; include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Receiving advice from a specialist in mortgage services is not always easy. Would you like to profit from a free advice with a mortgage specialist? Just complete our form. Our adviser will contact you <b>in the shortest time</b> to answer your questions and advise you.</p>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'en',
							'origine_referer' => $_SESSION['origine_referer'],
							'ip' => $_SERVER['REMOTE_ADDR'],
							'url' => 'multicredit'
						);
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');					
				$url=("https://crm.cashflex.ch/curl/formulaires/prives/hypotheque.php");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch,CURLOPT_POST, count($fields));	
				curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);			
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//		
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$output = curl_exec($ch);
				curl_close($ch);
				echo $output;
			?>
		</div>
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
