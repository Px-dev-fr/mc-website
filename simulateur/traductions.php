<?php
$choix=Array();
$choix['fr']="Vous êtes:";
$choix_particulier['fr']="Un particulier";
$choix_pme['fr']="Une société (PME)";
$mens['fr']="Mensualité de";

$choix['de']="Kredit für:";
$choix_particulier['de']="Privatperson";
$choix_pme['de']="Gesellschaft";
$mens['de']="Monatsgehalt von";

$choix['en']="You are:";
$choix_particulier['en']="An individual";
$choix_pme['en']="A company (SME)";
$mens['en']="Monthly payments of";

$titrecredit=Array();
$titrecredit['fr']='Votre crédit';
$titrecredit['en']='Your loan ';
$titrecredit['de']='Ihr Kredit';
$titrecredit['pt']='O seu crédito';
$titrecredit['pl']='Twój kredyt';
$titrecredit['sbc']='Vaše kreditne';
$titrecredit['it']='Il vostro credito';
$titrecredit['es']='Su crédito';
$titrecredit['al']='Krediti juaj';
$titrecredit['tr']='Krediniz';
$titrecredit['ru']='Your loan';

$titreinfoc=Array();
$titreinfoc['fr']='Vos informations de contact';
$titreinfoc['en']='Your contact information';
$titreinfoc['de']='Ihre Kontaktinformationen';
$titreinfoc['pt']='Suas informações de contato';
$titreinfoc['pl']='Twoje informacje kontaktowe';
$titreinfoc['sbc']='Vaše kontakt podatke';
$titreinfoc['it']='Le vostre informazioni di contatto';
$titreinfoc['es']='Su información de contacto';
$titreinfoc['al']='Informacionin e kontaktit tuaj';
$titreinfoc['tr']='Sizin iletişim bilgileri';
$titreinfoc['ru']='Your contact informations';

$titrerevenus=Array();
$titrerevenus['fr']='Votre budget';
$titrerevenus['en']='Your budget';
$titrerevenus['de']='Ihr Budget';
$titrerevenus['pt']='O seu orçamento';
$titrerevenus['pl']='Twój budżet';
$titrerevenus['sbc']='Vaš proračun';
$titrerevenus['it']='Il vostro budget';
$titrerevenus['es']='Su presupuesto';
$titrerevenus['al']='Buxheti juaj';
$titrerevenus['tr']='Bütçeniz';
$titrerevenus['ru']='Your budget';

$titresituation=Array();
$titresituation['fr']='Votre situation';
$titresituation['en']='Your situation';
$titresituation['de']='Ihre Situation';
$titresituation['pt']='A sua situação';
$titresituation['pl']='Twoja sytuacja';
$titresituation['sbc']='Vaš situacija';
$titresituation['it']='La vostra situazione';
$titresituation['es']='Su situación';
$titresituation['al']='Situata juaj';
$titresituation['tr']='Durumunuz';
$titresituation['ru']='Your situation';

$remarqueschamps=Array();
$remarqueschamps['fr']='Avez-vous des revenus annexes, d\'autres crédits en cours, leasings en cours? Avez-vous des remarques liées à votre situation?';

$assurancevie=Array();
$assurancevie['fr']='Avez-vous une assurance vie?';
$assurancevie['en']='Do you have a life insurance?';
$assurancevie['de']='Haben Sie eine Lebensversicherung?';
$assurancevie['pt']='Você tem seguro de vida?';
$assurancevie['pl']='Masz ubezpieczenie na życie?';
$assurancevie['sbc']='Imate li životno osiguranje?';
$assurancevie['it']='Ha un\'assicurazione vita?';
$assurancevie['es']='¿Tiene Usted un seguro de vida?';
$assurancevie['al']='A keni sigurimin e jetës?';
$assurancevie['tr']='Eğer hayat sigortası var mı?';
$assurancevie['ru']='Do you have a life insurance?';

$assurancerisque=Array();
$assurancerisque['fr']='Avez-vous une assurance risque?';
$assurancerisque['en']='Do you have a risk insurance?';
$assurancerisque['de']='Haben Sie eine Risikoversicherung?';
$assurancerisque['pt']='Você tem seguro de risco?';
$assurancerisque['pl']='Czy istnieje ryzyko ubezpieczenie?';
$assurancerisque['sbc']='Da li rizik osiguranja?';
$assurancerisque['it']='Ha un\'assicurazione rischio?';
$assurancerisque['es']='¿Tiene Usted un seguro de riesgo?';
$assurancerisque['al']='A keni sigurimin e rrezikoni?';

$montant=Array();
$montant['fr']='Montant souhaité: <br/><i>(En Chf)</i>';
$montant['en']='Wished amount:';
$montant['de']='Gew&uuml;nschter Betrag:';
$montant['pt']='Montante desejado:';
$montant['pl']='Ządana kwota:';
$montant['sbc']='Mjesečna rata kredita';
$montant['it']='Montante:';
$montant['es']='Importe deseado:<br/><i>(en Chf)</i>';
$montant['al']='Shuma që ju dëshironi:';
$montant['tr']='Talep edilen miktar:';
$montant['ru']=$montant['en'];

$duree=Array();
$duree['fr']='Durée du prêt:';
$duree['en']='Loan duration:';
$duree['de']='Laufzeit:';
$duree['pt']='Prazo de reembolso:';
$duree['pl']='Czas pożyczki:';
$duree['sbc']='Rok isplate kredita:';
$duree['it']='Durata del credito:';
$duree['es']='Duración del crédito:';
$duree['al']='Sa Kohë:';
$duree['tr']='Taksit / vaadesi:';
$duree['ru']=$duree['en'];

$pre_pme['fr']='<p>Besoin d\'un crédit pour votre société (Sàrl / SA / Indépendant)? Avec '.$_POST['signature'].', vous obtenez en toute simplicité une offre <b>gratuite et sans engagement</b>. Merci de compléter ces quelques informations afin qu\'un conseiller vous contacte.</p>';
$pre_pme['en']='<p>Do you need a credit for your company (LLC, Ltd,Independent )? With '.$_POST['signature'].', you get with ease a <b>free and non-binding offer</b>. Please fill out these informations in order to get in contact with an advisor.</p>';


$societe['fr']='Société';
$societe['en']='Company name';
$societe['de']='Name der Gesellschaft';
$societe['pt']='Company name';
$societe['pl']='Company name';
$societe['sbc']='Company name';
$societe['it']='Company name';
$societe['es']='Company name';
$societe['al']='Company name';
$societe['tr']='Company name';
$societe['ru']='Company name';

$societe['fr']='Société';
$societe['en']='Company name';
$societe['de']='Name der Gesellschaft';
$societe['pt']='Company name';
$societe['pl']='Company name';
$societe['sbc']='Company name';
$societe['it']='Company name';
$societe['es']='Company name';
$societe['al']='Company name';
$societe['tr']='Company name';
$societe['ru']='Company name';


$pmecredit['fr']='Crédit souhaité';
$pmeperso['fr']='Vos données';
$pmetitre['fr']='Données d\'entreprise';
$forme['fr']='Forme juridique';
$forme_raison['fr']='Raison individuelle';
$forme_sarl['fr']='Sàrl';
$forme_sa['fr']='SA';
$forme_coll['fr']='Nom collectif';
$fondation['fr']='Année de fondation';
$ide['fr']='Numéro IDE';
$nbcollab['fr']='Nombre de collaborateurs';
$motif['fr']='Motif du crédit';

$pmecredit['de']='Gewünschter Kredit';
$pmeperso['de']='Ihre Angaben';
$pmetitre['de']='Angaben der Firma';
$forme['de']='Gesellschaftsform';
$forme_raison['de']='Einzelunternehmen';
$forme_sarl['de']='GmbH';
$forme_sa['de']='AG';
$forme_coll['de']='Kollektivgesellschaft';
$fondation['de']='Gründungsjahr';
$ide['de']='UID Nummer';
$nbcollab['de']='Anzahl Mitarbeiter';
$motif['de']='Grund des Kredits';

$pmecredit['en']='Wished credit';
$pmeperso['en']='Personal information';
$pmetitre['en']='Business information';
$forme['en']='Legal form';
$forme_raison['en']='Personal reason';
$forme_sarl['en']='Limited liability company';
$forme_sa['en']='Limited company';
$forme_coll['en']='General partnership';
$fondation['en']='Founding year';
$ide['en']='Business identification number';
$nbcollab['en']='Number of employees';
$motif['en']='Credit reason';

$cadenas=Array();
$cadenas['fr']='15 ans d\'expérience à votre service!';
$cadenas['al']='100% Secured';
$cadenas['en']='Over 15 years of experience!';
$cadenas['de']='100% secured';
$cadenas['es']='100% secured';
$cadenas['it']='100% secured';
$cadenas['pt']='15 anos ao seu serviço!';
$cadenas['sbc']='100% secured';
$cadenas['pl']='100% secured';
$cadenas['tr']='100% secured';
$cadenas['ru']='100% secured';

$stockdata['fr']='Vos données sont stockées et archivées en Suisse par un fournisseur contrôlé et agréé.';
$stockdata['de']='Ihre Daten werden durch eine kontrollierte und genehmigte Lieferanten gespeichert und archiviert in der Schweiz.';

$tauxtooltip['fr']='La mensualité est estimée sur un taux de 9.95%. Nos taux d\'intérêts varient de 7.90% à 14.5% en fonction de la situation de chaque client.';
$tauxtooltip['en']='The monthly payment is an estimate based on a 9.95% rate. Our real rates vary from 7.90% to 14.5% according to the situation of each client.';
$tauxtooltip['de']='Die monatliche Zahlung der Zinsen beträgt ca. 9.95%. Unsere Zinsen variieren von 7.90% bis zu 14.5% je nach finanzieller Situation unserer Kunden.';
$tauxtooltip['it']='Gli interessi sono a 9.95% al mese. Gli interessi possono variare dal 7.90% al 14.5% dipendendo dalla situazione del cliente.';


$cartedecredit['fr']='Souhaitez-vous bonne offre pour une carte de crédit?';
$cartedecredit['de']='Ich interessiere mich für eine Kreditkarte:';
$cartedecredit['en']='Interested in an advantageous credit card offer?';
$cartedecredit['pt']='Estou interessado em um cartão de crédito:';
$cartedecredit['pl']='Jestem zainteresowany kartą kredytową:';
$cartedecredit['sbc']='Ja sam zainteresiran za kreditne kartice:';
$cartedecredit['it']='Sono interessato a una carta di credito:';
$cartedecredit['es']='Está interesado en una tarjeta de crédito ventajosa:';
$cartedecredit['al']='Unë jam i interesuar në një karte krediti:';
$cartedecredit['tr']='Ben bir kredi kartı istiyorum, uygun şartlarla:';
$cartedecredit['ru']='I am interested in a credit card:';


$mois['fr']='Mois';
$mois['de']='Monat';
$mois['en']='Month';
$mois['pt']='Meses';
$mois['pl']='Miesiąc';
$mois['sbc']='Mjesec';
$mois['it']='Mese';
$mois['es']='Mes';
$mois['al']='Muajt';
$mois['tr']='Ay';
$mois['ru']=$mois['en'];

$moisp['fr']='Mois';
$moisp['de']='Monate';
$moisp['en']='Months';
$moisp['pt']='Meses';
$moisp['pl']='Miesiące';
$moisp['sbc']='Mjeseca';
$moisp['it']='Mesi';
$moisp['es']='Meses';
$moisp['al']='Muajt';
$moisp['tr']='Ay';
$moisp['ru']=$mois['en'];

$liencourbe['fr']="&nbsp;<a href='mensualite-pret.php' target='_blank'>-> Plus d'informations sur votre mensualité...</a>";

$jour['fr']='Jour';
$jour['de']='Tag';
$jour['en']='Day';
$jour['pt']='Dia';
$jour['pl']='Dzień';
$jour['sbc']='Dan';
$jour['it']='Giorno';
$jour['es']='Día';
$jour['al']='Dita';
$jour['tr']='Gün';
$jour['ru']=$jour['en'];


$moisp['fr']='Mois';
$moisp['de']='Monate';
$moisp['en']='Months';
$moisp['pt']='Meses';
$moisp['pl']='Miesiące';
$moisp['sbc']='Mjesec';
$moisp['it']='Mesi';
$moisp['es']='Meses';
$moisp['al']='Muajt';
$moisp['tr']='Ay';
$moisp['ru']=$mois['en'];


$mensualite['fr']='Votre mensualité';
$mensualite['en']='Montly payment';
$mensualite['de']='Monatliche Rate';
$mensualite['pt']='Reembolso mensal';
$mensualite['pl']='Twoje miesięczne płatności';
$mensualite['sbc']='Vaša mjesečna rata isplate kredita:';
$mensualite['it']='Rata mensile';
$mensualite['al']='Shuma që ju dëshironi ta paguani:';
$mensualite['es']='Reembolso mensual';
$mensualite['tr']='Aylık ödeme';

$send['fr']='Demander un crédit';
$send['en']='Ask a loan';
$send['de']='Jetzt beantragen';
$send['pt']='Pedir um crédito';
$send['al']='Oferta për kredi';
$send['it']='Richiedere un credito';
$send['es']='Solicitud de crédito';
$send['sbc']='Zaht jev za kredit';
$send['pl']='Prosba o kredyt';
$send['tr']='Online kredi başvurusu';

