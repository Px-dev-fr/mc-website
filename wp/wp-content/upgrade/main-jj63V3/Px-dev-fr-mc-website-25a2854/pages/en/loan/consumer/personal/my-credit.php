<?php
$h1="Get a personalised loan with Multicredit!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Discover My credit!</title>
<meta name="description" content="Do you quickly need some money to purchase things or to pay some bills? We have designed a personal loan that will adapt to any situation! Discover My credit!"/>
<?php include('includes/meta.php');?>
</head>
<body> 
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-argent"; $alt="My credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Do you need some extra money to purchase things quickly or to pay some bills? Multicredit has designed a personal loan that will adapt to any situation! We called it: <b>My credit</b>! With My credit, you can enjoy your money now and reimburse it later at your own pace!</p>
	
	<h2>How much can I borrow with My credit?</h2>
	<p>Each client has specific desires and needs that's why they deserve a <b>unique solution</b>! Whether you need a <b>little amount</b> to pay some bills or a larger one in order to get a luxurious car, we can satisfy your expectations!</p>
	<ul> 
		<li><b>My credit amount</b>: choose freely from 3,000 CHF to 300,000 CHF with the possibility of getting an extra cash amount.</li>
		<li><b>My reimbursement</b>: repay your loan over a short or medium term duration from 12 to 84 months. Benefit from fixed monthly payments so you can plan your budget safely!</li>
		<li><b>My interest rate</b>: get the lowest interest rate possible according to your situation! Our team will negotiate your case with banks in order to offer you a great deal!</li>
	</ul>
	
	<h2>Who can get a credit?</h2>
	<p>At Multicredit, we try to make our offers accessible to a great number of people! <b>Easy conditions</b> and <b>fast procedures</b>! Choose us for a great financial solution!</p>
	<ul>
		<li><b>Swiss</b> or foreigners with a valid <b>working permit</b>.</li>
		<li>Earn <b>at least 2,900 CHF</b> per month.</li>
		<li>Between <b>18 and 65 years</b> old and have no prosecution in Switzerland.</li>
	</ul>
	
	<h2>My fast credit!</h2>
	<p>By making your loan with us, you can benefit from a very fast treatment! Apply online, get a <b>free and non-binding offer and decide then if you take the deal!</p>

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
