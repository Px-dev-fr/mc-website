<?php
$tab=explode("/", $page);
$typemenu="prives";
if ($tab[1]=="pmi") $typemenu="pme";

$smenu=array();
if ($typemenu=="prives") $smenu[$tab[1]]="b";
else $smenu[$tab[2]]="b";

?>
<?php if ($nomenu===true):?>
<div id="mtl"><a href="/it">HOME</a></div>

<?php else:?>
<div id="mtl">
	<a href="/it/privati" <?php if ($typemenu=="prives") echo 'class="b"';?>>Privati</a>
	<a href="/it/pmi" <?php if ($typemenu=="pme") echo 'class="b"';?>>PMI</a>
</div>
<?php endif;?>