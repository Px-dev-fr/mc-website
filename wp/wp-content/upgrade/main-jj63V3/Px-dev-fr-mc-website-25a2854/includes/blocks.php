<?php
// Fonctions

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

function getTitle($chemin, $html){
	global $nosub;
	if (in_array($html, $nosub)) return"";
	
	if (!is_file($chemin)) return "";
	$content=file_get_contents($chemin);
	
	// Eventuellement image différente
	$res = preg_match('/\$image="(.*)"/siU', $content, $img_matches);
	if (isset($img_matches[1])){
		$tab=explode("/", $html);
		$_SESSION['arrayimg'][$tab[sizeof($tab)-1]]=$img_matches[1];
	}
	
	// Titre
	$res = preg_match("/<title>(.*)<\/title>/siU", $content, $title_matches);
	$tab=explode("|", $title_matches[1]);
	$tab=explode(":", $tab[0]);
	return trim($tab[0]);
}

function getImg($chemin){
	$tab=explode("/", trim($chemin));
	$img=$tab[sizeof($tab)-1];
	$img=str_replace(".php", "", $img);
	
	if (isset($_SESSION['arrayimg'][$img]))  $img=$_SESSION['arrayimg'][$img];
	$img="$img.jpg";
	return $img;
}
?>

<?php
if ($nosub!==true) include("includes/bottom/sublinks.php");
?>
<div id="mbot">
	<?php include("includes/bottom/contact.php");?>
	<?php include("includes/bottom/connexes.php");?>
</div>