$rembourser['fr']='Votre mensualité <b>*</b>:<i>(*Assurance décès pour solde de dette incluse, voir conditions)</i>';
if ($_POST['euro']=='oui')$rembourser['fr']='Votre mensualité';
$rembourser['en']='Monthly payment <b>*</b>:
<i>(* Loan insurance included in case of death)</i>';
$rembourser['de']='Monatliche Rate <b>*</b>:
<i>(* Inkl. Sterbeversicherung für die Kreditschulden, siehe Konditionen)</i>';
$rembourser['pt']='Reembolso mensal <b>*</b>:
<i>(* Incluindo a mensualidade du crédito em caso de morte)</i>';
$rembourser['pl']='Twoje miesięczne płatności:';
$rembourser['sbc']='Vaša mjesečna rata isplate kredita:';
$rembourser['it']='Rata mensile <b>*</b>:
<i>(* Inclusa assicurazione rateale in caso di decesso)</i>';
$rembourser['es']='Reembolso mensual:';
$rembourser['al']='Shuma që ju dëshironi ta paguani:';
$rembourser['tr']='Aylık ödeme:';
$rembourser['ru']=$rembourser['en'];

$interet['fr']='Intérêt total';
$interet['en']='Total loan cost';
$interet['de']='Zins Total';
$interet['pt']='Juros totais';
$interet['pl']='Razem odsetki';
$interet['sbc']='Ukupna kamata';
$interet['it']='Totale interessi';
$interet['es']='Total intereses';
$interet['al']='Interesi Total';
$interet['tr']='Toplam faiz';
$interet['ru']=$interet['en'];

$montant_tooltip['fr']='Choisissez librement le montant du crédit de 3\'000 à 250\'000 Chf en fonction de vos besoins.';
$montant_tooltip['en']='Choose freely the loan amount from 3,000 to 250,000 Chf according to your needs.';
$montant_tooltip['de']='Wählen Sie selbst den Betrag des Kredits aus: von Chf 3\'000 bis zu 250\'000.';
$montant_tooltip['it']='Scegliete voi stessi il montante del credito dai 3\'000 ai 250\'000 CHF';


$interet_tooltip['fr']='En cas de remboursement anticipé, vous payerez moins d\'intérêts sur votre crédit. Consultez notre page sur le <a href="remboursement-anticipe.php" target="_blank">remboursement anticipé</a> pour en savoir plus!';
$interet_tooltip['en']='In case of early repayment, you will pay less interest and thus, save money.';
$interet_tooltip['de']='Bei vorzeitiger Rückzahlung müssen Sie weniger Zinsen auf Ihren laufenden Kredit bezahlen und sparen dadurch Geld.';
$interet_tooltip['it']='In caso di rimborso anticipato sul Suo credito attuale dovrà pagare meno di interessi e potrà anche econ.';

unset($nom);
$nom['fr']='Nom';
$nom['en']='Last name';
$nom['de']='Name';
$nom['pt']='Nome';
$nom['pl']='Nazwisko';
$nom['sbc']='Ime';
$nom['it']='Cognome';
$nom['es']='Apellidos';
$nom['al']='Emri';
$nom['tr']='Soyisim';
$nom['ru']=$nom['en'];

$addnom['pt']='como no seu permisso';

unset($prenom);
$prenom['fr']='Prénom';
$prenom['en']='First name';
$prenom['de']='Vorname';
$prenom['pt']='Apelido';
$prenom['pl']='Imię';
$prenom['sbc']='Prezime';
$prenom['it']='Nome';
$prenom['es']='Nombres';
$prenom['al']='Mbiemri';
$prenom['tr']='Isim';
$prenom['ru']=$prenom['en'];

$rue['fr']='Rue';
$rue['en']='Adress';
$rue['de']='Strasse';
$rue['pt']='Rua';
$rue['pl']='Adres';
$rue['sbc']='Adresa';
$rue['it']='Via';
$rue['es']='Dirección';
$rue['al']='Rruga / nr';
$rue['tr']='Sokak';
$rue['ru']=$rue['en'];

$code_postal['fr']='Code postal / Localité';
$code_postal['en']='Postcode / City';
$code_postal['de']='PLZ / Stadt';
$code_postal['pt']='Código postal / Localidade';
$code_postal['pl']='Kod pocztowy / Miejscowość';
$code_postal['sbc']='Poštanski broj / Grad';
$code_postal['it']='Codice postale / Località';
$code_postal['es']='Código postal / Localidad';
$code_postal['al']='Kodi postal / Vendbanimi';
$code_postal['tr']='Posta kodu / Yer';
$code_postal['ru']=$code_postal['en'];

unset($telephone);
$telephone['fr']='Numéro de téléphone';
$telephone['en']='Phone number';
$telephone['de']='Natel / Telefonnummer';
$telephone['pt']='Telem&oacute;vel';
$telephone['pl']='Numer telefonu (stacjonarny lub komórkowy)';
$telephone['sbc']='Broj mobitela/ telefona';
$telephone['it']='Numero di telefono';
$telephone['es']='Teléfono fijo o móvil';
$telephone['al']='Mobili';
$telephone['tr']='Telefon numarası';
$telephone['ru']=$telephone['en'];

$email=array();
$email['fr']='Email';
$email['en']='E-Mail ';
$email['de']='E-Mail ';
$email['pt']='E-Mail ';
$email['pl']='E-Mail ';
$email['sbc']='E-Mail ';
$email['it']='E-Mail ';
$email['es']='E-Mail ';
$email['al']='E-Mail ';
$email['tr']='E-Mail';
$email['ru']=$email['en'];

$vousetes['fr']='Vous êtes';
$vousetes['en']='Situation';
$vousetes['de']='Sie sind';
$vousetes['pt']='Você é';
$vousetes['sbc']='Situacija';
$vousetes['it']='Situazione';
$vousetes['es']='Situación laboral';
$vousetes['al']='Ju jeni';
$vousetes['pl']='Jesteś';
$vousetes['tr']='Durumunuz';
$vousetes['ru']=$vousetes['en'];

$jma['fr']='(jj/mm/aaaa)';
$jma['en']='(dd/mm/yyyy)';
$jma['de']='(tt/mm/jjjj)';
$jma['pt']='(dd/mm/aaaa)';
$jma['pl']='(dd/mm/rrrr)';
$jma['sbc']='(dan/mjesec/godina)';
$jma['it']='(dd/mm/yyyy)';
$jma['es']='(dd/mm/yyyy)';
$jma['al']='(dd/mm/vvvv)';
$jma['tr']='(gg/aa/ssss)';
$jma['ru']='(dd/mm/yyyy)';

$date['fr']='Date de naissance';
$date['en']='Your birthdate';
$date['de']='Geburtsdatum';
$date['pt']='Data de nascimento';
$date['pl']='Data urodzenia';
$date['sbc']='Datum rođenja';
$date['it']='Data di nascita';
$date['es']='Fecha de nacimiento';
$date['al']='Datlindja';
$date['tr']='Doğum tarihiniz';
$date['ru']='даты рождения';

$etranger['fr']='Si étranger, quel est votre permis d\'établissement';
$etranger['en']='Are you foreigner, you benefit of a permit';
$etranger['de']='Ausl&auml;nderausweis';
$etranger['pt']='Se é estrangeiro, qual é o seu permisso ?';
$etranger['pl']='Rodzaj pozwolenia, jeśli jesteś obcokrajowcem';
$etranger['sbc']='Strani državljanin, koju dozvolu posjedujete';
$etranger['it']='Se straniero, permesso di soggiorno';
$etranger['es']='Si extranjero, cuál es su permiso de establecimiento';
$etranger['al']='Leja e qëndrimit';
$etranger['tr']='Yabancı iseniz,oturma izniniz nedir?';
$etranger['ru']=$etranger['en'];

$loyer['fr']='Loyer mensuel (charges comprises)';
$loyer['en']='Renting monthly bill?';
$loyer['de']='Monatsmiete ?';
$loyer['pt']='Qual é o seu aluguer ?';
$loyer['pl']='Aktualna wysokość czynszu?';
$loyer['sbc']='Mjesečni iznos vašeg najma?';
$loyer['it']='Affitto';
$loyer['es']='Alquiler actual?';
$loyer['al']='Qiraja mujore?';
$loyer['tr']='Kira miktarınız?';
$loyer['ru']=$loyer['en'];

$etesvousproprietaire['fr']='Etes-vous propriétaire?';
$etesvousproprietaire['en']='Do you own your current flat/house?';
$etesvousproprietaire['de']='Sind Sie Hausbesitzer?';
$etesvousproprietaire['pt']='Você é o proprietário?';
$etesvousproprietaire['sbc']='Jesi li ti vlasnik?';
$etesvousproprietaire['pl']='Czy jesteś właścicielem?';
$etesvousproprietaire['it']='Lei è proprietario?';
$etesvousproprietaire['es']='¿Es usted proprietario?';
$etesvousproprietaire['al']='A jeni ju pronari?';
$etesvousproprietaire['tr']='Ev sahibimisiniz?';
$etesvousproprietaire['ru']=$adresse['en'];

$profession['fr']='Profession';
$profession['en']='Profession';
$profession['de']='Beruf';
$profession['pt']='Profissão';
$profession['pl']='Pawód';
$profession['sbc']='Profesija';
$profession['it']='Professione';
$profession['es']='Profesión';
$profession['al']='Profesion';
$profession['tr']=$profession['en'];
$profession['ru']=$profession['en'];

$enfants['fr']='Si vous avez des enfants &agrave; charge, de quel &acirc;ge?';
$enfants['en']='Age of your dependent children?';
$enfants['de']='Wie alt ?';
$enfants['pt']='Tem filhos ao seu encargo, se sim quantos ?';
$enfants['pl']='Czy jesteś obciążony finansowo utrzymaniem dzieci? w jakim wieku?';
$enfants['sbc']='Koja je dob Vaše djece? ';
$enfants['it']='Se avete minori a carico, indicate l\'età di ciascuno di essi';
$enfants['es']='Tiene niños a su cargo: sin niños. Si sí, ¿de qué edad?';
$enfants['al']='A keni fëmijë, dhe sa vjeqar janë?';
$enfants['tr']='Çoçuklarınız varsa eğer, kaç yaşındalar?';
$enfants['ru']=$enfants['en'];

$civil['fr']='Etat civil officiel?';
$civil['en']='Official marital status?';
$civil['de']='Offizieller Zivilstand?';
$civil['pt']='Estado civil oficial?';
$civil['pl']='Stan cywilny?';
$civil['sbc']='Bračno stanje?';
$civil['it']='Stato Civile?';
$civil['es']='Estado civil?';
$civil['al']='Statusi juaj?';
$civil['tr']='Medeni Durumunuz?';
$civil['ru']=$civil['en'];

$salaire['fr']='Revenu mensuel net';
$salaire['en']='Monthly salary';
$salaire['de']='Monatliches Nettoeinkommen';
$salaire['pt']='O seu salário limpo mensal';
$salaire['pl']='Miesięczna wysokość Twojego dochodu netto';
$salaire['sbc']='Mjesečna neto plaća';
$salaire['it']='Stipendio netto attuale (mens)';
$salaire['es']='Su salario neto (mensual)';
$salaire['al']='Të ardhurat mujore neto';
$salaire['tr']='Aylık net geliriniz';
$salaire['ru']=$salaire['en'];

$conjoint['fr']='Revenu de votre conjoint(e)';
$conjoint['en']='Partner\'s monthy salary';
$conjoint['de']='Einkommen Ehegatte';
$conjoint['pt']='O salário do seu cônjuge';
$conjoint['pl']='Miesięczny dochód partnera';
$conjoint['sbc']='Mjesečna neto plaća Vašeg/e supruga/e';
$conjoint['it']='Stipendio del coniuge';
$conjoint['es']='Salario de su cónyuge';
$conjoint['al']='Të ardhurat neto të gruas';
$conjoint['tr']='Eşinizin aylık geliri';
$conjoint['ru']=$conjoint['en'];

$supp['fr']='Revenu mensuel supplémentaire en CHF';
$supp['en']='Supplementary income (in CHF)';
$supp['de']='Nebeneinkommen';
$supp['pt']='Tem um salário adicional (mensal) ?';
$supp['pl']='Dodatkowy przychód(we frankach szwajcarskich)';
$supp['sbc']='Dodatna mesečna primanja u francima';
$supp['it']='Reddito mensile supplementare in CHF';
$supp['es']='Renta mensual suplementaria en CHF';
$supp['al']='Të ardhurat e tjera';
$supp['tr']='Aylık fazla geliriniz (CHF)';
$supp['ru']=$supp['en'];

$urgent['fr']='Ma demande est urgente';
$urgent['en']='Your request is really urgent';
$urgent['de']='Meine Anfrage ist dringend';
$urgent['pt']='O meu pedido é urgente';
$urgent['pl']='Moja prośba jest naprawdę pilna';
$urgent['sbc']='Moj zahtjev je hitan';
$urgent['it']='La mia richiesta è urgente';
$urgent['es']='Mi demanda es urgente';
$urgent['al']='Kërkesa ime është urgjente';
$urgent['tr']='Talebiniz acil mi';
$urgent['ru']=$urgent['en'];

