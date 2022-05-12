<?php
@header('Content-Type: text/html; charset=utf-8');
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')) ob_start("ob_gzhandler"); else ob_start();
$langue=$_POST['langue'];
if ($langue=='') $langue='fr';

//Join CSS
if ($_POST['css']!=""){
	$join_css="jQuery('head').append('<link type=\"text/css\" rel=\"stylesheet\" href=\"https://www.multicredit.ch/simulateur/style.css\"/>');";
	if ($_POST['css']!="none") $join_css.="jQuery('head').append('<link type=\"text/css\" rel=\"stylesheet\" href=\"https://www.multicredit.ch/simulateur/css/".$_POST['css']."\"/>');";
}

$lien=$_POST['lien'];
include("traductions.php");
$texte['fr']="Crédit de 3'000-250'000 Chf. Offre rapide sans obligation.";
$texte['en']="Get a loan from <b>3'000 to 250'000 Chf</b>. Non-binding offer.";
$texte['pt']="Crédito de <b>3'000-250'000 Chf</b>. Oferta gratuita sem obrigações.";
$texte['al']="Kredi nga <b>3'000-250'000 Chf</b>.";
$texte['de']="Kredit von <b>3'000-250'000 Chf</b>.";
$texte['it']="Offerta gratuita: <b>3'000-250'000 Chf</b>.";
$texte['es']="Oferta gratuita: <b>3'000-250'000 Chf</b>.";
$texte['sbc']="Besplatna ponuda: <b>3'000-250'000 Chf</b>.";
$texte['pl']="Darmowa oferta: <b>3'000-250'000 Chf</b>.";
$texte['tr']="3000 ile 250'000 isviçre frangı arası krediye.";
?>
<form action="<?php echo $lien;?>" method="post" id="credit_simulator" style="opacity:0;">
<div class="presentation"><?php echo $texte[$langue];?></div>
<div class="block-slider" id="montant-slider">
<span><?php echo $montant[$langue];?></span>
<div class="slider"><input type="text" id="montant-track" data-slider="true"  data-slider-range="0,61" data-slider-step="1" value="8"/></div>
<div class="textinfos"><input type="text" id="montant" name="montant"  value="10'000"/>Chf</div>
</div>
<div class="block-slider" id="duree-slider">
<span><?php echo $duree[$langue];?></span>
<div class="slider"><input type="text" data-slider="true" id="duree-track" data-slider-range="12,84" data-slider-step="12" value="12"/></div>
<div class="textinfos"><input type="text" id="duree-span" name="duree" value="12"/><?php echo $mois[$langue];?></div>
</div>
<div class="block_info"><span><?php echo $mensualite[$langue];?>:</span><input type="text" readonly id="mensualite"/></div>
<div class="block_info"><span><?php echo $interet[$langue];?>:</span><input type="text" readonly id="interet"/></div>
<input type="hidden" name="lang" value="<?php echo $langue;?>"/>
<input type="submit" value="<?php echo $send[$langue];?>" onclick="document.getElementById('multicreditform').submit();"/>
</form>
<script type="text/javascript" id="myscript">
function loadScript(url,callback){
	var script=document.createElement("script")
	script.type="text/javascript";
	if (script.readyState){
		script.onreadystatechange=function(){
			if (script.readyState=="loaded" || script.readyState=="complete"){
				script.onreadystatechange=null;
				callback();
			}
		};
	} else{script.onload=function(){callback();};}
    script.src=url;
    document.getElementsByTagName("head")[0].appendChild(script);
}
function jload(){
	if (typeof jQuery=='undefined'){loadScript("https://code.jquery.com/jquery-3.0.0.min.js",function(){startJquery();});}
	else{startJquery();}
	};
function startJquery(){
	<?php echo $join_css;?>
	jQuery.getScript("https://www.multicredit.ch/simulateur/jslider/js/simple-slider.min.js",function(data,textStatus,jqxhr){jQuery("#duree-track").bind("slider:ready",function(event,data){recalc();})});
	jQuery("#montant-track").bind("slider:changed",function(event,data){
		document.getElementById('montant-track').value=[data.value];
		document.getElementById('montant').value=nombre(montants[data.value]);
		recalc();
	});
	jQuery("#duree-track").bind("slider:changed",function(event,data){
		document.getElementById('duree-track').value=data.value;
		document.getElementById('duree-span').value=data.value;
		recalc();
	});
	setTimeout(function(){jQuery("#credit_simulator").fadeTo(100,1);},500);
    }
setTimeout(function(){jload();},100);
var montants=new Array(2000,3000,4000,5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000,16000,17000,18000,19000,20000,21000,22000,23000,24000,25000,26000,28000,30000,32000,34000,36000,38000,40000,42000,44000,46000,48000,50000,55000,60000,65000,70000,75000,80000,85000,90000,95000,100000,110000,120000,130000,140000,150000,160000,170000,180000,190000,200000,210000,220000,230000,240000,250000);
function recalc(){
	var montant=parseInt(montants[document.getElementById('montant-track').value]);
	var duree=parseInt(document.getElementById('duree-track').value);
	var taux=7.9;
	var taux_e=Math.pow(1+taux/100,1/12)-1;
	var facture=montant*((taux_e)/(1-(Math.pow((1+(taux_e)),-duree))));
	var mensualite=parseInt(facture);
	var interet=parseInt(duree*facture-montant);
	document.getElementById('interet').value=nombre(interet)+'.-';
	document.getElementById('mensualite').value=nombre(mensualite)+'.-';
}
function nombre(valeur){
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1; i<4; i++)
		if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
	return val_format;
}
function slider_montant(e){
	var min=jQuery("#montant-slider").offset().left;
	var l=jQuery("#montant-slider").width();
	var touch=e.touches[0];
	var scrX=touch.pageX;
	var x=touch.pageX-min;
	var values=montants.length;
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	jQuery('#montant-track').simpleSlider("setRatio",x);
	check();
}
function slider_duree(e){
	var min=jQuery("#duree-slider").offset().left;
	var l=jQuery("#duree-slider").width();
	var touch=e.touches[0];
	var scrX=touch.pageX;
	var x=touch.pageX-min;
	var values=montants.length;
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	jQuery('#duree-track').simpleSlider("setRatio",x);
	check();
}
document.getElementById('montant-slider').addEventListener("touchmove",slider_montant,false);
document.getElementById('montant-slider').addEventListener("touchstart",function(e){onStart(e);},false);
function onStart(touchEvent){if (navigator.userAgent.match(/Android/i)) touchEvent.preventDefault();}
document.getElementById('duree-slider').addEventListener("touchmove",slider_duree,false);
document.getElementById('duree-slider').addEventListener("touchstart",function(e){onStart(e);},false);
function onStart(touchEvent){if (navigator.userAgent.match(/Android/i)){touchEvent.preventDefault();}}
recalc();
</script>