<?php
$h1="Get a loan with advantageous terms!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Revolving credit: our solutions</title>
<meta name="description" content="Do you want to get a revolving credit? Discover our flexible loan offers going up to 300,000 CHF for Swiss, foreigners, self-employed, employees and retirees!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="credit-revolving";$alt="Revolving credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Do you want to benefit from a revolving credit? Discover our flexible loan offers! Whether you are Swiss or only working in Switzerland, a self-employed or a retiree, we can make you an offer that will match your expectations!</p>
		
	<h2>What is a revolving credit?</h2>
	<p>With this type of loan, the bank or agency will put a certain amount at your disposal that you can use whenever you want. This <b>solution doesn't really exist</b> in Switzerland, but at Multicredit, we can offer you an advantageous alternative! You can always ask an extra cash amount in order to finance some new projects! Have a look at all the benefits you can get:</p>
	<ul> 
		<li>Benefit from a credited amount <b>up to 300,000 CHF</b>!</li>
		<li>Light monthly payments that will match your budget! <b>From 12 to 84 months</b>.</li>
		<li>A <b>fast and confidential</b> treatment of your personal information. Your money will be sent <b>only 7 days</b> after you accept the offer.</li>
	</ul>
	<h2>Discover our loan offers</h2>
	<p>Do you want to change your <b>apartment furniture</b> or make a dream come true? For each personal project, we have a suitable financial solution! Our experts are at your disposal to offer you <b>a great alternative</b> to a revolving credit.</p>
	<ul>
		<li>A <b>free analysis</b> of your financial situation.</li>
		<li>The <b>lowest interest rate</b> possible according to your situation.</li>
		<li><b>Advice and information</b> about revolving credits and alternatives in Switzerland.</li>
		</ul>
		
	<h2>We are here for you!</h2>
	<p>Whichever loan solution you choose: revolving credit, car or renovation loan, we are at your disposal to help you get the <b>best deal</b> possible! Are you interested in our <b>professional services</b>? Do not hesitate to contact us now to get a <b>free and non-binding</b> offer within 2 days!</p>
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
