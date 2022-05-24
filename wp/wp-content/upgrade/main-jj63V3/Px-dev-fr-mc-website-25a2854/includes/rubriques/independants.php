<?php
// Action
$taction=array();
$taction['fr']="Demande en ligne <span>rapide confidentiel</span>";
$taction['al']="Online Aplikimi <span>pa pagesë dhe konfidenciale</span>";
$taction['de']="Online-Anfrage <span>schnell und vertraulich</span>";
$taction['en']="Online request <span>quick and confidential</span>";
$taction['es']="Aplicación en línea <span>gratis y confidencial</span>";
$taction['it']="Richiesta online <span>gratuita e confidenziale</span>";
$taction['pl']="Aplikacja online <span>bezpłatne i poufne</span>";
$taction['pt']="Pedido online <span>gratuito e confidencial</span>";
$taction['sbc']="Online prijava <span>slobodni i povjerljivi</span>";
$taction['tr']="Çevrimiçi başvuru <span>ücretsiz ve gizli</span>";
?>

<div id="rub">
	<img id="rubi" alt="<?php echo $alt;?>" src="/template/images/rubriques/independants/900.jpg"
	sizes="100w" srcset="/template/images/rubriques/independants/900.jpg 1800w, /template/images/rubriques/independants/700.jpg 1500w, /template/images/rubriques/independants/500.jpg 1100w, /template/images/rubriques/independants/300.jpg 700w, /template/images/rubriques/independants/200.jpg 450w"
	> 
	<div id="h1d" class="rubs" class="pm">
		<h1><?php echo $h1;?></h1>
		<a href="<?php echo $link;?>" class="bouton" id="rubb"><?php echo $taction[$lang];?></a>
	</div>
</div>