$anticipe['fr']='<b>Le saviez-vous?</b> En cas de remboursement anticipé, vous payerez moins d\'intérêt au total!';
$anticipe['en']='<b>Tips</b>: In case of early repayment, you will benefit from a reduced total interest!';
$anticipe['de']='<b>Wissen Sie?</b> Im Falle einer vorzeitigen Rückzahlung, werden die Zinsen reduziert!';
$anticipe['pt']='<b>Sabia que?</b> Em caso de reembolso antecipado, você paga menos juros!';
$anticipe['pl']='<b>Tips:</b> W przypadku przedterminowej spłaty, Twoje zainteresowania spaść!';
$anticipe['sbc']='Znate-li? U slučaju ranije isplate kredita, platiti ćete manje kamate!';
$anticipe['it']='<b>Davvero?</b> In caso di rimborso anticipato, si paga meno interessi!';
$anticipe['es']='<b>Uste lo sabia?</b> En el caso de reembolso anticipado, usted paga menos interés!';
$anticipe['al']='<b>A e dini?</b> Në rast të pagesës të hershme, ju do të paguani më pak Zins në total!';
$anticipe['tr']='Önemli: Kredinizi erken kapatırsanız, faiz düşer!';
$anticipe['ru']=$anticipe['en'];


$remarque['fr']='Remarques'; 
$remarque['en']='Additional info';
$remarque['de']='Bemerkungen';
$remarque['pt']='Comentário';
$remarque['pl']='Dodatkowe uwagi';
$remarque['sbc']='Napomena';
$remarque['it']='Osservazioni';
$remarque['es']='Comentario';
$remarque['al']='A keni tjera pyetje';
$remarque['tr']='Daha fazla bilgi'; 
$remarque['ru']=$remarque['en'];

$connu['fr']='Comment avez-vous connu notre société';
$connu['en']='How did you know about us';
$connu['de']='Wie haben Sie &uuml;ber uns erfahren?';
$connu['pt']='Como conheceu a nossa empresa ?';
$connu['pl']='W jaki sposób się o nas dowiedziałeś?';
$connu['sbc']='Kako ste saznali za našu agenciju';
$connu['it']='Come sei venuto a conoscenza della nostra ditta';
$connu['es']='¿Como conocio nuestra sociedad ?';
$connu['al']='Si keni degjuar për kompanin tonë';
$connu['tr']='Şirketimizi nasil tanıdınız?';
$connu['ru']=$connu['en'];

$declaration['fr']='Déclaration d\'accord: j\'ai pris connaissances et accepte les conditions.';
$declaration['en']='I accept the terms and conditions:';
$declaration['de']='Ich bin mit den Nutzungsbedinungen einverstanden:';
$declaration['pt']='Declara&ccedil;ão de accordo:';
$declaration['pl']='Akceptuje wszystkie warunki i kondycje';
$declaration['sbc']='Izjava o pristanku:primio/la sam na znanje i prihvaćam sve uvjete/';
$declaration['it']='Dichiarazione d\'accordo:';
$declaration['es']='Declaraci&oacute;n de acuerdo:';
$declaration['al']='Pajtohem me këto Deklarata:';
$declaration['fr']='Anlayış Beyanı: bilgileri anladım ve şartları kabul ediyorum.';
$declaration['ru']=$declaration['en'];

$prime['fr']='Prime caisse maladie:<br/><i style="font-size:0.7em;">(de vous-même et famille si marié)</i>';
$prime['al']='<p style="font-size:0.8em; margin: 0px; padding: 0px; display: inline;">Krankenkassa juaj mujore:</p><br/><i style="font-size:0.6em;">(e juaj dhe e familjes tuaj nëse jeni i martuar)</i>';
$prime['en']='Monthly health insurance:<br/><i style="font-size:0.7em;">(yourself and family if married)</i>';
$prime['de']='Ihre monatliche Krankenkasse:<br/><i style="font-size:0.7em;">(Ihrer Familie dazu, falls Sie Verheiratet sind)</i>';
$prime['es']='<p style="font-size:1em; margin: 0px; padding: 0px; display: inline;">Seguro de enfermedad:</p><br/><i style="font-size:0.8em;">(el de usted y el de su familia)</i>';
$prime['it']='Cassa malati:<br/><i style="font-size:0.65em;">(per lei e famiglia se sposato/a</i>';
$prime['pt']='<p style="font-size:0.9em; margin: 0px; padding: 0px; display: inline;">Montante seguro doença (CHF):</p><br/><i style="font-size:0.8em;">(seu ou da sua familia se é casado)</i>';
$prime['sbc']='<p style="font-size:0.9em; margin: 0px; padding: 0px; display: inline;">Zdravstveno osiguranje (CHF):</p><br/><i style="font-size:0.8em;">(Vaše i Vašeg supružnika/ce)</i>';
$prime['pl']='<p style="font-size:0.9em; margin: 0px; padding: 0px; display: inline;">Ubezpieczenie zdrowotne (CHF):</p><br/><i style="font-size:0.8em;">(Twoje/-ej rodziny, jeśli żonaty)</i>';
$prime['tr']='Aylık sağlık sigorta primi:<br/><i style="font-size:0.7em;">(sizin ve aylenizin eğer evli iseniz)</i>';
$prime['ru']=$prime['en'];

$accord['fr']=
	"
	Je prends connaissance du fait et accepte que l’intermédiaire de crédit susmentionné transmet ma demande aux banques partenaires par Internet, par e-mail, par fax ou par courrier. Je prends en particulier connaissance de ce qui suit:
	<br/><br/>
	Examen de crédit et informations de crédit: je confirme que toutes mes informations fournies sont correctes et j’autorise les banques de crédit à se procurer des renseignements à mon sujet dans le cadre de l’examen de ma demande et de l’exécution de la relation contractuelle, par exemple auprès de banques, d’analystes de solvabilité extérieurs, d’offices publics, de la centrale d’information de crédit (ZEK), du centre de renseignement sur le crédit à la consommation (IKO) ou d’autres organismes prévus par la loi, ainsi qu’à notifier la ZEK, l’IKO ou d’autres organismes conformément au devoir prescrit par la loi. Je reconnais à la ZEK et l’IKO le droit de rendre les données qui leur ont été notifiées accessibles à leurs mem-bres. D’éventuels verrouillages de données décidés par moi-même à l’égard de la banque sont considérés comme levés. J’accepte que la banque ou ses partenaires contractuels procèdent à la consultation, au traitement et à l’enregistrement à l’étranger de certaines informations de crédit me concernant fournies dans ce contexte par des tiers, et notamment aussi celles fournies par la ZEK et l’IKO dans le cadre de l’examen de la demande de crédit et de l’exécution du contrat.
	<br/><br/>
	Les partenaires contractuels et leurs collaborateurs sont tenus de resp ecter la protection des données conformément aux exigences de la Loi fédérale sur la protection des données, le secret bancaire conformément à la Loi fédérale sur les banques ainsi que le principe de confidentialité. Données personnelles et protection des données: j’autorise les banques à traiter et analyser mes données, de même qu’à les utiliser à des fins de marketing et d’analyses internes en
	Suisse et à l’étranger.
	<br/><br/>Je suis en droit de révoquer cette autorisation en tout temps. Les banques peuvent déléguer partiellement des prestations à des tiers («prestataires»), en particulier dans les domaines du déroulement de processus, de la sécurité informatique, de la gestion de systèmes, d’études de marché, du calcul de risques de crédit et de marché liés aux affaires, de même que la gestion de relations contractuelles. J’accepte que des prestataires aient accès à toutes mes données traitées dans ce cadre. Les banques peuvent faire traiter mes données dans des états qui ne disposent pas d’une protection des données équivalente à celle de la Suisse et charger des prestataires de tels Etats de traiter mes données. Ces données ne sont transmises que si ces prestataires se sont engagés au préalable à fournir un niveau adéquat de protection des données. Je suis conscient que mes données seront transmises à l’étranger et que cela se fera aussi par Internet. J’accepte ce type de transmission de données ainsi que leur traitement en Suisse et à l’étranger. La banque a le droit de refuser la présente demande sans en indiquer les raisons. Je suis conscient qu’Internet est un réseau ouvert accessible à tous. En conséquence, l’intermédiaire susmentionné et les banques ne peuvent pas garantir la confidentialité des données transmises par Internet. Les conclusions de tiers sur une relations bancaire existant ou sur le point d’exister entre moi-même et les banques sont donc possibles.
	";

	
