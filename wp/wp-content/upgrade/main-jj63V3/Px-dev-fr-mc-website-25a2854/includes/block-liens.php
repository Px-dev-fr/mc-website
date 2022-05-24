<?php
$accents=accents($lang);
$from=$accents['from'];$to=$accents['to'];
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
$stitre['fr']="Liens utiles";
$ntitre['fr']="Demande en 3 étapes seulement!";
$ntxt['fr']="
	<ul id='sa'>
		<li class='li1'>1- Votre demande et premier contact</li>
		<li class='li2'>2 - Analyse et proposition</li>
		<li class='li3'>3- Signature du contrat et virement du crédit</li>
	</ul>
"; 
$ctitre['en']="At your service!";
$ctxt['en']="For more information, feel free to contact our specialist or ask for an offer!";
$clink['en']="Contact us";
$stitre['en']="Useful links";
$ntitre['en']="Why Multicredit?";
$ntxt['en']=" 
	<ul id='sa'>
		<li class='li1'>Personalised advice</li>
		<li class='li2'>A specialist at your disposal</li>
		<li class='li3'>Tailor-made solutions</li>
		<li class='li4'>Save money thanks to more advantageous  offers</li>
	</ul>
";
$ctitre['de']="Zu Ihren Diensten!";
$ctxt['de']="Für genauere Informationen fragen Sie unseren Spezialisten oder verlangen Sie ein Angebot!";
$clink['de']="Spezialisierte Beratung";
$stitre['de']="Nützliche Links";
$ntitre['de']="Warum Multicredit?";
$ntxt['de']="
	<ul id='sa'>
		<li class='li1'>Persönliche Beratung</li>
		<li class='li2'>Betreuung durch einen Spezialisten</li>
		<li class='li3'>Massgeschneiderte Lösungen</li>
		<li class='li4'>Sparen Sie dank günstigeren Angeboten</li>
	</ul>
";
$ctitre['pt']="Ao Vosso Serviço!";
$ctxt['pt']="Para mais anplas precisoes, consulte o nosso especialista ou peça uma oferta";
$clink['pt']="Conselho Especializado";
$stitre['pt']="Links úteis";
$ntitre['pt']="Nossas garantias";
$ntxt['pt']="
	<ul id='sa'>
		<li class='li1'>Ofertas transparentes</li>
		<li class='li2'>Soluções flexiveís</li>
		<li class='li3'>Tratamento rápido</li>
		<li class='li4'>Nenhum custo adicional</li>
	</ul>
";
$ctitre['al']="Na usluzi!";
$ctxt['al']="Za više informacija kontaktirajte našeg stručnjaka ili zatražite ponudu!";
$clink['al']="Vijeće specijalizirano";
$stitre['al']="Lidhje të dobishme";
$ntitre['al']="Garancitë tona";
$ntxt['al']="
	<ul id='sa'>
		<li class='li1'>Zgjedhje fleksibile</li>
		<li class='li2'>Trajtim i shpejtë</li>
		<li class='li3'>Tatim i reduktuar</li>
		<li class='li4'>Nuk egzistojn pagesa të fshehta</li>
	</ul>
";
$ctitre['it']="Al vostro servizio!";
$ctxt['it']="Per ulteriori informazioni, consultare il nostro specialista o chiedere un'offerta!";
$clink['it']="Consiglio specializzato";
$stitre['it']="Link utili";
$ntitre['it']="Le nostre garanzie";
$ntxt['it']="
	<ul id='sa'>
		<li class='li1'>Offerte trasparenti</li>
		<li class='li2'>Soluzioni flessibili</li>
		<li class='li3'>Trattamento rapido</li>
		<li class='li4'>Nessuna commissione nascosta</li>
	</ul>
";
$ctitre['es']="¡A su servicio!";
$ctxt['es']="Para obtener más información, consulte a nuestro especialista o solicite una oferta!";
$clink['es']="Contáctenos";
$stitre['es']="Enlaces útiles";
$ntitre['es']="Nuestras garantías";
$ntxt['es']="
	<ul id='sa'>
		<li class='li1'>Sin cargos ocultos</li>
		<li class='li2'>Ofertas transparente</li>
		<li class='li3'>Soluciones flexibles</li>
		<li class='li4'>Tratamiento rápido</li>
	</ul>
";
$ctitre['pl']="Kontakt z nami";
$ctxt['pl']="Aby uzyskać więcej informacji, skonsultuj się ze specjalistą lub poproś o ofertę!";
$clink['pl']="Kontakt z nami";
$stitre['pl']="Przydatne linki";
$ntitre['pl']="U nas";
$ntxt['pl']="
	<ul id='sa'>
		<li class='li1'>Minimum formalności</li>
		<li class='li2'>Profesjonalne porady</li>
		<li class='li3'>Elastyczne rozwiązania</li>
		<li class='li4'>Korzystne oprocentowania</li>
	</ul>
