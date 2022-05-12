<?php
$lang=$_POST['langue'];

$titre=Array(
"fr"=>"Coût de votre maison",
"de"=>"Kosten Ihres Hauses",
"en"=>"Cost of your house",
"pt"=>"Custo da sua casa"
);

$texte=Array(
"fr"=>"Evaluez le coût de construction:",
"de"=>"Baukosten abschätzen:",
"en"=>"Estimate the cost of building",
"pt"=>"Avalie o custo da construção"
);

$terrain=Array(
"fr"=>"Prix terrain<br><i>Prix au m²</i>",
"de"=>"Grundstückpreis<br><i>Preis pro m²</i>",
"en"=>"Land price<br><i>per m²</i>",
"pt"=>"Preço terreno<br><i>Preço por m²</i>"
);

$surface=Array(
"fr"=>"Terrain<br><i>Surface en m²</i>",
"de"=>"Fläche<br><i>in m²</i>",
"en"=>"Land<br><i>in m²</i>",
"pt"=>"Terreno<br><i>Superfície em m²</i>"
);

$surface_sol=Array(
"fr"=>"Construction<br><i>Surface au sol en m²</i>",
"de"=>"Bau<br><i>Bodenfläche in m²</i>",
"en"=>"Construction<br><i>floor surface (m²)</i>",
"pt"=>"Construção<br><i>Superfície do solo em m²</i>"
);

$etages=Array(
"fr"=>"Etages<br><i>Sous-sol non-compris</i>",
"de"=>"Stockwerke<br><i>Exklusive Untergeschoss</i>",
"en"=>"Floors<br><i>Basement not included</i>",
"pt"=>"Pisos<br><i>Subsolo não-incluído</i>"
);

$cout=Array(
"fr"=>"Sans sous-sol<br><i>Estimation dès</i>",
"de"=>"Ohne Untergeschoss<br><i>Schätzung</i>",
"en"=>"Without basement<br><i>Estimation from</i>",
"pt"=>"Sem subsolo<br><i>Estimativa desde</i>"
);

$coutss=Array(
"fr"=>"Avec sous-sol<br><i>Estimation dès</i>",
"de"=>"Mit Untergeschoss<br><i>Schätzung</i>",
"en"=>"With basement<br><i>Estimation from</i>",
"pt"=>"Com subsolo<br><i>Estimativa desde</i>"
);

$rez=Array(
"fr"=>"Rez + 1er",
"de"=>"UG + 1. Stock",
"en"=>"Ground + 1st",
"pt"=>"Rés-do-chão + 1°"
);

$bouton['fr']='Offre gratuite';
$bouton['en']='Free offer';
$bouton['de']='kostenlose Angebot';
$bouton['pt']='Oferta gratuita';

// Join CSS
if ($_POST['css']!="") {
	$join_css="$('head').append('<link type=\"text/css\" rel=\"stylesheet\" href=\"https://www.multicredit.ch/simulateur/style.css\"/>');";
	$join_css.="$('head').append('<link type=\"text/css\" rel=\"stylesheet\" href=\"https://www.multicredit.ch/simulateur/css/".$_POST['css']."\"/>');";
	
}

?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<h2><?php echo $titre[$lang];?></h2>

<form action="<?php echo $_POST['lien'];?>" method="post" id="credit_simulator" class="hypotheque" style="opacity:0;">
	<div class="presentation">
		<?php echo $texte[$langue];?>
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $terrain[$lang];?>:</div>
		<div class="value" id="terrain-value">
			<input type="text" class="value" name="terrain" id="terrain" data-slider="true" data-slider-range="150,3000" data-slider-step="10" value="500">
			<span id="terrain-span" style="margin-left:0%;">500 Chf / m²</span>
		</div>
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $surface[$lang];?>:</div>
		<div class="value"  id="surface-value">
			<input type="text" class="value" name="surface" id="surface" data-slider="true" data-slider-range="80, 1000" data-slider-step="10" value="150">
			<span id="surface-span" style="margin-left:-7%;">150 m²</span>
		</div>		
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $surface_sol[$lang];?>:</div>
		<div class="value" id="surface_sol-value">
			<input type="text" class="value" name="surface_sol" id="surface_sol" data-slider="true" data-slider-range="60, 800" data-slider-step="10" value="120">
			<span id="surface_sol-span" tyle="margin-left:25%;">120 m²</span>
		</div>
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $etages[$lang];?>:</div>
		<div class="value" id="etages-value">
			<input type="text" class="value" name="etages" id="etages" data-slider="true" data-slider-range="1, 3" data-slider-step="1" value="2">
			<span id="etages-span" tyle="margin-left:25%;"><?php echo $rez[$lang];?></span>
		</div>
	</div>
	<hr>
	<br/>
	<div class="colonne resume">

		<div class="titre">
		<?php echo $cout[$lang];?>:			
		</div>
		<div class="value">
			<span id="cout"></span>
		</div>
		<div class="titre" style="clear:both;">
		<?php echo $coutss[$lang];?>:		
		</div>
		<div class="value">
			<span id="coutss"></span>
		</div>
	</div>
	<input type="submit" value="<?php echo $bouton[$lang];?>"/>
