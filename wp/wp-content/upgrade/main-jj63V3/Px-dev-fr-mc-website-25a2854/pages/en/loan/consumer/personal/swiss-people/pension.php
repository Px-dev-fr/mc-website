<?php
$h1="Are you a retiree? Get some financial planning advice or solution!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pension loan: our solutions</title>
<meta name="description" content="Are you almost planning your retirement? Do you want some advice on a smart pension plan or a flexible pension loan to finance some projects? Contact us!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="pension-loan";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Are you almost planning your retirement in Switzerland or elsewhere? If you have <b>specific projects</b> for the future and are lacking a bit of money, we can help you with our <b>advantageous pension loans</b>!</p>
	
	<h2>Just for retirees</h2>
	<p>More and more retirees are being active and have ongoing projects to finish. Here at Multicredit we want to make our offers <b>accessible to retirees too</b>! Tell us what you need and we will get you a <b>personalised</b> pension loan!</p>
	<ul> 
		<li><b>Consumer credit</b>: do you need a new car? Some furniture to refresh and renovate your house? Some money for a long trip abroad?</li>
		<li><b>Mortgage and real estate</b>: do you need a quote for your mortgage plan? Are you planning to buy a house somewhere sunnier for your old days? Let us help you!</li>
		<li><b>Debt consolidation</b>: do you want to regroup all your credit card balances into one? Save up to 40% on your monthly budget thanks to our debt repurchase solution!</li>
		<li><b>Other services</b>: at Multicredit, we also offer consulting for retirement plans and wealth management. Meet with an adviser to <b>budget safely your future</b>!</li>
	</ul>
	
	<h2>Easy procedures</h2>
	<p>We try to simplify our procedures a lot so our client can get their pension loan easily and quickly. With our flexible financial solutions, you are free to choose what matches best your needs!</p>
	<ul>
		<li>Choose an amount between <b>3,000 Chf and 300,000 Chf</b> with an extra cash amount if needed!</li>
		<li>Plan your reimbursements in a <b>12 to 84 months duration</b> and make some early reimbursements if you want, in order to deduce your interests!</li>
		<li>Fill in our <b>safe online form</b> with all these information and you will get a free <b>answer within 48 hours</b>!</li>
	</ul>
	
	<h2>A team at your disposal</h2>
	<p>Our team will be more than happy to help you get the best pension loan possible! They will take care of all administrative details for you, and this <b>without extra costs</b>! Make a request to get a <b>free, non-binding, and 100% confidential</b> quote!<p>
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
