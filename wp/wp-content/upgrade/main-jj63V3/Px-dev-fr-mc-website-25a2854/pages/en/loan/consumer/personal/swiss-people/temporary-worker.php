<?php
$h1="Are you a part-time worker? Want a loan? Get it with Multicredit!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Credits for temporary workers: solutions in Switzerland</title>
<meta name="Description" content="Do you need a loan but are a temporary worker in Switzerland? We can help you: from 3,000 to 300,000 Chf. Ask now for a free offer. Contact us!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="temporary-loan";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Are you a worker in Switzerland and need some money, but you are not full-time employed? We can help you. Multicredit grants loans to <strong>temporary worker</strong> from 3,000 to 300,000 CHF.</p>
		
		<h2>Refunding time for a worker</h2>
		<p>You choose the refunding time of your <strong>loan</strong>: from 12 to 84 months. Given that, and given the amount we can offer, you choose your loan freely. We are of course glad to help you if you need advice about your credit for temporary employed people.</p>
		
		<h2>Conditions for temporary workers</h2>
			<ul>
				<li><b>Swiss nationality, C,B,L</b>-Permit or <b>legitimation card. </b></li>
				<li>Work and be established in Switzerland</li>
				<li>Minimum net wage of<b> 2700 CHF/month.</b></li>
			</ul>
			
		<h2>What documents should a temporary worker send?</h2>
			<ul>
			<li><b>A valid ID:</b> ID-Card front-back, Passport front-back, also of your partner</li>
			<li>A valid C,B,L-Permit or legitimation card front-back</li>
			<li>A copy of the <b>3 last salary certificates</b> (also of your partner)</li>
			</ul>
		<p>Are you a temporary worker? Ask us for a loan: free offers with no cost!</p>
			<a class="bouton" href="/en/loan/ask-a-loan">Ask for a loan</a>	
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
