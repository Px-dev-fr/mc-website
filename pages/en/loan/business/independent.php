<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>Independent loan</title>
<meta name="Description" content="Are you a self-employed looking for an independent loan? We offer quality and personalised services in order to get you the most suitable financial help."/>
<?php
$h1="Are you the boss of your business? Do you need to make improvements? Ask Multicredit for a credit!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="independent-loan"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
	 
	<p>Are you a self-employed or a self-entrepreneur? Do you need an independent loan to realise new projects any time soon? Together we can find a personalised financial solution that will help you reach your business' ambitions!</p>
	
	<h2>Each client is unique</h2>
	<p>Dealing with banks and loaners sometimes comes with many administrative constraints and you don't have too much freedom to decide about the modalities. But not with us! We know that you have a clear idea in mind of what you want for your company. At Multicredit, <b>we pay each client a special attention</b> and we let them <b>freely decide</b> which solution best suits their needs. Let's have a look at your options:</p>
	<ul>
		<li>High quality and personal services: our experts <b>deal with administrative procedures </b>and they are available all the time to advise you.</li>
		<li>Reimbursement duration: from 12 to 84 months according to your company's budget.</li>
		<li><b>Safe budgeting</b>: fixed monthly payments so you can plan your budget on the whole 	reimbursement duration.</li>
	</ul>
	
	<h2>More advantages</h2>
	<p>Fill out our form to receive a free offer and benefit from our <b>numerous advantages</b>!</p>
	<ul>
		<li>Confidential personal data treatment.</li>
		<li>Credited amount, free of use.</li>
		<li>Choose freely an amount from 10,000 CHF to 300,000 CHF.</li>
	</ul>
	<h2>Contact us for more information</h2>
	<p>Do you want more information? Do not hesitate to contact us or to fill in our form to get an independent loan offer without commitment.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
