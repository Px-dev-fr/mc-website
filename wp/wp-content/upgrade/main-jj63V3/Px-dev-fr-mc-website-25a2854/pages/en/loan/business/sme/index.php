<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>SME financing: our personalised and flexible solutions</title>
<meta name="Description" content="Do you need financial help to refresh your company? We offer specific SME financing solutions! Have a look at our personalised and flexible offers!"/>
<?php
$h1="Finance your business with the help of Multicredit!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; $image="sme-financing";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	 
	<p>Are you a manager, a self-employed person, a CEO or a business partner? At Multicredit we also offer specific SME financing solutions! Whether you need a credit for your shop, kiosk, small store or restaurant, we can help you get the financial help you need with <b>personalised offers</b>!</p>
	
	<h2>A flexible financing solution</h2>
	<p>We are <b>experts in both personal and SME loan</b> services. Thanks to our experience, we are able to offer advantageous and flexible SME financing solutions for all. Discover your options!</p>
	<ul> 
		<li>Amount: from 10,000 Chf to 300,000 Chf and benefit from a <b>credited amount free of use</b>!</li>
		<li>Reimbursement duration: <b>from 12 to 84 months</b> with a low interest rate.</li>
		<li>Fixed monthly payments for a <b>safe budgeting</b>!</li>
	</ul>
	<h2>Boost your competitiveness</h2>
	<p>At Multicredit, we want to help you achieve all your <b>business ambitions</b>! Our team will be more than happy to advise you and answer all your questions if you wish to refresh your company! What do you need to be a leader in the market?</p>
	<ul>
	<li>Buy new equipment.</li>
	<li>Renovate your amenities.</li>
	<li>Compensate for a temporary lack of cash in your finances.</li>
	</ul>
	<h2>Contact us!</h2>
	<p>It is all possible with our SME financing solutions! Do not hesitate to make an online or per phone request to get a free and non binding analysis!<p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
