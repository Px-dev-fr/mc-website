<?php
$h1="";
$link="/'.$el.'";
$basedir="pages";
$links=Array();
scan("pages/de");
function scan($dir){
	$elements=scandir($dir);
	foreach ($elements as $element)
		if ($element{0}!=".") // Pas de . et ..
		{ 
		if (is_dir($dir.'/'.$element)) scan($dir.'/'.$element); // Scan plus profond
		else{ // Fichier à ajouter
			$tab=explode(".", $element);
			$element=$tab[0];
			if ($tab[1]=="txt") continue;
			if ($element=="index") $element="";
			$urldir=substr($dir, 6);
			$el='/'.$urldir.'/'.$element;
			$el=str_replace("//", "/", $el);
			$el=trim($el, "/");
			echo PHP_EOL.'<br><a href="/'.$el.'">/'.$el.'</a>';
			}
		}
	}
?>
