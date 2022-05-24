<?php
$h1="Calculate yourself your credit!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Calculator: calculate your loan</title>
<meta name="description" content="A loan calculator is useful if you want to find out how much you will have to reimburse each month. Discover our loan calculator and get a free credit offer."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="loan-calculator";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Do you need a loan calculator to estimate the cost of a credit? We provide you with some information and the opportunity to benefit from an online loan calculator.</p>
		
		<h2>What is a loan calculator?</h2>
		<p>When you are requesting an online credit you have the possibility to use a <b>loan calculator</b>. This system has been set up in order to help the clients to know what exactly the credit cost will be. For example, if you borrow an amount of 6,000 CHF and reimburse it in 12 months you will pay 266.- /months with a total interest of 192 Chf. The advantages of this process is that you can plan in advance the amount that you will have to save in order to pay your loan.</p>
		
		<h2>Internet: is it better for requesting a credit?</h2>
		<p>Many people are using internet to request a credit. Indeed, it's sometimes more easier to do it this way. You don't have to queue at the financial institutions, this will save your time grandly. You can stay at home and do it at your own pace. Just fill in the online form and then you can send the required documents. If you need more information about how much you will have to reimburse you can use a <b>loan calculator</b> that will tell you exactly how much you will have to pay back.</p>
		
		<h2>Our loan calculator</h2>
		<p>If you want to try out our <strong>loan calculator</strong>, do not hesitate to try the calculator on our website. There is one on each page to calculate your loan. Also, in case of interest, Multicredit can provide you with with a loan offer at the following conditions:</p>
		<ul>
			<li><b>Amount</b>: from 3,000 to 250,000 CHF</li>
			<li><b>Duration</b>: from 12 to 84 months</li>
			<li><b>Interest rate</b>: negotiated as low as possible so that you will pay sometimes even less money than what our loan simulator indicates</li>
		</ul>
		
		<h2>Need money?</h2>
		<p>Also if you need money quickly, we can make you a non-binding loan offer or use our loan simulator to check out how much you'll have to pay. Make your online request!</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
