<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Credit in Switzerland</title>
<meta name="Description" content="Make your loan with Multicredit and get the best interest rate! Choose any amount from 3,000 to 300,000 CHF over a 12 to 84 months period."/>
<?php
$h1="Are you looking for a loan? Multicredit is the best choice to get help!";
$link="/en/ask-a-loan.php"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="swiss-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
	<?php include('includes/dsimuls/credit.php');?>
	<p>Multicredit is here for you throughout all Switzerland. With specialized advisers in all major cities of Switzerland, we can provide you with a regional service.</p>
	
	<h2>Loan in Switzerland</h2>
	<p>Our company is an ideal partner for a loan. Indeed, with Multicredit you can choose your own credit terms:</p>
	<ul>
		<li><b>Amount</b>: from 3,000 to 300,000 CHF.</li>
		<li><b>Repayment</b>: benefit from a low interest rate and a fixed monthly repayment over 12 to 84 months.</li>
		<li><b>Loan reason</b>: you can use the money received according to your needs without restriction.</li>
	</ul>
	
	<h2>A regional solution</h2>
	<p>Present through all Switzerland, we bring you a professional advice in your region:</p>
	<ul>
		<li>Zürich</li>
		<li>Geneva</li>
		<li>Basel</li>
		<li>Bern</li>
		<li>Ticino</li>
		<li>And other major cities of Switzerland: Lausanne, Fribourg, Neuchâtel, Aarau, Lenzburg, ...</li>
	</ul>
	
	<h2>Security and privacy</h2>
	<p>Any credit request is processed with <b>100% security and privacy</b>. Do not hesitate to contact us for any project that a loan could finance: our collaborators will be happy to make you a free non-binding quote.</p>
	
	<h2>Online express request</h2>
	<p>Do you need money to make a dream come true? A credit in Switzerland could be the solution. Do not hesitate to fill in our online form or contact us directly for more information. Free advice.</p>
	<a class="bouton" href="/en/ask-a-loan.php">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
