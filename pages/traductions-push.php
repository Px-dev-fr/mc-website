<?php
$trads=array();

$trads['merci']['fr']="Nous vous remercions pour votre confiance";
$trads['transmis']['fr']="Votre demande a été transmise à notre partenaire";
$trads['contact']['fr']="Ce dernier vous contactera bientôt afin de traiter votre demande au plus vite. Si vous avez des questions d'ici là, n'hésitez pas à nous contacter.";
$trads['refus']['fr']="Malheureusement, nous ne pouvons pas traiter votre demande";
$trads['refusr']['fr']="En effet, nous ne sommes pas en mesure de proposer de solutions pour les personnes n'habitant pas en Suisse.";
$trads['questions']['fr']="Des questions?";
$trads['hesiter']['fr']="N'hésitez pas à nous contacter pour tout besoin éventuel.";

$trads['merci']['pl']="Dziękujemy za zaufanie.";
$trads['transmis']['pl']="Twoja prośba została przekazana naszemu partnerowi.";
$trads['contact']['pl']="Skontaktuje się z Tobą, aby jak najszybciej rozpatrzyć Twoją prośbę. Jeśli w międzyczasie macie Państwo jakiekolwiek pytania, prosimy o kontakt z nami.";
$trads['refus']['pl']="Niestety, nie możemy przetworzyć twojej prośby.";
$trads['refusr']['pl']="Rzeczywiście, nie jesteśmy w stanie zaoferować rozwiązań dla ludzi, którzy nie mieszkają w Szwajcarii.";
$trads['questions']['pl']="Jakieś pytania?";
$trads['hesiter']['pl']="Nie wahaj się skontaktować z nami w razie potrzeby.";


$trads['merci']['es']="Le agradecemos su confianza";
$trads['transmis']['es']="Su solicitud ha sido enviada a nuestro socio";
$trads['contact']['es']="Él se pondrá en contacto con usted lo antes posible para procesar su solicitud. Si tiene alguna pregunta mientras tanto, no dude en ponerse en contacto con nosotros.";
$trads['refus']['es']="Desafortunadamente, no podemos procesar su solicitud";
$trads['refusr']['es']="De hecho, no estamos en condiciones de ofrecer soluciones para personas que no viven en Suiza.";
$trads['questions']['es']="¿Alguna pregunta?";
$trads['hesiter']['es']="No dude en ponerse en contacto con nosotros para cualquier posible necesidad.";

$trads['merci']['it']="La ringraziamo per la sua fiducia";
$trads['transmis']['it']="La sua richiesta è stata trasmessa al nostro partner";
$trads['contact']['it']="Quest'ultimo la contatterà rapidamente e la sua richiesta sarà trattata in breve tempo. In caso di ulteriori informazioni, non esiti a contattarci.";
$trads['refus']['it']="Siamo spiacenti, ma la sua richiesta non può essere trattata";
$trads['refusr']['it']="Purtroppo non siamo in misura di proporre soluzioni alle persone che non abitano in Svizzera.";
$trads['questions']['it']="Ulteriori informazioni?";
$trads['hesiter']['it']="Non esiti a contattarci per qualsiasi necessità.";

$trads['merci']['it']="La ringraziamo per la sua fiducia";
$trads['transmis']['it']="La sua richiesta è stata trasmessa al nostro partner";
$trads['contact']['it']="Quest'ultimo la contatterà a breve al fine di trattare la sua richiesta rapidamente. In caso di domande o ulteriori informazioni, non esiti a contattarci.";
$trads['refus']['it']="Siamo spiacenti, ma la sua domanda non potrà essere trattata.";
$trads['refusr']['it']="Siamo spiacenti, ma non siamo in misura di proporre delle soluzioni per le persone che non abitano in Svizzera.";
$trads['questions']['it']="Ulteriori informazioni?";
$trads['hesiter']['it']="Non esiti a contattarci per qualsiasi esigenza.";

$trads['merci']['de']="Wir danken Ihnen für Ihr Vertrauen.";
$trads['transmis']['de']="Ihre Anfrage wurde an unseren Partner weitergeleitet.";
$trads['contact']['de']="Dieser wird sich in Kürze mit Ihnen in Verbindung setzen, um Ihre Anfrage so schnell wie möglich zu bearbeiten. Wenn Sie in der Zwischenzeit Fragen haben, zögern Sie nicht, uns zu kontaktieren.";
$trads['refus']['de']="Leider können wir Ihre Anfrage nicht bearbeiten.";
$trads['refusr']['de']="Leider sind wir nicht in der Lage, Lösungen für Personen anzubieten, die nicht in der Schweiz leben.";
$trads['questions']['de']="Haben Sie Fragen?";
$trads['hesiter']['de']="Zögern Sie nicht, uns bei weiteren Bedürfnissen zu kontaktieren.";

$trads['merci']['en']="We thank you for your trust";
$trads['transmis']['en']="Your request has been forwarded to our partner";
$trads['contact']['en']="He will contact you promptly to process your request as soon as possible. If you have any questions in the meantime, please do not hesitate to contact us.";
$trads['refus']['en']="Unfortunately, we cannot process your request";
$trads['refusr']['en']="Indeed, we are not in a position to offer solutions for people who do not live in Switzerland.";
$trads['questions']['en']="Any questions?";
$trads['hesiter']['en']="Do not hesitate to contact us for any possible need.";

$trads['merci']['pt']="Agradecemos a sua confiança";
$trads['transmis']['pt']="O seu pedido foi encaminhado para o nosso parceiro";
$trads['contact']['pt']="Ele entrará em contato com você em breve para processar sua solicitação o mais rápido possível. Se, entretanto, tiver alguma dúvida, não hesite em contactar-nos.";
$trads['refus']['pt']="Infelizmente, não podemos processar o seu pedido";
$trads['refusr']['pt']="Na verdade, não estamos em posição de oferecer soluções para pessoas que não vivem na Suíça.";
$trads['questions']['pt']="Alguma pergunta?";
$trads['hesiter']['pt']="Não hesite em contactar-nos para qualquer necessidade possível.";

function traduire($ligne, $lang){
	global $trads;
	$retour=$trads[$ligne][$lang];
	if ($retour=="") $retour=$trads[$ligne]["en"];
	if ($retour=="") $retour=$ligne;
	return $retour;
}


?>