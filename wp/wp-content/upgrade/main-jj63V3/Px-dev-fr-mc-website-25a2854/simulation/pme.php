<?php
$lang=$_POST['langue'];
include("traductions.php");
?>
<form id="cform" method="POST" action="<?php echo $_POST['lien'];?>">
	<div class="element e1">
		<div class="titre">&nbsp;</div>
		<div class="value choice">
			<div class="current"><?php echo $besoin[$lang];?></div>
			<?php foreach ($besoins[$lang] as $element){echo '<div>'.$element.'</div>';}?>
		</div>
	</div>	
	<div class="element e2">
		<p style="padding:0 15px;"><?php echo $listepme[$lang];?></p>
	</div>
	<div class="element e3">
		<p style="padding:0 15px;"><?php echo $specialiste[$lang];?></p>
	</div>			
	<input type="submit" class="element e4" value="<?php echo $send[$lang];?>">
</form>
<script>
var choices = document.querySelectorAll(".choice div");
for (var i=0; i<choices.length; i++) {
	choices[i].addEventListener("click", function(){
		for (var j=0; j<choices.length; j++) choices[j].className="";
		this.className="current";
		document.getElementById("duree").value=this.innerHTML;
		recalc();
	});
}
document.querySelectorAll(".choice")[0].addEventListener("click", function(){
	if (this.className=="value choice") this.className="value choice clicked";
	else this.className="value choice";	
});
</script>