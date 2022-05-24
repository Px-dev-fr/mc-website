<?php
$h1="Are you a self-employed person? Want a loan? Get it with Multicredit!";
$link="/en/loan/ask-a-loan?pme=1";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Independent credit</title>
<meta name="Description" content="Do you need an independent loan? Self employed workers and self entrepreneurs are warmly welcome at Multicredit! Discover our advantageous financial offers!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="independent-credit"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php include('includes/dsimuls/credit-pme.php');?>
<p>Self employed workers, self entrepreneurs and small business owners are warmly welcome at Multicredit! With us you can benefit from <b>easy procedures and advantageous credit offers</b>! Have a look at our personalised options for independents.</p>

<h2>Investment or personal projects</h2>
<p>Whether you need financial help for personal purposes or for your company, we can help you get a flexible loan amount from CHF 10,000 to CHF 300,000 and you can choose the reimbursement duration (up to 84 months)! If you need to invest in your company as a self-employed or entrepreneur, we can offer you a <b>tailored independent credit</b> without any complication! Discover our advantages:</p>
<ul>
	<li><b>Simple and fast procedures</b>: make a request by phone or via a form. Our experts will be in charge of administrative details and deal with our banking partners.</li>
	<li>Fast answer: we will be able to give you a <b>free and confidential offer within 48 hours</b>!</li>
	<li>Your money will be at your disposal within the next seven days after your request has been accepted.
</ul>

<h2>Granting conditions</h2>
<p>At Multicredit, we do our best to help every client get the financial solution they need. However, there are <b>some requirements that you need to fulfill</b> before we can process your request.</p>
<ul>
	<li>Have a Swiss citizenship, a working permit (C, B, L or G) or a legitimation card.</li>
	<li>You have to be working and be established in Switzerland (self employed, entrepreneur or company owner).</li>
	<li>Have a minimum annual income of CHF 60,000 CHF/year and no prosecution.</li>
</ul>
<p>Do you want more information? Do not hesitate to contact us or to fill in our form to get a free and non-binding analysis.</p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
