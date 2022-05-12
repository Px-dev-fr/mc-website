<?php
$h1="Un conseil individualisé pour votre PME";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Service de conseil aux PME</title>
<meta name="description" content="Bénéficiez d'un conseil individualisé par un spécialiste. Nos solutions pour PME et indépendant s'adaptent à vos besoins: crédits, factoring, assurances, leasing." />
<?php include('includes/meta.php');?>
<link href="/template/formu_pf_old.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89"; $na=true;include('includes/header.php');?>
	<div id="mct" class="ptop credit">
		<?php echo "<h1>$h1</h1>";?>
		<p>Vous êtes indépendant ou vous gérez une société? Qu'il s'agisse de financer un projet, de protéger votre activité grâce à des solution spécifiques, d'assurer un fonds de roulement, nous avons des solutions adaptées!</p>
		<p>Bénéficiez d'un conseil avec un spécialiste expérimenté capable de vous apporter des solutions sur mesure!</p>
		<div id="iframe_formulaire">
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
