<?php
$h1="";
$link="";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Online KMU Kreditanfrage in der Schweiz</title>
<meta name="Description" content="Füllen Sie einfach unser Online Formular aus um eine kostenlose und unverbindliche Offerte innerhalb von 48h zu erhalten."/>
<?php include('includes/meta.php');?>
<link href="/template/creditform.css" rel="stylesheet" type="text/css"/>
</head> 
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<div id="mct" class="ptop credit">
		<h1 style="display:none;"></h1>
		<?php
				$fields = array('langue' => 'de');
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');					
				$url=("https://crm.cashflex.ch/curl/formulaires/pme/form.php");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//		
				curl_setopt($ch,CURLOPT_POST, count($fields));	
				curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);			
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$output = curl_exec($ch);
				curl_close($ch);
				echo $output;
				?> 
	</div>
	<?php $offres=1;include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>