<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>Company financing: let us help you</title>
<meta name="Description" content="Do you want to invest in your company? At Multicrédit we understand small business owners and we do our best to help you get the financial help you need!"/>
<?php
$h1="Company financing";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	<p>Do you own a LLC, Ltd, sole proprietorship or general partnership company? Holding a strong position in the market or dealing with a strong competition can be very challenging. At Multicrédit, we <b>understand small business owners</b> and we do our best to help you when you need financial help. With our <b>company financing solutions</b> you can benefit from our experts advice and choose freely the amount you need!</p>
	<h2>You were never so free to decide</h2>
	<p>Our financing solution for companies will give you the possibility to compensate for a lack of cash in your finances on a short or medium term. With us<b>you have full control of your budget</b> and you can use the credited amount the way you want!</p>
	<ul>
		<li><b>Define the credit modalities</b>: choose the suitable amount (Chf 10'000 to 300'000) and the 	reimbursement duration from 12 to 84 months.</li>
		<li><b>Advantageous costs</b>: make an online or per phone request and benefit from a low interest rate!	</li>
		<li>Offers and advice: our team is specialised in small companies financing solutions. Let us help you 	choose the <b>most suitable one</b>!</li>
		<li>Benefit from fixed monthly payments and <b>plan your budget with a great piece of mind</b>!</li>
	</ul>
	<h2>Simple and fast</h2>
	<p>Our team will be able to get you quickly a free offer and <b>deal with all administrative details</b>! Let us help you finance your company's needs! We are available all the time to answer your questions and we would be delighted to offer you a tailored financial solution that respects your company's budget!</p>
	<p>Do you want more information? Do not hesitate to contact us or to fill in our form to get a free analyse without commitment.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
