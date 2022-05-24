<?php
$h1="Prestito ipotecario in Svizzera";
$link="";
include('includes/first_loaded.php');
$lang="it";
?>
<!DOCTYPE html>
<html lang="it">
<head>
<title>Prestito ipotecario: come funziona in Svizzera</title>
<meta name="description" content="Siete alla ricerca di una soluzione di prestito ipotecario allo stesso tempo, flessibile e vantaggioso? Affidatevi a degli specialisti del settore!
"/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>State progettando di acquistare un appartamento, una villa o comprare un terreno per costruire la casa dei vostri sogni? Multicrédit
		propone soluzioni di <b>prestito ipotecario</b> flessibile, vantaggioso e a delle condizioni interessanti. Fate la scelta giusta per finanziare la vostra nuova abitazione e scoprite come usufruire dei nostri servizi:</p>
		<ul>
			<li>Compilate il nostro modulo online con i vostri dati personali</li>
			<li>Un consulente vi contatterà per fissare un appuntamento gratuito</li>
			<li>Ricevete rapidamente una proposta di ipoteca, senza impegno e valida per un mese</li>
		</ul>
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
