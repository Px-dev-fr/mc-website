<?php
$h1="Nos exemples de prêts pour l'achat d'équipement de loisir";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Achat d'équipement: quelques exemples de crédits</title>
<meta name="description" content="Découvrez nos exemples de prêts accordés pour l'achat d'équipement de loisir. Contactez-nous, bénéficiez d'une offre de crédit dès 3'000 Chf pour tout besoin."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="achat-equipement";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Un crédit privé peut s'avérer une solution idéale pour financer l'achat d'équipement de loisir! Chez Multicrédit, nous vous aidons à concrétiser vos projets grâce à une solution flexible qui s'adapte à vos besoins comme à votre budget. Contactez-nous et bénéficiez d'une proposition gratuite et sans engagement.</p>
		<h2>Achat d'équipement de loisir avec un prêt flexible</h2>
		<p>Actifs depuis plus de 15 ans dans le domaine, nous souhaitons pouvoir proposer à chaque client <b>une offre taillée sur mesure</b>. Pour ce faire, nous laissons à chacun la liberté de définir ses propres modalités d'emprunt:</p>
		<ul>
			<li>De 3'000.- à 300'000.-</li>
			<li>Remboursement compris entre 12 mois et 84 mois</li>
		</ul>
		<h2>Quelques exemples de prêts loisirs</h2>
		<p>Chez nous, nul besoin de justifier la raison de l'emprunt! Une fois l'argent obtenu, vous l'utilisez au gré de vos besoins ou de vos envies. Ainsi, un prêt auprès de notre agence pourra facilement financer:</p>
		<ul>
			<li>Tout matériel sportif: VTT, matériel nautique, matériel d'escalade, engins de musculation, ...</li>
			<li>Tout équipement de loisir: vélo électrique, matériel de pêche, ...</li>
			<li>Achats high-tec: projecteur, home-cinéma, télévision, matériel informatique, ...</li>
		</ul>
		<h2>Profitez d'une proposition gratuite sans engagement</h2>
		<p>Un projet à concrétiser? Pourquoi ne pas nous confier votre dosser? Nous nous chargeons des démarches administratives et négocions vos conditions d'emprunt auprès de nos partenaires bancaires afin de vous garantir les meilleures offres du marché!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
