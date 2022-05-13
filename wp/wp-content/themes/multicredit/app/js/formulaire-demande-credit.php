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
	die;
}