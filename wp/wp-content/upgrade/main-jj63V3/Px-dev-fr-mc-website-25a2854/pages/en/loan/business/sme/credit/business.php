<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Business credit </title>
<meta name="Description" content="Are you looking for a business credit? We are a safe and experienced Swiss company that can offer you the financial help you need. Discover our advantages!"/>
<?php
$h1="Do you need a loan for your company/society? Multicredit can help you!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head> 
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; $image="business-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	<p>Are you looking for a business credit? Do you want to get that financial help from a safe and qualified company? We can offer you just what you need!</p>
	
	<h2>Plan your budget safely</h2>
	<p>At Multicredit you benefit from <b>a large freedom</b> when it comes to choosing the modalities. Do you want to reimburse the amount on a short or long term? It is up to you! Our experts will advise you and let you decide which solution is the best for your company. You will also be able to <b>plan your budget on the whole reimbursement duration</b> with a great peace of mind! Let's discover how:</p>
	<ul>
		<li>Fixed monthly payments: we offer you <b>the lowest interest rate possible and fixed monthly payments</b> !</li>
		<li>Reimbursement duration: from 12 to 84 months, according to your company's budget.</li>
		<li>Amount: from 10,000 CHF to 300,000 CHF. You also benefit from a credited amount free of use.</li>
	</ul>
	
	<h2>Benefit from our experience</h2>
	<p>We are the most qualified company in the credit industry and we give a great importance in establishing a trusted and reliable relation with all of our clients.</p>
	<ul>
		<li><b>Confidential and high quality services</b> from our experts.</li>
		<li>Our team is available at all times to advise you and answer your questions.</li>
	</ul>
	<p>Do you want more information? Do not hesitate to contact us or to fill in our form to get a free and non-binding analysis.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
