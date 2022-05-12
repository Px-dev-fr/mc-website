<?php
$h1="Prêt hypothécaire en Suisse";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Prêt hypothécaire en Suisse:</title>
<meta name="description" content="Avez-vous besoin d'une solution de prêt hypothécaire à la fois flexible et avantageuse? Découvrez notre offre et bénéficiez de conseils d'un spécialiste!"/>
<?php include('includes/meta.php');?>
<link href="/template/cash_form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
		<p>Vous envisagez de construire une maison en Suisse? Savez-vous déjà comment financer votre projet? Chez Multicrédit, nous pouvons vous proposer une solution de <b>prêt hypothécaire</b> flexible et avantageuse. Via notre filiale <b>PrestaFlex-Service</b>, profitez de notre offre:</p>
		<ul>
			<li>Complétez notre formulaire en ligne</li>
			<li>Notre conseiller vous contactera pour fixer un rendez-vous gratuit, vous renseigner et vous proposer une solution de prêt hypothécaire adaptée</li>
			<li>En cas d'intérêt, vous recevrez une proposition de prêt hypothécaire sans engagement <b>valable pour un mois</b></li>
		</ul>
		<div id="iframe_formulaire">
		<?php
				if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';			
				$fields = array(
							'langue' => 'fr',
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
