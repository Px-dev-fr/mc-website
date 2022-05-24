<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Winterthur: credit solutions</title>
<meta name="Description" content="Do you need a credit in Winterthur as soon as possible? A loan with Multicredit means having a safe, quick and simple financial solution with a close contact."/>
<?php
$h1="Loan offers with Multicredit!";
$link="/en/ask-a-loan.php"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="simulation-de-credit";$alt="Winterthur credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<?php echo "<h1>$h1</h1>";?>
	<p>Your financial situation does not allow you to finance new projects? Do you need a quick renovation for your house, or a new car immediately? With our flexible offers you can purchase the things you need now and reimburse later at your own pace!</p>
	
	<h2>How to request a credit in Winterthur?</h2>
	<p>Why would you look further when you can get a credit just next to you in Winterthur? Let us help you finance your projects with a <b>safe and simple solution</b> that will respect your budget! Requesting a loan with us has never been easier! </p>
	<ul>
		<li><b>Modalities</b>: choose freely an amount up to 300,000 Chf in a reimbursement duration from 12 to 84 months.</li>
		<li><b>Our specialist</b> will look for the best offer for you with the lowest interest rate possible according to your situation.</li>
		<li><b>100% free analysis</b>: all our offers are guaranteed with a free and non-binding offer!</li>
		<li><b>Loan insurance</b>: every offer comes with a free insurance that will cover your reimbursements in case of illness, accident or death.</li>
	</ul>
	
	<h2>The ideal solution</h2>
	<p>With Multicredit you will finally be able to realise any project that you have postponed so far. Do not hesitate to contact us to get a <b>personalised offer for a credit in Winterthur</b>! As soon as we get your request, our team will analyse your file and give you an answer as soon as possible!</p>
	
	<h2>Free and non-binding offer</h2>
	<p>Your credit is only a few clicks away! Fill in our safe online form now in order to get a free and non-binding offer! You can get the money you need <b>only 7 days</b> after you file is accepted. A loan with Multicredit means having a safe, quick and simple financial solution <b>with a close contact</b>.</p>
		<a class="bouton" href="/en/ask-a-loan.php">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
