<?php
ob_start("ob_gzhandler");
$action=$_POST['action'];
$lang=$_POST['langue'];

// Choix du titre
//=> Pas de titre
/*
switch ($_POST['simulateur']){
	case "credit-pme":
		echo "<h2>Calculez le coût de votre crédit PME / entreprise</h2>";
		break;
	case "credit-prive":
		echo "<h2>Simulez le coût de votre crédit privé</h2>";
		break;
	case "hypotheque":
		echo "<h2>Quel coût mensuel pour votre future hypothèque?</h2>";
		break;
	case "leasing":
		echo "<h2>Estimez le coût de votre leasing PME</h2>";
		break;
	case "factoring":
		break;		
}
*/


// Charge un simulateur en ajax

	$simulateur=$_POST['simulateur'];
	
	switch($simulateur){
		case ("credit-prive"):
			$url='https://crm.cashflex.ch/curl/formulaires/prives/credit/simulation.php?nc=23';
			break;
		case ("hypotheque"):
			$url='https://crm.cashflex.ch/curl/formulaires/prives/simulateurs/hypotheque.php';
			break;	
		case ("b2c"):
			$simulateur="factoring-b2c";
		default: $url='https://crm.prestaflex.ch/curl/simulateurs/'.$simulateur.'.php';
	}

	
	$postfields = array();
	$postfields['lang']=$lang;
	$postfields['action']=$action;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	$return =curl_exec($ch);
	echo $return; 


?>
<style><?php include("../template/creditform.css");?></style>