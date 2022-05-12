<?php
$h1="Simulation de prêt bateau: calculez le coût de votre futur emprunt!";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Simulation: quel sera le coût de votre crédit bateau?</title>
<meta name="description" content="Envie de naviguer sur les lacs suisses? Simulez le coût de votre prêt bateau sur une durée de 12 à 84 mois et faites votre demande gratuitement en ligne!"/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-credit-bateau";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Vous rêvez de naviguer sur le lac Léman, lac de Neuchâtel ou tout autre point d'eau en Suisse? Nous pouvons vous aider à estimer le coût d'un emprunt destiné à l'achat de tout véhicule nautique. Découvrez notre outil de simulation de prêt bateau ou contactez-nous pour obtenir une offre sans engagement!</p>
		<h2>Intérêt total et mensualité</h2>
		<p>Essentiellement, le coût d'un emprunt privé peut se résumer à deux éléments: l'intérêt payé au total et la mensualité. Par exemple, un emprunt de 50'000.- sur 24 mois, avec un taux de 6.9%, engendrera les coûts suivants:</p>
		<ul>
			<li>Intérêt total de 3'559 Chf</li>
			<li>Mensualité fixe de 2'231 Chf, qui comprend à la fois le remboursement du prêt et le paiement de l'intérêt</li>
		</ul>
		<h2>Crédit bateau: simulation des coûts</h2>
		<p>Notre outil vous permettra d'estimer simplement l'intérêt total et la mensualité liée à votre emprunt. Entrez simplement le montant nécessaire pour financer votre achat et la durée de remboursement envisagée. Le taux d'intérêt, lui, dépendra au final de votre situation.</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Coût du bateau (Chf)</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Remboursement (Mois)</span>
			</div>
			<div class="input">
				<select id="taux">
					<?php for ($i=4.9;$i<=9.9;$i=$i+1) echo "<option value='$i'>$i %</option>";?>
				</select>
				<span class="label">Taux d'intérêt</span>
			</div>
			<div class="input">
				<div>Facture mensuelle :</div>
				<div id="fmensualite" class="value"></div>
			</div>
			<div class="input">
				<div>Intérêt total :</div>
				<div id="interet" class="value"></div>
			</div>	
		</div>
		<h3>Un taux plus bas, des mensualités plus avantageuses</h3>
		<p>Vous souhaitez financer l'achat d'un véhicule nautique? Nous pouvons vous aider avec des offres flexibles et surtout avantageuses! Confiez-nous votre dossier: nous nous chargeons des démarches administratives et négocions un meilleur taux d'intérêt auprès de nos partenaires bancaires! Demandez dès maintenant une offre rapide, gratuite et sans obligation.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demander une offre</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
