<?php
$h1="Finanzierung für eigenes KMU";
$link="/de/kmu/kredit/kredit-beantragen"; 
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Finanzierung KMU: Unternehmensfinanzierung für Sie</title>
<meta name="description" content="Sind Sie auf der Suche nach einer idealen Finanzierung für Ihre KMU? Bei uns können Sie bis zu 300'000 SFr. ausleihen und kostenlose Beratungen erhalten!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');$pme=1;?>
		<?php  include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
			<p> Unser Unternehmen bietet seinen Kunden zahlreiche Möglichkeiten an, die <b>Finanzierung eines KMU</b> einfacher zu planen. Wenn Sie auf finanzielle Hilfe angewiesen sind und nicht wissen, wie Sie am besten vorgehen müssen, können Sie uns benachrichtigen. Gerne helfen wir Ihnen weiter!</p>
			<h2>Einfache und praktische Vorgehensweise</h2>
				<p>Unsere Firma unterscheidet sich von anderen Finanzmaklern dadurch, dass die Vorgehensweise in Sachen <b>Administration sehr einfach</b> und ohne Komplikationen durchführbar ist. Sie müssen beispielsweise nur unser <b>Online-Formular</b> ausfüllen, um so Ihre <b>Finanzierung für KMU</b> beantragen zu können. Zusätzlich sollten Sie uns Ihre nötigen Dokumente wie:</p>
					<ul>
						<li>Ausweis oder Aufenthaltsbewilligung</li>
						<li>Ihre letzten drei Lohnauszüge</li>
					</ul>
				<p>zuschicken. Sobald wir diese Dokumente erhalten haben, erhalten Sie von unseren Mitarbeitern innerhalb von <b>nur 24 bis 48</b> Stunden eine Antwort!</p>
			<h2>Vorteilhafte Finanzierung</h2>
				<p>Unsere Firma legt grossen Wert auf eine <b>gute und vertrauliche</b> Beziehung zu den jeweiligen Partnern und Kunden. So ist Ihnen ein <b>vertraulicher</b> und sicherer Dienst garantiert. Zudem können Sie bei Unsicherheiten einer unserer Finanzberater kontaktieren, der Sie auf ein <b>kostenloses Gespräch</b> einladet und Ihnen die verschiedenen Modalitäten nochmals genauer aufzeigen kann.</p>
			<h2>Kontakt aufnehmen</h2>
				<p>Sie können über unser Online-Formular einen Kreditbetrag in beliebiger Höhe und zu frei wählbaren Laufzeiten aufnehmen. Dadurch erhalten Sie bei der Finanzierung Ihres KMU die volle Freiheit. Lassen Sie sich dieses Angebot nicht entgehen! Bei allfälligen Fragen steht Ihnen <b>unser Team</b> zur Verfügung. Wir freuen uns auf Ihren Auftrag!</p>
		<a class="bouton" href="/de/kmu/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
