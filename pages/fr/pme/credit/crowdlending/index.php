<?php
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Crowdlending: le crédit participatif comme solution de financement</title>
<meta name="Description" content="Besoin de liquidités pour votre PME? Profitez des conseils d'un spécialiste et financez vos projets grâce au crédit participatif! Confiez-nous votre dossier!"/>
<?php
$h1="Des liquidités sans complications grâce au crédit participatif!";
$link="/fr/pme/credit/demande"; include('includes/meta.php');
?>
</head>
<body>
<div id="container">
	<?php $mtel="076 412 37 89";include('includes/header.php');?>
	<?php $image="crowdlending-credit-participatif";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>

		<p>Le crédit participatif, ou crowdlending, est une alternative au prêt bancaire "classique" et permet de bénéficier de liquidités simplement sans avoir à impliquer sa banque. Spécialisés dans les nouvelles solutions de financement pour PME, nous vous aidons à financer votre activité!</p>
		
		<h2>Conservez votre relation bancaire intacte grâce au crowdlending</h2>
		<p>En faisant appel au crowdlending, le montant du prêt n'est pas accordé par votre banque, mais par <i>un réseau d'investisseurs</i>. De votre côté, vous conservez intacte la relation entretenue avec votre banque et bénéficiez d'un emprunt assorti de conditions intéressantes:</p>
		<ul>
			<li><b>Montant</b>: vous profitez d'une limite de crédit souvent plus importante que ce qui peut être proposé par votre banque.</li>
			<li><b>Remboursement</b>: sur 12 à 60 mois selon vos préférences.</li>
			<li><b>Taux d'intérêt</b>: déterminé en fonction de la classe de risque, mais en principe tout aussi voir plus avantageux que les banques proposent habituellement.</li>
		</ul>
		
		<h2>Nos services</h2>
		<p>Actifs sur le marché <b>depuis plus de <?php echo (date("Y")-1999);?> années</b>, nous proposons à nos clients des alternatives de financement modernes comme le crowdlending qui permettent de s'affranchir avantageusement des banques. Votre entreprise a besoin de liquidités? En passant par notre agence, vous bénéficiez:</p>
		<ul>
			<li>D'un conseil neutre débouchant sur des propositions adaptées à vos besoins</li>
			<li>D'une alternative de financement avec ou sans banques</li>
			<li>D'une prise en charge globale de votre dossier: nous nous occupons des démarches!</li>
		</ul>
		
		<h2>Exemple: crédit participatif de 150'000 Chf</h2>
		<p>Une entreprise active dans l'import-export de matériel médical spécialisé a besoin d'une rallonge budgétaire de 150'000 Chf. Grâce à nos services, cette dernière pourra par exemple bénéficier d'un crédit participatif <b>de manière simple et rapide</b>:</p>
		<ul>
			<li>Taux d'intérêt dès 3.0%</li>
			<li>Remboursement sur 12 - 60 mois</li>
			<li>Démarches administratives prises en charge par nos soins</li>
		</ul>
		<p>A titre indicatif, un tel exemple représente un coût mensuel (remboursement et intérêts compris) situé entre 2'693.- et 2'823.- pour un taux de 3% à 5%.</p>
		
		<h2>Contactez-nous</h2>
		<p>Vous souhaitez avoir plus d'informations sur cette alternative de financement? Nos conseillers sont volontiers à votre disposition pour vous renseigner ou vous proposer, en cas d'intérêt, une offre sans engagement.</p>

		<a class="bouton" href="/fr/pme/credit/demande">Contact avec un spécialiste</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
