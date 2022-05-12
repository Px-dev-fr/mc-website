<?php include("bblocs.php");?>

<?php
// Quel est la rubrique en cours?
$tab=explode("/",$page);
$rubrique=$tab[1];
?>

<div id="fo" class="pm">
<?php if ($lang=="fr"){?>
	<div class="fc" >
		<h3>A propos</h3>
		<a href="/fr/agence">Notre agence</a>
		<a href="/fr/agence/partenaires">Nos partenaires</a>		
		<a href="/fr/agence/mentions-legales">Mentions légales</a>
	</div> 
	<div class="fc">
		
		<?php
			switch($rubrique){
				case "pme":
					echo '
					<h3>A découvrir</h3>
					<a href="https://www.business-factoring.ch" target="new">Business-factoring</a>
					<a href="https://www.pro-leasing.ch" target="new">Pro-leasing</a>
					<a href="https://www.credit-independant.ch" target="new">Crédit-indépendant</a>	
					';
					break;
					
				case "hypotheque":
					echo '
					<h3>A découvrir</h3>
					<a href="https://www.hypotheque-finance.ch" target="new">Hypo-Finance</a>
					';
					break;				
				
				default:
					echo '
					<h3>A découvrir</h3>
					<a href="https://www.infocredit.ch" target="new">Infocrédit - notre blog</a>
					<a href="https://www.prestaflex.ch" target="new">Prestaflex</a>
					<a href="https://www.creditflex.ch" target="new">CreditFlex</a>
					';
					break;
			}
		?>

	</div>
	<div class="fc adresse">
		<h3>Nous contacter</h3>
		<div class="lieu">
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>	
	<p>Au sens de la loi, l'octroi d'un crédit à la consommation est interdit s'il occasionne un surendettement (art. 3 LCD).<br>Exemple de calcul: Financement CHF 10'000. Un taux d'intérêt annuel effectif de 5.90% à 9.90% donne des coûts totaux pour 12 mois de CHF 314.- à CHF 520.- .
	<br>Le taux d'intérêt final varie en fonction de la situation de chaque client, de 4.8% à 9.9%. Aucun frais de dossier ni frais complémentaire: vous ne payez que l'intérêt du crédit.
	</p>
<?php } ?><?php 
if ($lang=="de"){
 ?>
	<div class="fc">	
		<h3>Informationen</h3>
		<a href="/de/ablosung/schulden">Schuldenberatung</a>
		<a href="/de/fragen">Kreditinformationen</a>
		<a href="/de/kmu/kredit/selbststandige">Für Selbstständige</a>
		<a href="/de/kmu/fragen">Auskunft für KMU</a>
	</div>
	<div class="fc">	
		<h3>Impressum</h3>
		<a href="/de/uber-uns">Über Multicrédit</a>
		<a href="/de/uber-uns/partnerschaft">Partnerschaft</a>
		<a href="/de/uber-uns/jobs">Jobs</a>
		<a href="/de/uber-uns/aslan-munur">Geschäftsleiter</a>
	</div>
	<div class="fc adresse">
		<h3>Kontakt</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Bankstrasse 4
				<br>CP 265 - 1701 Freiburg
			</span>
		</div>
	</div>
	<p>Die Konsumkreditvergabe ist verboten, wenn sie zu Verschuldung der Verbraucher führt (art. 3 UWG).<br>Barkredit Berechnungsbeispiel: Finanzierung CHF 10'000.-, effektiver Jahreszins zwischen 5.90 % und 9.90% ergibt Gesamtkosten für 12 Monate zwischen CHF 313.- und CHF 520.-.
	<br>Der Endzinssatz variiert je nach Situation des Kunden zwischen 4,8% und 9,9%. Es gibt keine Verwaltungs- oder Zusatzkosten: Sie zahlen nur die Zinsen für das Darlehen.
	</p>
<?php } ?><?php
if ($lang=="en"){
?>
	<div class="fc">
		<h3>Services</h3>
		<a href="/en/finance">Financing</a>
		<a href="/en/credit">Credit</a>
		<a href="/en/mortgage">Mortgage</a>
		<a href="/en/glossary">Glossary</a>
	</div>
	<div class="fc">
		<h3>Information</h3>
		<a href="/en/sponsoring">Sponsoring</a>
		<a href="/en/glossary/faq">FAQ</a>
		<a href="/en/company">Our company</a>
		<a href="https://www.credit-service.ch/en" title="Get your personal service with Credit-Service">Credit-Service</a>
	</div>
	<div class="fc adresse">
		<h3>Contact us</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>	
	<p>Lending a private loan is forbidden if it leads to over-indebtedness of the consumer (Art, 3 of Swiss LCD)<br>Calculation example: a 10,000 Chf loan with an interest rate of 5.90% to 9.90% gives a total cost for 12 months of 313 to 520 Chf.
	<br>The final interest rate varies according to each client's situation, from 4.8% to 9.9%. There are no administrative or additional costs: you only pay the interest on the loan.</p>
<?php } ?><?php 
if ($lang=="it"){
?>
	<div class="fc">
		<h3>Su di noi</h3>
		<a href="/it/chi-siamo">Chi siamo</a>
		<a href="/it/privati">Servizi per privati</a>
		<a href="/it/pmi">Servizi per PMI</a>
	</div>		
	<div class="fc">
		<h3>Consultate ancora</h3>
		<a href="https://www.credito-bancario.ch">Credito-bancario</a>
		<a href="https://www.prestaflex.ch/it">Prestaflex</a>	
	</div>
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>	
	<p>La concessione del credito al consumo è vietata se causa un eccessivo indebitamento del consumatore o della consumatrice (conformemente all'art. 3 LCD).<br>Esempio di calcolo: Finanziamento CHF 10'000.  Un tasso di interesse annuo del 5.90% e il 9.90% dà costi totali per 12 mesi CHF 313 a CHF 520.
	<br>Il tasso di interesse finale varia a seconda della situazione di ciascun cliente, dal 4,8% al 9,9%. Non ci sono costi amministrativi o costi aggiuntivi: si pagano solo gli interessi sul prestito.
	</p>
<?php } ?><?php
if ($lang=="es"){
?>
	<div class="fc">
		<h3>Nuestros servicios:</h3>
		<a href="/es/creditos">Crédito</a>
		<a href="/es/recompra-de-credito">Recompra de crédito</a>
	</div>		
	<div class="fc" >
		<h3>Otras:</h3>
		<a href="/es/glosario">Glosario</a>
		<a href="https://www.creditos.ch">Creditos.ch</a>	
	</div>
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>
	<p>La obtención de un crédito al consumidor queda prohibido si éste provoca el sobre endeudamiento del consumidor (estipulación legal del artículo 3 LCD).<br>	Ejemplo de cálculo: Financiación de CHF 10'000.  Una tasa de interés anual de 5.90% y el 9.90% da los costes totales durante 12 meses a 313 CHF - 520 CHF.
	<br>La tasa de interés final varía según la situación de cada cliente, del 4,8% al 9,9%. No hay gastos administrativos ni adicionales: sólo pagas los intereses del préstamo.
	</p>
<?php } ?><?php
if ($lang=="tr"){
?>
	<div class="fc">
		<h3>Diğerleri</h3>
		<a href="/tr/hakkimizda/danismanlik">Danismanlik</a>
		<a href="/tr/online-alisveris">Online alisveris</a>
		<a href="/tr/turkiyede-emeklilik">Turkiyede emeklilik</a>
		<a href="/tr/hakkimizda">Hakkimizda</a>
	</div>		
	<div class="fc" >
		<h3>Servislerimiz</h3>
		<a href="/tr/konsolosluklar">Konsolosluk</a>
		<a href="/tr/medya">Medya</a>
		<a href="/tr/futbol-kulubu">Futbol Kulübü</a>
		<a href="/tr/ucak-biletleri">Ucak Biletleri</a>
	</div> 
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>
	<p>Kredi tüketici borçlanmasına neden olursa kredi verilmesi yasaktır (yasal şart. 3 LCD)<br>
		Örnek hesaplama : 10'000 CHF talep için, yıllık faiz oranı yüzde 5.9% ile 9.9% arasındadır ve toplam maliyeti 313.- CHF ile 520.- CHF arasındadır.</p>
<?php } ?><?php
if ($lang=="pt"){
?>
	<div class="fc">
		<h3>Serviços</h3>
		<a href="/pt/credito/condicoes/glossario">Glossario</a>
		<a href="/pt/financas/novo-banco">Novo-banco</a>
	</div>		
	<div class="fc">
		<h3>Agência</h3>
		<a href="/pt/credito/condicoes/faq">FAQ</a>	
		<a href="/pt/agencia/parceiros">Parceiros</a>
	</div>
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>
	<p>A concessão de um crédito ao consumidor é proíbida, se faz com que o consumidor se endivide (estipulação legal no art. 3 LCD).<br>Exemplo de calculo: um financiamento de 10'000 CHF. Uma taxa anual de 5.90% à 9.90% para 12 meses custa-lhe no total de CHF 313 à CHF 520.
	<br>A taxa de juros final varia de acordo com a situação de cada cliente, de 4,8% a 9,9%. Não há custos administrativos ou adicionais: você só paga os juros sobre o empréstimo.
	</p>
<?php } ?><?php
if ($lang=="sbc"){
?>
	<div class="fc">
		<h3>Svicarskoj</h3>
		<a href="/sbc/krediti/svicarskoj/kredit-za-ugovor-na-odredeno-vrijeme">Vrijeme</a>
		<a href="/sbc/krediti/svicarskoj/kredit-za-umirovljenike">Umirovljenike</a>
		<a href="/sbc/krediti/svicarskoj/ugovor-o-radu">Radu</a>
	</div>		
	<div class="fc">	
		<h3>Usluge</h3>
		<a href="/sbc/agencija">Agencija</a>
		<a href="/sbc/rjecnik">Rjecnik</a>
		<a href="/sbc/rjecnik/F-Q-A">FQA</a>
	</div>
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
		<div class="tel">
			<span class="icon"></span>
			<span><a href="tel:+41263222310">026 322 23 10</a></span>
		</div>
	</div>
	<p>Na temelju propisanog clanka (3 LCD) odobravanje kredita osobama  koje su prijavljene zbog financijskog kriminala, zloupotrebe položaja, koruptivnih kaznenih djela ili su pak u stecaju je strogo zabranjeno. Primjer izracuna: Financiranje 10 000 franaka. Vaša godišnja kamatna stopa  iznosi od 5.90% do 9.90%  i ukupni trošak u vremenskom periodu od 12 mjeseci iznosi 313 do 520 franaka.</p>
<?php } ?><?php
if ($lang=="al"){
?>
	<div class="fc">	
		<h3>Sigurime</h3>
		
		<a href="/al/kredi/investimet">Investimet direkte</a>
		<a href="/al/kredi/sigurime">Kredi sigurime</a>
	</div>
	<div class="fc">	
		<h3>Kontakti</h3>
	   <a href="/al/kontakti">Ligji në Zvicërr</a>
	   <a href="http://www.infocredit.ch" target="new">Blogu jonë</a>
	</div>
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>
	<p>Zgjatja e kredisë është e ndaluar nëse nga ajo shkaktohen detyrime për borxh. (Dispozita ligjore në art. 3 LCD).<br>Shembull: Financimi i 10'000 CHF - Me një normë vjetore të interesit nga 5.90% deri 9.90% rezulton me një total nga CHF 313 deri CHF 520.</p>
<?php } ?><?php
if ($lang=="pl"){
?>
	<div class="fc">
		<h3>Usługi</h3>
		<a href="/pl/kredyt/karta">Karta kredytowa</a>
		<a href="/pl/kredyt/remont/hipoteka-jadna-z-alternatyw">Hipoteka</a>
	</div>		
	<div class="fc">
		<h3>Multicredit</h3>
		<a href="/pl/o-nas">O nas</a>
	</div> 
	<div class="fc adresse">
		<h3>Multicredit</h3>
		<div class="lieu">
			<span class="icon"></span>
			<span>
				Cashflex Multicrédit
				<br>Rue de la Banque 4
				<br>CP 265 - 1701 Fribourg
			</span>
		</div>
	</div>
	<p>Według prawa udzielanie pożyczki jest zabronione jeśli prowadzi do zadłużenia konsumenta (według art.3 LCD).<br>Przykładowy przelicznik: Sfinansowanie 10 000 fr.z podatkiem usługowym wynoszącym od 5.9% do 9.9% rocznej stopy procentowej wynosi od 313 do 520 fr.</p>
<?php } ?>
	<p>© Cashflex Multicrédit 1999 - <?php echo date("Y");?><br>IDE: CHE-113.592.711</p>
	<div id="soc">
		<a target="new" href="https://www.facebook.com/multicredit/" rel="nofollow" id="b_facebook"></a>
		<a target="new" href="mailto:info@multicredit.ch" id="b_mail"></a>
	</div>
</div>