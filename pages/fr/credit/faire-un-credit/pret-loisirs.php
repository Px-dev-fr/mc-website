<?php
$h1="Prêt loisirs: nous vous aidons pour tout achat d'équipement ou matériel";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Loisirs: un prêt pour financer vos activités</title>
<meta name="description" content="Financez simplement les travaux à effectuer pour votre maison ou appartement. Rénovation, transformation, nous vous proposons un prêt au meilleur taux!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pret-loisirs";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	
		<p>Avez-vous besoin d'une solution pour financer vos loisirs? Avec un crédit Multicrédit, c'est possible. En toute simplicité, nous pouvons vous faire une offre pour le montant désiré. Faites votre demande en ligne ou par téléphone pour bénéficier d'une proposition gratuite sans engagement.</p>
		<h2>Nous finançons vos activités de loisir</h2>
		<p>Faites-vous plaisir ou à votre famille! Nos solutions de crédits loisirs s'adaptent à vos projets. Grâce à notre agence, obtenez simplement le montant nécessaire de 3'000.- à 300'000.- pour tout projet d'achat:</p>
		<ul>
			<li>Loisirs nautiques</li>
			<li>Escalade ou équipement de montagne</li>
			<li>Matériel sportif</li>
			<li>Equipement high-tech</li>
			<li>Etc.</li>
		</ul>
		<h2>Nos avantages</h2>
		<p>Passer par notre agence vous assure de profiter de nombreux avantages. Outre une expérience <b>de plus de 15 années</b> à votre service, nous vous proposons:</p>
		<ul>
			<li>Des mensualités fixes permettant de planifier votre budget sur la durée</li>
			<li>Un remboursement étalé sur 12 à 84 mois selon vos préférences</li>
			<li>Un taux d'intérêt négocié auprès de nos partenaires bancaires</li>
			<li>Une prise en charge globale de votre dossier</li>
		</ul>
		<h2>Contactez-nous</h2>
		<p>Vous souhaitez en savoir plus ou obtenir une proposition confidentielle et sans engagement? Nous sommes volontiers disponibles pour vous renseigner.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Contact gratuit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
