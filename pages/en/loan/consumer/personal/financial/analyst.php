<?php
$h1="";
$link="/en/loan/ask-a-loan";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Get a financial analyst</title>
<meta name="description" content="Do you need some information about loan conditions or where to find the best credit offer? Does you company need a financial check up? Get a financial analyst!"/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="financial-analyst";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Would you like to get some advice about wealth management or how to invest your money? Do you need some more information about loan conditions in Switzerland and <b>where to get the best offer</b>? We are here for you! Get a free appointment with a <b>financial analyst</b> now! Our experts will be able to help you with any need that you have!</p>
	<h2>How can we help you?</h2>
	<p>We pay a great attention to our customers' satisfaction and trust. By choosing us as your financial analyst, you ensure to get an <b>exclusive and reliable contact</b> close from where you live! Our professional team would be more than happy to meet you anywhere in Switzerland and analyse your financial situation for free!</p>
	<ul>
		<li><b>Personal credit</b>: our specialist will find the best option for you, from 3’000 Chf to 250’000 Chf over a 12 to 84 months duration.</li>
		<li><b>SME loans</b>: choose only the best for your company with personalized financial solutions.</li>
		<li><b>Mortgage</b>: get a quote from our financial analyst before you make any commitment about your future house.</li>
		<li><b>Debt consolidation</b>: save up to 40% on your monthly payments thanks to our clever solutions!</li>
	</ul>
	<h2>Quality services</h2>
	<p>With more than <b>10 years experience</b> in financial services, we can guarantee high quality services to all our customers! Many people have trusted us already! Why not you?</p>
	<ul>
		<li><b>100% confidential</b>: your personal information will remain strictly confidential with us.</li>
		<li><b>Tailored solutions</b>: with each client comes a unique solution!</li>
		<li><b>A team at your disposal</b>: our experts are available all the time to answer your questions.</li>
	</ul>
	<h2>Free and non-binding</h2>
	<p>Do not hesitate to get in touch with a financial analyst! Each application is <b>free and without commitment</b>. We are looking forward to helping you realize your projects!</p>
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
