<?php
$h1="Vélos, vélos électriques, VTT: nous finançons votre achat!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Vélos - VTT: profitez d'un crédit vélo au meilleur taux!</title>
<meta name="description" content="Avez-vous besoin d'argent pour financer l'achat d'un vélo, VTT ou véhicule de loisir? Découvrez nos offres de crédit et profitez d'un taux avantageux!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="achat-velo-vtt";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Un crédit chez Multicrédit peut également vous servir à financer avantageusement tout véhicule sportif ou matériel de loisir! Vélos électriques, E-Bike, VTT, ... découvrez nos solutions avantageuses et profitez d'une offre au meilleur taux!</p>
		<h2>Quel est votre projet?</h2>
		<p>Avec un montant de prêt flexible ainsi qu'une durée de remboursement comprise entre 12 et 84 mois, nos offres peuvent s'adapter à vos besoins. Très simplement, nous pouvons vous aider à financer votre achat de...</p>
		<ul>
			<li>Vélo</li>
			<li>Vélo électrique</li>
			<li>Vélo tout-terrain (VTT)</li>
			<li>E-Bike</li>
			<li>Etc.</li>
		</ul>
		<h2>Pourquoi choisir notre agence?</h2>
		<p>Actifs dans toute la Suisse depuis maintenant <b>plus de 15 années</b>, nous accordons une importante toute particulière à la relation clientèle. En particulier, nous souhaitons proposer à chaque client:</p>
		<ul>
			<li>Une solution flexible, qui s'adapte aux besoins et à la situation</li>
			<li>La simplification des démarches: <b>nous prenons en charge le dossier et gérons les aspects administratifs liés à la demande de crédit vélo</b></li>
		</ul>
		<h2>Votre demande en ligne très simplement</h2>
		<p>Simple, rapide, confidentiel: faites votre demande de prêt à l'achat d'un vélo en ligne ou par téléphone et profitez d'une prise en charge par un spécialiste. Quel que soit le montant, nous pouvons vous proposer une solution adaptée!</p>

		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
