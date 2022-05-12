<?php
echo 'Mise à jour des miniatures';

$images = glob('template/images/header/*.{jpg}', GLOB_BRACE);
$fait=0;
$max=10;
foreach ($images as $img){
	$tab=explode("/",$img);
	$image=$tab[sizeof($tab)-1];	
	if (!is_file("template/images/header/thumbs/1400/$image")){ // S'il faut créer les images

	
	// Création de l'image "mini-micro"
		$i=480;include ("template/images/header/thumbs/img.php");
		$i=420;include ("template/images/header/thumbs/img.php");		
		$i=360;include ("template/images/header/thumbs/img.php");	
	
	// Création de l'image "Header"
	for ($i=1400;$i>=300;$i=$i-50){
			include ("template/images/header/thumbs/img.php");
	}
	$fait++;
	echo '<br>Traité: '.$image;
	if ($fait>$max) break;
	}
}
?>