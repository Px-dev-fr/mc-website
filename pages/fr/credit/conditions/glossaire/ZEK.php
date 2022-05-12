<?php
$h1="Codes ZEK et influence sur vos demandes de prêt privés";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>ZEK : entrées, codes, et informations</title>
<meta name="description" content="Avez-vous des codes inscrits auprès de la ZEK? Découvrez nos explications cette centrale d'information et les conséquences pour toute demande de crédit."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<?php include('includes/dsimuls/credit.php');?>
		
		<p>La ZEK est souvent citée par les agences de crédits. De fait, toute demande de prêt privé générera automatiquement une requête auprès de cette centrale.</p>
		<h2>De quoi s'agit-il?</h2>
		<p>La ZEK, ou <b>centrale d'information de crédit</b>, est un organisme exclusivement Suisse qui enregistre et conserve la trace de toute demande de crédit et, plus largement, <b>toute activité liées aux crédits en Suisse</b>. Lorsque vous faites une demande de crédit (auprès d'une banque ou d'un courtier), la première chose qu'effectuera le prêteur sera s'aller se renseigner sur votre compte. </p>
		<h2>Quelles informations sont enregistrées</h2>
		<p>Tout organisme financier pourra se renseigner sur vos antécédants financiers et sera apte à voir tout défaut de paiement, poursuites retards dans vos paiements lors d'un précédent crédit, etc... L'organisme délivrant le crédit se servira ainsi des informations fournies par cette centrale pour déterminer si votre demande sera acceptée ou non, et, si oui, à quel taux.</p>
		<h2>Ai-je des codes ZEK?</h2>
		<p>Vous avez bien entendu le droit de consulter votre propre dossier sur la ZEK. Pour ce faire, il vous suffit de vous rendre sur le <a href="https://www.zek.ch/fr-ch/preneurs-de-credit-et-de-leasing/donnees-sur-ma-personne">site de la ZEK</a> et de compléter le formulaire en ligne. Vous avez une entrée à la ZEK, et vous souhaitez savoir à quoi correspond cette entrée? Chaque entrée à la ZEK est présente sous la forme d'un code résumant l'information enregistrée.</p>
		<ul>
		<li><b>Code 01:</b> Le solde de votre crédit a été reporté sur une autre facture </li>
		<li><b>Code 02:</b> Vous avez effectué régulièrement les paiements liés au crédit</li>
		<li><b>Code 03:</b> Vos paiements ont été longs ou avec retards</li>
		<li><b>Code 04:</b> Mesures spéciales (poursuites, arrangements, etc...)</li>
		<li><b>Code 05:</b> Perte d'argent liée à votre dossier (mauvais paiement)</li>
		<li><b>Code 06:</b> Incertitude juridique liée à votre cas (très rare)</li>
		</ul>
		<p>Les codes liés à des factures de soldes de cartes de crédits:</p>
		<ul>
		<li><b>Code 21:</b> Votre carte été bloquée ou annulée</li>
		<li><b>Code 22:</b> Un solde est en cours de paiement</li>
		<li><b>Code 23:</b> Perte: iden au code 05 pour les crédits</li>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
