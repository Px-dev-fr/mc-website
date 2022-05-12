<?php
$tab=explode("/", $page);
$typemenu="prives";
if ($tab[1]=="pme") $typemenu="pme";
if ($tab[1]=="independants") $typemenu="independants";

$smenu=array();
if ($typemenu=="prives") $smenu[$tab[1]]="b";
else $smenu[$tab[2]]="b";

?>
<?php if ($nomenu===true):?>
<div id="mtl"><a href="/fr">HOME</a></div>

<?php else:?>
<div id="mtl">
	<a href="/fr/prives" <?php if ($typemenu=="prives") echo 'class="b"';?>>Privés</a>
	<a href="/fr/independants" <?php if ($typemenu=="independants") echo 'class="b"';?>>Indépendants</a>
	<a href="/fr/pme" <?php if ($typemenu=="pme") echo 'class="b"';?>>PME</a>
</div>
<?php endif;?>
