<?php
$h1="Eine individualisierte Beratung für Ihr KMU";
$link="";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Beratung für KMU</title>
<meta name="description" content="Profitieren Sie von einer individualisierten Beratung mit einem Spezialisten. Unsere Lösungen für KMU und Selbstständige passen sich an Ihre Wünsche an!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";$na=true;include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Sind Sie selbstständig oder verwalten Sie ein KMU? Egal ob es sich um die Finanzierung eines Projektes, um den Schutz Ihres Unternehmens dank spezifischer Produkte, um die Sicherstellung von Liquidität oder um andere Vorhaben handelt, wir haben angepasste Lösungen für Sie!</p>
		<p>Profitieren Sie von unseren Beratern, um individualisierte Angebote zu erhalten!</p>
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
