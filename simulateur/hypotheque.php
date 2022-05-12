<?php
$lang=$_POST['langue'];

$titre=Array(
"fr"=>"Votre hypothèque",
"en"=>"Your mortgage service",
"de"=>"Ihre Hypothek"
);

$texte=Array(
"fr"=>"Calculateur d'hypothèque:",
"en"=>"Mortgage calculator:",
"de"=>"Hypothek Offerte"
);

$valeur=Array(
"fr"=>"Valeur",
"en"=>"Value",
"de"=>"Objektwert"
);

$fonds=Array(
"fr"=>"Fonds propres",
"en"=>"Deposit",
"de"=>"Eigene Mittel"
);

$taux=Array(
"fr"=>"Taux d'intérêt",
"en"=>"Interest rate",
"de"=>"Zinssatz"
);

$charge=Array(
"fr"=>"Charge",
"en"=>"Mortgage",
"de"=>"Hypozins-Belastung"
);

$amortissement=Array(
"fr"=>"Amortissement 1%",
"en"=>"Amortization 1%",
"de"=>"Abschreibungen"
);

$frais=Array(
"fr"=>"Frais et charges",
"en"=>"Fees and costs",
"de"=>"Nebenkosten"
);

$total=Array(
"fr"=>"TOTAL MENSUEL",
"en"=>"MONTHLY TOTAL",
"de"=>"MONATLICHE"
);

$superieur=Array(
"fr"=>"Fonds propres > valeur du bien",
"en"=>"Deposit > Property value",
"de"=>"Eigene Mittel > Wert"
);

$bouton['fr']='Offre gratuite';
$bouton['en']='Free offer';
$bouton['de']='Kostenloses Angebot';

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
		<div class="titre"><?php echo $valeur[$lang];?>:</div>
		<div class="value" id="valeur-value">
			<input type="text" class="value" name="valeur" id="valeur" data-slider="true" data-slider-range="60000,3000000" data-slider-step="20000" value="500000">
			<span id="valeur-span" style="margin-left:0%;">500'000.-</span>
		</div>
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $fonds[$lang];?>:</div>
		<div class="value"  id="fonds-value">
			<input type="text" class="value" name="fonds" id="fonds" data-slider="true" data-slider-range="20000, 1500000" data-slider-step="10000" value="100000">
			<span id="fonds-span" style="margin-left:-7%;">100'000.-</span>
		</div>		
	</div>
	<div class="colonne">
		<div class="titre"><?php echo $taux[$lang];?>:</div>
		<div class="value" id="taux-value">
			<input type="text" class="value" name="taux" id="taux" data-slider="true" data-slider-range="0.5, 4" data-slider-step="0.05" value="1">
			<span id="taux-span" tyle="margin-left:25%;">1 %</span>
		</div>
	</div>
	<hr>
	<br/>
	<div class="colonne resume">

		<div class="titre">
		<?php echo $charge[$lang];?>:			
		</div>
		<div class="value">
			<span id="charge"></span>
		</div>
		<div class="titre">
		<?php echo $amortissement[$lang];?>:		
		</div>
		<div class="value">
			<span id="amortissement"></span>
		</div>	
		<div class="titre">
		<?php echo $frais[$lang];?>:		
		</div>
		<div class="value">
			<span id="entretien"></span>
		</div>	
		<div class="titre">
			<b><?php echo $total[$lang];?>:</b>
		</div>
		<div class="value">
			<span id="total" style="font-weight:bold;"></span>
		</div>	
	</div>
	<input type="submit" value="<?php echo $bouton[$lang];?>"/>
</form>

<script type="text/javascript" id="myScript">
<?php echo $join_css;?>


function nombre(valeur){
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1; i<4; i++)
		if (valeur >=Math.pow(10,(3*i))) val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
	return val_format;
}

