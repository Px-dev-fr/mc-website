<?php
$h1="Financez l'achat d'une nouvelle cuisine";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Cuisine: financez simplement votre équipement</title>
<meta name="description" content="Envie d'une nouvelle cuisine? Nous finançons vos travaux ou l'achat de matériel grâce à un prêt qui s'adapte à vos besoins. Demandez une offre gratuite."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="nouvelle-cuisine";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous envisagez prochainement l'achat d'une nouvelle cuisine? Savez-vous déjà comment vous allez financer celle-ci? Chez Multicrédit, nous pouvons vous proposer une solution avantageuse de crédit cuisine pour financer travaux, installation d'équipement ou achat de matériel.</p>
		<h2>Des modalités sur mesure</h2>
		<p>La cuisine de vos rêves n'est peut-être qu'à quelques clics! Nos <b>solutions d'emprunt</b> vous permettront d'obtenir rapidement un <b>prêt cuisine</b> vous permettant de concrétiser vos projets de manière flexible:</p>
		<ul>
			<li>Vous choisissez le montant du prêt souhaité</li>
			<li>Vous déterminez le nombre de mensualités de remboursement selon vos préférences</li>
			<li>Des mensualités fixes vous permettent de planifier sereinement votre budget</li>
			<li>Nous négocions avec nos partenaires un taux d'intérêt plus avantageux vous permettant <b>d'économiser sur vos intérêts</b></li>
		</ul>
		<h2>Pour tout projet</h2>
		<p>Personne ne sait mieux que vous quels sont vos besoins. Ainsi, nos solutions vous permettent <b>d'utiliser librement le montant du prêt obtenu</b>, quels que soient les projets envisagés:</p>
		<ul>
			<li>Achat ou construction d'une nouvelle cuisine</li>
			<li>Acquisition d'équipement ou matériel</li>
			<li>Travaux de rénovation ou de transformation</li>
			<li>Décoration ou changements dans votre logement</li>
		</ul>
		<h2>Simple, rapide et confidentiel</h2>
		<p>Désireux avant tout de <b>simplifier les démarches pour notre clientèle</b>, nous vous proposons de prendre votre dossier en charge de manière efficace et confidentielle. Confiez-nous votre dossier dès maintenant pour obtenir au plus vite une proposition de prêt adaptée de manière gratuite et sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
