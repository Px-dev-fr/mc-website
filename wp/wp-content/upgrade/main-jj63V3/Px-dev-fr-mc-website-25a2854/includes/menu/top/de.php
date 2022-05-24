<?php
$tab=explode("/", $page);
$typemenu="prives";
if ($tab[1]=="kmu") $typemenu="pme";
if ($tab[1]=="selbststandige") $typemenu="independants";
 
$smenu=array();
if ($typemenu=="prives") $smenu[$tab[1]]="b";
else $smenu[$tab[2]]="b";

?>
<?php if ($nomenu===true):?>
<div id="mtl"><a href="/de">HOME</a></div>

<?php else:?>
<div id="mtl">
	<a href="/de/privat" <?php if ($typemenu=="prives") echo 'class="b"';?>>Privat</a>
	<a href="/de/selbststandige" <?php if ($typemenu=="independants") echo 'class="b"';?>>Selbstständige</a>
	<a href="/de/kmu" <?php if ($typemenu=="pme") echo 'class="b"';?>>KMU</a>
</div>
<?php endif;?>