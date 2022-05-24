<?php
$lang=$_POST['langue'];
include("traductions.php");

?>

<form id="cform" method="POST" action="<?php echo $_POST['lien'];?>">
	<div class="element e1">
		<div class="titre"><?php echo $rachat[$lang];?></div>
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
		document.querySelectorAll(".choice")[0].className="value choice clicked";
		recalc();
	});
}
document.querySelectorAll(".choice")[0].addEventListener("mousemove", function(){
	this.className="value choice";
});


function recalc(){
	// Récupération montant et durée
	var montant=parseFloat(document.getElementById("montant").value.replace(/[^0-9.]/g, ""));
	var duree=document.querySelectorAll(".choice div.current")[0].innerHTML;
	duree=parseFloat(duree.replace(/[^0-9.]/g, ""));
	
	// Calcul
	var taux=7.9;
	var taux_e=Math.pow(1+taux/100,1/12)-1;
	var facture=montant*((taux_e)/(1-(Math.pow((1+(taux_e)),-duree))));
	var mensualite=parseInt(facture);
	var interet=parseInt(duree*facture-montant);
	document.getElementById('mensualite').innerHTML=nombre(mensualite)+' CHF';	
}

function nombre(valeur){
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1; i<4; i++) if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
	return val_format;
}

recalc();

</script>
