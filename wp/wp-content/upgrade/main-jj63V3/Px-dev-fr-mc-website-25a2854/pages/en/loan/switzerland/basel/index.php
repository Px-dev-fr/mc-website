<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Basel: credit solution</title>
<meta name="Description" content="Are you looking for a credit in Basel? We offer quality services, little administrative procedures and a quick 
answer! Contact us for a free offer!"/>
<?php
$h1="Do you live in Basel? Do you need a loan? Check out Multicredit's solutions!";
$link="/en/ask-a-loan.php"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="offres-de-credit";$alt="Basel";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
	<p>Are you looking for a credit in Switzerland and specifically in Basel? With Multicredit, you can easily get the amount you need from <b>3,000 CHF up to 300,000 CHF</b>. Our qualified advisers will be more than happy to help you get a credit in Basel or in the area. Feel free to make an online request! </p>
	
	<h2>Do you live in Basel?</h2>
	<p>Whether you are a Swiss citizen or a <b>foreigner working in Switzerland</b>, we can offer you a flexible and advantageous credit in Basel! By choosing Multicredit for your loan, you ensure to benefit from the following services: </p>
	<ul>
		<li><b>A flexible loan</b>: choose freely an amount up to 300,000 CHF and a reimbursement duration from 12 to 84 months.</li>
		<li><b>A professional team</b>: our advisers will be happy to inform you and to help you with your loan.</li>
		<li><b>Low interest rate</b>: we do our best to get the lowest interest rate possible according to your situation.</li>
		<li><b>Loan insurance</b>: every offer comes with a free insurance that will cover your reimbursements in case of illness, accident or death.</li>
	</ul>
	
	<h2>Our offer</h2>
	<p>Would you like to know more about our offer? Do not hesitate to make a free request using our online form. The file treatment is <b>100% free and does not commit you to anything</b>. Complete our safe form and our team will contact you with an answer within the next 48 hours.</p>
	
	<h2>Security and confidentiality</h2>
	<p>A credit in Basel with Multicredit means high quality services, less administrative procedures and a quick answer! Because we comply with Swiss banking rules, we guarantee that your personal data will remain a <b>100% confidential</b> and your request will be treated with <b>great care</b>.</p>
		<a class="bouton" href="/en/ask-a-loan.php">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
