<?php
// Nom du fichier de base
$index['fr']="credit-personnel";
$index['al']="kredi-online";
$index['de']="kredit-in-der-schweiz";
$index['en']="credit-in-switzerland";
$index['es']="credito-bancario";
$index['it']="credito-in-svizzera";
$index['pl']="kredyt";
$index['pt']="credito-pessoal-na-suica";
$index['sbc']="privatni-krediti";
$index['tr']="kredi";

// Action
$taction=array();
$taction['fr']="Demande en ligne <span>rapide confidentiel</span>";
$taction['al']="Online Aplikimi <span>pa pagesë dhe konfidenciale</span>";
$taction['de']="Online-Anfrage <span>kostenlos und vertraulich</span>";
$taction['en']="Online request <span>quick and confidential</span>";
$taction['es']="Aplicación en línea <span>gratis y confidencial</span>";
$taction['it']="Richiesta online <span>gratuita e confidenziale</span>";
$taction['pl']="Aplikacja online <span>bezpłatne i poufne</span>";
$taction['pt']="Pedido online <span>gratuito e confidencial</span>";
$taction['sbc']="Online prijava <span>slobodni i povjerljivi</span>";
$taction['tr']="Online başvuru <span>ücretsiz ve gizli</span>";

// On récupère le nom du fichier 
if ($image==""){
	$tab=explode("?", $_SERVER["REQUEST_URI"]);
	$tab=explode("/",$tab[0]);
	$tab=array_values(array_filter($tab));
	if (sizeof($tab)==1) $image=$index[$lang];
	else $image=$tab[sizeof($tab)-1];
}
$accents=accents($lang);
$affiche=ucfirst(str_replace($accents['from'], $accents['to'], $image));$affiche=str_replace("-", " ", $affiche);
if ($alt!="") $affiche=$alt;
$image.=".jpg";
?>
<div id="img">
	<img id="mainimg"
	src="/template/images/header/<?php echo $image;?>"
	srcset="/template/images/header/<?php echo $image;?> 1500w,<?php
	$base="/template/images/header/thumbs/";
	for ($i=1400;$i>=300;$i=$i-50){
		echo $base."$i/$image $i"."w";
		if ($i!=300) echo ",";
	}?>"
	sizes="100vw" 	
	alt="<?php echo $affiche;?>">
	<div id="h1">
		<div id="h1d">
			<h1><?php echo $h1;?></h1>
			<?php if ($link!=""):?>
			<a class="bouton" id="h1b" href="<?php echo $link;?>"><?php echo $taction[$lang];?></a>
			<?php endif;?>
		</div>
	</div>
</div>

