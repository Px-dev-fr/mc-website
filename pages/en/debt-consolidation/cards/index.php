<?php
$h1="";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Credit card</title>
<meta name="description" content="Do you have several credit cards and you wish to get a debt consolidation? Do you need some money cash instead of a credit card? Contact us for great loans!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-card";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Did you plan to buy a new car or some new furniture? You don't have enough money yet on your credit card? If you need <b>some money cash</b>, we would be more than happy to help you with a <b>personalised loan</b> that will respect your budget and needs! Make a request online!</p>
	<h2>For all credit cards?</h2>
	<p>A credit card is a bank card that will allow you to pay or to withdraw cash. Even if you can go below your balance, it can sometimes happen that you can't go below an allowed limit. <b>We can help you</b> with any type of credit card that you have!</p>
	<ul> 
		<li>Swiss Mastercard</li>
		<li>American Express</li>
		<li>Visacard</li>
		<li>And also debit cards</li>
	</ul>
	<h2>Refill your credit card</h2>
	<p>Do you need a financial solution to refund your card quickly and easily? With Multicredit, you can get a <b>flexible loan in no time</b>!</p>
	<ul>
		<li>Credited amount: choose from <b>3'000 Chf to 300'000 Chf</b>.</li>
		<li>Reimbursement: choose a duration <b>from 12 to 84 months</b>.</li>
		<li>Interest rate: get the <b>lowest interest rate</b> possible according to your situation!</li>
	</ul>
	<h2>Credit payoff</h2>
	<p>Do you need to regroup all your credit card balances into a unique one? <b>Save up to 40%</b> on your monthly bills thanks to our debt repayment solutions!</p>
	<h2>Free and non-binding</h2>
	<p>If you are interested in our <b>loan offers</b> to compensate for your empty credit card, do not hesitate longer! Each request is <b>free and without commitment</b>.</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		//include bottom Adress
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
