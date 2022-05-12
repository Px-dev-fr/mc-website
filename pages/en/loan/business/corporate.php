<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>Corporate: our advantageous loan solutions</title>
<meta name="Description" content="Do you want to strengthen your position in the labor market? We can offer you a corporate loan with easy procedures and highly confidential services!"/>
<?php
$h1="Does your company need to boost itself? Perhaps a credit can be helpful!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1; $image="corporate-loan";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	 
	<p>Do you want to strengthen your position in the labor market by investing in your own company? At Multicredit, we also offer corporate loans for small and medium business! With our financial solution, you can benefit from a flexible loan with no administrative complication!</p>
	
	<h2>Why choosing Multicredit?</h2>
	<p>Some banks and agencies only grant corporate loans after long and tedious procedures. But here at Multicredit, we do our best to <b>make our clients life easier</b> by offering you simply and quickly the financial help you need! When requesting a credit through our agency, you ensure yourself to get a <b>lot of advantages</b>:</p>
	<ul>
		<li><b>Choose yourself the modalities</b>: from 10,000 CHF to 300,000 CHF in a reimbursement 	duration from 12 to 84 months.</li>
		<li><b>Credited amount, free use</b>: whether you need to renovate your offices, amenities, or simply 	compensate for a lack of cash, the choice is yours!</li>
		<li>Get a free non binding offer: quickly and without any complication.</li>
	</ul>
	
	<h2>Safe and high quality services for corporates</h2>
	<p>Our agency guarantees an <b>extremely safe treatment of your personal data</b>. We comply with the same rules as banks, so we can assure you highly confidential and quality services. Our team is available all the time to answer any questions you may have.</p>
	<h2>Are you a corporate? Fill in our form!</h2>
	<p>Do you want more information? Do not hesitate to contact us or to fill in our form to get a free and non-binding analysis.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a credit</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
