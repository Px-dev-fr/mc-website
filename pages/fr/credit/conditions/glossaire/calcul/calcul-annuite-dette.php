<?php
$h1="Calculer les annuités de votre dette: notre simulateur";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Annuité fixes: calculez les mensualités de votre crédit</title>
<meta name="description" content="Calculez l'annuité de votre dette avec Multicrédit! Parce que chaque client est unique, nous proposons des solutions de prêt flexibles. Offre gratuite."/>
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
		<p>Vous songez à prendre un crédit? A combien s'élèveront les annuités de votre dette, entre le remboursement de celles-ci et l'intérêt? Nous vous proposons un tableau de calcul des annuités.</p>
		<h2>Votre dette: bénéficiez d'annuités fixes</h2>
		<p>Chez Cashflex Multicrédit, nous souhaitons <b>vous simplifier</b> la vie avec des offres à la fois simples, flexibles et transparentes. Pour cette raison, nous vous proposons systématiquement de rembourser votre dette de manière facile et flexible:</p>
		<ul>
			<li>Votre facture mensuelle, ou annuité, est <b>fixe</b>.</li>
			<li>Le calcul des mensualités s'effectuera au taux <b>le plus bas possible</b> en fonction de votre situation.</li>
		</ul>
		<h2>Le meilleur taux pour annuité de la dette la plus basse!</h2>
		<p>Vous avec un projet en tête qui nécessite une solution de financement? Un crédit chez Multicrédit vous permettra d'obtenir facilement et rapidement une <b>offre gratuite et sans engagement</b>.</p>
		<h2>Calcul d'annuités: votre mensualité en Chf</h2>
		<p>Calculez simplement le coût mensuel de votre futur emprunt. Indiquez simplement le montant souhaité, notre outil vous proposera alors un tableau de calcul d'annuités indiquant le coût mensuel en fonction du taux d'intérêt et de la durée de remboursement envisagée.</p>
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
		<h3>Demande en ligne</h3>
		<p>Vous souhaitez en savoir plus? N'hésitez pas à compléter notre formulaire ou à nous contacter directement par téléphone pour connaître les modalités que nous pourrons vous proposer.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/tableau.php');?>
</body>
</html>
