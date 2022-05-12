<?php
$h1="Are your health costs very high? A loan could help to balance your situation!";

$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Medical credit</title>
<meta name="Description" content="Is there a medical problem that is not covered by your insurance? Pay your bill with a credit. Discover our offers and get a free non-binding online quote."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medical-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>What is a medical loan used for? The health cost in Switzerland is quite expensive. Actually it is one of the most expensive in Europe. Usually, everyone (either Swiss or foreigner) should have a health insurance that will cover the cost of health problems. But in some cases, the insurance won't reimburse the cost. In that case, a <b>medical loan</b> can be a good solution to be sure to take care of both your health and your budget.</p>
		
		<h2>The most important thing: Your health</h2>
		<p>Sometimes, health problems occur and you need to see a doctor. You need of course to pay the bill. What we offer you is assistance. If your insurance won't cover the cost of the medical service, we can give you a flexible loan. You choose the amount and the duration:</p>
		<ul>
			<li><b>Amount</b>: from 2,000 to 300,000 CHF</li>
			<li><b>Duration</b>: from 12 to 84 months</li>
		</ul>
		
		<h2>We finance your health issues</h2>
		<p>As long as you work in Switzerland, we may offer you a medical loan. Moreover, we will negotiate your interest rate with the banks to provide you with the best possible offer. Do not neglect your health and don't hesitate to ask us for a loan. If you wish to receive a <b>free offer</b>, ask us for a medical credit offer. Our English-speaking team will be glad to help you.</p>
		
		<h2>Our conditions</h2>
		<p>In order to be eligible for a medical credit and to receive a <b>free non-binding quote</b>, you must fulfill the following requirements:</p>
		<ul>
			<li>Be Swiss or a foreigner <b>with a working permit</b> (C, B, L or G permit)</li>
			<li>Earn <b>at least 2,900 CHF / month</b></li>
			<li>Not have any prosecution in Switzerland</li>
		</ul>
		
		<h2>Free request</h2>
		<p>Do not hesitate to ask for a free offer with no obligation. Our team will be glad to study your case and provide you with a medical loan offer with 24-48h. Our form is 100% secured.</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Request here a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
