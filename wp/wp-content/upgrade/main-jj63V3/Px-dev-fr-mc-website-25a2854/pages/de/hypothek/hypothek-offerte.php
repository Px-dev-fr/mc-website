<?php
$h1="Hypothek Offerte";
$link=""; 
include('includes/first_loaded.php');
$lang="de";
$image="non";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Hypothek Offerte: kostenlose Angebot</title>
<meta name="description" content="Hypothek Offerte: Möchten Sie ein Haus, eine Wohnung bauen? Holen Sie sich einen kostenlosen Termin mit einem Spezialisten! Kostenlose Angebot."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Sie planen in naher Zukunft ein Haus in der Schweiz <b>zu bauen</b>? Wissen Sie schon, wie Sie Ihr Projekt finanzieren? Wir bieten Ihnen eine Lösung an: 
		 eine flexible und günstige Hypothek in der Schweiz. Über unsere Tochtergesellschaft PrestaFlex Service können Sie von tollen Angeboten profitieren!</p> 
		<h2>Warum einen Spezialisten?</h2> 
		<p>Da eine Hypothek ein langfristiges Engagement ist, ist es umso wichtiger, dass keine Fehler passieren. Ein Spezialist weist Sie auf Gefahren hin und zeigt Ihnen
		Tipps und Tricks.</p> 
		<h2>Füllen Sie unser Formular aus</h2>
		<p>Möchten Sie eine kostenlose und unverbindliche Beratung von einem unserer Spezialisten? Füllen Sie dazu einfach unser Formular aus. Unsere Mitarbeiter werden Sie so
		schnell wie möglich kontaktieren um weitere Details anzuschauen. Sie verpflichten sich zu nichts!</p>
		<div id="iframe_formulaire">
		<?php
			if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';
			$fields = array(
						'service' => 'Hypothek Offerte',
						'retour'  => 'https://www.multicredit.ch/de/form',
						'langue' => 'de',
						'origine_referer' => $_SESSION['origine_referer']			
					);
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string, '&');		
			$url=("https://www.prestaflex-service.ch/crm/php/curl_access/formulaire_externe.php");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'); 
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//
			$output = toSSL(curl_exec($ch));
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
