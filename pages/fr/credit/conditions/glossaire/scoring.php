<?php
$h1="Calcul du scoring bancaire et prêt privé";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit et scoring: comment optimiser ses chances d'acceptation?</title>
<meta name="description" content="Le scoring est un indicateur qui reflète la faisabilité d'un crédit pour un particulier et déterminera les conditions proposées. Nos conseils et solutions."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Lorsqu'une banque analyse un dossier suite à une demande de crédit, elle étudie en détail la situation du demandeur. Cette étude débouche en général sur un "score" (ou scoring). Cet indicateur reflète la situation générale du consommateur et déterminera si la demande sera ou non acceptée ainsi que les conditions proposées pour le crédit.</p>
		<h2>Comment se calcule le score d'un prêt?</h2>
		<p>Chaque banque possède sa propre méthode de calcul et sa propre échelle. Cet indicateur prend certes en compte les revenus du demandeur, mais également de nombreuses autres variables afin de refléter de la manière la plus précise possible le risque pris en cas de crédit accordé. Ainsi, <b>le calcul du scoring bancaire prend en charge des éléments tels que</b>:</p>
		<ul>
			<li>Le revenu, éventuellement combiné au revenu du/de la conjoint/e.</li>
			<li>Le loyer payé (ou charges hypothécaires pour les propriétaires)</li>
			<li>Les assurances maladie</li>
			<li>La localité (le coût de la vie variant d'un canton à l'autre)</li>
			<li>La situation familiale (état civil, nombre d'enfants, âge des enfants)</li>
			<li>Le type d'emploi et la sécurité de l'emploi (depuis quand auprès du même employeur)</li>
			<li>La nationalité et / ou type de permis de travail</li>
			<li>L'âge</li>
			<li>D'éventuels antécédents ou codes ZEK</li>
			<li>Etc.</li>
		</ul>
		<h2>Quelle est l'influence du score?</h2>
		<p>Cet indicateur constitue au final un simple "curseur" qui reflète le niveau de risque pris par la banque en cas d'octroi du crédit. Ainsi:</p>
		<ul>
			<li>Un score <b>trop bas</b> entraînera un refus: la demande de prêt sera considérée comme trop risquée.</li>
			<li>Un score <b>bas</b> impliquera des conditions de prêt moins avantageuses.</li>
			<li>Un score <b>élevé</b> permettra de bénéficier d'un meilleur taux.</li>
		</ul>
		<h2>Peut-on connaître ou calculer son scoring?</h2>
		<p>Le score tel que calculé par les banques pour une demande de crédit n'est pas communiqué: ni aux clients ni aux éventuels intermédiaires. Il faut cependant relever que d'autres organismes que les banques proposent un indicateur du niveau de risque. Ainsi, des sociétés comme "Crif" se spécialisent dans la collecte de données et la réalisation de "scorings", que ceux-ci soient utilisés ou non pour l'étude d'une demande de crédit.</p>
		¨
		<h2>Vous souhaitez optimiser votre situation?</h2>
		<p>Spécialisés dans l'intermédiation en crédits bancaires depuis 1999, nous pouvons vous aider à réaliser vos projets. Notre équipe prendra en charge votre dossier et optimisera ce dernier pour défendre un meilleur scoring bancaire et obtenir pour vous <b>des conditions de prêt plus avantageuses</b>. Vous souhaitez en savoir plus? N'hésitez pas à effectuer une demande pour bénéficier d'une proposition gratuite et sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande de crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
