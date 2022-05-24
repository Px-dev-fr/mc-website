<?php
$h1="";
$link="/en/loan/ask-a-loan?pme=1";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Peer-to-peer lending</title>
<meta name="Description" content="Have you ever heard about peer-to-peer lending? What is this alternative and is it more advantageous than a normal credit? Compare here with us!" />
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $pme=1;$image="simulation-de-credit";$alt="Peer-to-peer lending"; include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
		<div id="mct">
		<?php include('includes/dsimuls/credit.php');?>
	<p>Have you ever heard about peer-to-peer lending or <b>social lending</b>? This alternative to get a credit is not so common in Switzerland but very popular in some countries. In p2p lending, you can get a credit from another person via <b>an online auction</b>.</p>
	<h2>Very aleatory</h2>
	<p>In peer-to-peer lending, the loan conditions change a lot from a lender to another. It seems to be a much more flexible alternative than a normal credit but the average rate is <b>actually higher than banks</b> require in general, because high offers are taken first.</p>
	<h2>How is it different?</h2>
	<p>The biggest difference in getting a social lending instead of requesting a loan from a bank, is that with the former, the borrower sets the highest interest rate <b>he is ready to pay</b>. Also, there is no fixed maximum or minimum amount.</p>
	<ul>
		<li><b>Flexible amounts</b>: in Switzerland, the legal amounts are from 3'000 Chf to 300'000 Chf. In p2p lending, it is not fixed.</li>
		<li><b>Flexible interest rates</b>: some offers start at 2% when the legal minimum is 6.9% and some go higher than 15%.</li>
		<li><b>Flexible reimbursements</b>: the duration can be extended to 30 or 40 years with no guarantee of getting the money back.</li>
	</ul>
	<h2>Our conditions for a credit</h2>
	<p>Get a secured credit with Multicredit! Our simple solutions will satisfy your budget and needs! It has never been so easy to make a credit!</p>
	<ul>
	<li><b>Amount</b>: from 3'000 Chf to 300'000 Chf</li>
	<li><b>Reimbursement duration</b>: from 12 to 84 months</li>
	<li><b>For Swiss and foreigners</b>: if you work in Switzerland, we can make you a flexible and personalised credit offer!</li>
	</ul>
	<h2>Safe, simple and a direct contact</h2>
	<p>We advise you to always have a direct contact who can <b>compare offers</b> for you and find the <b>lowest interest rate</b> according to your situation! At Multicredit, we have <b>simple procedures</b>, and a fast treatment! If you are looking for a secured loan in all simplicity, make a <b>free and non-binding request</b> here!<p>
		<a class="bouton" href="/en/loan/ask-a-loan?pme=1">ask for a loan</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
