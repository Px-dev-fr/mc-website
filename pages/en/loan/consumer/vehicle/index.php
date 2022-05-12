<?php
$h1="Looking for a loan? Do you want to purchase a new car or motorcycle? Multicredit can help you!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vehicle credit</title>
<meta name="description" content="Better than a leasing for some amounts, our vehicle credit offers are for everyone working in Switzerland. Free offers and non-binding. Contact us!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="vehicle-credit";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Do you have some problems with your car, lorry or motorcycle? Would you like to change or buy a new vehicle? If you don't have the budget right now, we can help you to get a loan. Our vehicle credit lines are adapted to each situation, and available for everyone!</p>
		
		<h2>A loan or a leasing?</h2>
		<p>We know that sometimes it's quite difficult to choose between a loan or a leasing for a vehicle. How can I know that the credit is going to be better than the leasing?</p>
		
		<h2>Get a loan!</h2>
		<p>The point is, if you are asking a leasing the vehicle won't belong to you. With our vehicle credit offers, on the contrary, you don't have to worry about the depreciation of the vehicle, the kilometers or the insurance. With our financial solution you can reimburse at your own pace and choose the amount you want to borrow.</p>
		
		<h2>The vehicle of your dream</h2>
		<p>Our brokers are here to help you to have the vehicle of your dream. At Multicredit our staff is friendly, serious and reliable. We are dealing constantly with banks to get you the best interest rate. Need a vehicle credit? Just send us a request and we will be happy to contact you <b>within 48 hours</b>.</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php 
		include('includes/footer.php');
		?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
