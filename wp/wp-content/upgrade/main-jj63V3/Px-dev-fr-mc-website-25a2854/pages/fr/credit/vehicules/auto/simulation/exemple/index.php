<?php
$h1="Exemples d'offres de prêts auto";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Exemples: quelques offres de crédits auto</title>
<meta name="description" content="Combien coûte un crédit voiture? Nous vous proposons quelques exemples d'offres ainsi que la possibilité d'effectuer une demande de prêt très simplement."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="exemple-offre-credit-auto";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>De nombreuses personnes qui souhaitent financer l'acquisition d'un véhicule se demandent en finalité <b>combien coûte un crédit voiture?</b> Dans les faits, le coût réel d'un emprunt privé visant à couvrir l'achat d'une voiture dépend de nombreux facteurs. Nous vous proposons ici quelques exemples.</p>
		<h2>Achat d'une voiture d'occasion</h2>
		<p>Un particulier souhaite faire l'acquisition d'un véhicule d'occasion coûtant 6'000 Chf. Il possède déjà 1'000 Chf et a uniquement besoin d'un prêt véhicule de 5'000 Chf pour compléter cette somme. Avec un taux de 6.9% et une durée de remboursement sur 24 mois:</p>
		<ul>
			<li>Le coût mensuel sera de 178.-</li>
			<li>L'intérêt total (compris dans le coût mensuel) sera de 284.-</li>
		</ul>
		<h2>Achat d'une automobile neuve</h2>
		<p>Dans cet exemple d'offre de prêt auto, un privé a besoin de 25'000 Chf pour financer un véhicule neuf. Il obtient une proposition sur 36 mois avec un taux de 5.9%:</p>
		<ul>
			<li>Le coût mensuel sera de 757.-</li>
			<li>L'intérêt total sera de 2'276.-</li>
		</ul>
		<h2>Votre offre de prêt auto sur mesure</h2>
		<p>Vous cherchez à financer l'achat d'une voiture neuve ou d'occasion? Multicrédit peut vous aider à obtenir <b>une offre individualisée au meilleur taux</b>. Confiez-nous votre dossier et bénéficiez d'une proposition rapide, gratuite et sans engagement par un spécialiste!</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
