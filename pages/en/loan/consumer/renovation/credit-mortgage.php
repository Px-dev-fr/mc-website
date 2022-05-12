<?php
$h1="What is the best solution to acquire a property? Multicredit can advise you!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Credit or Mortgage loan?</title>
<meta name="description" content="Do you want to own a property and are you looking for a financial solution? Credit or mortgage loan? Discover our explanations from our experts!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="mortgage-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Why choosing a <b>credit</b> rather than a mortgage loan for your property (new home, renovation, transformation, ...)? In this page, we will explain you the advantages and disadvantages of credit and <b>mortgage loan</b>.</p>
		
		<h2>Mortgage</h2>
		<p>A mortgage is a right granted to a creditor. For example if you are buying a house and pay only the half, the other part will belong to the creditor (usually the bank) <b>until you fully reimburse it</b>. With a mortgage loan, you usually benefit from low interest rates, but over a long repayment duration (many years).</p>
		
		<h2>Credit</h2>
		<p>A credit is sometimes more favorable than a mortgage. First it is <b>much more easier to have one</b>. A credit doesn't give as many administrative tasks than a mortgage. Also in terms of cost, a credit can be more favorable depending on the situation.</p>
		
		<h2>Which is the best solution?</h2>
		<p>Taking a mortgage can be long and will cost in the end a lot of money. With a credit you can have a deduction on your taxe interests and some other advantages. Here are some interesting points regarding credits and mortgage loans:</p>
		<ul>
			<li>A credit is limited to 300,000 Chf, when the mortgage loan will generally allow you to benefit from any amount needed</li>
			<li>A mortgage loan contract is usually done for many years. A credit can be much more shorter: from <b>12 to 84 months</b></li>
			<li>A credit is much more easier to obtain, with <b>less administrative tasks</b></li>
			<li>In terms of cost, it really depends on every situation, amount needed and repayement duration</li>
		</ul>
		<h2>Compare offers!</h2>
		<p>Do not hesitate to ask an offer: it's <b>free with no obligation</b>. This way you will be able to compare our credit offers with any mortgage loan offer. Our offer will be available for <b>one full month</b> and does not commit you to anything:</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for free</a>
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
