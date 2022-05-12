<?php
header('Content-Type: text/html; charset=utf-8');
$langue=$_POST['langue'];
if ($langue=='') $langue='fr';

$lien=$_POST['lien'];

// Traductions
$montant['fr']='Total du rachat';
$montant['en']='Wished amount';
$montant['de']='Gewünschte Menge';
$montant['pt']='Montante';
$montant['al']='Shuma e kërkuar';
$montant['it']='Somma richiesta';
$montant['es']='Importe';
$montant['sbc']='Mjesečni iznos';
$montant['pl']='Kwota';

$duree['fr']='Durée';
$duree['en']='Duration';
$duree['de']='Laufzeit';
$duree['pt']='Prazo';
$duree['al']='Afati i kthimit';
$duree['it']='Numero di rate';
$duree['es']='Duración';
$duree['sbc']='Rok otplate';
$duree['pl']='Czas';

$mois['fr']='Mois';
$mois['en']='Months';
$mois['de']='Montate';
$mois['pt']='Meses';
$mois['al']='Muajtë';
$mois['it']='Mesi';
$mois['es']='Meses';
$mois['sbc']='Mjesec';
$mois['pl']='Miesiące';


$mensualite['fr']='Votre mensualité';
$mensualite['en']='Monthly payments';
$mensualite['de']='Monatliche Zahlung';
$mensualite['pt']='Mensalidade';
$mensualite['al']='Kësti mujor';
$mensualite['it']='Rata mensile';
$mensualite['es']='Por mes';
$mensualite['sbc']='Mjesečna rata';
$mensualite['pl']='Miesięcznie';

$interet['fr']='Intérêt total';
$interet['en']='Total interest';
$interet['de']='Totale Zins';
$interet['pt']='Juros totaís';
$interet['al']='Zinsi total';
$interet['it']='Interessi';
$interet['es']='Intereses';
$interet['sbc']='Kamate';
$interet['pl']='Koszt';

$bouton['fr']='Demander un rachat';
$bouton['en']='Ask a loan';
$bouton['de']='Jetz beantragen';
$bouton['pt']='Pedir um crédito';
$bouton['al']='Oferta për kredi';
$bouton['it']='Richiedere un credito';
$bouton['es']='Solicitud de crédito';
$bouton['sbc']='Zaht jev za kredit';
$bouton['pl']='Prosba o kredyt';

$texte['fr']="Rachat de vos crédits - leasings - solde de cartes de crédit.";
$texte['en']="Get a loan from <b>3'000 to 250'000 Chf</b>. Free non-binding offer.";
$texte['pt']="Crédito de <b>3'000 - 250'000 Chf</b>. Oferta gratuita sem obrigações.";
$texte['al']="Kredi nga <b>3'000 - 250'000 Chf</b>.";
$texte['de']="Kredit von <b>3'000 - 250'000 Chf</b>. Kostenlos Offerte.";
$texte['it']="Offerta gratuita: <b>3'000 - 250'000 Chf</b>.";
$texte['es']="Oferta gratuita: <b>3'000 - 250'000 Chf</b>.";
$texte['sbc']="Besplatna ponuda: <b>3'000 - 250'000 Chf</b>.";
$texte['pl']="Darmowa oferta: <b>3'000 - 250'000 Chf</b>.";

?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.multicredit.ch/simulateur/jslider/js/simple-slider.js"></script>
<form action="<?php echo $lien;?>" method="post" id="credit_simulator">
	<div class="presentation">
		<?php echo $texte[$langue];?>
	</div>
	<div class="block-slider" id="montant-slider">
		<span><?php echo $montant[$langue];?>:</span>
		<div class="slider">
			<input type="text" id="montant-track" data-slider="true"  data-slider-range="0,61" data-slider-step="1" value="5"/>
		</div>
		
		<div class="textinfos">
			<input type="text" id="montant" name="montant"  value="10'000"/>Chf
		</div>
	</div>
	
	<div class="block-slider" id="duree-slider">
		<span><?php echo $duree[$langue];?>:</span>
		<div class="slider">
			<input type="text" data-slider="true" id="duree-track" data-slider-range="12,72" data-slider-step="12" value="12"/>
		</div>
		
		<div class="textinfos">
			<input type="text" id="duree-span" name="duree" value="12"/><?php echo $mois[$langue];?>
		</div>
	</div>
	
	<div class="block_info">
		<span><?php echo $mensualite[$langue];?>:</span>
		<input type="text" readonly id="mensualite"/>
	</div>
	
	<div class="block_info">
		<span><?php echo $interet[$langue];?>:</span>
		<input type="text" readonly id="interet"/>
	</div>
	
	<input type="hidden" name="lang" value="<?php echo $langue;?>"/>
	<input type="submit" value="<?php echo $bouton[$langue];?>" onclick="document.getElementById('multicreditform').submit();"/>
