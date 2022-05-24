<?php
$h1="Prêt pour l'achat d'une nouvelle auto";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Emprunt voiture: financez l'achat de votre nouvelle auto</title>
<meta name="description" content="Un emprunt automobile vous permettra de financer l'achat de votre véhicule neuf. Confiez-nous votre dossier et profitez des meilleurs conditions du marché!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous envisagez d'acheter un nouveau véhicule? Chez Multicrédit, nous vous offrons une solution flexible sous la forme d'un <b>prêt automobile</b>. Obtenez simplement le montant nécessaire pour concrétiser votre achat et remboursez votre prêt sur une durée flexible.
		<h2>Nos solutions - vos avantages</h2>
		<p>Notre offre d'emprunt pour l'achat d'une automobile neuve ou d'occasion <b>s'adapte à tous vos projets</b>. En effet, avec nos services, vous vous assurez d'un maximum de flexibilité:</p>
		<ul>
			<li><b>En fonction du véhicule désiré</b>: choisissez librement le montant de votre emprunt auto de 3'000 à 300'000 Chf.</li>
			<li><b>Bénéficiez de conditions avantageuses</b>: en combinant un taux d'intérêt bas avec une durée de remboursement flexible (de 12 à 84 mois), vous vous assurez de mensualités basses qui respectent votre budget.</li>
			<li><b>Assurance mensualités</b>: nous offrons une assurance en cas de décès, maladie ou accident. Dans ce genre de situation, notre assurance crédit prendra en charge le remboursement de votre emprunt pour voiture.</li>
		</ul>
		<h2>Prêt auto ou leasing?</h2>
		<p>Si de nombreux garagistes proposent systématiquement la solution du leasing automobile, cette solution de financement n'est pas toujours parfaite. Nous vous proposons notre alternative sous la forme d'un <b>prêt voiture</b>. Par rapport au leasing, vous bénéficierez ainsi des avantages suivants:</p>
		<ul>
			<li>Nous finançons la totalité de votre nouvelle automobile. <b>La voiture vous appartiendra</b> (au contraire du leasing), libre à vous de la renvendre, la repeindre, ...</li>
			<li>Un prêt auto ne coûtent pas forcément plus cher qu'un leasing. Un véhicule de 10'000 Chf remboursé sur 12 mois ne vous coûtera <b>que 650 Chf d'intérêt</b>.</li>
			<li>Choisissez librement votre assurance voiture: casco totale ou casco partielle!</li>
		</ul>
		<h2>Faites votre demande en ligne</h2>
		<p>Vous souhaitez pouvoir <b>bénéficier d'une offre d'emprunt voiture de manière gratuite et sans engagement</b>? Notre équipe vous contactera volontiers pour un devis sans engagement. Demandez votre emprunt voiture dès maintenant:</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Formulaire de demande gratuite</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
