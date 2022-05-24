<?php

$connexes['fr']="Découvrez aussi nos rubriques connexes";
$connexes['en']="Discover other related topics";
$connexes['de']="Entdecken Sie unsere verwandten Themen";
$connexes['pt']="Tópicos relacionados";
$connexes['al']="Zbuloni temat tona të lidhura";
$connexes['it']="Scopri i nostri argomenti correlati";
$connexes['es']="Nuestros temas relacionados";
$connexes['pl']="Odkryj nasze pokrewne tematy";
$connexes['sbc']="Otkrijte naše povezane teme";

$stitre['fr']="Liens utiles";
$stitre['en']="Useful links";
$stitre['de']="Nützliche Links";
$stitre['pt']="Links úteis";
$stitre['al']="Lidhje të dobishme";
$stitre['it']="Link utili";
$stitre['es']="Enlaces útiles";
$stitre['pl']="Przydatne linki";
$stitre['sbc']="Korisne veze";

// Texte si aucun lien
$ntitre['fr']="Demande en 3 étapes seulement!";
$ntxt['fr']="
	<div>1 - Votre demande et premier contact</div>
	<div>2 - Analyse et proposition</div>
	<div>3 - Signature du contrat et virement du crédit</div>
";


$ntitre['en']="Request in 3 steps only";
$ntxt['en']="
	<div>1 - Your request and first contact</div>
	<div>2 - Analysis and proposal</div>
	<div>3 - Signing of the contract and transfer of the credit</div>
";

$ntitre['de']="Anfrage nur in 3 Schritten";
$ntxt['de']="
	<div>1 - Ihre Anfrage und erster Kontakt</div>
	<div>2 - Analyse und Vorschlag</div>
	<div>3 - Unterzeichnung des Vertrages und Übertragung des Kredits</div>
";
$ntitre['pt']="Solicitação em 3 passos apenas";
$ntxt['pt']="
	<div>1 - Seu pedido e primeiro contato</div>
	<div>2 - Análise e proposta</div>
	<div>3 - Assinatura do contrato e transferência do crédito</div>
";

$ntitre['al']="Garancitë tona";
$ntxt['al']="
	<div>Zgjedhje fleksibile</div>
	<div>Trajtim i shpejtë</div>
	<div>Tatim i reduktuar</div>
	<div>Nuk egzistojn pagesa të fshehta</div>
";

$ntitre['it']="Richiesta in soli 3 passi";
$ntxt['it']="
	<div>1 - La vostra richiesta e primo contatto</div>
	<div>2 - Analisi e proposta</div>
	<div>3 - Firma del contratto e trasferimento del credito</div>
";

$ntitre['es']="Solicitud en 3 pasos solamente";
$ntxt['es']="
	<div>1 - Su solicitud y primer contacto</div>
	<div>2 - Análisis y propuesta</div>
	<div>3 - Firma del contrato y transferencia del crédito</div>
";

$ntitre['pl']="Wniosek składany tylko w trzech etapach";
$ntxt['pl']="
	<div>1 - Twoja prośba i pierwszy kontakt</div>
	<div>2 - Analiza i propozycja</div>
	<div>3 - Podpisanie umowy i przeniesienie kredytu</div>
";
$ntitre['sbc']="Primjena samo u 3 koraka";
$ntxt['sbc']="
	<div>1 - Zahtjev birača i prvi kontakt</div>
	<div>2 - Analiza i prijedlog</div>
	<div>3 - Potpisivanje ugovora i prijenos kredita</div>
";

$ntitre['al']="Aplikimi vetëm në 3 hapa";
$ntxt['al']="
	<div>1 - Kërkesa për zgjedhësit dhe kontakti i parë</div>
	<div>2 - Analiza dhe propozimi</div>
	<div>3 - Nënshkrimi i kontratës dhe transferimi i kredisë</div>
";

$ntitre['tr']="Sadece 3 etap !";
$ntxt['tr']="
	<div>1 - İstediğiniz miktar ve ilk iletişim</div>
	<div>2 - Analiz ve teklif</div>
	<div>3 - Sözleşmenin imzalanması ve paranız hesapta </div>
";


?>

<?php // Liens vers rubriques, puis vers fichiers

$_SESSION['arrayimg']=array(); // Conversion des images

// Sous-liens qui ne s'affichent pas
$nosub=array(
"/credit/prive/services-financiers",
"/credit/conditions", "/credit/suisse", "/credit/simulation", "/credit/rachat", "/credit/demande", "/hypotheque/demande", "/desendettement/demande", "/affacturage/assurance-credit", "/affacturage/cession", "/affacturage/recouvrement", "/affacturage/demande"
);


$list_dirs=array();
$list_soeurs=array();

// Lister les dirs
$dir=str_replace("index", "","/$page");
$adir=$dir;
if (substr_count($dir, "/")>3){
	if (sizeof(explode("/", trim($dir, "/")))>1){ // Il y a des rubriques / pages soeurs
		$tab=explode("/", trim($dir, "/"));array_pop($tab);
		$dir="/".implode("/", $tab)."/";
		
		if (is_dir("pages$dir")){
			
			$folders=scandir("pages$dir");
			foreach ($folders as $folder){
				if ($folder=="index.php") continue; // On ne liste pas l'index
				if (strlen($folder)<3) continue; // pas . et ..
				
				$html=str_replace(".php", "","$dir$folder"); // 
				$php="pages$dir$folder/index.php";
				if (is_dir("pages$dir$folder")) $php="pages$dir$folder/index.php";
				else $php="pages$dir$folder";
				
				// On évite de lister la rubrique actuelle
				
				if (trim($adir,"/")==trim($html,"/")) continue;
				
				$titre=getTitle($php, $html);
				if (strlen($titre)>0) $list_soeurs[$html]=$titre;
				
				}
		}
	}
}
// Affichage des pages connexes
if (sizeof($list_soeurs)>0){
	$n=0;$class="small";
	$html="";
	

	foreach ($list_soeurs as $href=>$title){
		$img=getIMg($href);
		if (isset($htconvert[$img])) $img=$htconvert[$img];
		if (!is_file("template/images/header/$img")) continue; // Seulement lien si images
		$n++;
		if ($n>3) $class="";
		$html.=PHP_EOL.'<a class="sla" href="'.$href.'">'.$title.'</a>';
	}
	echo '
	<div id="sublinks" class="'.$class.'">	
		<h4>'.$connexes[$lang].':</h4>
		'.$html.'
	</div>
	';
}
else echo '
	<div id="sublinks">
		<h4>'.$ntitre[$lang].'</h4>
		'.$ntxt[$lang].'
	</div>
';

?>
