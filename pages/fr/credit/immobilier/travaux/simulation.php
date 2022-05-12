<?php
$h1="Simulateur de prêt travaux rénovation: estimez le coût de votre emprunt";
$link="/fr/credit/formulaire-demande-credit";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Notre simulateur: dimulation des coûts de votre crédit travaux</title>
<meta name="description" content="Quel sera le coût de votre prêt rénovation? Découvrez notre simulateur en ligne.  Confiez-nous votre dossier pour une offre gratuite de 3'000 à 300'000 Chf."/>
<?php include('includes/meta.php');?>
<style><?php include("template/forms.css");?></style>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-pret-travaux";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>

		<p>Un prêt personnel destiné aux rénovations d'une maison ou d'un appartement est une solution à la fois simple, flexible et rapide à mettre en place. Vous envisagez cette solution et souhaitez en savoir plus sur les coûts liés à un emprunt privé? <b>Découvrez notre simulateur de prêts travaux</b> et comparez les prix avant de vous engager!</p>
		<h2>Intérêt et mensualité</h2>
		<p>Le prix d'un emprunt se mesure essentiellement selon l'intérêt payé au total et la mensualité de remboursement. Ainsi <b>notre outil de simulation</b> de crédit travaux vous indique:</p>
		<ul>
			<li>La mensualité comprend le remboursement du prêt lui-même, mais aussi le paiement de l'intérêt. Il s'agit d'un coût fixe.</li>
			<li>L'intérêt représente finalement le "prix" de l'emprunt. Si par exemple vous empruntez 50'000 Chf et que l'intérêt se monte à 2'000 Chf, vous devrez rembourser un total de 52'000 Chf.</li>
		</ul>
		<h2>Emprunt privé ou hypothèque? Nos simulateurs</h2>
		<p>Si l'acquisition d'un nouveau bien se finance généralement à travers une hypothèque, le prêt privé s'avère une alternative viable lorsqu'il s'agit de rénovations, transformations ou réparations. Pour comparer les offres, n'hésitez pas à consulter également notre calculateur de prêt hypothécaire!</p>
		<h2>Notre outil de simulation de prêt travaux</h2>
		<p>Notre calculateur vous permet une simulation de crédit rénovation très simplement. Indiquez le montant souhaité, la durée de remboursement et le taux d'intérêt pour obtenir le coût total (mensualité et intérêt) de l'emprunt!</p>
		<div class="form">
			<div class="input">
				<input type="text" id="simontant" value="10000">
				<span class="label">Montant (Chf)</span>
			</div>
			<div class="input">
				<select id="siduree" >
					<?php for ($i=12;$i<=84;$i=$i+12) echo "<option value='$i'>$i</option>";?>
				</select>
				<span class="label">Durée (Mois)</span>
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

		<h3>Confiez le calcul de votre prêt maison à un spécialiste</h3>
		<p>Plus de 15 années d'expérience dans le domaine du prêt aux particuliers font de notre agence un partenaire idéal pour financer vos projets de rénovation, transformation ou réparation. Bénéficiez d'un montant flexible et laissez-nous négocier le taux d'intérêt auprès de nos partenaires bancaires! Contactez-nous pour bénéficier d'une étude de dossier gratuite débouchant sur une proposition sans engagement.</p>
		<a class="bouton" href="/fr/credit/formulaire-demande-credit">Demande immédiate</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
<?php include('includes/simulation.php');?>
</body>
</html>
