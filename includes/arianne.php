<?php
$arianne=Array();
$tab=explode("/",trim($_SERVER["REQUEST_URI"], "/"));
$n=1;
foreach ($tab as $adir){
	$n++;
	if ($n<3) continue;
	$affiche=ucfirst(str_replace($accents['from'], $accents['to'], $adir));$affiche=str_replace("-", " ", $affiche);
	if ($nadir!="") $nadir.="/";
	$nadir.=$adir;
	$nadir=rtrim($nadir);
	$html.= '
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				 › 
				 <a itemtype="https://schema.org/Thing" href="/'.$lang.'/'.$nadir.'" itemprop="item"><span itemprop="name">'.$affiche.'</span></a>
				<meta itemprop="position" content="'.($n-1).'"/>
			</li>
			';
}
?>
<?php if ($html!=""):?>
<ol itemscope itemtype="https://schema.org/BreadcrumbList" id="an" class="pm">
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<a itemtype="https://schema.org/Thing" href="/" itemprop="item">
			<span itemprop="name"><?php echo strtoupper($lang);?></span>
		</a>
		<meta itemprop="position" content="1"/>
	</li>
	<?php echo $html;?>
</ol>
<?php endif;?>