function recalc(){
	var V=parseFloat(document.getElementById('valeur').value); // valeur Vénale
	var F= parseFloat(document.getElementById('fonds').value); // Fonds propres
	var r=parseFloat(document.getElementById('taux').value)/100; // Taux d'intérêt
	var charge=((V-F)*r/12).toFixed(0);
	if (charge<0) charge=0;
	var entretien=(V/1200).toFixed(0);
	var amortissement=((V-F)/1200).toFixed(0);
	if (amortissement<0) amortissement =0;
	var total=parseFloat(charge)+parseFloat(entretien)+parseFloat(amortissement);
	
	// Attention fonds propres
	var fonds=document.getElementById('fonds').value;
	fonds=fonds.substr(0, fonds.length-3)+"'"+fonds.substr(fonds.length-3, fonds.length);
	if (fonds.length>7) fonds=fonds.substr(0, fonds.length-7)+"'"+fonds.substr(fonds.length-7, fonds.length);
	document.getElementById('fonds-span').innerHTML=fonds+' .-';
	
	if (F*5<V) {document.getElementById('fonds-span').className="nok";}
	else document.getElementById('fonds-span').className="";
	
	
	document.getElementById('charge').innerHTML=charge+".-";
	document.getElementById('amortissement').innerHTML=amortissement+".-";
	document.getElementById('entretien').innerHTML=entretien+".-";
	document.getElementById('total').innerHTML=total+".-";
	
	// Corrections
	//document.getElementById('taux').value=(r*100).toFixed(2);
	//document.getElementById('valeur-span').value=nombre(V);
	//document.getElementById('fonds-span').value=nombre(fonds);
	}

function slider_valeur(e){
	var min=$("#valeur-value").offset().left;
	var l=$("#valeur-value").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#valeur').simpleSlider("setRatio", x);
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
	
function slider_fonds(e){
	var min=$("#fonds-value").offset().left;
	var l=$("#fonds-value").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#fonds').simpleSlider("setRatio", x);
	recalc();
}	

function startJqueryH(){
	if (!jQuery("#valeur-slider").length)  jQuery.getScript("https://www.multicredit.ch/simulateur/jslider/js/simple-slider.js");

	jQuery("#valeur").bind("slider:changed", function (event, data) {
		var valeur=""+data.value;
		valeur=valeur.substr(0, valeur.length-3)+"'"+valeur.substr(valeur.length-3, valeur.length);
		if (valeur.length>7) valeur=valeur.substr(0, valeur.length-7)+"'"+valeur.substr(valeur.length-7, valeur.length);
		document.getElementById('valeur-span').innerHTML=valeur+' .-';
		document.getElementById('valeur-span').style.marginLeft =(Math.floor(data.ratio*40)-5)+'%';
		recalc();});	

	jQuery("#fonds").bind("slider:changed", function (event, data) {
		var fonds=""+data.value;
		fonds=fonds.substr(0, fonds.length-3)+"'"+fonds.substr(fonds.length-3, fonds.length);
		if (fonds.length>7) fonds=fonds.substr(0, fonds.length-7)+"'"+fonds.substr(fonds.length-7, fonds.length);
		document.getElementById('fonds-span').innerHTML=fonds+' .-';
		document.getElementById('fonds-span').style.marginLeft =(Math.floor(data.ratio*40)-5)+'%';
		recalc();});	

	jQuery("#taux").bind("slider:changed", function (event, data) {
		var taux=data.value;taux =taux.toFixed(2);
		document.getElementById('taux-span').innerHTML=taux+' %';
		document.getElementById('taux-span').style.marginLeft =(Math.floor(data.ratio*50)-5)+'%';
		recalc();});	

	document.getElementById('valeur-value').addEventListener("touchmove", slider_valeur, false);
	document.getElementById('valeur-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}

	document.getElementById('fonds-value').addEventListener("touchmove", slider_fonds, false);
	document.getElementById('fonds-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}

	document.getElementById('taux-value').addEventListener("touchmove", slider_taux, false);
	document.getElementById('taux-value').addEventListener( "touchstart", function(e){ onStart(e); }, false );
	
	jQuery("#credit_simulator").fadeTo(100, 1);
	}

function onStart ( touchEvent ){if( navigator.userAgent.match(/Android/i) ) {touchEvent.preventDefault();}}
setTimeout(function() {startJqueryH();}, 100);
recalc();
</script>