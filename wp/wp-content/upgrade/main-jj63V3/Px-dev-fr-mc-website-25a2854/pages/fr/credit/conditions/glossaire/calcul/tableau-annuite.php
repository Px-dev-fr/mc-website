<?php
$h1="Tableau d'annuités";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Tableau d'annuités: calculez le coût mensuel d'un crédit</title>
<meta name="description" content="A combien s'élèveront les annuités de votre prêt? Bénéficiez d'un remboursement mensuel fixe avec Multicrédit et découvrez notre tableau d'annuités."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Chez Multicrédit, nous souhaitons vous proposer des contrats <b>simples et compréhensibles</b>. C'est pourquoi nous proposons systématiquement à nos clients des <b>annuités fixes</b>. Comme l'indique notre tableau d'annuités, chaque facture est fixe. Le montant comprend alors:</p>
		<ul>
			<li><b>Les intérêts du prêt</b>: ceux-ci sont dégressifs</li>
			<li><b>Le remboursement du capital</b>: ceux-ci correspondent au remboursement du crédit lui-même</li>
		</ul>
		<h2>Possibilité de remboursement anticipé</h2>
		<p>Avec un crédit chez Multicrédit, vous pouvez facilement planifier votre budget, la facture étant identique chaque mois! Vous avez en outre la possibilité de payer plusieurs factures en une seule fois, ou de verser des montants plus importants. De cette manière, votre prêt est remboursé avant échéance (on parle alors de remboursement anticipé): les intérêts payés en trop vous seront alors remboursés.</p>
		<h2>Calculez votre tableau d'annuités</h2>
		<p>Notre tableau d'annuité se met à jour automatiquement en fonction du montant indiqué. Nous vous proposons alors une indication du coût mensuel fixe en fonction de la durée du contrat et du taux d'intérêt (qui dépendra de votre situation).</p>
		<div class="form">
			<div class="input">
				<input type="text" id="tabmont" value="10000">
				<span class="label">Montant (Chf)</span>
			</div>
			<table class="tab">
				<tr>
					<td>Durée \ Taux</td>
					<td>5.9%</td>
					<td>7.9%</td>
					<td>9.9%</td>
				</tr>
				<?php
				for ($i=12;$i<=84;$i+=12){
					echo
					'
					<tr>
						<td>'.$i.'
						<td class="mens" data-duree="'.$i.'" data-taux="5.9">
						<td class="mens" data-duree="'.$i.'" data-taux="7.9">
						<td class="mens" data-duree="'.$i.'" data-taux="9.9">
					</tr>
					';
				}
				?>
			</table>
		</div>
		<h3>Offre gratuite et confidentielle</h3>
		<p>Vous souhaitez en savoir plus? N'hésitez pas à nous contacter pour bénéficier, en toute confidentialité, d'une <b>offre de crédit gratuite et sans engagement</b>. Contactez-nous au plus vite pour en savoir plus! N'hésitez pas à choisir librement le montant du prêt comme la durée de remboursement. Réponse sous 24 - 48h une fois votre dossier complété.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander un crédit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/tableau.php');?>
</body>
</html>
