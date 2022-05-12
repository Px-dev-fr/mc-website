<?
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Achat de maison: profitez d'une hypothèque adaptée</title>
<meta name="Description" content="Nous vous aidons à obtenir une hypothèque pour l'achat de votre maison. Profitez d'un conseil neutre et spécialisé et bénéficiez des meilleurs taux du marché!"/>
<?php
$h1="Hypothèque pour votre future maison: nos solutions";
$link="/fr/hypotheque/pret-hypothecaire"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="maison-a-construire";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/hypotheque.php');?>
		
		<p>Vous envisagez <b>l'achat d'une maison</b> prochainement? Achat d'un bien existant ou construction, nous vous aidons à concrétiser votre projet avec un financement sur mesure. Profitez d'une hypothèque <b>adaptée à vos besoins</b> tout en bénéficiant <b>des meilleures conditions du marché</b>!

		<h2>Quelle hypothèque pour votre projet?</h2>
		<p>Un projet immobilier est un <b>engagement à long terme</b>, qui engendre un coût financier important. C'est pourquoi il est nécessaire de connaître votre situation financière avant de vous lancer dans l'aventure. En choisissant, <b>Multicrédit</b> vous pourrez bénéficier d'un <b>entretien gratuit avec un professionnel du milieu</b> qui évaluera votre budget et vous proposera une solution hypothécaire adaptée:</p>
		<ul>
			<li>Analyse de votre dossier et de votre projet de financement</li>
			<li>Recherche et comparaison des solutions sur le marché actuel</li>
			<li>Conseil sur les modalités de votre future hypothèque</li>
			<li>Négociation des conditions avec nos partenaires</li>
			<li>Prise en charge globale du dossier et aide administrative tout au long des démarches</li>
		</ul>
		<h2>Notre expérience à votre service</h2>
		<p>Vous rêvez de votre future propriété? Acheter un logement est un beau projet, mais qui nécessite d'être mûrement réfléchi. Aussi afin d'acquérir votre bien dans les meilleures conditions, nous vous recommandons de faire appel à notre conseiller. Il pourra vous accompagner tout au long de votre <b>projet immobilier</b> et vous aidez à constituer un dossier d'hypothèque adapté pour votre future propriété.</p>
		<ul>
			<li>Service rapide, simple et transparent</li>
			<li>Conseil neutre délivré par un professionnel</li>
			<li>Accompagnement tout au long du dossier</li>
		</ul>
		<h2>Votre demande en quelques clics</h2>
		<p>Vous souhaitez en savoir plus ou nous confier votre projet d'hypothèque? Nous pouvons vous renseigner et vous accompagner vers les meilleures offres du marché!</p>
		<a class="bouton" href="/fr/hypotheque/pret-hypothecaire">Contact avec un spécialiste</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
