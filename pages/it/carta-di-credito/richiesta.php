<?php
$h1="Richiesta di carta di credito";
$link="";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Richiesta di carta di credito: bisogno di un metodo di pagamento rapido e affidabile?</title>
<meta name="description" content="Faites votre demande de carte de crédit en toute simplicité et profitez d'un moyen de paiement sûr et fiable tout en bénéficiant d'une limite plus élevée!"/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<h1>Richiesta di carta di credito</h1>
		<p>Avete bisogno di un massimale più elevato? Indipendentemente da quale sia la vostra condizione finanziaria, evitate di restare a corto di liquidità! Inviateci una richiesta direttamente sul nostro sito internet e ricevete una proposta senza impegno e in breve tempo!</p>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'it',
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
