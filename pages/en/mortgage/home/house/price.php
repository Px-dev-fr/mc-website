<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>House price: discover our solutions</title>
<meta name="Description" content="Are you looking for a new home to buy? We can help you find the ideal mortgage solution according to your situation and the house price! Get a free quote here!"/>
<?php
$h1="With our experts you will be always aware of the costs!";
$link="/en/mortgage/mortgage-service"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="house-price";$alt="House price";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/hypotheque.php');?>
		
	<p>We are specialists in financial solutions and we can help you find the <b>ideal mortgage solution</b> according to your situation and the <b>house price</b>! Choosing Multicredit as a partner for your home purchase will make you benefit from an advantageous offer as well as a free contact with a mortgage specialist.</p>
	
	<h2>A solution for everyone</h2>
	<p>Our formula is ideal for any real estate project at any price! Whether is it for a house, an apartment or even a building! You can now get an appointment with a mortgage expert who can provide you with <b>many useful services</b>:</p>
	<ul> 
		<li><b>Advice</b> about your different house purchasing possibilities in Switzerland.</li>
		<li><b>Examination of your real estate project</b>, the house price, your financial situation and the mortgage options.</li>
		<li><b>Mortgage simulator</b> and estimation of your monthly costs according to the different options.</li>
		<li><b>Explanations and answers</b> to any question you may have. It is important to understand all the conditions of your mortgage deal before making any commitment.</li>
		<li><b>In case of interest</b> our adviser can offer you a free appointment without commitment!</li>
	</ul>
	
	<h2>Ask a specialist</h2>
	<p>It has become really complicated to deal alone with mortgage solutions, real estate conditions and <b>house prices</b>. There is a lot of information to take into account before you make any decision. Therefore, it is now very common to ask for an <b>expert's opinion</b>! Make it easier for yourself and let us deal with all the administrative details! We will come back to you with a personalised mortgage deal according to your situation! Do not hesitate to contact us to get a <b>free and non binding quote</b>!</p>
		<a class="bouton" href="/en/mortgage/mortgage-service">Free contact</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>