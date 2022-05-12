<?php

function endswith($string, $test) { // Test si une chaîne se termine par une sous-chaîne
    $strlen = strlen($string);
    $testlen = strlen($test);
    if ($testlen > $strlen) return false;
    return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
}

$file=false;

// Eléments à tester
$tab=explode("/", $page);
$langue=$tab[0];
$tab=explode(".", $tab[sizeof($tab)-1]);
$search=$tab[0];

// Redirections manuelles
$find=Array();
$replace=Array();
if (in_array($search, $find)){
	$html=str_replace($find, $replace, $search);
	header("Location: ".$html,TRUE,301); // Redirection vers la page
	die;	
}

// Redirection automatique
$dir = new RecursiveDirectoryIterator('pages');
$matches=array();
foreach (new RecursiveIteratorIterator($dir) as $file) {
	
	// On enlève le .php et index du fichier
	$test=str_replace("index.php", "", $file);
	$test=str_replace(".php", "", $test);
	$test=trim($test, "/");
	
	// Tableau de test
	$tab=explode("/", $test);
	if (strlen($tab[sizeof($tab)-1])<3) continue; // On ne traite pas . et ..
	
	// On vérifie si correspondance exacte (credit/credit-prive pour "credit-prive")
	if ($search==$tab[sizeof($tab)-1]){
		if ($tab[1]!=$langue) continue;
		$matches["".$file]+=10;
		continue;
		}
		
	// On vérifie si correspondance exacte via dossier (credit/prive pour "credit-prive)
	
	$ftest=str_replace("/", "-", $test); // test/credit/prive => test-credit-prive
	if (endswith($ftest, $search)){
		if ($tab[1]!=$langue) continue;
		$matches["".$file]+=10;
		continue;
		}
		
	
	// On vérifie si correspondance approximative
	unset($tab[0]); // Pas "pages";
	if ($tab[1]!=$langue) continue; // On évite les redirections sur une autre langue
	$actuel=implode("-", $tab);
	$tab_actu=array_unique(explode("-", $actuel));
	$tab_search=array_unique(explode("-", $search));	
	$tab_find=array_intersect($tab_actu, $tab_search);
	if (sizeof($tab_find)>0){
		$matches["".$file]=sizeof($tab_find);
	
		// On vérifie une correspondance au niveau de l'image?
		$content=file_get_contents($file);

		// Eventuellement image différente
		$res = preg_match('/\$image="(.*)"/siU', $content, $img_matches);
		if (isset($img_matches[1])){
			if ($img_matches[1]==$search) {echo '*';$matches["".$file]+=10;}
		}
	
		}
	}
arsort($matches); // Tri
if (sizeof($matches)>0){
	
	// Redirection trouvée
	reset($matches);
	$php = key($matches);
	
	$html=str_replace("index.php", "", $php);
	$html=str_replace(".php", "", $html);
	$html=trim($html, "/"); // On enlève éventuels /
	$html=substr($html, 5); // On enlève pages au début
	
	header("Location: ".$html,TRUE,301); // Redirection vers la page
}
else{
	header("Location: /404.php",TRUE,301); // Redirection vers la page
}
	
?>