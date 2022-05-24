<?php
$h1="";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Get a credit check</title>
<meta name="description" content="Do you need a credit check for your company or for yourself? See how much you can afford over a short or medium term reimbursement duration and get a great deal"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Do you want to buy a new car or some home furniture? Do you own a business and you need some new equipment? If you are unsure which amount you can afford or how long the reimbursement duration should be, get a <b>credit check for free</b>! At Multicredit, we can analyse your financial situation in order to offer you the <b>best loan solution</b> possible!</p>
	<h2>Many services for you</h2>
	<p>Our team is at your disposal all the time to answer your question and to advise you about the best financial solution possible! Tell us what your budget and needs are and you will get a personal or corporate credit check!</p>
	<ul> 
		<li><b>Consumer credit</b>: how much can you afford for your new TV or a car? Choose an amount from 3'000 Chf to 300'000 Chf and the reimbursement duration!</li>
		<li><b>SME loans</b>: does your company need a financial check-up? Let us help you with your business plan or funding needs!</li>
		<li><b>Mortgage and real estate</b>: do you want to buy a new house? We also provide advice and credit check for your future mortgage plan!</li>
		<li><b>Debt consolidation</b>: is your monthly budget getting heavier? Save up to 40% on your monthly payments thanks to our debt consolidation solution!</li>
	</ul>
	<h2>Our professional team</h2>
	<p>We can offer you a <b>quality and personalised</b> credit check thanks to our 10 years experience in financing services. Our team will analyse your situation and defend your case to banks so you can get the <b>lowest interest rate possible</b>! Choosing us means having a close contact and a reliable financial partner.</p>
	<h2>Free offer!</h2>
	<p>Do not hesitate to contact us for a credit check! Each request is free and does not commit you to anything! Loan, mortgage, and debts, we can help you with anything you need!</p>
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
