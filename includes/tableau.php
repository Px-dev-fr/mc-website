<script>

document.getElementById("tabmont").addEventListener("keyup", rec);

function nombre(valeur){
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1; i<4; i++)
		if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
	return val_format;
}

function rec(){
	var cells = document.querySelectorAll(".mens");
	for (var i = 0; i < cells.length; i++) {
		var cell=cells[i];
		var duree=parseInt(cell.getAttribute("data-duree"));
		var taux=parseFloat(cell.getAttribute("data-taux"));
		var montant_txt=document.getElementById("tabmont").value.replace(/[^0-9.]/g, "");
		var montant=parseInt(montant_txt);		
		var taux_e=Math.pow(1+taux/100,1/12)-1;
		var facture=montant*((taux_e)/(1-(Math.pow((1+(taux_e)),-duree))));
		var fmensualite=parseInt(facture);
		var interet=parseInt(10*duree*facture-montant);
		interet=parseFloat(interet/10);
		
		if (isNaN(interet)){
			cell.innerHTML="";
		}
		else{
			cell.innerHTML=nombre(fmensualite)+'.-';
		}
	}

}
rec();
 
</script>