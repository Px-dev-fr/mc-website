<?
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html> 
<html lang="en">  
<head>
<title>SME lending</title>
<meta name="Description" content="Do you need SME lending to finally realise your projects? Get the financial help you need thanks to our high quality services and fast procedures!"/>
<?php
$h1="Looking for a place to borrow some money? Ask Multicredit!";
$link="/en/loan/ask-a-loan?pme=1"; include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="sme-lending"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
		 
		<p>Is your company a General Partnership, LLC or Ltd? Does it need renovations, new vehicles, or simply more liquidity any time soon? Whatever your business projects are, we can help you realise them!</p>
		
		<h2>Fast and easy procedures</h2>
		<p>Have you already started a project and are you now looking for financial help in order to finish it as soon as possible? Here you will benefit from quick services and no complicated procedures! You can ask for a free offer and our team will get you started as soon as you decide together of the best solution for your company's needs. Let's see how:</p>
		<ul>
			<li>Simple and instant request: ask for an SME lending by phone or via a form. Our experts will then be in charge of administrative procedures and deal with our banking partners.</li>
			<li>Fast answer: we will be able to give you a <b>free and confidential offer within 48 hours</b>!</li>
			<li>Your money will be at your disposal within the next seven days after your request has been accepted.
		</ul>
		
		<h2>Plan your budget with ease</h2>
		<p>Thanks to our advantageous offers and <b>large freedom in choosing the credit modalities</b>, you can plan your budget on the whole reimbursement duration with a great peace of mind.</p>
		<ul>
			<li>Fixed monthly payments: with us you benefit from a <b>low interest rate</b> and also from fixed monthly payments.</li>
			<li>Reimbursement duration: from 12 to 84 months, according to your company's budget.</li>
		</ul>
		<h2>Do you want more information?</h2>
		<p> Do not hesitate to contact us or to fill out our form to get a free and non-binding analysis.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">Ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
