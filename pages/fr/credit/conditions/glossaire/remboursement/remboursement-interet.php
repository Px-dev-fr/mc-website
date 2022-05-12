<?php
$h1="Remboursement des intérêts de crédit";
$link="";
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Remboursement de l'intérêt: nos explications sur l'intérêt du crédit</title>
<meta name="description" content="Comment fonctionne le remboursement de l'intérêt du crédit en Suisse? Mensualités fixes, intérêt dégressif, découvrez combien vous payerez pour votre emprunt."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Dans le cas d'un crédit personnel, le remboursement des intérêts s'effectue avec une mensualité fixe, mais des intérêts dégressifs. C'est à dire que chaque mois, le part d'intérêt payé est plus faible, alors que la part de capital remboursé augmente.</p>
		<h2>Des mensualités fixes</h2>
		<p>Le remboursement et l'intérêt du crédit est effectué via des <b>mensualités fixes</b>, quel que soit le taux d'intérêt. Cependant, chaque mois, le paiement effectué est divisé entre:</p>
		<ul>
			<li>Le <b>remboursement du capital</b>
			<li>Le paiement <b>des intérêts du crédit</b></li>
		</ul>
		<h2>Intérêts dégressifs</h2>
		<p>Durant les premiers mois, la part de votre paiement dédiée au paiement des intérêts est plus importante que sur la fin du remboursement. C'est pourquoi on parle <b>d'intérêts dégressifs</b>. Cette notion est importante si vous souhaitez pas exemple demander le solde à payer lors d'un rachat, ou choisir d'effectuer un <b>remboursement anticipé</b>.</p>
		<h2>Economisez sur vos intérêts!
		<p>En effet, un remboursement anticipé, chez Multicrédit, vous permettra d'être remboursé de la différence d'intérêts. Dans tous les cas, si vous avez des questions concernant le <b>remboursement de l'intérêt</b> du crédit, n'hésitez pas à nous contacter!</p>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
