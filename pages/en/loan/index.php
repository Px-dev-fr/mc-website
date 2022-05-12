<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal loan </title>
<meta name="Description" content="Are you interested in getting a personal loan? If you are a Swiss citizen or have a permit, we can make you a credit proposition for free going up to 250,000 Chf."/>
<?php
$h1="Private credits with Multicredit";
$link="/en/loan/ask-a-loan"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="personal-loan";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
		<p>Do you need cash to finance a project or pay unexpected expenses? If you are searching for a personal loan, Multicredit can provide you with the amount that you need in ten days only. So feel free to fill in our online form. We will make you a free <b>non-binding offer</b> as soon as possible.</p>
		
		<h2> Our solution to get a credit </h2>
		<p>Are you looking for a personal loan? Simplify your life, make a request to our agency. Every credit application that we will receive, will be treated <b>discreetly and efficiently</b> by our staff. Requesting a credit in our agency will ensure you to benefit from flexible conditions.</p>
		
		<h2>A financial solution that will suit you!</h2>
		<p>Nowadays more and more citizens are requesting a credit. So why not you? This advantageous financial solution will allow you to reach your goal quickly without worrying about the lack of cash. Would you like buy a new car or even renovate your house? Whatever your projects are, Multicredit will be here to provide you with the financing that you need. So don't hesitate to <b>fill in our form</b> and we will make you a non-binding offer in the shortest time.</p>
		<a class="bouton" href="/en/loan/ask-a-loan">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