</form>

<script type="text/javascript" id="myscript">
<?php echo $join_css;?>

var montants=new Array(2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000, 20000, 21000, 22000, 23000, 24000, 25000, 26000, 28000, 30000, 32000, 34000, 36000, 38000, 40000, 42000, 44000, 46000, 48000, 50000, 55000, 60000, 65000, 70000, 75000, 80000, 85000, 90000, 95000, 100000, 110000, 120000, 130000, 140000, 150000, 160000, 170000, 180000, 190000, 200000, 210000, 220000, 230000, 240000, 250000);

	function recalc()
		{
		var montant=parseInt(montants[document.getElementById('montant-track').value]);
		var duree=parseInt(document.getElementById('duree-track').value);
	
		
		// Calcul:
		var CT= 0.079/12;
		var CB= Math.pow((1+0.079/12), - duree);
		CB = 1- CB;
		var mensualite=parseInt((CT/CB) * montant);
		var interet=parseInt((duree*mensualite) - montant);
		

		
		// Affichage
		document.getElementById('interet').value=nombre(interet)+'.-';
		document.getElementById('mensualite').value=nombre(mensualite)+'.-';		
		}


function nombre(valeur) {
	var val_format=valeur+"";
	var nb=val_format.length;
	for (var i=1;i<4;i++) {
		if (valeur>=Math.pow(10,(3*i))) {
			val_format=val_format.substring(0,nb-(3*i))+"'"+val_format.substring(nb-(3*i));
		}
	}
	return val_format;
}


function slider_montant(e){
	var min=$("#montant-slider").offset().left;
	var l=$("#montant-slider").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	var values=montants.length;	
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#montant-track').simpleSlider("setRatio", x);
	check();	
}	

function slider_duree(e){
	var min=$("#duree-slider").offset().left;
	var l=$("#duree-slider").width();
	var touch = e.touches[0]; // Gets information about the first finger, i.e. number 0.
	var scrX = touch.pageX; // Get X position including scroll bars
	var x=touch.pageX-min;
	var values=montants.length;	
	// Limites
	if (x<0) x=0;
	if (x>l) x=l;
	x=(x/l);
	$('#duree-track').simpleSlider("setRatio", x);
	check();	
}	
		
$("#montant-track").bind("slider:changed", function (event, data) {
	document.getElementById('montant-track').value=[data.value];
	document.getElementById('montant').value=nombre(montants[data.value]);
	recalc();
});	

$("#duree-track").bind("slider:changed", function (event, data) {
		document.getElementById('duree-track').value=data.value;
		document.getElementById('duree-span').value=data.value;
		recalc();
	});		

document.getElementById('montant-slider').addEventListener("touchmove", slider_montant, false);
document.getElementById('montant-slider').addEventListener( "touchstart", function(e){ onStart(e); }, false );
function onStart ( touchEvent ){
	if( navigator.userAgent.match(/Android/i) ) {
		touchEvent.preventDefault();
  }
}

document.getElementById('duree-slider').addEventListener("touchmove", slider_duree, false);
document.getElementById('duree-slider').addEventListener( "touchstart", function(e){ onStart(e); }, false );
function onStart ( touchEvent ){
	if( navigator.userAgent.match(/Android/i) ) {
		touchEvent.preventDefault();
  }
}
	
recalc();
</script>
