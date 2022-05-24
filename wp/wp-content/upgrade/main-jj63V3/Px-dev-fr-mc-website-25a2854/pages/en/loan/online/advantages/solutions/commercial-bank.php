<?php
$h1="Commercial Bank";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Commercial Bank</title>
<meta name="description" content="Would you like quick mony from the commercial bank of your choice? At Multicredit, we help you get a loan from 3,000 to 300,000 the the bank you choose."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="financement-commerce";$alt="Commercial Bank"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>You would like to buy a new house, a new car? With our loan solution, you will get the wished amount of money in any account of the commercial bank of your choice. Discover our offers.</p>
		<h2>Our loan offer</h2>
		<p>With Multicredit, it is quick and easy to get a loan for the wished amount with good conditions:</p>
		<ul>
			<li>Any amount <b>from 3,000 to 300,000 Chf</b></li>
			<li>Repayment duration from <b>12 to 84 months</b>, according to your budget</li>
			<li>Receive the money in your private bank account in the <b>commercial bank</b> of your choice</li>
		</ul>
		<h2>Ask your loan now</h2>
		<p>Every request is treated by one of our broker. They will deal with the commercial bank constantly in order to get you the best interest rate. We know that a demand for a credit must be taken in charge rapidly, so we will answer you within 48 hours. Our team is a professional one and will assist you in your efforts to credit. Trust us you won't regret it.</p>
		<h2>Complete our online form</h2>
		<p>If you want to have a mortgage towards a commercial bank you can appeal to our agency. We will guarantee you a high quality service. Just complete our online form and we will contact you as soon as possible.</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask a free offer</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
