<?php
$h1="Manage your loan with a professional's advice";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Credit management: a simple and safe solution</title>
<meta name="description" content="Are you looking for a better way to deal with your debts? Let us help you lighten your monthly budget with a personalised credit management solution!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-management";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Is your monthly budget getting too heavy and are you looking for a better way to deal with it? Do you have cumulative financial commitments and would you like to simplify your reimbursements? We can help you with our <b>safe credit management solutions</b>!</p>
	
	<h2>How does it work?</h2>
	<p>Our simple solution consists in managing your debts by transferring them to our agency. We will then regroup them into one new loan! Doing so, you can <b>save up to 40%</b> on your monthly budget and ensure to benefit from many other advantages:</p>
	<ul> 
		<li><b>Simple procedure</b>: you only have to tell us the total amount that needs to be reimbursed and we will pay it off for you.</li>
		<li><b>Flexible reimbursement duration</b>: you can choose freely the reimbursement duration from 6 to 84 months.</li>
		<li>We can reimburse any type of loan: personal loans, leasing or credit card balances.</li>
		<li>We offer a <b>lower interest rate</b> than normal credit card providers do.</li>
		<li>You benefit from <b>only one consolidated loan</b> and deal with one unique contact!</li>
	</ul>
	
	<h2>A flexible loan management</h2>
	<p>Our credit management solution applies to many types of personal financial commitments! Whether you wish to get a debt consolidation for a personal credit, a <b>car leasing</b> or for <b>credit card balances</b>, our offer will adapt perfectly to your needs! Let us help you lighten your budget with a personalised credit management solution! In addition to that, you can also benefit from an <b>extra credited amount</b> if you need it!</p>
	
	<h2>Safe treatment</h2>
	<p>At Multicredit, we comply with strict banking rules. Therefore we can guarantee a <b>100% confidential treatment</b>! We also offer great advice and high quality services. Do you wish to know more about our credit management solutions? Do not hesitate to contact us to get a <b>free and non binding offer</b>!</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for an offer</a>
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
