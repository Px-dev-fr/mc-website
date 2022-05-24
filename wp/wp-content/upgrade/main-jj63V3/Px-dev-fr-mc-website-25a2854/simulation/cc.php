<?php
$lang=$_POST['langue'];
include("traductions.php");
?>
<form id="cform" method="POST" action="<?php echo $_POST['lien'];?>">
	<div class="element e1">
		<p style="padding:0 15px;"><?php echo $carte[$lang][0];?></p>
	</div>
	<div class="element e2">
		<p style="padding:0 15px;"><?php echo $carte[$lang][1];?></p>
	</div>
	<div class="element e3">
		<p style="padding:0 15px;"><?php echo $carte[$lang][2];?></p>
	</div>	
	<input type="submit" class="element e4" value="<?php echo $send[$lang];?>">
</form>