<?php
// No de tel
if (!isset($mtel)){
	$mtel="079 936 31 43";
	
}
$mtela=str_replace(" ", "", $mtel);
$mtela="+41".substr($mtela, 1);

//Traductions
$stitre=Array();
$ntitre=Array();$ntxt=Array();
$ctitre=Array();$ctxt=Array();$clink=Array();
$ctitre['fr']="A votre service!";
$ctxt['fr']="Pour plus de précisions, consultez notre spécialiste ou demandez une offre!";
$clink['fr']="Conseil spécialisé";

$ctitre['en']="At your service!";
$ctxt['en']="For more information, feel free to contact our specialist or ask for an offer!";
$clink['en']="Contact us";
$ctitre['de']="Zu Ihren Diensten!";
$ctxt['de']="Für genauere Informationen fragen Sie unseren Spezialisten oder verlangen Sie ein Angebot!";
$clink['de']="Spezialisierte Beratung";
$ctitre['pt']="Ao Vosso Serviço!";
$ctxt['pt']="Para mais anplas precisoes, consulte o nosso especialista ou peça uma oferta";
$clink['pt']="Conselho Especializado";
$ctitre['al']="Kontakt";
$ctxt['al']="Për më shumë informata kontaktoni ekspertët tanë dhe kërkoni një ofertë për kredi.";
$clink['al']="Vijeće specijalizirano";
$ctitre['it']="Al vostro servizio!";
$ctxt['it']="Per ulteriori informazioni, consultate il nostro specialista o chiedete un'offerta!";
$clink['it']="Consiglio specializzato";
$ctitre['es']="¡A su servicio!";
$ctxt['es']="Para obtener más información, consulte a nuestro especialista o solicite una oferta!";
$clink['es']="Contáctenos";
$ctitre['pl']="Kontakt z nami";
$ctxt['pl']="Aby uzyskać więcej informacji, skonsultuj się ze specjalistą lub poproś o ofertę!";
$clink['pl']="Kontakt z nami";
$ctitre['sbc']="Na usluzi!";
$ctxt['sbc']="Za više informacija kontaktirajte našeg stručnjaka ili zatražite ponudu!";
$clink['sbc']="Kontaktirajte nas";  


// Lien du bloc contact
$mylink="";
if (isset($lien[$lang])) $mylink=$lien[$lang];
if (isset($link[$lang])) $mylink=$link[$lang];
if (isset($file_formular[$lang])) $mylink=$file_formular[$lang];
?>


<div id="ct">
	<div id="cti">
		<img id="ic"
		data-sizes="100vw" class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-srcset="https://static.multicredit.ch/images/contact/contact-240.jpg 1800w,https://static.multicredit.ch/images/contact/contact-160.jpg 1300w,data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs= 999w" alt="Contact"
		>
	</div>
	<div id="bt">
		<h3><?php echo $ctitre[$lang];?></h3>
		<p><?php echo $ctxt[$lang];?></p>
		<div class="mid">
			<a href="tel:+41263222310">026 322 23 10</a>
			<a href="tel:<?php echo $mtela;?>"><?php echo $mtel;?></a>
			<a href="mailto:info@multicredit.ch">info@multicredit.ch</a>
		</div>
		<?php if ($mylink!="") echo '<a class="bouton" href="'.$mylink.'">'.$clink[$lang].'</a>';?>
	</div>
</div>

	