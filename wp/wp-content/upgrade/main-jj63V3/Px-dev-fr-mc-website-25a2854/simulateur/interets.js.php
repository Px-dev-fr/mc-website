<?php
$montant_track="montant-track-slider";
$duree_track="duree-track";
$div_id="interets-courbe";
$tab_id="interets-tableau";
$l=520;
$h=300;
$lang='fr';

// On récupère les infos en post
if (isset($_GET['montant-track'])) $montant_track=$_GET['montant-track'];
if (isset($_GET['duree-track'])) $duree_track=$_GET['duree-track'];
if (isset($_GET['lang'])) $lang=$_GET['lang'];

// Traductions
$d_capital['fr']="Capital remboursé";
$d_int['fr']="Intérêt payé";
$d_mens['fr']="Mensualité fixe";
$d_an['fr']="an";
$d_ans['fr']="ans";
?>
var d_interets=9.95;
if (!d_montant) var d_montant=10000;
if (!d_duree) var d_duree=12;
var d_taux=9.95;
var l=<?php echo $l;?>;
var h=<?php echo $h;?>;
var oh=Math.pow(d_montant/500000, 1/7)*h;
var tab=new Array();
if (document.getElementById("<?php echo $div_id;?>"))
	{
	var c = document.getElementById("<?php echo $div_id;?>");
	var ctx = c.getContext("2d");
	}

dessine();
tableau();
	
// FONCTIONS
function amortissement()
	{
	// Talcul du taux équivalent (mensuel)
	d_taux_e=Math.pow(1+d_taux/100, 1/12) -1;
	rang=new Array();
	annuite=new Array();
	interet=new Array();
	capital=new Array();
	solde=new Array();
	
	// Calcul de la 1ère ligne
	rang[0]=1;
	annuite[0]=d_montant*((d_taux_e) / (1- (Math.pow((1+(d_taux_e)), - d_duree))));
	interet[0]=d_montant*d_taux_e;
	capital[0]=annuite[0]-interet[0];
	solde[0]=d_montant-capital[0];
	
	for (i=1; i<d_duree;i++)
		{
		rang[i]=i+1;
		annuite[i]=annuite[0];
		interet[i]=solde[i-1]*d_taux_e;
		capital[i]=annuite[i]-interet[i];
		solde[i]=solde[i-1]-capital[i];
		//document.write("<br"+interet[i]);
		}
	var tab=new Array(rang, annuite, interet, capital, solde);
	return tab;
	}
	
function tableau()
	{
	if (!document.getElementById("<?php echo $tab_id;?>")) return false;
	// Calcul de l'amortissement
	tab=amortissement();
	
	var html='<tr><td colspan="'+(2+parseInt(tab[0].length/12))+'">Intérêts compris dans votre mensualité fixe de '+parseInt(tab[1][0])+' Chf</td></tr>';
	html+='<tr><td>Mois</td>';
	for (var an=0;an<parseInt(tab[0].length/12);an++)
		{
		html+='<td>Année '+(an+1)+'</td>';
		}
	html+='</tr>';
	for (var i=0;i<12;i++)
		{
		html+='<tr><td>'+(i+1)+'</td>';
		for (var an=0;an<parseInt(tab[0].length/12);an++)
			{
			html+='<td>'+parseInt(tab[2][i+an*12])+'.-</td>';
			}
		html+='</tr>';
		}
		
		
	document.getElementById("<?php echo $tab_id;?>").innerHTML=html;
	}
	
