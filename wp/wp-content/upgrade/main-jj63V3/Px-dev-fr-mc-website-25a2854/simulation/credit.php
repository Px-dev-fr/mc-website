<?php
$lang=$_POST['langue'];
include("traductions.php");

$type="prive";
if ($_POST['type']=="pme") $type="pme";

?>
<form id="cform" method="POST" action="<?php echo $_POST['lien'];?>">
	<input type="hidden" id="duree" name="duree" value="24">
	<?php if ($_POST['titre']=="oui"):?>
	<div class="element e0">
		<div><?php if ($type=="prive") echo $titre[$lang]."<br>3'000 - 300'000 Chf";else echo $titrepme[$lang]."<br>10'000 - 10'000'000 Chf";?></div>
	</div>
	<?php endif;?>
	<div class="element e1">
		<div class="titre"><?php echo $montant[$lang];?></div>
		<div class="value"><input type="text" name="montant" id="montant" value="10'000"><span class="label">CHF</span></div>
	</div>
	<div class="element e2">
		<div class="titre"><?php echo $duree[$lang];?></div>
		<div class="value choice">
		<div>12 <?php echo $mois[$lang];?></div>
		<div class="current">24 <?php echo $mois[$lang];?></div>
		<div>36 <?php echo $mois[$lang];?></div>
		<div>48 <?php echo $mois[$lang];?></div>
		<div>60 <?php echo $mois[$lang];?></div>
		<div>72 <?php echo $mois[$lang];?></div>
		<div>84 <?php echo $mois[$lang];?></div>
		</div>
	</div>
	<div class="element e3">
		<div class="titre"><?php echo $mensualite[$lang];?></div>
		<div class="value" id="mensualite"></div>
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
document.querySelectorAll(".choice")[0].addEventListener("click", function(){if (this.className=="value choice") this.className="value choice clicked";else this.className="value choice";});
document.getElementById("montant").addEventListener("keyup", function(){recalc();});
function recalc(){
var montant=parseFloat(document.getElementById("montant").value.replace(/[^0-9.]/g, ""));
var duree=document.querySelectorAll(".choice div.current")[0].innerHTML;
duree=parseFloat(duree.replace(/[^0-9.]/g, ""));
var taux=6.9;
<?php if ($type=="pme") echo 'taux=3;';?>
var taux_e=Math.pow(1+taux/100,1/12)-1;
var facture=montant*((taux_e)/(1-(Math.pow((1+(taux_e)),-duree))));
var mensualite=parseInt(facture);var interet=parseInt(duree*facture-montant);
document.getElementById('mensualite').innerHTML=nombre(mensualite)+' CHF';	
}
function nombre(valeur){
var val_format=valeur+"";var nb=val_format.length;
for (var i=1; i<4; i++) if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
return val_format;
}
recalc();
</script>
