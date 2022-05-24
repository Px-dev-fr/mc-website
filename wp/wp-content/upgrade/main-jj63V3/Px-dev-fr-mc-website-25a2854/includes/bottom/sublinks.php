<?php
$stitre['fr']="Liens utiles";
$stitre['en']="Useful links";
$stitre['de']="Nützliche Links";
$stitre['pt']="Links úteis";
$stitre['al']="Lidhje të dobishme";
$stitre['it']="Link utili";
$stitre['es']="Enlaces útiles";
$stitre['pl']="Przydatne linki";
$stitre['sbc']="Korisne veze";

//echo $htaccess;
//print_r($htconvert);

?>
<div id="blocs" class="pm">
<?php // Liens vers rubriques, puis vers fichiers

$_SESSION['arrayimg']=array(); // Conversion des images

// Sous-liens qui ne s'affichent pas
$nosub=array(
"/credit/prive/services-financiers",
"/credit/conditions", "/credit/suisse", "/credit/simulation", "/credit/rachat", "/credit/demande", "/hypotheque/demande", "/desendettement/demande", "/affacturage/assurance-credit", "/affacturage/cession", "/affacturage/recouvrement", "/affacturage/demande"
);


$list_dirs=array();
$list_soeurs=array();

// Lister les dirs
$dir=str_replace("index", "","/$page");
$adir=$dir;
if (is_dir("pages$dir")){
	if (sizeof(explode("/", trim($dir, "/")))>1){ // Il y a des rubriques / pages soeurs
		if (is_dir("pages$dir")){
			$folders=scandir("pages$dir");
			foreach ($folders as $folder){
				if ($folder=="index.php") continue; // On ne liste pas l'index
				if ($folder==".") continue;
				if ($folder=="..") continue;
				
				if ($onlydirs=="oui") if (strpos($folder, ".php")!==false) continue;
				
				$html=str_replace(".php", "","$dir$folder"); // 
				$php="pages$dir$folder/index.php";
				if (is_dir("pages$dir$folder")) $php="pages$dir$folder/index.php";
				else $php="pages$dir$folder";
				// On évite de lister la rubrique actuelle
				$titre=getTitle($php, $html);
				if (strlen($titre)>0) $list_soeurs[$html]=$titre;
				}
		}
	}
}

// On élimine si pas d'image
$test=$list_soeurs;

$list_soeurs=array();
foreach ($test as $href=>$title){
	$image=getIMg($href);
	if ($image=="none.jpg") continue;
	$imagecheck=$image;
	//echo '<br>'.$imagecheck." => ";
	if (isset($htconvert[$image])) $imagecheck=trim($htconvert[$image]);
	//echo ("template/images/header/$imagecheck");
	
	if (!is_file("template/images/header/$imagecheck")) continue; // Seulement lien si images
	$list_soeurs[$href]=$title;
}	

//print_r($list_soeurs);
// Affichage des pages
$accents=accents($lang);
if (sizeof($list_soeurs)>0){
	echo ' <h3 class="qtitre">';
	if (isset($subtitre)) echo $subtitre; else echo $stitre[$lang];
	echo ':</h3>';
	foreach ($list_soeurs as $href=>$title){
		$image=getIMg($href);
		if ($image=="none.jpg") continue;
		$imagecheck=$image;
		if (isset($htconvert[$image])) $imagecheck=trim($htconvert[$image]);
		if (!is_file("template/images/header/$imagecheck")) continue; // Seulement lien si images
		
		$alt=$title;
		$alt=ucfirst(str_replace($accents['from'], $accents['to'], $alt));$alt=str_replace("-", " ", $alt);

		echo '
		<a class="bla" href="'.$href.'">
		<img alt="'.$alt.'" class="lazy" width="480" height="144" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-srcset="/template/images/header/thumbs/480/'.$image.' 1800w,/template/images/header/thumbs/420/'.$image.' 580w,/template/images/header/thumbs/360/'.$image.' 460w" data-sizes="100vw">
		<span>'.$title.'</span>
		
		</a>
		';
	}
	echo '
	';
}

?>
</div>