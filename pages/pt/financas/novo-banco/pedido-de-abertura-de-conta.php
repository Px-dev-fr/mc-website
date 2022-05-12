<?php
$h1="Abertura de conta Novo Banco";
$link="";
include('includes/first_loaded.php');
$lang="pt";
$image="non";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Abertura de conta Novo Banco</title>
<meta name="description" content="Abrir uma conta na Novo Banco é muito fácil com a Multicrédit. Basta preencher o nosso formulário de abertura de conta. Efectue já a abertura de conta!"/>
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
