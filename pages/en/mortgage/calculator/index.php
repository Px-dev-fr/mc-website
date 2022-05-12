<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mortgage calculator</title>
<meta name="Description" content="Would you like to have an estimation of your costs? Don't hesitate to use our mortgage calculator. This is free and without commitment. Contact us!"/>
<?php
$h1="Calculate easily your budget with Multicredit";
$link="/en/mortgage/mortgage-service"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="calculateur-hypotheque";$alt="mortgage calculator";include('includes/img.php'); ?>
	<?php include('includes/arianne.php');?>
	<div id="mct" class="offres">
		<p>Would you like to evaluate the cost of a mortgage? We can propose to you on this page a mortgage calculator. Our simulator will allow you to plan ahead. The result will depend on the information that has been provided to estimate the monthly costs.</p>
	
		<h2>Do you need help?</h2>
		<p>Our mortgage calculator will allow you to make yourself an idea of the monthly costs. The cost that is indicated is only an estimation. To know precisely the interest rate that the bank could propose to you we recommend you to to <b>ask for a specialist's advice,</b> he will be able to inform you.</p>
		
		<h2>Our advantages</h2>
		<p>Multicredit can offer you many advantages that will blow your mind!</p>
		<ul>
		<li>Easy: to ask for an offer just fill in our online form, our experienced employees will help with the administrative parts.</li>
		<li>Quick: you will receive an answer within 48 hours, with us you don't need to wait so long.</li>
		<li>Discreet: all your data will remain 100% secured, with us you can count on confidentiality.</li>
		</ul>
		<h2>Profit from free advice</h2>
		<p>At Multicredit, we can give you the benefit of a free interview with a mortgage specialist. Did you plan to build a house? Don't hesitate to benefit from now on of our offer to obtain a free appointment.</p>
		<a class="bouton" href="/en/mortgage/mortgage-service">Free contact</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
