<?php

// Conversion des images
$htaccess=file_get_contents("template/images/header/.htaccess");
$tab=explode(PHP_EOL, $htaccess);
$htconvert=Array();
foreach ($tab as $ligne){
	$ligne=str_replace("$", "/",$ligne);
	$ligne=str_replace(")", "/",$ligne);
	$test=explode("/", $ligne);
	if (sizeof($test)>1)
	$htconvert[$test[1]]=substr($test[sizeof($test)-1],1);
}

function getImg($chemin){
	// Image indiquée
	$file=file_get_contents($chemin);
	$tab=explode('$image=', $file);
	$tab=explode(';', $tab[1]);
	$tab[0]=trim($tab[0], "'");
	$tab[0]=trim($tab[0], '"');
	$tab[0]=trim($tab[0]);
	if ($tab[0]!="") $img=$tab[0];
	
	else{
		$chemin=str_replace("/index.php", "", $chemin);
		$tab=explode("/", trim($chemin));
		$img=$tab[sizeof($tab)-1];
		$img=str_replace(".php", "", $img);
			
	}
	$img="$img.jpg";	

	

	return $img;
}

// Cherche des pages où les images ne fonctionnent pas

// 1. Récupère le sitemap en curl
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://www.multicredit.ch/sitemap.xml',
));
$sitemap = strip_tags(curl_exec($curl));
curl_close($curl);

$lines=explode(PHP_EOL, $sitemap);
foreach ($lines as $line){ // Liste des fichiers dans le sitemap
	// Nettoyage
	$line=trim($line);
	$line=substr($line, 27);
	if ($line=="") continue;
	
	// Cherche le fichier .php
	$php="";
	if (is_file("pages/$line.php")) $php="pages/$line.php";
	else if (is_file("pages/$line/index.php")) $php="pages/$line/index.php";
	
	// Cherche le fichier image
	$img=getImg($php);
	if (isset($htconvert[$img])) $img=$htconvert[$img];
	//echo '<br>'.$line.' => '.$img;
	
	// Vérifie si l'image existe
	if (!is_file("template/images/header/$img")){
		echo '<br><a href="/'.$line.'" target="new">'.$line.'</a> => '.$img;
	}
}

?>