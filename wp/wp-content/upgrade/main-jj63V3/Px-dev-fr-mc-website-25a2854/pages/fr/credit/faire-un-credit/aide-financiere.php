<?php
$h1="Prêt entre amis: nos offres pour aider vos proches parents";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Amis, parents: aide financière sur mesure pour aider vos proches</title>
<meta name="description" content="Vous souhaitez aider vos proches à concrétiser un projet? Un prêt chez Multicrédit vous permettra d'obtenir une somme flexible sur 12-84 mois. Offre gratuite." />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pret-entre-amis";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Vous souhaitez aider un proche financièrement? Participer à un projet en apportant votre contribution? Qu'il s'agisse d'établir un <b>prêt entre amis</b>, ou <b>prêt entre parents</b> proches, nous pouvons vous apporter un coup de pouce financier sous la forme d'un emprunt dont vous définissez les modalités.</p>
		<h2>Votre argent comme vous l'entendez</h2>
		<p>Un emprunt privé chez Multicrédit vos permet d'obtenir une somme flexible <b>dont vous n'avez pas à justifier l'utilisation</b>. Ainsi, une aide financière permettra de financer aisément:</p>
		<ul>
			<li>Vos projets personnels</li>
			<li>Une participation aux projets de vos proches</li>
		</ul>
		<h2>Une aide financière flexible</h2>
		<p>Notre agence vous permet d'emprunter librement le montant souhaité et de choisir vous-même la durée de remboursement. Confiez-nous votre dossier et bénéficiez:</p>
		<ul>
			<li>D'un emprunt flexible: 3'000.- à 300'000.- sur 12 à 84 mois</li>
			<li>D'une solution pour tout projet: utilisez librement l'argent obtenu</li>
			<li>D'une prise en charge par un spécialiste: faites une demande gratuite et sans obligation, nous négocions pour vous un taux d'intérêt favorable auprès de nos partenaires bancaires.</li>
		</ul>
		<h2>Simple, rapide, confidentiel</h2>
		<p>Besoin de financer un crédit entre amis ou pour investir dans le projet d'un proche parent? Nous pouvons vous proposer très simplement une aide financière adaptée. Contactez-nous pour en savoir plus!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Contact gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
