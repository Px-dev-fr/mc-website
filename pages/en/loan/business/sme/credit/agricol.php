<?php
$h1="Are you a farmer? Do you have some projects in mind? Get a loan to realise them!";
$link="/en/loan/ask-a-loan?pme=1";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agricol credit: loan for farmers</title>
<meta name="description" content="Need a loan for your farm? With an agricol credit it is possible. Choose the amount from 3,000 to 300,000 CHF and the lenght of your repayment. Free offer."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="agricol-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Multitcredit is proposing you a loan solution for independent farmers. Do you need a new vehicle for your farm, or some cows? At Multicredit we can lend you the money for your agricultural business.</p>
		
		<h2>The best offer</h2>
		<p>For a farmer it is difficult to find good loan offer. The banks are often a little bit suspicious, because of the repayment of the loan. At Multicredit we are glad to offer agricol credit with good conditions. Our brokers will take in charge your files and will negotiate with the bank to get a credit at the best interest rate. By doing this, you won't have to be worried about the administrative tasks.</p>
		
		<h2>Our loan offer</h2>
		<p>Do not hesitate to ask us for a <b>free non-binding quote</b> and benefit from the following advantages:</p>
		<ul>
			<li><b>Amount</b>: choose freely the money you need from 3,000 to 300,000 CHF</li>
			<li><b>Repayment</b>: according to your budget, you can choose a repayment period from <b>12 to 84 months</b></li>
			<li><b>Interest rate</b>: we negotiate directly with our partner for the best rate possible</li>
			<li><b>A team at your disposal</b>: feel free to contact our advisers for a cash supplement or a rate decrease</li>
		</ul>
		
		<h2>For Swiss and foreigners</h2>
		<p>Our loan offers are also available for Swiss people and foreigners with a Swiss working permit. If you are in possession of a B, C, or L permit and are looking for a loan, we could help you. Do not hesitate to contact us!</p>
		
		<h2>Ask online</h2>
		<p>Don't hesitate to tell us your needs. You can choose the amount from <b>3,000 to 250,000 CHF</b> and the repayment from 12 to 84 months. Fill in our online form, we will contact as soon as possible with an agricol credit offer.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