$accord['de']=
	"
	Ich nehme zur Kenntnis und willige ein, dass Chasflex meinen Antrag an die Bank über das Internet, via Email oder per Fax/Post weiterleitet. Insbesondere nehme ich zur Kenntnis: 
	<br/><br/>Kreditprüfung und Kreditauskunftsdaten: Ich bestätige die Richtigkeit aller meiner Angaben und ermächtige die Bank, im Zusammenhang mit der Prüfung dieses Antrags und der Abwicklung der vertraglichen Beziehung über mich Auskünfte, z.B. bei Banken, externen Bonitätsprüfern, staatlichen Stellen, der Zentralstelle für Kreditinformation (ZEK), der Informationsstelle für Konsumkredit (IKO) und weiteren vom Gesetz vorgesehenen oder anderen Stellen, einzuholen sowie der ZEK, der IKO und bei entsprechenden gesetzlichen Pflichten auch anderen Stellen Meldung zu erstatten. Ich anerkenne das Recht der ZEK und der IKO, ihren Mitgliedern über die gemeldeten Daten Auskünfte zu erteilen. Allfällige von mir verfügte Datensperren gelten gegenüber der Bank als aufgehoben. Ich bin damit einverstanden, dass gewisse der in diesem Zusammenhang bei Dritten über mich eingeholten Kreditauskunftsdaten und namentlich auch diejenigen der ZEK und der IKO im Zusammenhang mit der Antragsprüfung und Vertragsabwicklung von der Bank oder deren Vertragspartnern ausserhalb der Schweiz abgerufen, bearbeitet und gespeichert werden. Vertragspartner und deren Mitarbeiter sind dabei zur Einhaltung des Datenschutzes gemäss den Anforderungen des schweizerischen Datenschutzgesetzes, zur Wahrung des Bankkundengeheimnisses entsprechend dem schweizerischen Bankengesetz und zur Vertraulichkeit verpflichtet. 
	<br/><br/>Persönliche Daten und Datenschutz: Ich ermächtige die Bank, meine Daten zu bearbeiten und auszuwerten sowie zu Marketingzwecken und -auswertungen im In- und Ausland zu verwenden. Ich kann diese Ermächtigung jederzeit widerrufen. Die Bank kann Dienstleistungen teilweise an Dritte auslagern (\"Dienstleister\"), insbesondere im Bereich Abwicklung von Geschäftsprozessen, IT-Sicherheit und Systemsteuerung, Marktforschung, der Berechnung von geschäftsrelevanten Kredit- und Marktrisiken sowie der Administration von Vertragsverhältnissen. Ich bin damit einverstanden, dass Dienstleister Zugriff auf alle meine Daten haben, welche in diesem Rahmen bearbeitet werden. 
	<br/><br/>Die Bank kann meine Daten in Staaten bearbeiten lassen, die über keinen gleichwertigen Datenschutz wie die Schweiz verfügen, und Dienstleister in solchen Staaten mit der Bearbeitung meiner Daten beauftragen. Eine Weitergabe der Daten erfolgt nur, wenn sich die Dienstleister vorgängig zu einem angemessenen Datenschutzniveau verpflichtet haben. Ich bin mir bewusst, dass meine Daten ins Ausland übermittelt und auch über das Internet übertragen werden. Ich akzeptiere solche Übermittlungen und Bearbeitungen im In- und Ausland. Die Bank hat das Recht, den vorliegenden Antrag ohne Angabe von Gründen abzulehnen.
	<br/><br/>Mir ist bewusst, dass das Internet ein offenes, für jedermann zugängliches Netz darstellt. Entsprechend kann chasflex sowie die Bank die Vertraulichkeit von Daten bei der Übertragung über das Internet nicht gewährleisten. Rückschlüsse Dritter auf eine zwischen mir und der Bank bestehende bzw. bevorstehende Bankbeziehung sind daher möglich.  
	";
	
$accord['it']=
	"
	Prendo atto e accetto che Chasflex Sarl di credito inoltra la mia richiesta alla banca tramite internet, via e-mail o per fax/posta. In particolare prendo atto che:
	<br/><br/>Verifica di credito e dati informativi sul credito: confermo la correttezza dei dati indicati e autorizzo la banca a richiedere informazioni sulla mia persona correlate alla verifica della mia richiesta e al trattamento del contratto, p. es. presso banche, uffici esterni responsabili della verifica della solvibilità, autorità statali, la Centrale per le informazioni sui crediti (ZEK), la Centrale informativa sui crediti al consumo (IKO) e altre istituzioni previste dalla legge. Riconosco alla ZEK e all’IKO il diritto di trasmettere i miei dati ai loro membri. Un eventuale blocco dei dati da me richiesto è da considerare nullo per la banca. Autorizzo inoltre la banca e i suoi partner contrattuali all’estero a consultare, elaborare e memorizzare determinati miei dati informativi sul credito richiesti a terzi, nonché quelli emessi dalla ZEK e dall'IKO correlati alla presente richiesta e al trattamento del contratto. I dati vengono trasmessi unicamente ai partner contrattuali e ai loro collaboratori se si impegnano preventivamente a rispettare il segreto bancario e ad assicurare una protezione dei dati di livello equiparabile a quella svizzera. 
	<br/><br/>Dati personali e protezione dei dati: autorizzo la banca a trattare e a valutare i miei dati, così come ad utilizzarli ai fini di marketing e di valutazione in Svizzera e all’estero. Mi riservo il diritto di ritirare questa autorizzazione in qualsiasi momento. Prendo atto che la banca può trasferire a terzi («fornitori di servizi») l'esecuzione di determinati servizi, in particolare nell'ambito dello svolgimento di processi operativi, della sicurezza IT e della gestione dei sistemi, della ricerca di mercato, del calcolo di rischi di credito e di mercato nonché dell'amministrazione di rapporti contrattuali. Dichiaro di autorizzare i fornitori di servizi ad accedere ai miei dati da elaborare in tali ambiti. La banca può far trattare i miei dati in nazioni che non dispongono di una protezione dati equivalente a quella svizzera ed incaricare i prestatori di servizi di tali nazioni del trattamento dei miei dati. La trasmissione dei dati può avvenire soltanto se i prestatori di servizio si impegnano anticipatamente all’applicazione di un livello di protezione dei dati adeguato. Sono a conoscenza del fatto che i miei dati vengono trasferiti all’estero anche tramite internet. Con la sottoscrizione della presente dichiaro di accettare questo tipo di trasmissione e di trattamento in Svizzera e all’estero. La banca si riserva il diritto di rifiutare la mia richiesta senza dovermi spiegazioni.Sono consapevole che internet è una rete mondiale, aperta ed accessibile a tutti. Di conseguenza il Chasflex Sarl e la banca non sono in grado di garantire la riservatezza dei dati nella trasmissione tramite internet. È possibile quindi che terzi possano risalire al rapporto già in corso o previsto tra me e la banca.
	";

$accord['tr']=
	"
	Beyan ediyorum ve kabul ediyorum ki aracı kredi şirketi, isteğimi partner bankalara internet aracılığıyla, e-mail, fax veya postadan, iletsin. Aşağıdaki bilgilerden özelikle bildiriliyorum:
	<br/><br/>
	Kredi incelemesi ve kredi bilgileri için: Bütün bilgilerin doğru olduğunu teyit ediyorum ve kredi bankalarının hakkimda, kredi inceleme süreci ve sözleşme gerçekleşene kadar, özel bilgiler edinmelerine izin veriyorum. Örneğin bankaları, dış kredi analistlerine, devlet dairelerine veya merkez kredi bilgisine,  
	(ZEK), bilgi merkezinden tüketici kredi istihbaratına kadar (IKO) veya diğer yasal tanınmış organlar, ve IKO yu bildirmek veya diğer kurumları.IKO nun özel bilgilerimi vermesine izin veriyorum.Böylece önceden vermiş olduğum muhtemel özel bilgi kilitini ortadan kaldırıyorum.Banka veya diger kontratlı partnerlerin dosyama bakmalarına, ügraşmalarına ve yürt dışına bazı kredi bilgilerin bu kontexde verilmesine izin veriyorum, ve tabiki IKO nun bilgileri.   
	<br/><br/>
	Sözleşmeli ortaklar ve çalışanları, Bankalar ve gizlilik Federal Kanunu uyarısınca Federal Yasa gereklerine uygun olarak veri korumaya, banka gizliligini korumaya ve gizlilik ilkesini mecburdur.Kişisel bilgi ve verilerin korunması: Kişisel bilgilerimin banka yetkililer tarafından analiz edilmesine, pazarlama amaçlı kulanmasına ve İsviçre'de ve yurt dışında iç analiz için kullanmasına izin veriyorum. 
	<br/><br/>Benim herhangi bir zamanda bu yetkiyi iptal etmeye yetkim var. Bankalar kısmen özellikle süreç akış boyunca, bilgisayar güvenliği, sistem yönetimi, pazar araştırması, kredi riskinin hesaplanması ve alanlarında, üçüncü şahıslara ('sağlayıcılara') hizmet, piyasayla ilgili iş, hem de akdi ilişkiler yönetimi gibi devredebilir. Ben servis sağlayıcılarının çerçevesinde işlenen tüm verilere erişimi kabul ediyorum. Bankalar İsviçre bankalar koruma eşdeğer kanunu olmayan Devletlere benim veri işlemek için izin veriyorum.Bu sağlayıcıların veri koruma yeterli düzeyde sağlamak için önceden kararlı iseniz bu veriler iletilir. Benim veri yurtdışında iletileceginin farkındayım ve bunun internet üzerinden de olacağının farkındayım.Ben İsviçre'de ve yurtdışında bu tür veriyi kabul ediyorum. Banka sebep olmadan bu başvuruyu reddetme hakkına sahiptir.Internet herkesin erişebileceği bir açık ağ olduğunun farkındayım.Bu nedenden dolayı, banka partnerleri ve bankalar Internet üzerinden iletilen verilerin gizliliğini garanti edemez.Ben ve bankalar arasında bir mevcut bankacılık ilişkisi mümkündür.
	";
	
$accord['en']='I do agree with the data protection disposition. I accept that Multicredit treats electronically the personal data that I have given to them, in order to treat my credit demand, and I agree that they will contact me. I could revocate my agreement at any time, with full effect for the future.';
$accord['pt']='Eu concordo com as medidas de prote&ccedil;ão de dados. Eu aceito que Multicrédit trate eletricamente os dados particulares que eu dou para o tratamento de o meu pedido e do meu contato. Eu posso revocar meu acordo qualquer hora a com efeito para o futuro.';
$accord['pl']='Zgadzam sią z przepisem o ochronie danych. Wyrażam zgodę na użytek elektroniczny moich danych presonalnych przez Multicredit dla celów związanych z moją prośbą o kredyt i jestem otwarty na kontakt ze strony Multicredit. Jestem gotowy na powtórzenie mojej zgody w przyszłości, w przypadku jej koniecznoiści.';
$accord['sbc']='Prihvaćam zaštitu svih podataka za navedeni kredit. Prihvaćam zaštitu mojih osobnih podataka  koje sam internetskim putem dao/la na povjerenje agenciji Multicrédit, kako bi proučili moj zahtjev i kontaktirali me. Prihvaćam na znanje sve što slijedi: ';
$accord['es']='Estoy de acuerdo y acepto las condiciones. Estoy informado de las disposiciones de la protección de mis datos. Acepto que el intermediario  mencionado (Multicrédit) transmita a los bancos asociados por correo electrónico, por fax o por correo postal  los datos personales que pongo a disposición para el tratamiento de mi solicitud y me contacten. Doy mi consentimiento en particualr sobre lo siguiente: Estudio de crédito e información de crédito: confirmo que todas las informaciones entregadas son correctas y autorizo a los bancos de crédito a proceder a averiguaciones sobre mi persona en el marco del estudio de mi solicitud y de la ejecución de la relación de contratual.';
$accord['al']='Unë pajtohem me dispozitat e mbrojtjes së të dhënave. Pajtohem gjithashtu që Cashflex Multicredit ti shfrytëzoj të dhënat e mia dhe procesin ta udhëheq në mënyrë elektronike. Unë konfirmoj se të dhënat e mia jan të vërteta dhe jap pëlqimin tim që Cashflax Multicredit dhe Bankat ti përdorin të dhënat e mia personale për nevojat e tyre.';
$accord['ru']=$accord['en'];

$bouton['fr']='Envoyer votre demande de crédit';
$bouton['en']='Send form';
$bouton['de']='Senden';
$bouton['pt']='Enviar o pedido de crédito';
$bouton['pl']='Wyślij formularz';
$bouton['sbc']='Poslati Vaš zahtjev za kredit';
$bouton['it']='Spedire il modulo';
$bouton['es']='Enviar';
$bouton['al']='Dërgo kërkesën';
$bouton['tr']='Kredi talebinizi gönderiniz';
$bouton['ru']='Send form';

$newsletter['fr']='Inscription &agrave; la newsletter';
$newsletter['en']='Newsletter subscribe';
$newsletter['de']='Newsletter abonnieren';
$newsletter['pt']='Subscri&ccedil;ão da newsletter';
$newsletter['pl']='Prenumerowanie biuletynu informacyjnego';
$newsletter['sbc']='Pretplata na newsletter';
$newsletter['it']='Iscrizione alla newsletter';
$newsletter['es']='Suscripción al boletín informativo';
$newsletter['al']='Abonohu në Newsletter';
$newsletter['tr']='Newslettere abonelik';
$newsletter['ru']='Newsletter subscribe';

$nb_enfants['fr']='Pas d\'enfants';
$nb_enfants['en']='No children';
$nb_enfants['de']='Keine Kinder';
$nb_enfants['pt']='Nenhum';
$nb_enfants['pl']='Brak dzieci';
$nb_enfants['sbc']='Nemam djecu';
$nb_enfants['it']='Senza figli';
$nb_enfants['es']='Sin ni&ntilde;os';
$nb_enfants['al']='Skam fëmijë';
$nb_enfants['tr']='çocuk yok';
$nb_enfants['ru']='нет детей';

$eta_form['fr'][0]='Célibataire';
$eta_form['fr'][1]='Marié(e)';
$eta_form['fr'][2]='Divorcé(e)';
$eta_form['fr'][3]='Séparé(e)';
$eta_form['fr'][4]='Concubinage';
$eta_form['fr'][5]='Veuf / Veuve ';

$eta_form['en'][0]='Single';
$eta_form['en'][1]='Married';
$eta_form['en'][2]='Divorced';
$eta_form['en'][3]='Separate';
$eta_form['en'][4]='Concubinage';
$eta_form['en'][5]='Widow / Widowed';

$eta_form['de'][0]='Ledig';
$eta_form['de'][1]='Verheiratet';
$eta_form['de'][2]='Geschieden';
$eta_form['de'][3]='Gerichtlich getrennt';
$eta_form['de'][4]='Konkubinat';
$eta_form['de'][5]='Witwe / Witwer';

$eta_form['pt'][0]='Solteiro';
$eta_form['pt'][1]='Casado';
$eta_form['pt'][2]='Divorciado';
$eta_form['pt'][3]='Separar';
$eta_form['pt'][4]='Concubinato';
$eta_form['pt'][5]='Vi&uacute;vo';

$eta_form['pl'][0]='Wolny';
$eta_form['pl'][1]='Zonaty';
$eta_form['pl'][2]='Rozwiedziony';
$eta_form['pl'][3]='W separcaji';
$eta_form['pl'][4]='Konkubinat';
$eta_form['pl'][5]='Wdowiec/Wdowa';

$eta_form['sbc'][0]='Samac';
$eta_form['sbc'][1]='Oženjen';
$eta_form['sbc'][2]='Rastavljen';
$eta_form['sbc'][3]='U procesu rastave braka';
$eta_form['sbc'][4]='Izvanbračna veza';
$eta_form['sbc'][5]='Udovac / udovica';

$eta_form['it'][0]='Celibe / Nubile';
$eta_form['it'][1]='Coniugato/a';
$eta_form['it'][2]='Divorziato/a';
$eta_form['it'][3]=' Separato/a';
$eta_form['it'][4]='Convivente';
$eta_form['it'][5]='Vedovo/a';

$eta_form['es'][0]='Soltero/a';
$eta_form['es'][1]='Casado/a';
$eta_form['es'][2]='Divorciado/a';
$eta_form['es'][3]='Separado/a';
$eta_form['es'][4]='En concubinato';
$eta_form['es'][5]='Viudo/a';

$eta_form['al'][0]='Beqar';
$eta_form['al'][1]='I martuar';
$eta_form['al'][2]='I ndarë oficialisht';
$eta_form['al'][3]='I ndarë jooficialisht';
$eta_form['al'][4]='Bashkjetesë';
$eta_form['al'][5]='Ve / ve';

$eta_form['tr'][0]='Bekar';
$eta_form['tr'][1]='Evli';
$eta_form['tr'][2]='Boşanmış';
$eta_form['tr'][3]='Ayrılmış';
$eta_form['tr'][4]='Beraber yaşantı';
$eta_form['tr'][5]='Dul';

$eta_form['ru']=$eta_form['en'];

$permis['fr'][0]='Permis C';
$permis['fr'][1]='Permis B';
$permis['fr'][2]='Permis L';
$permis['fr'][3]='Permis G';

$permis['en'][0]='C Permit';
$permis['en'][1]='B Permit';
$permis['en'][2]='L Permit';
$permis['en'][3]='G Permit';

$permis['de'][0]='C Bewilligung';
$permis['de'][1]='B Bewilligung';
$permis['de'][2]='L Bewilligung';
$permis['de'][3]='G Bewilligung';

$permis['pt'][0]='Permisso C';
$permis['pt'][1]='Permisso B';
$permis['pt'][2]='Permisso L';
$permis['pt'][3]='Permisso G';

$permis['sbc'][0]='C Permit';
$permis['sbc'][1]='B Permit';
$permis['sbc'][2]='L Permit';
$permis['sbc'][3]='G Permit';

$permis['pl'][0]='C Pozwolenie';
$permis['pl'][1]='B Pozwolenie';
$permis['pl'][2]='L Pozwolenie';
$permis['pl'][3]='G Pozwolenie';

$permis['it'][0]='Permesso C';
$permis['it'][1]='Permesso B';
$permis['it'][2]='Permesso L';
$permis['it'][3]='Permesso G';

$permis['es'][0]='Permiso C';
$permis['es'][1]='Permiso B';
$permis['es'][2]='Permiso L';
$permis['es'][3]='Permiso G';

$permis['al'][0]='Ausweis C';
$permis['al'][1]='Ausweis C';
$permis['al'][2]='Ausweis C';
$permis['al'][3]='Ausweis C';

$permis['tr'][0]='Ausweis / Permi C';
$permis['tr'][1]='Ausweis / Permi B';
$permis['tr'][2]='Ausweis / Permi L';
$permis['tr'][3]='Ausweis / Permi G';

$permis['ru']=$permis['en'];

$carte_l['fr']='Carte de légitimation';
$carte_l['en']='Legitimization card';
$carte_l['de']='Legitimationskarten';
$carte_l['pt']='Cart&otilde;es de legitima&ccedil;ão';
$carte_l['sbc']='Legitimacijska karta/Osobna karta';
$carte_l['it']='Carta di legittimazione';
$carte_l['es']='Tarjeta de legitimaci&ograve;n';
$carte_l['al']='Kartë Legitimacioni';
$carte_l['pl']='Karta legitymacyjna';
$carte_l['ru']='удостоверение личности';

$payepension['fr']='Recevez-vous ou payez-vous une pension?';
$payepension['en']='Do you receive or pay a pension?';
$payepension['de']='Erhalten oder zahlen Sie eine Rente?';
$payepension['pt']='Você receber ou pagar-lhe uma pensão?';
$payepension['sbc']='Primate li ili plaćate Vašu mirovinu?';
$payepension['it']='Ricevete o pagate une pensione?';
$payepension['es']='¿Recibe usted o pagarle una pensión?';
$payepension['al']='A merrni ose a paguani ndonjë pension?';
$payepension['pl']='Czy otrzymujesz lub płacisz rentę?';
$payepension['tr']='Nafaka alıyor veya öduyomusunuz?';
$payepension['ru']='Получаете ли Вы или платить вам пенсию?';

$jepaye['fr']='paye une pension';
$jepaye['de']='zahle einen Unterhalt';
$jepaye['en']='I pay alimony';
$jepaye['al']='Unë paguaj një pension';
$jepaye['pt']='Eu pago uma pensão';
$jepaye['it']='Pago una pensione';
$jepaye['es']='Pago una pensión';
$jepaye['pl']='Płacę rentę';
$jepaye['sbc']='Plaćam alimentaciju';
$jepaye['tr']='Nafaka öduyorum';
$jepaye['ru']='Я платить пенсии';

$tupaye['fr']='reçoit une pension';
$tupaye['de']='erhalte einen Unterhalt';
$tupaye['en']='I receive alimony';
$tupaye['al']='Unë marrë një pension';
$tupaye['pt']='Eu recebo uma pensão';
$tupaye['it']='Ricevo una pensione';
$tupaye['es']='Recibo una pensión';
$tupaye['pl']='Otrzymuję emeryturę';
$tupaye['sbc']='Primam alimentaciju';
$tupaye['tr']='Nafaka alıyorum';
$tupaye['ru']='Я получаю пенсию';

$pension['fr']='Montant de la pension';
$pension['de']='Höhe der Rente';
$pension['en']='Alimony amount';
$pension['al']='Lartësia e pensionit';
$pension['pt']='Montante da pensão';
$pension['it']='Importo della pensione';
$pension['es']='Importe de la pensión';
$pension['pl']='Wysokość renty';
$pension['sbc']='Iznos mjesečne mirovine';
$pension['tr']='Nafaka miktarı';
$pension['ru']='Размер пенсии';

$depuisquand['fr']='Depuis quand';
$depuisquand['en']='Since when';
$depuisquand['de']='Seit wann';
$depuisquand['pt']='Desde quando';
$depuisquand['pl']='Od kiedy';
$depuisquand['sbc']='Otkada';
$depuisquand['it']='Da quando';
$depuisquand['es']='Desde cuando';
$depuisquand['al']='Prej kur';
$depuisquand['tr']='Ne zamandan beri';
$depuisquand['ru']='так как при';

$depuisquandad['fr']='Depuis quand à cette adresse';
$depuisquandad['en']='Since when do you live at your current location';
$depuisquandad['de']='Seit wann sind Sie hier wohnhaft';
$depuisquandad['pt']='Quanto tempo neste endereço';
$depuisquandad['pl']='Jak długo pod tym adresem';
$depuisquandad['sbc']='Koliko dugo stanujete na navedenoj adresi';
$depuisquandad['it']='Da quanto tempo abita a questo indirizzo';
$depuisquandad['es']='¿Cuánto tiempo en esta dirección';
$depuisquandad['al']='Nga cila datë jeni në këtë adresë';
$depuisquandad['tr']='Ne zamandan beri bu adresdesiniz';
$depuisquandad['ru']='Как долго по этому адресу';
 
$valeur_r['fr']='Une valeur est requise';
$valeur_r['en']='Please complete the information';
$valeur_r['de']='Bitte ausf&uuml;llen';
$valeur_r['pt']='Por favor, preencha';
$valeur_r['sbc']='Molimo Vas ispunite';
$valeur_r['pl']='Proszę uzupełnij informacje';
$valeur_r['it']='Si prega di compilare';
$valeur_r['es']='Por favor, rellene';
$valeur_r['al']='Ju lutemi ti plotësoni';
$valeur_r['tr']='Bilgi vermeniz talep edilmektedir';
$valeur_r['ru']='требуется значение';

//Checkbox label
$necessair['fr']='Je confirme que je n\'ai pas de poursuites en cours';
$necessair['en']='I confirm that I have no prosecutions';
$necessair['de']='Ich best&auml;tige, dass ich keine Betreibungen habe';
$necessair['pt']='Confirmo que não tenho dividas';
$necessair['sbc']='Potvrđujem da nemam nikakvu kaznenu prijavu o neplaćanju dugova ';
$necessair['pl']='Potwierdzam, że mam/ nie mam postępowań karnych w toku';
$necessair['it']='Confermo di non aver procedimenti esecutivi in corso';
$necessair['es']='Confirmo que no tengo juicios';
$necessair['tr']='Hacizimin olmadığını onaylıyorum';
$necessair['ru']=$necessair['en'];
 
$checkbox['fr']='Vous devez accepter les conditions!';
$checkbox['de']='Sie müssen die allgemeinen Bedingungen akzeptieren!';
$checkbox['al']='Ju duhet të akceptoni regullat tona!';
$checkbox['en']='Please accept the conditions!';
$checkbox['pt']='Agradecemos-lhe de aceitar a declara&ccedil;ão de accordo';
$checkbox['pl']='Proszę zaakceptuj kondycje!';
$checkbox['pt']='Please accept the conditions!';
$checkbox['es']='Please accept the conditions!';
$checkbox['sbc']='Molim Vas da prihvatite sve uvjete';
$checkbox['tr']='Koşulları kabul ediyorum!';
$checkbox['ru']=$checkbox['en'];
 
//Link zu Tooltip
$was['fr']='En savoir plus?';
$was['en']='What?';
$was['de']='Was?';
$was['pt']='quais?';
$was['pl']='Chcesz dowiedzieć się więcej?';
$was['sbc']='Znati više?';
$was['it']='Per saperne di più?';
$was['es']='What?';
$was['al']='Qka?';
$was['tr']='Daha fazla bilgi mi istiyorsunuz?';
$was['ru']=$was['en'];

//Tooltip
$tooltip1['fr']='Vous ne pouvez faire de crédit;dit si vous êtes en poursuites. Appelez-nous au <b>026 322 23 00</b> pour plus d\'informations.';
$tooltip1['en']='If you do not understand, please call us. Phone: <b>026 322 23 00 </b>';
$tooltip1['de']='Falls Sie das nicht verstehen, rufen Sie uns an. Tel: <b>026 322 23 00 </b>';
$tooltip1['pt']='Se você não percebeu, telefone-nos. Tel: <b>026 322 23 00 </b>';
$tooltip1['pl']='Nie możesz ubiegać się o kredyt? Jesteś w trakcie postępowania kranego? W innych przypadkach, nie wahaj się z nami skontaktować pod numerem telefonu 026 322 23 00, by uzyskać więcej informacji';
$tooltip1['sbc']='Imate li nedoumica, molim Vas da nas kontaktirate. Telefon: <b> 026 322 23 00 </b>';
$tooltip1['it']='Se non si capisce, si prega di telefonare. Telefono: <b> 026 322 23 00 </b>';
$tooltip1['es']='Si usted no entiende, por favor llámenos. Teléfono: <b> 026 322 23 00 </b>';
$tooltip1['al']='Nëse diqka nuk kuptoni, ju lutem na telefononi.Kontakt tel: <b> 026 322 23 00 </b>';
$tooltip1['tr']='Haciz olduğunuzu saklıyamasınız. Daha fazla bilgi için <b>026 322 23 00</b> numarayı arayınız.';
$tooltip1['ru']=$tooltip1['en'];

//Alert 
$frage['fr']='Merci de confirmer que vous n\\\'avez ni poursuite ni acte de defaut de bien. Appelez-nous au 026 322 23 00 pour en savoir plus.';
$frage['en']='Please confirm that you have no collection procedures. Call us for more information: 026 322 23 00';
$frage['de']='Bitte bestetigen Sie, dass Sie keine Betreibungen haben. Fur mehr Informationen, kontaktieren Sie uns: 026 322 23 00';
$frage['pt']='Por favor, confirme que voce nao tem dividas. Para mais informaes queira-nos contactar: 026 322 23 00';
$frage['pl']='Dziękujemy za potwierdzenie, że Twoje platnoćci czy dobra materialne nie są wstrzymane';
$frage['sbc']='Molim Vas da potvrdite da nemate nikakvu kaznenu prijavu niti bilo kakvu prijavu o neplaćanju Vaših dugova. Kontaktirajte nas: 026 322 23 00';
$frage['it']='Grazie per aver confermato di non avere in corso procedimenti esecutivi né di essere soggetti di attestati di carenza di beni.';
$frage['es']='Por favor, confirme que usted no tiene procedimientos de cobro.';
$frage['al']='Ju lutem konfirmoni qe nuk keni procedurat e grumbullimit.';
$frage['tr']='Haciz ve hicra olmadığını onaylıyorum. Daha fazla bilgi için 026 322 23 00 numarayı arayınız.';
$frage['ru']=$frage['en'];

$pretexte['fr']=
'
<div class="eem">
	<ul>
		<li class="p1">Une fois le formulaire complété, <strong>nous vous contactons dans les 10 minutes</strong></li>
		<li class="p2">Vous nous envoyez vos documents</li>
		<li class="p3">Réponse définitive <strong>en 48h</strong></li>
		<li class="p4">Le tout est <b>gratuit et sans engagement</b></li>
	</ul>
	<div>
		Possibilité de rachat et regroupement de vos <b>crédits en cours</b>, vos <b>leasings</b> et le <b>solde de vos cartes de crédit</b> à un taux avantageux!
		<br/> 
		<span>Jusqu\'à <b>-40% sur vos mensualités!</b></span>
		Vous souhaitez une offre de rachat? <b>Indiquez le total du rachat dans le montant souhaité</b>.
	</div>
</div>
';

$pretexte['pl']=            
'
<div class="eem">
	<ul>
		<li class="p1">Kiedy tylko wypełnisz całkowicie Twój formularz, skontaktujemy sią z Tobą w ciągu <strong>10 minut</strong></li>
		<li class="p2">Wyślij nam Twoje dokumenty</li>
		<li class="p3">Ostateczna odpowiedź <strong>en 48h</strong></li>
		<li class="p4">Wszystko to <b>za darmo i bez jakiegokolwiek zobowiązania z Twojej strony</b></li>
	</ul>
	<div>
		Możliwość wykupu i konsolidacji Twoich<b>kredytów</b>, Twoich <b>leasingów</b> i <b>zadłużeń na Twoich kartach kredytowych!</b>
		<br/>w bardzo atrakcyjnym oprocentowaniu
		<span>do 40% na Twoje miesięczne płatności!</b></span>
		<b>Podaj całkowitą kwotę Twoich zadłużeń, które chcesz byśmy wykupili</b>.
	</div>
</div>
';

$pretexte['it']=
'
<div class="eem">
	<ul>
		<li class="p1">Una volta completato il modulo, sarete contattati entro <b>10 minuti</b> ;</li>
		<li class="p2">Inviateci i vostri documenti ;</li>
		<li class="p3">Risposta definitiva in 48 ore ;</li>
	</ul>
	<div>
		Possibilità di raggruppare i vostri crediti attuali, i vostri leasing e i saldi delle vostre carte di credito!
		<br/>
		<span>Meno del 40% sulle vostre rate mensili</span>
		Volete un\'offerta di raggruppamento? Indicate il totale da raggruppare nell\'importo desiderato.
	</div>
</div>	
';

$pretexte['en']=
'
<div class="eem">
	<ul>
		<li class="p1">Complete the form: <strong>we will contact you within 10 minutes</strong></li>
		<li class="p2">You send us your documents</li>
		<li class="p3">Final answer <strong>within 48h</strong></li>
		<li class="p4">You get a <b>free non-binding offer</b></li>
	</ul>
	<div>
		We also offer debt consolidation possibilities. <b>Personal loans</b>, <b>leasings</b> and <b>credit card balance</b>.
		<br/>
		<span>Up to 40% discount on your payments!</b></span>
		For an offer, just indicate <b>the total amount</b> of your loans, card balance and leasings, we will make you an offer.
	</div>
</div>
';

$pretexte['es']=
'
<div class="eem">
	<ul>
	<li class="p1">Una vez que haya rellenado su solicitud, le contactaremos en los <b>diez minutos</b></li>
	<li class="p2">Envíenos los documentos documents necesarios</li>
	<li class="p3">Una respuesta definitiva en el plazo de <b>48 horas</b></li>
	<li class="p4">Oferta <b>gratuita sin compromiso</b></li>
	</ul>
	<div>
		Reagrupamiento de créditos: compramos sus <b>créditos personales</b>, <b>leasings</b> y <b>soldos de tarjetas de crédito</b> con una taza de interes atractiva.
		<br/>
		<span><b>Menos 40% en sus facturas!</b></span>
		Para una oferta, apenas indique el montante total de sus préstamos, tarjetas de crédito y leasings.
	</div>
</div>
';

$pretexte['al']=
'
<div class="eem">
	<ul>
		<li class="p1">Kur ta keni plotsuar formularin, ne do t\'ju kontaktojmë brenda 10 minutave</li>
		<li class="p2">Dërgoni dokumentet tuaja</li>
		<li class="p3">Do të keni një përgjigje brenda 48 orëve</li>
		<li class="p4">Gjithqka është falas dhe e padetyrueshme</li>
	</ul>
	<div>
		Mundësia e <b>grumbullimit dhe konsolidimit</b> të kredive tuaja të pazgjedhura, <b>kontratat e leasingut</b> dhe <b>konsolidimi i kreditkartave</b> me q\'mime të volitshme!
		<br/>
		<span>Deri në 40% kursim në pagesat mujore</span>
		<b>Atëher plotsone te shuma e dëshiruar</b>.
	</div>
</div>
';

$pretexte['de']=
'
<div class="eem">
	<ul>
		<li class="p1">Wenn das Formular ausgefüllt ist, kontaktieren wir Sie.</li>
		<li class="p2">Schicken Sie uns Ihre Dokumente</li>
		<li class="p3">Es gibt eine Antwort innerhalb <strong>von 48 Stunden</strong></li>
		<li class="p4">Alles ist <b>kostenlos und unverbindlich</b></li>
	</ul>
	<div>
		Möglichkeit der Erlösung <b>Ihrer ausstehenden Kredite</b>, <b>Leasingverträge</b> und Ihr <b>Guthaben auf Ihrer Kreditkarte</b> zu super Vorteilen!
		<br/>
		<span>-40% auf Ihre monatlichen Zahlungen!</span>
		Sie möchten ein Angebot? <b>Geben Sie die insgesamte Höhe in der gewünschten Menge</b>.
	</div>
</div>
';

$pretexte['pt']='
<div class="eem">
	<ul>
	<li class="p1">Uma vez o formulário preenchido, entraremos em contacto com você dentro de <strong>10 minutos</strong></li>
	<li class="p2">Envie-nos os seus documentos</li>
	<li class="p3">Resposta definitiva <strong>dentro de 48 horas</strong></li>
	<li class="p4">Obtenha <b>uma oferta gratuita e sem compromisso</b></li>
	</ul>
	<div>
		Consolidação de dívidas: compramos os seus <b>créditos pessoais</b>, <b>leasings</b> e <b>saldos de cartões de crédito</b> a uma taxa de juros interessante!
		<br/>
		<span>Até -40% de desconto!</b></span>
		Para uma oferta indique <b>o montante total</b> dos seus empréstimos, saldos de cartões de crédito e leasings.
	</div>
</div>
';

$pretexte['tr']=
'
<div class="eem">
	<ul>
		<li class="p1">Formu tamamladığınızda, <strong>biz 10 dakika içinde sizinle irtibata geçeceğiz</strong></li>
		<li class="p2">Bize belgelerinizi gönderin</li>
		<li class="p3"> <strong>48 saate</strong>kesin bir cevap alacaksınız</li>
		<li class="p4">Herşey <b>ücretsiz ve  mukavelesiz</b></li>
	</ul>
	<div>
		<b>kredilerinizi</b>, <b>lizinglerinizi</b> ve <b>banka kartlarınızın miktarını</b> avantajli faizle tek bir çatı altında toplayıniz!
		<br/><br/>
		<span>Yüzde <b>40 a varan aylık ekonomi!</b></span>
		<br/>
		Kredi birleştirmek mi istiyorsunuz? <b>Talep edilen miktarı giriniz</b>.
	</div>
</div>
';

$pretexte['sbc']=
'
<div class="eem">
	<ul>
		<li class="p1">Jednom kada je obrazac <b>popunjen</b> kontaktirati ćemo Vas u roku od 10 minuta.</li>
		<li class="p2">Pošaljite nam Vaše dokumente</li>
		<li class="p3">Konačan odgovor <strong>u roku od 48 sata</strong></li>
		<li class="p4">Besplatno <b>i bez obveza</b></li>
	</ul>
	<div>
		Mogućnost otkupa i grupacije Vaših kredita: <b>aktualnih kredita</b>, <b>lizinga</b> i <b>računa na Vašim kreditnim karticama</b> u jedan kredit s povoljnim kamatama!		<br/>
		<span>Do <b>-40% mjesečno!</b></span>
	
		Željeli biste našu ponudu?
	</div>
</div>
';



$type_independant['fr']='Indépendant';
$type_independant['al']='I pavarur';
$type_independant['en']='Independent';
$type_independant['de']='Selbstständig';
$type_independant['es']='Independiente';
$type_independant['it']='Indipendente';
$type_independant['pt']='Patrão';
$type_independant['pl']='Niezależny';
$type_independant['sbc']='Privatnik';
$type_independant['tr']='Işyeri sahibi';
$type_independant['ru']='независимый';

$type_independant_propre['fr']="Salarié de sa société";
$type_independant_propre['al']="Punonjës i kompanisë së tij";
$type_independant_propre['en']="Employee in your company";
$type_independant_propre['de']="Eigener Arbeitgeber";
$type_independant_propre['es']="Asalariado de su propia compañía";
$type_independant_propre['it']="Dipendente della sua compagnia";
$type_independant_propre['pl']="Pracownik z własnej firmy";
$type_independant_propre['sbc']="Zaposlenik vlastite tvrtke";
$type_independant_propre['tr']="Kendi şirket çalışanı";
$type_independant_propre['ru']="независимый";

$type_salaire['fr']='Salarié';
$type_salaire['al']='Puntor';
$type_salaire['en']='Employee';
$type_salaire['de']='Angestellt';
$type_salaire['es']='Asalariado';
$type_salaire['it']='Stipendiato';
$type_salaire['pt']='Empregado';
$type_salaire['pl']='Zatrudniony';
$type_salaire['tr']='Maaşlı';
$type_salaire['sbc']='Zaposlen';
$type_salaire['ru']='штатный';

$type_temporaire['fr']='Temporaire';
$type_temporaire['al']='Përkohshme';
$type_temporaire['en']='Temporary';
$type_temporaire['de']='Temporär';
$type_temporaire['es']='Temporal';
$type_temporaire['it']='Temporaneo';
$type_temporaire['pt']='Temporário';
$type_temporaire['pl']='Tymczasowy';
$type_temporaire['tr']='Geçici';
$type_temporaire['sbc']='Privremen';

$type_rente['fr']='AVS/AI';
$type_rente['al']='IV/AHV';
$type_rente['en']='AVS/AI Rentner';
$type_rente['de']='IV/AHV';
$type_rente['es']='Jubilado';
$type_rente['it']='AVS/AI';
$type_rente['pt']='Reformado';
$type_rente['pl']='Rencista';
$type_rente['sbc']='Umirovljenik';
$type_rente['tr']='AHV/IV';
$type_rente['ru']='аннуитент';

$oui['fr']='Oui';
$oui['al']='Po';
$oui['en']='Yes';
$oui['de']='Ja';
$oui['es']='Sí';
$oui['it']='Si';
$oui['pt']='Sim';
$oui['pl']='Tak';
$oui['sbc']='Da';
$oui['tr']='Evet';
$oui['ru']='да';

$non['fr']='Non';
$non['al']='Jo';
$non['en']='No';
$non['de']='Nein';
$non['es']='No';
$non['it']='No';
$non['pt']='Não';
$non['pl']='Nie';
$non['sbc']='Ne';
$non['tr']='Hayır';
$non['ru']='не';

$ans['fr']='ans';
$ans['al']='vjeqar';
$ans['en']='years';
$ans['de']='Jahre';
$ans['es']='años';
$ans['it']='anni';
$ans['pt']='anos';
$ans['pl']='lata';
$ans['sbc']='godine';
$ans['tr']='yaşında';
$ans['ru']='лет';

$poursuites['fr']='Avez-vous des poursuites, saisies, ADB ou fait faillite?';
$poursuites['al']='Jeni të ndjekur penalisht, apo keni probleme në lidhje me borgjet?';
$poursuites['en']='Do you have any prosecutions or seizures?';
$poursuites['de']='Haben Sie Betreibungen?';
$poursuites['es']='¿Tiene algún proceso o juicio?';
$poursuites['it']='Procedimenti esecutivi?';
$poursuites['pt']='Você tem alguma Dívida?';
$poursuites['sbc']='Imate li kaznenih prijava,tužbi o neplaćanju računa ili ste u stečaju?';
$poursuites['pl']='Posiadasz postępowania karne, konfiskaty wpyłat?';
$poursuites['tr']='Hacıziniz var mı?';
$poursuites['ru']='Было ли у вас проблемы задолженности?';


$creditleasing['fr']='Avez-vous un crédit ou leasing en cours?';
$creditleasing['al']='A keni një kredi apo leasing?';
$creditleasing['en']='Do you have any credit or leasing ongoing?';
$creditleasing['de']='Haben Sie derzeit einen Kredit oder Leasing?';
$creditleasing['es']='¿Tiene un crédito o leasing en marcha?';
$creditleasing['it']='Avete un credito o leasing in corso?';
$creditleasing['pt']='Você tem um crédito ou leasing em curso?';
$creditleasing['sbc']='Imate li kredit ili leasing?';
$creditleasing['pl']='Posiadasz jakieś kredyty lub leasingi?';
$creditleasing['tr']='Mevcut kredileriniz, lizing veya kredi kartı borçlarınıs var mı?';
$creditleasing['ru']=$creditleasing['en'];


$typepermis['pt']='Permisso / Nacionalidade:';
$typepermis_select['pt']='Selecione...';
$typepermis_suisse['pt']='Suíça';
$typepermis_c['pt']='Permis C';
$typepermis_b['pt']='Permis B';
$typepermis_l['pt']='Permis L (mais de 2 anos)';
$typepermis_lm['pt']='Permis L (menos de 2 anos)';
$typepermis_g['pt']='Permis G (mais de 3 anos)';
$typepermis_gm['pt']='Permis G (menos de 3 anos)';
$typepermis_carte['pt']='Cartões de legitimação';

$typepermis['fr']='Nationalité / Permis de séjours:';
$typepermis_select['fr']='Sélectionnez...';
$typepermis_suisse['fr']='Suisse';
$typepermis_c['fr']='Permis C';
$typepermis_b['fr']='Permis B';
$typepermis_l['fr']='Permis L (depuis 2 ans ou plus)';
$typepermis_lm['fr']='Permis L (depuis moins de 2 ans)';
$typepermis_g['fr']='Permis G (depuis 3 ans ou plus)';
$typepermis_gm['fr']='Permis G (depuis moins de 3 ans)';
$typepermis_carte['fr']='Carte de légitimation';


$typepermis['pl']='Pozwolenie / narodowość:';
$typepermis_select['pl']='Wybierz...';
$typepermis_suisse['pl']='Szwajcaria';
$typepermis_c['pl']='Pozwolenie C';
$typepermis_b['pl']='Pozwolenie B';
$typepermis_l['pl']='Pozwolenie L (co najmniej 2 lat)';
$typepermis_lm['pl']='Pozwolenie L (pod 2 lat)';
$typepermis_g['pl']='Pozwolenie G (co najmniej 3 lat)';
$typepermis_gm['pl']='Pozwolenie G (pod 3 lat)';
$typepermis_carte['pl']='Karta legitymacyjna';

$typepermis['en']='Nationality / Permit:';
$typepermis_select['en']='Please select...';
$typepermis_suisse['en']='Swiss';
$typepermis_c['en']='C Permit';
$typepermis_b['en']='B Permit';
$typepermis_l['en']='L Permit (more than 2 years)';
$typepermis_lm['en']='L Permit (less than 2 years)';
$typepermis_g['en']='G Permit (more than 3 years)';
$typepermis_gm['en']='G Permit (less than 3 years)';
$typepermis_carte['en']='Legitimation Card';

$typepermis['de']='Ausweis / Identität';
$typepermis_select['de']='Auswählen...';
$typepermis_suisse['de']='Schweizer';
$typepermis_c['de']='Ausweis C';
$typepermis_b['de']='Ausweis B';
$typepermis_l['de']='Ausweis L (mindestens 2 Jahre)';
$typepermis_lm['de']='Ausweis L (weniger als 2 Jahre)';
$typepermis_g['de']='Ausweis G (mindestens 3 Jahre)';
$typepermis_gm['de']='Ausweis G (weniger als 3 Jahre)';
$typepermis_carte['de']='Legitimationskarten';

$typepermis['al']='Leja / Kombësi:';
$typepermis_select['al']='Zgjidhni...';
$typepermis_suisse['al']='Zvicran';
$typepermis_c['al']='Leja C';
$typepermis_b['al']='Leja B';
$typepermis_l['al']='Leja L (për të paktën 2 vjet)';
$typepermis_lm['al']='Leja L (më pak se 2 vjet)';
$typepermis_g['al']='Leja G (për të paktën 3 vjet)';
$typepermis_gm['al']='Leja G (më pak se 3 vjet)';
$typepermis_carte['al']='Karta Legitimacioni';

$typepermis['es']='Permiso de Trabajo:';
$typepermis_select['es']='Seleccionar...';
$typepermis_suisse['es']='Suiza';
$typepermis_c['es']='Permiso C';
$typepermis_b['es']='Permiso B';
$typepermis_l['es']='Permiso L (por lo menos 2 años)';
$typepermis_lm['es']='Permiso L (menos de 2 años)';
$typepermis_g['es']='Permiso G (por lo menos 3 años)';
$typepermis_gm['es']='Permiso G (menos de 3 años)';
$typepermis_carte['es']='Tarjeta de legitimaciòn';

$typepermis['it']='Svizzero/a - Permesso:';
$typepermis_select['it']='Scegliere...';
$typepermis_suisse['it']='Svizzero/a';
$typepermis_c['it']='Permesso C';
$typepermis_b['it']='Permesso B';
$typepermis_l['it']='Permesso L (per almeno 2 anni)';
$typepermis_lm['it']='Permesso L (meno di 2 anni)';
$typepermis_g['it']='Permesso G (per almeno 3 anni)';
$typepermis_gm['it']='Permesso G (meno di 3 anni)';
$typepermis_carte['it']='Carta di legittimazione';

$typepermis['tr']='Permi / Ausweis / Milliyet:';
$typepermis_select['tr']='Seçiniz...';
$typepermis_suisse['tr']='Isviçreli';
$typepermis_c['tr']='Ausweis C / Permi C';
$typepermis_b['tr']='Ausweis B / Permi B';
$typepermis_l['tr']='Ausweis L / Permi L (2 senedir)';
$typepermis_lm['tr']='Ausweis L / Permi L (en az 2 senedir)';
$typepermis_g['tr']='Ausweis  G / Permi G (3 senedir)';
$typepermis_gm['tr']='Ausweis G / Permi G (en az 3 senedir)';

$typepermis['ru']='Working permit / nationality:';
$typepermis_select['ru']='Please select...';
$typepermis_suisse['ru']='Swiss';
$typepermis_c['ru']='Permit C';
$typepermis_b['ru']='Permit B';
$typepermis_l['en']='Permit L (more than 2 years)';
$typepermis_lm['en']='Permit L (less than 2 years)';
$typepermis_g['ru']='Permit G (for at least 3 years)';
$typepermis_gm['ru']='Permit G (less than 3 years)';
$typepermis_carte['ru']='Legitimation Card';

$typepermis['sbc']='Dozvola / Državljanstvo';
$typepermis_select['sbc']='Odaberite...';
$typepermis_suisse['sbc']='Švicarac';
$typepermis_c['sbc']='Dozvola C';
$typepermis_b['sbc']='Dozvola B';
$typepermis_l['sbc']='Dozvola L (manje od 2 godine)';
$typepermis_lm['sbc']='Dozvola L (više od 2 godine)';
$typepermis_g['sbc']='Dozvola G (manje od 3 godine)';
$typepermis_gm['sbc']='Dozvola G (više od 3 godine)';
$typepermis_carte['sbc']='Legitimacijska karta/Osobna iskaznica';


$budget['fr']='Votre budget';
$budget['al']='Buxheti juaj';
$budget['en']='Your budget';
$budget['de']='Ihr Budget';
$budget['es']='Sus ingresos';
$budget['it']='Budget';
$budget['pt']='O seu orçamento';
$budget['sbc']='Vaš proračun';
$budget['pl']='Twój budżet';
$budget['tr']='Budjeniz';
$budget['ru']='Ваш бюджет';

$creditligne['fr']='Votre crédit en ligne';
$creditligne['al']='Kredia juaj online';
$creditligne['en']='Your online loan';
$creditligne['de']='Ihr online Kredit';
$creditligne['es']='Su Crédito';
$creditligne['it']='Il credito';
$creditligne['pt']='Seu Crédito';
$creditligne['sbc']='Vaš kredit';
$creditligne['pl']='Twój kredyt on-line';
$creditligne['tr']='Sizin online krediniz';
$creditligne['ru']='Ваш интернет-кредитная';

$coordonnees['fr']='Vos coordonnées';
$coordonnees['al']='Të dhënat e juaja';
$coordonnees['en']='Your details';
$coordonnees['de']='Ihre Angaben';
$coordonnees['es']='Sus datos personales';
$coordonnees['it']='I vostri dati';
$coordonnees['pt']='Os seus dados';
$coordonnees['sbc']='Vaši podaci';
$coordonnees['pl']='Twoje dane';
$coordonnees['tr']='Bilgileriniz';
$coordonnees['ru']='Ваша контактная';

$travailensuisse['fr']='Travaillez-vous en Suisse?';
$travailensuisse['al']='A punoni në Zvicër?';
$travailensuisse['en']='Do you work in Switzerland?';
$travailensuisse['de']='Arbeiten Sie in der Schweiz?';
$travailensuisse['es']='¿Trabaja usted en Suiza?';
$travailensuisse['it']='Lavorate in Svizzera?';
$travailensuisse['pt']='Você trabalha na Suíça?';
$travailensuisse['sbc']='Radite li u Švicarskoj?';
$travailensuisse['pl']='Czy pracujesz w Szwajcarii?';
$travailensuisse['tr']='Isviçredemi çalışıyorsunuz?';
$travailensuisse['ru']='Вы работаете в Швейцарии?';

$situation['fr']='Votre situation';
$situation['al']='Situata juaj';
$situation['en']='Your situation';
$situation['de']='Ihre Situation';
$situation['es']='Su situación';
$situation['it']='La vostra situazione';
$situation['pt']='A sua situação';
$situation['sbc']='Vaša situacija';
$situation['pl']='Twoja sytuacja';
$situation['tr']='Durumunuz';
$situation['ru']='Ваша ситуация';


$entreprise['fr']='Indépendant / Société';
$entreprise['al']='Kompania';
$entreprise['en']='Indépendant / Société';
$entreprise['de']='Firma';
$entreprise['es']='Indépendant / Société';
$entreprise['it']='Indépendant / Société';
$entreprise['pt']='Indépendant / Société';
$entreprise['sbc']='Privatnik';
$entreprise['pl']='Niezależny/ Stowarzyszony ';
$entreprise['tr']='Indépendant / Société';


$completer['fr']='Merci de compléter tous les champs';
$completer['al']='ju lutemi plotsoni informacionet';
$completer['en']='Please fulfill all fields';
$completer['de']='Füllen Sie bitte dieses Feld aus';
$completer['es']='Gracias a todos por completo';
$completer['it']='Grazie di voler completare il formulario in ogni sua parte';
$completer['pt']='Obrigado de completar todos os dados';
$completer['sbc']='Molim Vas da popunite sva polja';
$completer['pl']='Dziękujemy za wypełnienie wszystkich wymaganych pól';
$completer['tr']='Tüm alanları doldurunuz';
$completer['ru']='Спасибо, заполните все поля';

$bonus['fr']='Bonus ou primes? Quelle somme mensuelle?';
$bonus['en']='Monthy bonuses?';
$bonus['de']='Zusatzeinkommen?';
$bonus['pt']='Tem bonus ou gratificações mensais?';
$bonus['pl']='Czy otrzymujesz jakieś wynagrodzenia? Ile miesięcznie?';
$bonus['sbc']='Imate li bonus? Koliko mjesečno?';
$bonus['it']='Avete qualche bonus? Quanto al mese?';
$bonus['es']='Bonificación o extras mensuales? ¿Cuánto?';
$bonus['al']='A keni të ardhura tjera mujore?';
$bonus['tr']='Bonus veya prim? Hangi aylık mitar?';
$bonus['ru']='У вас есть ежемесячные взносы? Как?';

$bonus_expl['fr']='Indiquez une estimation: améliore et augmente vos chances d\'acception avec de bonnes conditions.';
$bonus_expl['en']='Provide an estimate: improves and increases your chances of acceptance with good conditions.';
$bonus_expl['de']='Eine Schätzung: verbessern und erhöhen Sie Ihre Chancen auf eine Kreditakzeptanz mit guten Bedingungen.';
$bonus_expl['pt']='Indique uma  quantia, pois melhora e aumenta a probabilidade de o seu pedido ser aceite.';
$bonus_expl['pl']='Oszacuj i podaj: aby zwiększyć Twoje szanse na akceptacje Twojej prośby na jak najlepszych warunkach';
$bonus_expl['sbc']='Vaša procjena: povećava vaše šanse za prihvaćanjem kredita i osigurava Vam bolje uvjete kredita.';
$bonus_expl['it']='Fornire una stima: migliora e aumenta le possibilità di accettazione con buone condizioni.';
$bonus_expl['es']='Indique una estimación: esto permite mejorar y aumentar su oportunidad de crédito en buenas condiciones.';
$bonus_expl['al']='Rritni mundësit tuaja për të marrë një kredi me kushte të mira.';
$bonus_expl['tr']='Bir prim tahminde bulununuz: durumunuzu ve kabul edilme şansınızı artırıyor.';
$bonus_expl['ru']='Обеспечить оценка: улучшает и увеличивает ваши шансы смысле ы с хорошими условиями.';

$passuisse['fr']='Désolé, nous ne pouvons vous proposer de crédits si vous ne travaillez pas en Suisse.';
$passuisse['al']='Na vjen keq, ne s\'mund t\'ju ofrojmë kredi në qoftë se ju nuk punoni në Zvicër.';
$passuisse['en']='Sorry, we can not offer loanst if you do not work in Switzerland.';
$passuisse['de']='Leider können wir nicht bieten Kredit, wenn Sie nicht in der Schweiz zu arbeiten..';
$passuisse['es']='Lo sentimos, no podemos ofrecer crédito si usted no trabaja en Suiza.';
$passuisse['it']='Ci dispiace, ma non siamo in grado di accontentare la vostra richiesta se non lavorate in Svizzera.';
$passuisse['pt']='Desculpe, nós não podemos oferecer-lhe um crédito, se você não trabalha na Suíça.';
$passuisse['sbc']='Nažalost, ne možemo vam ponuditi kredit ako ne radite u Švicarskoj.';
$passuisse['pl']='Niestety, nie możemy Ci zaoferować kredytu, jeśli nie pracujesz w Szwajcarii.';
$passuisse['tr']='Malesef sizlere isviçrede çalışmadığınız için kredi teklifi sunamayız.';
$passuisse['ru']='К сожалению, мы не можем предложить вам кредит, если вы не работаете в Швейцарии.';

$annee['fr']="Année";
$annee['al']="Viti";
$annee['en']="Year";
$annee['de']="Jahre";
$annee['es']="Año";
$annee['it']="Anno";
$annee['pt']="Ano";
$annee['sbc']="Godina";
$annee['pl']="Rok";
$annee['tr']="Sene";
$annee['ru']="год";

$avez_enfants['fr']="Des enfants encore à charge? (si oui, année de naissance)";
$avez_enfants['al']="A keni fëmijë?";
$avez_enfants['en']="Dependent children? (if yes, year of birth)";
$avez_enfants['de']="Haben Sie unterhaltsberechtigte Kinder? (falls ja, Geburtsjahr)";
$avez_enfants['es']="¿Tiene hijos a cargo? (año de nacimiento)";
$avez_enfants['it']="Mantenimenti per i figli (in caso di si, anno di nascita)";
$avez_enfants['pt']="Você tem filhos?";
$avez_enfants['sbc']="Imate li djecu?";
$avez_enfants['pl']="Czy masz dzieci?";
$avez_enfants['tr']="Çoçuklarınız varmı?";
$avez_enfants['ru']="У вас есть дети?";

$select_mois['fr']=Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$select_mois['al']=Array('Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nëntor', 'Dhjetor');
$select_mois['en']=Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$select_mois['de']=Array('Januar ',' Februar ',' März',' April',' Mai',' Juni',' Juli',' August',' September',' Oktober',' November',' Dezember');
$select_mois['es']=Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$select_mois['it']=Array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$select_mois['pt']=Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$select_mois['sbc']=Array('Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpnja', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac');
$select_mois['pl']=Array('Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
$select_mois['tr']=Array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayis', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım','Aralık');
$select_mois['ru']=Array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');

$etape['fr']='Etape';
$etape['al']='Etapa';
$etape['en']='Step';
$etape['de']='Schritt';
$etape['es']='Paso';
$etape['it']='Passo';
$etape['pt']='Passo';
$etape['sbc']='Etapa';
$etape['pl']='Etap';
$etape['tr']='Adım';
$etape['ru']='шаг';


$nonsuisse['fr']='Nous ne pouvons malheureusement vous proposer de crédit si vous ne travaillez pas en Suisse.';
$nonsuisse['al']='Ne nuk mund t\'ju ofrojnë kredi në qoftë se ju nuk punoni në Zvicër';
$nonsuisse['en']='Unfortunately we can not offer you credit if you are not working in Switzerland.';
$nonsuisse['de']='Wir bieten keinen Kredit an Persone, die nicht in der Schweiz arbeitstätig sind';
$nonsuisse['es']='Lamentablemente no podemos ofrecerle crédito si usted no está trabajando en Suiza.';
$nonsuisse['it']='Purtroppo non siamo in grado di offrire credito se non si lavora in Svizzera.';
$nonsuisse['pt']='Infelizmente, não podemos oferecer-lhe crédito, se você não está trabalhando na Suíça.';
$nonsuisse['sbc']='Nažalost, ne možemo Vam ponuditi kredit ako ne radite u Švicarskoj.';
$nonsuisse['pl']='Niestety, nie możemy zaoferować kredytu, jeśli nie pracujesz w Szwajcarii.';
$nonsuisse['tr']='Malesef sizlere isviçrede çalışmadığınız için kredi teklifi sunamayız.';
$nonsuisse['ru']='К сожалению, мы не можем предложить вам кредит, если вы не работаете в Швейцарии.';

$gratuit['fr']='Offre gratuite et confidentielle';
$gratuit['al']='Oferta falas';
$gratuit['en']='Free Offer';
$gratuit['de']='Kostenlose Offerte';
$gratuit['es']='Oferta Libre';
$gratuit['it']='Offerta gratuita';
$gratuit['pt']='Oferta sem compromisso';
$gratuit['sbc']='Besplatna ponuda';
$gratuit['pl']='Darmowa oferta';
$gratuit['tr']='Ücretsiz teklif';
$gratuit['ru']='свободное предложение';


$precedent['fr']=' < - Précédent';
$precedent['al']=' < - Mbrapa';
$precedent['en']=' < - Back';
$precedent['de']=' < - Zurück';
$precedent['es']=' < - Anterior';
$precedent['it']=' < - Precedente';
$precedent['pt']=' < - Anterior';
$precedent['sbc']=' < - Prethodna';
$precedent['pl']=' < - Wróć';
$precedent['tr']=' < - önceki';
$precedent['ru']=' < - предыдущий';

$suivant['fr']=' Poursuivre ->';
$suivant['al']=' Vazhdo ->';
$suivant['en']=' Continue ->';
$suivant['de']=' Weiter ->';
$suivant['es']=' Continuar ->';
$suivant['it']=' Continuare ->';
$suivant['pt']=' Continuar ->';
$suivant['sbc']=' Nastaviti ->';
$suivant['pl']=' Dalej ->';
$suivant['tr']=' devam ->';
$suivant['ru']=' продолжать ->';

$valider['fr']=' Valider ->';
$valider['al']=' Konfirmoni ->';
$valider['en']=' Confirm ->';
$valider['de']=' Bestätigen ->';
$valider['es']=' Validar ->';
$valider['it']=' Convalidare ->';
$valider['pt']=' Validar ->';
$valider['sbc']=' Potvrditi ->';
$valider['pl']=' Potwierdź ->';
$valider['tr']=' onaylamak / devam ->';
$valider['ru']=' утверждать ->';

$hypo['fr']='Charges hypothécaires ?';
$hypo['al']='Kostoja e hipotekës?';
$hypo['en']='Mortgage monthly cost?';
$hypo['de']='Hypothekar-Kosten?';
$hypo['es']='Costes de la hipoteca?';
$hypo['it']='Costi ipotecari?';
$hypo['pt']='Os custos das suas hipotecas?';
$hypo['sbc']='Kredit iznosi?';
$hypo['pl']='Koszty kredytów hipotecznych?';
$hypo['tr']='Ipotek masrafları?';
$hypo['ru']='Ипотечный расходы?';

$creditfrance['fr']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['de']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['en']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['pt']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['pl']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['es']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['it']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['sbc']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['tr']="https://www.multicredit.ch/fr/credit-france.php";
$creditfrance['al']="https://www.multicredit.ch/fr/credit-france.php";

$conditions_txt['fr']='J\'accepte les <span id="condition_click">conditions d\'utilisation</span>.';
$conditions_txt['al']='Unë e pranoj <span id="condition_click">kushtet e përdorimit</span>.';
$conditions_txt['en']='I accept the <span id="condition_click">terms of use</span>.';
$conditions_txt['de']='<span id="condition_click">Bedingungen</span> akzeptieren.';
$conditions_txt['es']='Acepto las <span id="condition_click">condiciones de uso</span>.';
$conditions_txt['it']='Accetto <span id="condition_click">le condizioni</span>.';
$conditions_txt['pt']='Eu aceito os <span id="condition_click">termos de uso</span>.';
$conditions_txt['sbc']='Prihvaćam uvjete <span id="condition_click">korištenja</span>.';
$conditions_txt['pl']='Akceptuję <span id="condition_click">warunki usług</span>.';
$conditions_txt['tr']='<span id="condition_click">Kullanıcı koşullarını </span> kabul ediyorum.';
$conditions_txt['ru']='Я принимаю условия <span id="condition_click">использования</span>.';
 
$conditions_txtp['fr']='J\'accepte les <span id="conditionp_click">conditions d\'utilisation</span>.';
$conditions_txtp['al']='Unë e pranoj <span id="conditionp_click">kushtet e përdorimit</span>.';
$conditions_txtp['en']='I accept the <span id="conditionp_click">terms of use</span>.';
$conditions_txtp['de']='<span id="conditionp_click">Bedingungen</span> akzeptieren.';
$conditions_txtp['es']='Acepto las <span id="conditionp_click">condiciones de uso</span>.';
$conditions_txtp['it']='Accetto <span id="conditionp_click">le condizioni</span>.';
$conditions_txtp['pt']='Eu aceito os <span id="conditionp_click">termos de uso</span>.';
$conditions_txtp['sbc']='Prihvaćam uvjete <span id="conditionp_click">korištenja</span>.';
$conditions_txtp['pl']='Akceptuję <span id="conditionp_click">warunki usług</span>.';
$conditions_txtp['tr']='<span id="conditionp_click">Kullanıcı koşullarını </span> kabul ediyorum.';
$conditions_txtp['ru']='Я принимаю условия <span id="conditionp_click">использования</span>.';

$conditions_merci['fr']='Merci d accepter les conditions';
$conditions_merci['al']='Faleminderit për të pranuar kushtet';
$conditions_merci['en']='Thank you to accept the conditions';
$conditions_merci['de']='Wir danken Ihnen, die Bedingungen zu akzeptieren';
$conditions_merci['es']='Gracias a aceptar las condiciones';
$conditions_merci['it']='Grazie ad accettare le condizioni';
$conditions_merci['pt']='Obrigada a aceitar as condições';
$conditions_merci['sbc']='Molim Vas da prihvatite uvjete';
$conditions_merci['pl']='Dziękujemy za akceptację warunków';
$conditions_merci['tr']='Koşulları kabul ettiğiniz için teşekkürler';
$conditions_merci['ru']='Благодарю вас принять условия';



$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_fr.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'httpsa://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['fr']='<p>'.nl2br($output).'</p>';

$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_de.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['de']='<p>'.nl2br($output).'</p>';


$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_fr.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['en']='<p>'.nl2br($output).'</p>';

$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_fr.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['pt']='<p>'.nl2br($output).'</p>';

$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_fr.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['al']='<p>'.nl2br($output).'</p>';

$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_it.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['it']='<p>'.nl2br($output).'</p>';


$url=("https://crm.cashflex.ch/curl/formulaires/prives/credit/clauses/credit_fr.txt");
$ch = curl_init();
			curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = toSSL(curl_exec($ch));
curl_close($ch);
$conditions['tr']='<p>'.nl2br($output).'</p>';


$conditions['al']='<p>'.nl2br($output).'</p>';
$conditions['sbc']=$conditions['en'];
$conditions['pl']=$conditions['en'];
$conditions['ru']=$conditions['en'];
$conditions['es']=$conditions['en'];

$avantages=Array();
$avantages['fr']=
		"
		<h2>Vos avantages</h2>
		<p>Effectuez votre demande de crédit en ligne pour bénéficier d'une offre avantageuse:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Demande de gratuite et sans engagement.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>De 3'000 à 250'000 Chf selon vos besoins.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Réponse express en 24h - 48h ouvrables.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Sécurité et Confidentialité.</span></li>
		</ul>
		";
		
$avantages['tr']=
		"
		<h2>Online Başvuru</h2>
		<p>Online formumuzun sayesinde, hızlı ve güvenli bir şekilde, kredi başvurusu yapabilirsiniz:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Bizimle irtibata geçmek için çekinmeyin!</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>3000 ile 250'000 isviçre frangı arası kredi.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>ister 6 ay ister 72 ayda taksit ödeyerek sahip olun!</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Sizlere 24- 48 saat aradan sonra cevap vermeyi garantiliyoruz.</span></li>
		</ul>
		";		
		
$avantages['en']=
		"
		<h2>Our loans</h2>
		<p>Get the best opportunity with an online loan. Discover our advantages:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Free non-binding loan offer.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>From 3'000 to 250'000.- according to your need.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Get an express answer within 24h to 48h.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Safety and Data privacy.</li>
		</ul>
		";

$avantages['al']=
		"
		<h2>Kredi privat</h2>
		<p>Kërkesa Online për kredi - falas dhe pa detyrim:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Ne do t'ju kontaktojmë brenda 10 minutave.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Dërgoni dokumentet tuaja.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Do të keni një përgjigje brenda 48 orëve.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Gjithqka është falas dhe e padetyrueshme.</li>
		</ul>
		";		
		
$avantages['sbc']=
		"
		<h2>Krediti</h2>
		<p>U potrazi za rješenjem financiranja vaših projekata? Formular zahteva za kredit:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Jednom kada je obrazac popunjen kontaktirati ćemo Vas u roku od 10 minuta.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Pošaljite nam Vaše dokumente.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Konačan odgovor u roku od 48 sata.</span></li>
		</ul>
		";		

$avantages['pl']=
		"
		<h2>Prosba O Kredyt</h2>
		<p>Kiedy tylko wypełnisz całkowicie Twój formularz, skontaktujemy sią z Tobą w ciągu 10 minut.</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Wyślij nam Twoje dokumenty.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Ostateczna odpowiedź en 48h.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Wszystko to za darmo i bez jakiegokolwiek zobowiązania z Twojej strony.</span></li>
		</ul>
		";	

$avantages['es']=
		"
		<h2>Solicitud de crédito</h2>
		<p>Con Cashflex Multicrédit, es tan simple obtener un préstamo en Suiza:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Solicitud gratuita y sin compromiso.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Le contactaremos dentro de diez minutos.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Respuesta definitiva dentro de 48 horas.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Oferta gratuita sin compromiso.</span></li>
		</ul>
		";				
		
$avantages['de']=
		"
		<h2>Ihre Vorteile</h2>
		<p>Führen Sie Ihren Kreditantrag aus damit Sie von folgenden Vorteilen profitieren:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Eine kostenlose und unverbindliche Anfrage.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>Von 3'000 bis zu 250'000 SFr. selbst wählen.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Antwort: innerhalb von nur 24h bis 48h.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Sicherheit und ein vertraulicher Dienst.</span></li>
		</ul>
		";

$avantages['it']=
		"
		<h2>I vostri vantaggi</h2>
		<p>Effettuate la vostra domanda di credito per approfittare di un'offerta vantaggiosa:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Domanda di credito gratuita e senza impegni.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>Ottenete semplicemente  3'000 a 250'000 Chf.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Risposta rapida entro le prossime 24 - 48 ore.</span></li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>Sicurezza al 100% e confidenziale.</span></li>
		</ul>
		";	

$avantages['pt']=
		"
		<h2>Nossa empresa</h2>
		<p>Aproveite já as nossas ofertas de crédito de 3'000 a 250'000 CHF com um reembolso mensal até 72 meses:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Envie-nos os seus documentos.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Resposta definitiva dentro de 48 horas.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Obtenha uma oferta gratuita e sem compromisso.</li>
		</ul>
		";		

$avantagespme['fr']=
	"
	<h2>Votre crédit PME</h2>
	<p>Effectuez votre demande en ligne et bénéficiez d'une offre avantageuse pour PME:</p>
	<ul>
		<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Offre gratuite et sans engagement.</span></li>
		<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>De 10'000 à 300'000 Chf selon vos besoins.</span></li>
		<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Sécurité et Confidentialité.</span></li>
		<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Pas de complications administratives.</span></li>
	</ul>
	";
		
$avantages['en']=
		"
		<h2>SME Loan</h2>
		<p>Get the best opportunity with an online offer. Discover our advantages:</p>
		<ul>
			<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Free non-binding loan offers.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>From 10'000 to 300'000.- for your business.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/calendrier.png'></span><span>Get an express answer within 24h to 48h.</li>
			<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Data safety and Data privacy.</li>
		</ul>
		";	 
	
$avantagespme['de']=
	"
	<h2>Ihre KMU Anfrage</h2>
	<p>
	Führen Sie Ihren Kreditantrag für KMU aus damit Sie folgende Vorteile haben:</p>
	<ul>
		<li><span><img src='https://www.multicredit.ch/nform/images/vu.png'></span><span>Eine kostenlose und unverbindliche Anfrage.</span></li>
		<li><span><img src='https://www.multicredit.ch/nform/images/chf.png'></span><span>Von 3'000 bis zu 250'000 SFr. selbst wählen.</span></li>
		<li><span><img src='https://www.multicredit.ch/nform/images/cadenas.png'></span><span>100% Sicherheit und ein vertraulicher Dienst.</span></li>	
		<li><span><img src='https://www.multicredit.ch/nform/images/admin.png'></span><span>Wir verlangen wenig Dokumente.</span></li>
	</ul>
	";	
		
function toSSL($string){
	$string=str_replace("http://www", "https://www", $string);
	return $string;
	}

?>