<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>Firm financing: let us help you!</title>
<meta name="Description" content="Are you a self employed, or an entrepreneur? Do you need a firm financing solution? We can advise you and get you a loan that will adapt perfectly to your needs"/>
<?php
$h1="Firm financing";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; $image="firm-financing";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	 
	<p>Do you own a firm as a self employed, CEO, manager or business partner? At Multicrédit we also offer <b>personalised and flexible</b> financing solutions companies! You can now safely get the <b>financial help you need</b>!</p>
	<h2>Only the best for your firm!</h2>
	<p>A business loan will give you the opportunity to provide your firm with the best equipment! With a <b>simple and safe request</b>, you will soon be able to refresh your company and stay competitive in the market! What do you need?:</p>
	<ul> 
		<li>Buy new equipment or new business vehicles.</li>
		<li>Renovate your amenities or upgrade your equipment.</li>
		<li>Compensate for a temporary lack of cash in your finances.</li>
		<li>Make any investment that will ensure you to increase your profitability.</li>
	</ul>
	<h2>Flexibility and freedom</h2>
	<p>By choosing our financing solutions for firms, you ensure yourself to benefit from both <b>quality services</b> and <b>flexible loan modalities</b>!</p>
	<ul>
		<li>Choose yourself the credited amount and the reimbursement duration.</li>
		<li>Get a loan with <b>simple and fast procedures</b>.</li>
		<li>Your money will be at disposal quickly and you can <b>decide freely how you want to use it</b>!</li>
	</ul>
	<h2>Make a request</h2>
	<p>Thanks to our experience, we can advise you and get you a loan that will adapt perfectly to your needs! Do not hesitate to contact us for a free and confidential analyse! Together we will find the most suitable financing solution for your firm!<p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
