<?php
$h1="Buy some new hardware with the help of Multicredit!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Computer loan</title>
<meta name="description" content="Would you like to change your own hardware the one from your company? If you need to buy a computer, or a hardware, we can offer financial solutions."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="buy-a-computer";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Cashflex Multicredit is your partner to acquire hardware. For a personal use, or for your agency, we have the right computer loan solutions. Need to <b>buy a computer</b>? We will fund your new computers and assist you throughout the administrative tasks. So don't hesitate to fill in our form, we will be glad to get you some advice for your request.</p>
		
		<h2>Need a financing solution?</h2>
		<p>You need or would like to have a new server, printer, or network infrastructure, for your company or for yourself? With our computer loan offers, you can choose the right amount for your expenses from <b>3,000 to 300,000 CHF</b>.</p>
		
		<h2>Ask now for a loan</h2>
		<p>Do not hesitate to fill in our online form and we will answer you within 48 hours. Buy the computers you need for yourself or your business. Our analysis of your situation is <b>free</b>, and we will be glad to provide you with <b>an offer with no obligation</b> <b>within 48h</b>.</p>
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
