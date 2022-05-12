<?php
$h1="Kreditkarte hier beantragen";
$link="";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kreditkarte beantragen: Brauchen Sie ein schnelles und zuverlässiges Zahlungsmittel?</title>
<meta name="description" content="Beantragen Sie Ihre neue Kreditkarte noch heute und profitieren Sie von einem modernen Zahlungsmittel mit einer höheren Limite als die Konkurrenz!" />
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Brauchen Sie eine höhere Kreditlimite? Mit unserer neuen Mastercard- oder Visa-Karte profitieren Sie von einer höheren Ausleihlimite, damit Sie beim Einkaufen immer die nötige Liquidität haben. Füllen Sie einfach unser Formular aus und erhalten Sie demnächst eine Offerte!</p>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'de',
							'origine_referer' => $_SESSION['origine_referer'],
							'ip' => $_SERVER['REMOTE_ADDR'],
							'url' => 'multicredit'
						);
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');					
				$url=("https://crm.cashflex.ch/curl/formulaires/prives/cartecc.php");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch,CURLOPT_POST, count($fields));	
				curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);			
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//		
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$output = curl_exec($ch);
				curl_close($ch);
				$output=str_replace('type="submit"', 'type="submit" class="btn"', $output);
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
