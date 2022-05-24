<?php
$h1="Leasing per i clienti privati";
$link="";
include('includes/first_loaded.php');
$lang="it";
$image="none";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Leasing per clienti privati: le nostre soluzioni per finanziare il vostro veicolo</title>
<meta name="description" content="Multicrédit propone leasing per i clienti privati che risiedono o lavorano in  Svizzera e che sono alla ricerca di finanziare il proprio veicolo."/>
<?php include('includes/meta.php');?>
<link href="/template/formu_pf_old.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Un <b>leasing</b> vi permetterà di finanziare facilmente tutti i tipi di veicoli: auto, moto o imbarcazioni.
		I nostri specialisti sono a vostra disposizione per proporvi un'offerta gratuita e senza impegno. Compilate il nostro formulario online di richiesta di leasing per clienti privati, un consulente vi contatterà rapidamente per valutare i vostri bisogni e orientarvi verso la soluzione più vantaggiosa!</p>
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
				$url=("https://crm.cashflex.ch/curl/formulaires/prives/serviceprive.php");
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
