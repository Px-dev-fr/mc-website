<?php
$h1="Leasing particulier";
$link="";
include('includes/first_loaded.php');
$lang="fr";
$image="none";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Leasing particulier: nos solutions pour financer votre véhicule</title>
<meta name="description" content="Un leasing particulier chez Multicrédit s'adresse à toute personne en Suisse cherchant à financer un véhicule. Profitez de nos offres à taux avantageux."/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Un <b>leasing particulier</b> vous permettra de financer facilement tout véhicule: auto, moto, ou même bateau! Nos spécialistes en leasing sont à votre disposition pour vous proposer une offre gratuite et sans engagement! Complétez simplement notre formulaire de demande de leasing particulier: un conseiller vous recontactera rapidement afin de mieux cerner vos besoins et vous orienter vers une solution avantageuse!</p>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'fr',
							'origine_referer' => $_SESSION['origine_referer'],
							'ip' => $_SERVER['REMOTE_ADDR'],
							'url' => 'multicredit'
						);
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');					
				$url=("https://crm.cashflex.ch/curl/formulaires/prives/serviceprive.php");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_REFERER, 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
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
