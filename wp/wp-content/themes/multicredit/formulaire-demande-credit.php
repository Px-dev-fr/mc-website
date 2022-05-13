<?php
if ($_POST['soumission']==1){
	$postfields = array();
	foreach ($_POST as $key=>$value) $postfields[$key]=$value;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://crm.cashflex.ch/curl/formulaires/prives/credit/etape_3.php');
	curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//
	$return =curl_exec($ch);
	echo $return;
	
// 	if (isset($_POST['langue'])){
// 		switch($_POST['langue']){
// 			case "fr":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".urlencode($return));
// 				break;
// 			case "en":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "de":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "it":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "pt":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "es":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "sq":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 			case "tr":
// 				Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 				break;
// 		}
// 	}
// 	else{
// 		Header("Location: https://www.multicredit.ch/fr/merci-pour-votre-demande?retour=".$return);
// 	}

	die;
}