</form>
<div style="clear:both;">&nbsp;</div>

<script type="text/javascript">
<?php echo $join_css;?>

function jload() {
	if (typeof jQuery == 'undefined') {loadScript("https://code.jquery.com/jquery-3.0.0.min.js", function() {startJquery();});}
	else {startJquery();}
	};
	
function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function recalc(){
	var terrain=parseFloat($("#terrain").val());
	var surface=parseFloat($("#surface").val());
	var surface_sol=parseFloat($("#surface_sol").val());
	var etages=parseFloat($("#etages").val());
	
	var prix_terrain=(terrain*surface*1.6);
	var prix_construction=(surface_sol*2850);
	if (etages==2) prix_construction*=1.6;
	if (etages==3) prix_construction*=2.2;
	
	var prix_ss=(surface_sol*1050);
	
	var prix_total=10000*parseInt((prix_terrain+prix_construction)/10000);
	var prix_total_ss=10000*parseInt((prix_terrain+prix_construction+prix_ss)/10000);
	
	$("#cout").html(addCommas(prix_total)+" Chf");
	$("#coutss").html(addCommas(prix_total_ss)+" Chf");
	
	}

function slider_valeur(e){
	var min=$("#terrain-value").offset().left;
	var l=$("#terrain-value").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#terrain').simpleSlider("setRatio", x);
	recalc();
}
	
function slider_surface(e){
	var min=$("#surface-value").offset().left;
	var l=$("#surface-value").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#surface').simpleSlider("setRatio", x);
	recalc();
}	

	
function slider_taux(e){
	var min=$("#taux-value").offset().left;
	var l=$("#taux-value").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#taux').simpleSlider("setRatio", x);
	recalc();
}		
	

function startJquery(){	

	$.getScript("https://www.multicredit.ch/formulaires/jslider/js/simple-slider.js");

	$("#terrain").bind("slider:changed", function (event, data) {
		document.getElementById('terrain-span').innerHTML=data.value+" Chf / m²";
		recalc();});	

	$("#surface").bind("slider:changed", function (event, data) {
		document.getElementById('surface-span').innerHTML=data.value+" m²";
		recalc();});
		
	$("#surface_sol").bind("slider:changed", function (event, data) {
		document.getElementById('surface_sol-span').innerHTML=data.value+" m²";
		recalc();});
		
	$("#etages").bind("slider:changed", function (event, data) {
		if (data.value==1) document.getElementById('etages-span').innerHTML="Rez";
		if (data.value==2) document.getElementById('etages-span').innerHTML="Rez +1er";
		if (data.value==3) document.getElementById('etages-span').innerHTML="Rez +1er +2me";
		recalc();});	



	document.getElementById('terrain-value').addEventListener("touchmove", slider_valeur, false);
	document.getElementById('terrain-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}

	document.getElementById('surface-value').addEventListener("touchmove", slider_surface, false);
	document.getElementById('surface-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}

	document.getElementById('surface_sol-value').addEventListener("touchmove", slider_taux, false);
	document.getElementById('surface_sol-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	
	document.getElementById('etages-value').addEventListener("touchmove", slider_taux, false);
	document.getElementById('etages-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );	
	
	$("#credit_simulator").fadeTo(100, 1);
	}

function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}
setTimeout(function() {jload();}, 100);
recalc();
</script>