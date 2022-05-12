<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">
<head>
<title>Company: safe and simple credit request</title>
<meta name="Description" content="Are you self-employed or an entrepreneur? Do you need a loan for your company? Get the financial help you need safely and without any complicated procedure!"/>
<?php
$h1="Does your business need a credit? Contact Multicredit!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="company-loan"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	 
	<p>Do you own a company as a self-employed, CEO, manager or business partner? At Multicredit we also offer <b>personalised and flexible loans for companies</b>! You can now safely get the financial help you need!</p>
	
	<h2>Reach your professional goals for your company!</h2>
	<p>A company credit will give you the opportunity to finally reach the business goals you have set. With a <b>simple and safe request</b>, you will soon be able to:</p>
	<ul> 
		<li>Buy the new equipment you need to be competitive in the market.</li>
		<li>Renovate your amenities or upgrade your equipment and thus increase your profitability.</li>
		<li>Compensate for a temporary lack of cash in your finances.</li>
		<li>Make any investment that will ensure your company to hold a strong position in the market.</li>
	</ul>
	
	<h2>A flexible and advantageous credit</h2>
	<p>By choosing our credit solution for companies, you ensure yourself to benefit from both <b>quality services and advantageous loan modalities</b>!</p>
	<ul>
	<li>Choose yourself the credited amount and the reimbursement duration.</li>
	<li>Get a loan with <b>simple procedures</b>.</li>
	<li>Your money will be quickly at your <b>disposal</b> and you can <b>decide freely how you want to use it</b>!</li>
	</ul>
	
	<h2>Make a request</h2>
	<p>Thanks to our experience, we can advise you and get you a loan that will adapt perfectly to your needs! Do not hesitate to contact us for a free and confidential analysis! Together, we will find the most suitable financial solution for your company!</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a credit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
