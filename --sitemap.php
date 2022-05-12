<?php if ($_GET['links']==""):?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php endif;?>
<?php
$basedir="pages";
$links=Array();

scan("pages");

$n=0;

function scan($dir){
	global $n;
	$elements=scandir($dir);
	foreach ($elements as $element)
		if ($element{0}!=".") // Pas de . et ..
		{
		if (is_dir($dir.'/'.$element)) scan($dir.'/'.$element); // Scan plus profond
		else{ // Fichier à ajouter
			$element=substr($element, 0, -4); // On enlève le .php
			if ($element=="index") $element="";
			if ($element=="test") continue;
			
			//if ($link=="") continue;
			$urldir=substr($dir, 6);
			$link=trim($urldir.'/'.$element, "/");
			$n++;
			if ($_GET['links']!="")
				echo PHP_EOL.'<br>'.$n.' : <a href="https://www.multicredit.ch/'.$link.'">'.$link.'</a>';
			else
			echo PHP_EOL.'<url><loc>https://www.multicredit.ch/'.$link.'</loc></url>';
			}
		}
	}
?>
<?php if ($_GET['links']==""):?>
</urlset>
<?php endif;?>