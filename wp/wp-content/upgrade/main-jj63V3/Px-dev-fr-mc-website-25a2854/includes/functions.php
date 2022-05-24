<?php

function reduce($str){
	$str=str_replace(PHP_EOL, "", $str);
	$str=str_replace("	","",$str);
	return $str;
}

function wd_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    return $str;
}

function toSSL($string){return($string);}

function accents($lang)
{
	switch ($lang){
		case "fr":
			$from=Array("marche", "medecin", "liberale", "velo", "reponse", "anticipe", "delemont", "video", "media", "duree", "etude", "legitimation", "emmenager", "demenager", "veranda", "renovation", "bebe", "resultat", "sarl", "ppe", "proprietaire", "debit", "desendettement", "cout", "besoin fonds", "prefinancement", "creance-souffrance", "creance", "materiel", "b2b", "deconsolidant", "inverse", "pme", "pret", "credit", "independant", "sante", "medical", "impot", "immediat", "prive", "geneve", "neuchatel", "vehicule", "immobiliere", "hypotheque", "cedule", "hypothecaire", "acces", "region", "societe");
			$to=Array("marché", "médecin", "libérale", "vélo", "réponse", "anticipé", "Delémont", "vidéo", "média", "durée", "étude", "légitimation", "emménager", "déménager", "véranda", "rénovation", "bébé", "résultat", "Sàrl", "PPE", "propriétaire", "débit", "désendettement", "coût", "besoin en fonds de ", "préfinancement", "Créances en souffrance", "créance", "matériel", "B2B", "déconsolidant", "inversé", "PME", "prêt", "crédit", "indépendant", "santé", "médical", "impôt", "immédiat", "privé", "genève", "neuchâtel", "véhicule", "immobilière", "hypothèque", "cédule", "hypothécaire", "accès", "région", "société");
			break;

		case "es":
			$from=Array("creditos");
			$to=Array("créditos");
			break;		
		case "pt":
			$from=Array("credito", "bancario", "habitacao", "medico", "renovacao", "suica", "informatico", "portugal", "terraco", "plasticas", "dentari", "rapido", "formacao", "friburgo", "consolidacao", "agencia");
			$to=Array("crédito", "bancário", "habitação", "médico", "renovação", "Suiça", "informático", "Portugal", "terraço", "plásticas", "dentári", "rápido", "formação", "Friburgo", "consolidação", "agência");
			break;
		case "de":
			$from=Array("umlaufvermoegen", "erhoehen", "liquiditaet", "kmu", "liquiditat", "fahigkeit", "losung", "selbststandige", "gesprach", "stutzung", "seriose", "kuche", "auslander", "temporar", "zurich", "dubendorf", "wadenswil");
			$to=Array("umlaufvermögen", "erhöhen", "liquidität", "KMU", "liquidität", "fähigkeit","lösung", "selbstständige", "gespräch", "stützung", "seriöse", "küche", "ausländer", "temporär", "zürich", "dübendorf", "wädenswil");
			break; 
		}
		
	return Array("from"=>$from, "to"=>$to);
}


// Récupère les fonctions factoring
$fichier="includes/imports/factoring.php";
$limit=60*60; // 1 heure
if ((!is_file($fichier)) or ((time() - filemtime($fichier)) > $limit)){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://crm.prestaflex.ch/curl/formulaires/calc-factoring.txt');
	curl_setopt($curl, CURLOPT_REFERER, "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	file_put_contents($fichier, "<?php".PHP_EOL.curl_exec($curl).PHP_EOL."?>");
	curl_close($curl);
}
include($fichier);
	
?>