<?php
$h1="Demande de leasing commercial";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Leasing commercial: demande de conseil</title>
<meta name="description" content="Profitez du meilleur taux pour votre leasing commercial! Financez tout véhicule, machine, bien de production. Découvrez nos offres pour PME et indépendants."/>
<?php include('includes/meta.php');?>
<link href="/template/formu_pf_old.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<div id="mct" class="ptop">
		<?php echo "<h1>$h1</h1>";?>
			<p>Un leasing commercial vous permettra de financer facilement tout investissement lié à votre activité professionnelle. Qu'il s'agisse de machine, d'outillage spécialisé, de véhicules, nous pouvons vous proposer un leasing commercial au meilleur taux! Demandez une offre <b>quelle que soit votre situation</b>: PME, indépendant ou agriculteur.</p>
			<div id="iframe_formulaire" style="background:none;box-shadow:none;">
			<?php
				$fields = array('langue' => 'fr');
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
