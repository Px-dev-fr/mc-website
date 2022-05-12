<?php
$h1="Get the lowest loan offer with Multicredit's help!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Interest rate</title>
<meta name="description" content="How and where can you get the best interest rate in Switzerland? We negotiate your case with several banks in order to get you the lowest loan offer possible!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="interest-rate";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>The credit's interest rate is a <b>very important factor</b> when calculating a loan's cost. The credit's total cost depends on two things:</p>
	<ul>
		<li>The interest rate: the lower it is, the lower the loan's cost will be.</li>
		<li>The <b>reimbursement duration</b>: the longer the reimbursement is extended, the higher the loan's cost will be.</li>
	</ul>
	
	<h2>How do you calculate it?</h2>
	<p>Please notice that a 10% rate does not just mean “10% of the borrowed amount”. The reimbursement is paid per month and the interest rate is calculated according to what is left to pay back. For instance, a <b>10,000 Chf</b> loan with a 11,9% interest rate will cost <b>650 Chf of total interest costs</b> over a 12 months reimbursement duration.</p>
	
	<h2>Getting the best advantages</h2>
	<p>Most people focus on the lowest rate they can get. But with most of the banks, the interest rate will <b>depend on the client's financial situation</b>. The “healthier” your budget is, the lower your credit's rate will be.</p>
	
	<h2>How to get the best offer?</h2>
	<p>The best thing to do in order to get the lowest interest rate, is to work <b>with a broker</b>. By choosing Multicredit for example, you ensure yourself to benefit from the best deal possible because our team will negotiate your case with several banks! You will also benefit from the following services:</p>
	<ul>
		<li>A <b>confidential treatment</b> of your personal information.</li>
		<li>An <b>exclusive and reliable</b> contact everywhere in Switzerland!</li>
		<li>A professional team at your disposal with more than <b>20 years of experience</b> in financing solutions</li>
	</ul>
	
	<h2>Request a free analysis!</h2>
	<p>Do not hesitate to request a <b>free and non-binding</b> offer in order to know the interest rate we can suggest you. Just fill in our <b>online form</b> and we will study your case in no time! Let us help you get the lowest rate possible according to your situation!</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for a loan</a>
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
