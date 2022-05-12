<?php
$h1="";
$link="";

include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Demande de crédit PME / indépendant</title>
<meta name="Description" content="Faites votre demande de prêt PME / indépendant auprès d'un spécialiste et profitez de démarches simplifiées débouchant sur un taux plus avantageux."/>
<?php include('includes/meta.php');?>
<link href="/template/creditform.css" rel="stylesheet" type="text/css"/>
</head> 
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<div id="mct" class="ptop credit">
	<h1 style="display:none;"></h1>
	<?php
				$fields = array('langue' => 'fr');
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
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
