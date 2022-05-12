<?php
$h1="Precetti esecutivi e fallimenti: come  ottenere un aiuto finanziario";
$link="/it/raggruppamento/debiti/richiesta";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Precetti esecutivi e fallimenti: chiedete l'aiuto di uno specialista</title>
<meta name="description" content="Cosa fare in caso di procedimenti esecutivi e fallimenti? Non restate da soli ad affrontare le difficoltà finanziarie! Richiedete aiuto a Multicredit!"/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct" class="ptop">	
		<p>Avete delle fatture che non siete riusciti a pagare o avete dichiarato fallimento?
		In caso di procedimenti esecutivi e fallimenti rivolgetevi a noi di Multicrédit. Possiamo aiutarvi a trovare delle soluzioni concrete. Compilate il nostro formulario online!</p>
		
		<div id="iframe_formulaire">
			<?php	
			if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
			$fields = array(
						'langue' => 'it',
						'origine_referer' => $_SESSION['origine_referer'],
						'ip' => $_SERVER['REMOTE_ADDR'],
						'url' => 'multicrédit'
					);
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string, '&');					
			$url=("https://crm.cashflex.ch/curl/formulaires/prives/desendettement.php");
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