";
$ctitre['sbc']="Na usluzi!";
$ctxt['sbc']="Za više informacija kontaktirajte našeg stručnjaka ili zatražite ponudu!";
$clink['sbc']="Kontaktirajte nas";
$stitre['sbc']="Korisne veze";
$ntitre['sbc']="Zašto Multicredit?";
$ntxt['sbc']="
	<ul id='sa'>
		<li class='li1'>Individualizirani savjeti</li>
		<li class='li2'>Upravljanje od strane stručnjaka</li>
		<li class='li3'>Prilagođena rješenja</li>
		<li class='li4'>Prednosti</li>
	</ul>
";

$ctitre['tr']="Hizmetinizde!";
$ctxt['tr']="Daha fazla bilgi için uzmanımıza danışın veya bir teklif isteyin!";
$clink['tr']="Uzmanlaşmış Konsey";
$stitre['tr']="Faydalı bağlantılar";
$ntitre['tr']="Neden Multicredit?";
$ntxt['tr']="
	<ul id='sa'>
		<li class='li1'>Özel tavsiye</li>
		<li class='li2'>Emrinde bir uzman</li>
		<li class='li3'>Uyarlanmış çözümler</li>
		<li class='li4'>Daha avantajlı teklifler</li>
	</ul>
";

// Lien du bloc contact
$mylink="";
if (isset($lien[$lang])) $mylink=$lien[$lang];
if (isset($link[$lang])) $mylink=$link[$lang];
if (isset($file_formular[$lang])) $mylink=$file_formular[$lang];

// Correction dir (vieux système)
$temp=explode("/", $page);
array_pop($temp);
$dir=implode("/", $temp);

// On affiche pas de liens si aucun sous-dossier
$temp=scandir("pages/".$dir);	
if ($page!="index"){
	$affiche=0;
	foreach ($temp as $element)
		if (strlen($element)>1)
			if ($element!="index.php")
				if (is_dir("pages/$dir/$element")) $affiche=1;
	if ($affiche==0) $offres=1;
}
	
?>

	<div id="mbot">
	<div id="ct">
		<img id="ic"
		data-sizes="100vw" class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-srcset="https://static.multicredit.ch/images/contact/contact-240.jpg 1800w,https://static.multicredit.ch/images/contact/contact-160.jpg 1300w,data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs= 1000w" alt="Contact"
		>
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

	<div id="sublinks">
		<?php if ($offres!=1):?>
			<h3><?php echo $stitre[$lang];?></h3>
			<?php
			
			// Eléments de base
			if ($dir=="al"){
				$temp=Array("kredi/investimet/kosova", "kredi/investimet/leasingu", "kredi/sigurime/dividenda", "kredi/private/prona.php", "kredi/private/gazeta-shqiptare", "kredi/private/puna");
				}
			if ($dir=="de"){
				$temp=Array("schulden/schuldensanierung", "kredit/motorrad/auto-kredit", "kredit/renovation/kredit-haus", "ablosung/kreditkarten-kaufen");
				}
			if ($dir=="en"){
				$temp=Array("/credit/personal/private-credit", "credit/consumer/line-of-credit", "loan/online/loan-calculator", "loan/business/commercial-loan", "debt-consolidation/debt/debt-clearing");
				}
			if ($dir=="fr"){
				$temp=Array("credit/avantages/meilleur-taux", "credit/prive/petit-credit", "pme/credit", "rachat-regroupement", "hypotheque/immobilier/pret-immobilier");
				}
				
			$outputs['file']="";
			$outputs['dir']="";
			$d=0;
			foreach ($temp as $element) if (strlen($element)>2) if ($element!="index.php"){
				// On trouve le lien
				if (is_dir("pages/$dir/$element")){ // Lien vers un dossier
					$links="/$dir/$element";
					$gets="pages$links"."/index.php";
					$output="dir";
					$d++;
				}
				else{ // Lien vers un fichier
				if ($d>2) continue;
					$element=str_replace(".php", "", $element);
					$links="/$dir/$element";
					$gets="pages$links".".php";
					$output='file';
				}
				
				// On trouve le titre
				if (is_file($gets)){
				$fg=file_get_contents($gets);
				$res = preg_match("/<title>(.*)<\/title>/siU", $fg, $title_matches);
				$title = preg_replace('/\s+/', ' ', $title_matches[1]);
				$tab=explode("|", $title);
				$title=trim($tab[0]);
				$outputs[$output].=PHP_EOL."<a href='$links'>$title</a>";
				}
			}
			// Choix de la liste (dossiers si pas de fichiers)
			
			
			if ($d>=2){$out=$outputs['dir'];}
			else{$out=$outputs['file'];}
			
			//file_put_contents($tfile, $out);
			
			// Affichage
			$ol=sizeof(explode(PHP_EOL, $out))-1;
			$c="";if ($ol>7) $c="col";if ($ol>10) $c="col max";if ($ol<5) $c="small";
			
			echo ''.$out.'';
			?>
		<?php else:?>
			<h3><?php echo $ntitre[$lang];?></h3>
			<?php echo $ntxt[$lang];?>
		<?php endif;?>
	</div>
</div>
