<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>Corporate: our credit solutions</title>
<meta name="Description" content="Do need a corporate loan? We offer many advantageous solutions that will adapt perfectly to your needs! With us there are no complicated procedures."/>
<?php
$h1="Wanna renovate your company? Do some changes? Multicredit can offer you help!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; $image="corporate-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
	 <?php include('includes/dsimuls/credit-pme.php');?>
	<p>Does your company need renovations? New offices or vehicles? We offer many advantageous solutions that will fit <b>any need that you have</b>!</p>
	
	<h2>Flexible offers for a corporate</h2>
	<p>Whether you own a sole proprietorship, a LLC or a general partnership company, we ensure that our offer will adapt perfectly to your needs! Our team listens to you carefully and pays attention to the details in order to <b>advise you</b>. Thanks to our experience, you will be able to choose the most suitable corporate credit solution. Define yourself the modalities! Let's see how:</p>
	<ul>
		<li>Amount: from 10,000 CHF to 300,000 CHF and get a <b>credited amount free of use</b>.</li>
		<li>Reimbursement duration: from 12 to 84 months according to your company's budget.</li>
		<li>Monthly payments: fixed monthly payments so you can plan your budget on the whole reimbursement duration.</li>
	</ul>
	
	<h2>Fast process</h2>
	<p>Obtaining a corporate credit can sometimes be a long and complicated journey. But not with Multicredit! We guarantee easy administrative procedures and fast services!<p>
	<ul>
		<li>Make a simple request per phone or via a form.</li>
		<li><b>Get a free and confidential offer</b> within 48 hours.</li>
		<li><b>Your money will be at disposal your in 7 days</b> after your request has been accepted</li>
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
