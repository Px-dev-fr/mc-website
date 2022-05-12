<?php
// Fonctions pour le calcul des coûts factoring, appelée depuis sites externes

function cf_format($nb){
	if ($nb>10000){
		$nb=intval($nb);
		return number_format($nb, 0, ".", "'");
	}
	else{
		$nb=intval($nb*20);
		$nb=$nb/20;
		if ($nb==intval($nb)) return number_format($nb, 0, ".", "'");
		else return number_format($nb, 2, ".", "'");
	}
}

function cf($retour, $montant, $duree, $type="b2b"){

	// 1 - Quel taux selon facure?
	$taux=4.5;
	if ($montant>2500) $taux=4.25;			if ($montant>5000) $taux=4.0;
	if ($montant>10000) $taux=3.75;			if ($montant>20000) $taux=3.5;
	if ($montant>30000) $taux=3.25;			if ($montant>40000) $taux=3.00;
	
	if ($duree==45) $taux+=0.25;			if ($duree==60) $taux+=0.5;
	if ($duree==75) $taux+=0.75;			if ($duree==90) $taux+=1.0;
	
	if ($taux>=5) $taux=5;
	$taux=$taux/100;
	
	$avance=$montant*0.9;
	$cout=$montant*$taux;
	$avancer=$avance-$cout;
	$solde=$montant*0.1;
	$total=$avancer+$solde;
	
	if ($montant<=5000){
		$avancer=$montant-$cout;
		$solde=0;
	}
	
	if ($type=="b2c"){ // Facture b2c

		// Coût pour le client?
		$client=$montant*2/100;
		if ($montant <450) $client=3;
		
		// Coût pour l'entreprise?
		$cout=$montant*3.5/100;
		if ($montant>5000){
			$cout=5000*3.5/100;
			$cout+=($montant-5000)*1.5/100;
		}
		$facture=$montant+$client;
		if ($duree=="60") $facture=$facture/2;
		if ($duree=="90") $facture=$facture/3;
		$avancer=$montant-$cout;
		$solde=0;
		$total=$avancer;
	}
	
	switch ($retour){
		case "cout": return cf_format($cout);
		case "client": return  cf_format($client);
		case "facture": return  cf_format($facture);
		case "avance": return cf_format($avancer);
		case "solde": return  cf_format($solde);
		case "total": return  cf_format($total);
	}
}

?>