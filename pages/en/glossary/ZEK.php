<?php
$h1="ZEK";
$link="";
include('includes/first_loaded.php');
$lang="en";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<title>ZEK</title>
<meta name="description" content="Zek is a central infomation where all activities linked to the credit are recorded. When you are making a loan the bank will see if you have an entry in this company."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?>
		<p>Zek is often cited as a reference from company credit. We would explain you what is Zek and what does it do, if you are taking a credit. How to ask a question in Zek.</p>
		<h2>What Zek is ?</h2>
		<p><strong>Zek</strong> is a company where all the informations about your credit are registered. It preserves all your credits you asked for and more generally any activities related to credit in Switzerland. Zek is only interessted about private person. It means that when you are doing a credit on your name it will be recorded by Zek. If you are doing a credit for a firm, it won't be recorded.</p>
		<h2>Which is the role of the Zek ?</h2>
		<p>When you are asking for a credit (from a bank or broker), the first thing will be conducted by the lender to go and inquire in your account. If you are not refered into zek that means: 1) you did not ask for a credit in the past. 2) You did not have any problem for a repayment of a credit or a credit card. On Zek they can find out about your financial antecedants. One would be able to see all your debts on your precedent credits. The company who would deliver the credit will use the information provided to determine if the credit application would be acceptable or not and at which rate.</p>
		<h2>Can I see my file on Zek ?</h2>
		<p>You have the right to inform you on your file to <strong>Zek</strong>. If you want to do this you can go on the Zek website and fill out the application.</p>
		<h2>What are the Zek codes?</h2>
		<h2>Codes related to a personal credit:</h2>
		<p>You have a entry on the Zek and you would like to know what this input has ? Every entry on <strong>Zek</strong> is present as a code who will resume the information.</p>
		<ul>
		<li><b>Code 01:</b> The balance related to your account was transfered on another bill</li>
		<li><b>Code 02:</b> You regulary paid your bills.</li>
		<li><b>Code 03:</b> Your payment have been long or late</li>
		<li><b>Code 04:</b> There were special actions during your payment (prosecution, arrangement,...)</li>
		<li><b>Code 05:</b> Loss : a bank lost money on your file ( Poor payment)</li>
		<li><b>Code 06:</b> There was a legal uncertainty associated with your case.(Rare)</li>
		</ul>
		<h2>Code related to bills or credit cards:</h2>
		<ul>
		<li><b>Code 21:</b> Your card was blocked or cancelled</li>
		<li><b>Code 22:</b> A balance is being paid</li>
		<li><b>Code 23:</b> Loss : see code 05 for credit card</li>
		</ul>
</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
