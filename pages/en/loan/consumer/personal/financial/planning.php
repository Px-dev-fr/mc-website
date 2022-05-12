<?php
$h1="";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Financial planning: smart solutions</title>
<meta name="description" content="Do you own a SME? Do you need some help with financial planning? We are financing experts and we can help you with any concerns or new project that you have!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="financial-planning";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Do you need some help with financial planning? Do you <b>own a small business</b> or you simply want to <b>balance your budget</b> again? We are finance experts and we can advise you with any projects or worries that you have right now!</p>
	<h2>A reliable partner</h2>
	<p>Here at Multicredit, we pay a great attention to customer service. We love to create a strong and reliable <b>trust environment</b> with our clients and we have been doing this for <b>more than 10 years</b>! Discover why so many people request our help for financial planning.</p>
	<h2>What can we do for you?</h2>
	<p>No matter which project you are dealing with, we can provide some <b>useful advice, help and information</b> in financial planning that will allow you to start fresh again!</p>
	<ul> 
		<li><b>For particulars</b>: do you need an analyse of your financial situation? Do you want to get a loan with a low interest rate or a mortgage quote? You just have to contact us!</li>
		<li><b>For SME owners</b>: does your business need a check up? We can help you build a financial plan that will be tailored to your company!</li>
		<li><b>For bad debts</b>: if you feel that your budget is getting heavier every month, we can provide debt consolidation solutions or help in case of indebtedness.</li>
	</ul>
	<h2>How do we work</h2>
	<p>If you are looking for financial planning experts, you found the right place! We offer <b>quality services</b> to each and every client!<p>
	<ul>
		<li><b>Confidential treatment</b>: we ensure that your personal data will remain safe with us.</li>
		<li><b>Personalised solutions</b>: with each situation and particular needs, comes a unique solution!</li>
		<li><b>Fast and easy</b>: you only need to fill in our form or contact us directly per phone! We will get back to you as soon as possible</li>
	</ul>
	<h2>Free and non-binding</h2>
	<p>Do not hesitate to contact us, even to get a small piece of information! Each request is <b>free and non-binding</b>! We are looking forward to helping you.</p>
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
