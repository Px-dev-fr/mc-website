<?php
$lang=$_POST['langue'];
include("traductions.php");
?>
<form id="cform" method="POST" action="<?php echo $_POST['lien'];?>">
	<div class="element e1">
		<div class="titre"><?php echo $valeur[$lang];?></div>
		<div class="value"><input type="text" name="montant" id="montant" value="500'000"><span class="label">CHF</span></div>
	</div>
	<div class="element e2">
		<div class="titre"><?php echo $fonds[$lang];?></div>
		<div class="value"><input type="text" name="montant" id="montant" value="100'000"><span class="label">CHF</span></div>
	</div>
	<div class="element e3">
	<?php echo $prise[$lang];?>
	</div>
	<input type="submit" class="element e4" value="<?php echo $send[$lang];?>">
</form>