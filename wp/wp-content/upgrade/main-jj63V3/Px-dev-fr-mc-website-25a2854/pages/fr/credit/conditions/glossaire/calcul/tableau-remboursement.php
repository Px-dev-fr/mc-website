<?php
$h1="Tableau de remboursement des intérêts";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Remboursement: notre tableau de remboursement de crédit</title>
<meta name="description" content="Face à des mensualités de crédit fixes, quelle part correspond au paiement des intérêts, et quelle part au solde? Découvrez notre tableau de remboursement!"/>
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

		<p>Chez Multicrédit, vous pouvez planifier sereinement votre budget! En effet, quel que soit le taux d'intérêt proposé, nous vous assurons des <b>mensualités fixes</b>. Ces mensualités comprennent:</p>
		<ul>
			<li>Le <b>remboursement du crédit</b>: à savoir le montant emprunté</li>
			<li><b>L'intérêt du crédit</b></li>
		</ul>
		<h2>Quel est le coût mensuel d'un crédit?</h2>
		<p>Quel sera le coût mensuel de votre prêt? Notre tableau de remboursement vos propose de calculer automatiquement le montant mensuel de votre facture en fonction:</p>
		<ul>
			<li>Du montant emprunté</li>
			<li>De la durée du prêt</li>
			<li>Du taux d'intérêt</li>
		</ul>
		<h2>Calculez vos mensualités</h2>
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
		<h2>Besoin d'une offre?</h2>
		<p>N'hésitez pas à nous contacter pour bénéficier d'une offre avantageuse gratuite et sans engagement. Réponse en 24h - 48h suivant la complétion de votre dossier.</p>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/tableau.php');?>
</body>
</html>
