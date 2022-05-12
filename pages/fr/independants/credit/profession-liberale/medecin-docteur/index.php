<?php
$h1="Simple, facile, rapide, profitez d'un prêt pour votre cabinet médical";
$link="/fr/independants/credit/demande";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crédit aux médecins: des liquidités sans complication pour votre cabinet</title>
	<meta name="description" content="Besoin de rénover votre cabinet médical ou d'acheter du matériel? Profitez de liquidités sans complications grâce à nos solutions de crédits pour médecins!"/>
<script type="text/javascript">
</script>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="credit-medecin-docteur";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>

		<p>Vous êtes docteur, vous exercez une activité indépendante dans le domaine de la santé? Besoin d'un prêt pour financer votre activité indépendante? Profitez d'une solution simple et rapide et disposez librement de la somme d'argent dont vous avez besoin! Contactez-nous pour une proposition sans engagement.</p>
		
		<h2>Financez votre cabinet médical</h2>
		<p>Vous avez besoin d'équipement spécialisé? De matériel d'anaylse? Ou simplement à rénover vos locaux ou à financer l'achat de mobilier? Notre solution de <b>prêt pour médecins</b> vous permet de disposez simplement d'une somme d'argent flexible à utiliser selon vos besoins:</p>
		<ul>
			<li>Remboursement sur 12 - 72 mois, mensualités fixes permettant une budgétisation claire</li>
			<li>Un minimum de documents à fournir: profitez tout simplement d'une alternative sans avoir à impliquer votre banque</li>
			<li>Taux d'intérêt plus avantageux: économisez sur les intérêts de votre emprunt!</li>
		</ul>
		
		<h2>Un montant plus important, moins de complications</h2>
		<p>En passant d'une agence, vous disposez <b>d'une alternative avantageuse à votre banque classique</b>. En particulier, nous vous proposons un prêt pour médecin avec de meilleures conditions:</p>
		<ul>
			<li>Limite de crédit plus élevée</li>
			<li>Remboursement plus flexible</li>
			<li>De meilleures chances d'acceptation du dossier</li>
			<li>Vous conservez votre relation bancaire intacte</li>
		</ul>
		
		<h2>Simple, rapide, discret: votre crédit médecin sans complications!</h2>
		<p>Vous souhaitez en savoir plus? Vous êtes médecin, vétérinaire, ou un indépendant actif dans le domaine de la santé? Présents depuis <b>plus de <?php echo (date("Y")-1999);?> années</b> dans le domaine, nous sommes volontiers à disposition pour vous renseigner ou vous proposer une offre sans engagement!</p>
		
		
		<a class="bouton" href="/fr/independants/credit/demande">demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
