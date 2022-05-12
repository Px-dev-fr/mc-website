<?php
$h1="Want some space for your car? With us you can get a credit to do it.";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Garage credit</title>
<meta name="description" content="Would you like to transform your house and build a garage? Have you thought of a financing solution? Discover our personal loan offers and get a free quote."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>You own your own property and wish to build a garage? Or maybe you wish to renovate your actual one? We can fund you up to 300,000 Chf. We are treating every request confidentially and will analyze your financial situation for free with just <b>simple and easy steps</b>!</p>
		
		<h2>Our credit offer</h2>
		<p>If you need money to build a garage, we can fund you with flexible and interesting loan offers. By applying to a personal loan at Multicredit, you ensure yourself to benefit from those advantages:</p>
		<ul>
			<li><b>Flexible loan</b>: choose freely your credit amount from <b>3,000 to 300,000 Chf</b> as well as the repayment duration from <b>12 to 84 months</b></li>
			<li><b>Interesting rate</b>: we will negotiate your interest rate directly with our financial partners to offer you the <b>lowest interest rate</b> possible</li>
			<li><b>Loan insurance</b>: you are covered in case of illness, death or accident</li>
			<li><b>Tax deduction</b>: with Multicredit, you can deduct from your taxes the interest of the loan</li>
		</ul>
		
		<h2>Build without hesitation with a credit!</h2>
		<p>Don't hesitate to fill in our form for a personal credit request. A loan application is <b>free and without commitment</b>. Our brokers will guide you throughout the steps:</p>
		<ul>
			<li>You fill in our form: this is <b>free and does not commit you to anything</b></li>
			<li>Our staff will provide you with a loan offer adapted to you in <b>24h to 48h</b></li>
			<li>Our offer is available for <b>1 month</b>: feel free to compare it with any other loan offer</li>
		</ul>
		<h2>Online request</h2>
		<p>With our online form, you will be able to ask for a free loan request in <b>two minutes only</b>. Your data will remain <b>100% confidential</b>. Trust us and fill in our online form now:</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask a loan</a>
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
