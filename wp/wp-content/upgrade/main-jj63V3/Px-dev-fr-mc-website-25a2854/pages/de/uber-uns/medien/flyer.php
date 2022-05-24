<?php
$h1="Unsere Flyer";
$link="/pdf/de/brochure_pme_web.pdf";
include('includes/first_loaded.php');
$lang="de";
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Flyer: Entdecken Sie unsere Broschüren</title>
<meta name="description" content="Entdecken Sie unsere Flyer, die für Sie sofort zum Download bereitstehen. Informieren Sie sich über unsere Angebote und machen Sie kostenlos eine Kreditanfrage."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="flyer"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Möchten Sie mehr über ein spezifisches Produkt erfahren? Zögern Sie nicht, unsere Flyer herunterzuladen und zu teilen. Unsere Dokumente werden regelmässig aktualisiert, damit sie die Totalität unserer Produkte widerspiegeln, zu der auch ständig Neuheiten hinzukommen.</p>
		<h2>Unsere Broschüre für KMU</h2>
		<p>Unsere Broschüre über die Produkte für KMU präsentiert Ihnen die Gesamtheit der Produkte, die wir KMU in der ganzen Schweiz anbieten.</p>
		<ul>
			<li><a href="/pdf/de/brochure_pme_web.pdf" target="new">Broschüre ansehen / herunterladen</a></li>
		</ul>
		<h2>Unsere Broschüre für Private</h2>
		<p>Die Broschüre für Privatpersonen zeigt Ihnen unsere Produkte, die wir natürlichen Personen anbieten: Kredite, Kreditablösungen, Kreditkarten und Hypotheken.</p>
		<ul>
			<li><a href="/pdf/de/brochure_prives_web.pdf" target="new">Broschüre ansehen / herunterladen</a></li>
		</ul>
		<a class="bouton" href="https://www.multicredit.ch/de/kredit/kredit-beantragen">Kostenlose Kreditanfrage</a>
	</div> 
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
