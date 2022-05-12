<?php
$h1="Finance your new vehicle with a loan!";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car financing</title>
<meta name="description" content="Do you need soon a new car to replace your old one? A credit might be the ideal financing solution you are looking for! Contact us to get a free offer!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="car-financing";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>We are financing specialists and we can find a solution that will be tailored to your budget and needs! Whether you need a loan, a leasing or just a quote, we would be more than happy to help you!</p>
	
	<h2>Why trusting us?</h2>
	<p>At Creditloan, we have more than 10 years of experience in financing and we want to make you benefit from our highly professional services. We are convinced that a car credit has more benefits than a simple leasing because it allows more flexibility and freedom. But we will let you judge by yourself! Have a look at our financing solutions:</p>
	<ul> 
		<li><b>Simple conditions</b>: choose freely the loan amount from 3,000 Chf to 300,000 Chf over a 12 to 84 months duration.</li>
		<li><b>Free choice of the vehicle</b>: benefit from an ideal car financing solution in order to buy any type of vehicle that you want!</li>
		<li><b>You are the owner</b>: unlike a leasing solution, you will be able to drive without mileage limit. You can also choose your own insurance and resell the car if you want to!</li>
		<li><b>Payment insurance</b>: because we care about unexpected problems, we give you the possibility to get an insurance that will cover your reimbursements in case of illness, accident or death.</li>
	</ul>
	
	<h2>Which type of vehicle?</h2>
	<p>With us, you are completely free when it comes to choosing the vehicle's brand, size and price! Get the car of your dreams now!</p>
	<ul>
		<li><b>A new vehicle</b></li>
		<li><b>A second-hand car</b></li>
		<li><b>A motorcycle</b></li>
		<li><b>A camping car</b></li>
	</ul>
	<h2>A team at your disposal</h2>
	<p>If you want to know more about our car financing solutions, don't hesitate to contact us! We would be more than happy to give you some more information or a free and non-binding offer!</p>
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
