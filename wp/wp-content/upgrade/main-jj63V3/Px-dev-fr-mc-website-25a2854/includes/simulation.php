<script>
var montants=new Array(2000,3000,4000,5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,16000,17000,18000,19000,20000,21000,22000,23000,24000,25000,26000,27000, 28000,29000, 30000,35000,40000,45000,50000,55000,60000,65000,70000,75000,80000,85000,90000,95000,100000,110000,120000,130000,140000,150000,160000,170000,180000,190000,200000,210000,220000,230000,240000,250000, 300000);
function rec(){
	
	var montant_txt=document.getElementById("simontant").value.replace(/[^0-9.]/g, "");
	var montant=parseInt(montant_txt);
	var duree_txt=document.getElementById("siduree").value.replace(/[^0-9.]/g, "");
	var duree=parseInt(duree_txt);		
	var taux_txt=document.getElementById("taux").value.replace(/[^0-9.]/g, "");
	var taux=parseFloat(taux_txt);
	var taux_e=Math.pow(1+taux/100,1/12)-1;
	var facture=montant*((taux_e)/(1-(Math.pow((1+(taux_e)),-duree))));
	var fmensualite=parseInt(facture);
	var interet=parseInt(duree*facture-montant);
	if (isNaN(interet)){
		document.getElementById('interet').innerHTML="";
		document.getElementById('fmensualite').innerHTML="";
	}
	else{
		document.getElementById('interet').innerHTML=nombre(interet)+'.-';
		document.getElementById('fmensualite').innerHTML=nombre(fmensualite)+'.-';
	}
}
rec();
function nombre(valeur){
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1; i<4; i++)
		if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
	return val_format;
}
var inputs = document.querySelectorAll(".input > *:first-child");
for (var i=0;i<inputs.length;i++){
	inputs[i].addEventListener("change", function(){rec();});
	inputs[i].addEventListener("keyup", function(){rec();});
	inputs[i].addEventListener("keydown", function(){rec();});
	inputs[i].addEventListener("click", function(){rec();});
}
</script>