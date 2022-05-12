<?php
$h1="Pedido de cartão de crédito";
$link="";
include('includes/first_loaded.php');
$lang="pt";
$image="non";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Pedido de cartão de crédito</title>
<meta name="description" content="Com a Novo Banco e a Multicrédit é fácil obter um cartão de crédito. Preencha já o nosso formulário gratuito de pedido de cartão de crédito. Não perca tempo!"/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'pt',
							'origine_referer' => $_SESSION['origine_referer'],
							'ip' => $_SERVER['REMOTE_ADDR'],
							'url' => 'multicredit'
						);
				foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
				rtrim($fields_string, '&');					
				$url=("https://crm.cashflex.ch/curl/formulaires/prives/novobanco.php");
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
	<?php $offres=1;include('includes/block-liens.php');?>
	<?php include('includes/footer.php');?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
