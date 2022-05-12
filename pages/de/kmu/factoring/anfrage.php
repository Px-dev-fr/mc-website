<?php
$h1="Factoring - Die neue Finanzierungsmethode für KMU";
$link="";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Anfrage für Factoring</title>
<meta name="description" content="Factoring ist die neue Finanzierungsmöglichkeit für Ihr KMU! Machen Sie eine unverbindliche Anfrage und erhalten Sie 90% Ihrer Rechnungsbeträge im Voraus!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Hat Ihr KMU ein Problem mit Liquidität? Zahlen Ihre Kunden nicht pünktlich? Mit Hilfe von Factoring erhalten Sie <b>90%</b> des ausstehenden Rechnungsbetrages innerhalb von <b>48 Stunden</b> auf Ihr Konto! So sichern Sie Ihrem Unternehmen einen stetigen Liquiditätsfluss dank Factoring.</p>
		<p>Füllen Sie unser Formular aus, um von massgeschneiderten Angeboten zu profitieren!</p>
		<div id="iframe_formulaire">
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
	</div>
	<?php $offres=1;include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