function dessine()
	{
	if (!document.getElementById("<?php echo $div_id;?>")) return false;
	oh=Math.pow(d_montant/500000, 1/7)*h;
	
	// Calcul de l'amortissement
	tab=amortissement();
	// On ré-initialise
	ctx.beginPath(); 
	ctx.clearRect(0, 0, l, h);

	// Remplissage du capital
	ctx.beginPath();
	ctx.globalAlpha = 0.5;
	ctx.fillStyle = '#88AAFF';
	ctx.moveTo(tox(0),toy(0));
	ctx.lineTo(tox(0),toy(100));
	ctx.lineTo(tox(100),toy(100));
	ctx.lineTo(tox(100),toy(0));
	ctx.fill();
	ctx.globalAlpha = 1;
	ctx.fillStyle = 'black';
	
	// Ligne des annuités
	ctx.beginPath();
	ctx.lineWidth=2;
	ctx.strokeStyle= '#307124';
	ctx.moveTo(tox(0), toy(0));
	ctx.lineTo(tox(100), toy(0));
	ctx.stroke();
	ctx.strokeStyle= 'black';
	ctx.lineWidth=1;
	ctx.fillText("<?php echo $d_mens[$lang];?>: "+parseInt(tab[1][0])+" Chf", tox(100)-120,toy(0)-10);
	
	//Ligne de séparation et intérêts payés dessous
	ctx.beginPath(); 
	ctx.fillStyle = '#CC7700';
	ctx.strokeStyle = '#CC7700';
	ctx.lineWidth=2;
	var annuite=tab[1][0];
	var interet=tab[2][0];
	ctx.moveTo(tox(0),toy(y));
	ctx.beginPath();
	for (i=0;i<tab[0].length;i++)
		{
		var annuite=tab[1][i];
		var interet=tab[2][i];
		var y=100-100*interet/annuite;
		ctx.lineTo(tox(i*100/d_duree),toy(y));
		}
	ctx.lineTo(tox(100), toy(100));
	ctx.lineTo(tox(0), toy(100));
	ctx.stroke();
	ctx.lineWidth=1;
	ctx.globalAlpha = 0.7;
	ctx.fill();
	ctx.globalAlpha = 1;
	ctx.fillStyle = 'black';
	ctx.strokeStyle = 'black';
	
	// Axe x
	ctx.beginPath(); 
	ctx.moveTo(tox(0),toy(100));ctx.lineTo(tox(102),toy(100));
	ctx.moveTo(tox(102),toy(100));ctx.lineTo(tox(102)-10,toy(100)+10);
	ctx.moveTo(tox(102),toy(100));ctx.lineTo(tox(102)-10,toy(100)-10);
	ctx.stroke();
	ctx.strokeStyle="black";
	
	// Grille x
	var an="<?php echo $d_an[$lang];?>";
	for (d=12;d<d_duree;d=d+12) {
		ctx.beginPath(); 
		ctx.strokeStyle= "#777777";
		ctx.moveTo(tox(d*100/d_duree),toy(0)-10);
		ctx.lineTo(tox(d*100/d_duree),toy(100)+10);
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle= "black";
		ctx.fillText(+parseInt(d/12)+an, tox(d*100/d_duree)-10,toyo(105));
		if (d==12) an="<?php echo $d_ans[$lang];?>"
		} 
	ctx.fillText(parseInt(d_duree/12)+" ans", tox(100)-20,toyo(105));
	ctx.stroke();
	
	// Axe y
	ctx.beginPath(); 
	ctx.moveTo(tox(0),toyo(-2));ctx.lineTo(tox(0),toyo(100));
	ctx.moveTo(tox(0),toyo(-2));ctx.lineTo(tox(0)-10,toyo(-2)+10);
	ctx.moveTo(tox(0),toyo(-2));ctx.lineTo(tox(0)+10,toyo(-2)+10);
	ctx.stroke();
	
	// Grille y
	var annuite=tab[1][0];
	var quart=annuite/4;
	quart=50*parseInt(quart/50);
	if (quart<50) quart=20*parseInt(annuite/(4*20));
	if (quart<20) quart=parseInt(annuite/(4*1));
	for (i=1;i<5;i++) if (quart*i*1.05<annuite){
		ctx.beginPath(); 
		ctx.strokeStyle= "#777777";
		var co=100-100*quart*i/annuite;
		ctx.moveTo(tox(-1),toy(co));
		ctx.lineTo(tox(1),toy(co));
		ctx.stroke();
		ctx.beginPath();
		ctx.strokeStyle= "black";
		ctx.fillText((quart*i)+" Chf", tox(0)+15,toy(co)+5);
		} 
		
	// Légende
	ctx.fillStyle="#88AAFF";
	ctx.beginPath();
	ctx.fillText("<?php echo $d_capital[$lang];?>", tox(6), 10);
	
	ctx.fillStyle="#CC7700";
	ctx.beginPath(); 
	ctx.fillText("<?php echo $d_int[$lang];?>", tox(70), 10);
	}
	
function tox(x){return (x*l*0.009)+(l/15);}
function toy(y){return (y*oh*0.009)+(0.9*(h-oh))+h/20;}
function toyo(y){return (y*h*0.009)+(h/20);}

/*
$( "#interets-legende" ).mouseout(function(e) {document.getElementById('interets-tooltip').style.display="none";});
$( "#interets-legende" ).mousemove(function(e) {
      var x = e.pageX - this.offsetLeft;
      var y = e.pageY - this.offsetTop;
	  document.getElementById('interets-tooltip').style.display="block";
	  document.getElementById('interets-tooltip').style.marginLeft=x+"px";
	  document.getElementById('interets-tooltip').style.marginTop=y+"px";
	  
	  x=x-l*0.075;
	  x=parseInt(1+x*d_duree/(l*0.9));
	  var d=1;
	  if (x<1) d=0;
	  if (x>d_duree) d=0;
	  if (d==0)
	  document.getElementById('interets-tooltip').style.display="none";
	  else  document.getElementById('interets-tooltip').style.display="block";
	  if (x<0) document.getElementById('interets-tooltip').style.display="none";
	  var html="<table class='d_tooltip'><tr><td style='text-align:center!important;text-decoration:underline;'>Mois "+x+"</td></tr><tr><td>Mensualité:</td><td>"+parseInt(tab[1][x-1])+".-</td></tr><tr><td>Intérêt:</td><td>"+parseInt(tab[2][x-1])+".-</td></tr><tr><td>Capital:</td><td>"+parseInt(tab[3][x-1])+".-</td></tr></table>";
	  document.getElementById('interets-tooltip').innerHTML=html;
	  
});
*/
$("#<?php echo $montant_track;?>").bind("slider:changed", function (event, data) {
	d_montant=montants[data.value];
	dessine();
	tableau();
});

$("#<?php echo $duree_track;?>").bind("slider:changed", function (event, data) {
	d_duree=data.value;
	dessine();
	tableau();
	});
	
$("#montant-span").change(function(){alert('h');});


$( ".dragger" ).live( "mouseup", function() {
	d_montant=$("#montant").val().replace(/\D/g,'');
	d_duree=$("#duree-span").val().replace(/\D/g,'');
	dessine();
	tableau();	
});