<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>SME credit</title>
<meta name="Description" content="Do you need an SME loan? We offer you quickly a loan solution that adapts perfectly to your company's needs and you get to choose the modalities!"/>
<?php
$h1="Are you an SME? Do you need a loan? Check out Multicredit for offers!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="sme-credit";$pme=1; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		<p>Are you looking for a financial solution for your business in Switzerland? Do you own a LLC, Ltd or general partnership company and you wish to develop new projects soon? Multicredit offers you an <b>SME credit to help you realise all your business dreams without complications</b>!</p>
		
		<h2>A flexible SME loan for everyone.</h2>
		<p>With many customers throughout all Switzerland, we offer <b>tailored solutions</b> for everyone owning a business in Switzerland. Get an SME credit for your very own situation.</p>
		
		<h2>Long years of experience</h2>
		<p>Our long years of experience with SMEs and independents has helped us to acquire a strong knowledge in this type of loan. Are you looking for some money to finance a project or to overcome a lack of fund? Contact us for:</p>
		<ul>
		<li>A study of your file and a market comparison</li>
		<li>Administrative support</li>
		<li>A negotiation with our partner to get the best rate possible</li>
		<li>A fast and discreet processing of your request</li>
		</ul>
		<h2>What amount do you need?</h2>
		<p>Our flexible terms adapt to each type of SME. For your loan you can choose:</p>
		<ul>
		<li>The amount: from 10,000 to 10,000,000 CHF</li>
		<li>The duration: reimburse in a long or short term period, 12 to 84 months</li>
		</ul>
		<h2>Quick and without issues</h2>
		<p>We are specialised in SME and can thus offer you an SME credit with the best markets conditions. Don't hesitate to contact us for a free and without obligations offer!</p>
		
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for an SME loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
