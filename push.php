<?php
// GET en key => values
foreach($_GET as $key=>$value) {
	$key= preg_replace('/[^\w]/', '', $key);
	$value= preg_replace('/[^\w]/', '', $value);
	$fields_string .= $key.'='.$value.'&';
	}
rtrim($fields_string, '&');					
$url=("https://crm.cashflex.ch/curl/push.php");
$ch = curl_init();
curl_setopt($ch, CURLOPT_REFERER, 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);//
$output = curl_exec($ch);curl_close($ch);
$retour=array();
//echo $output; 
$tabs=explode("#", $output);
foreach ($tabs as $tab){
	$t=explode("=", $tab);
	$retour[$t[0]]=$t[1];
}
$lang=$retour['langue'];
$societe=$retour['societe'];
$false=false;if ($retour['false']=="false") $false=true;

 header('Location: https://www.multicredit.ch/' . $lang . '/push/');
 exit();


include("traductions-push.php");

if ($lang=="") $lang="fr";
?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
	<?php include('includes/meta.php');?>
	<title>Multicrédit</title>
	<style><?php echo file_get_contents("template/home.css");?></style>
</head>
<div id="container">
	<?php $na=true;$sub=true;include('includes/header.php');?>

	<div id="hp" class="pm">
		<div id="hpl">
			<img id="hpl1" src="/template/images/rubriques/prives/500.jpg" alt="Crédit personnel pour privés" 
			sizes="100vw" srcset="/template/images/rubriques/prives/500.jpg 1800w, /template/images/rubriques/prives/300.jpg 1500w, /template/images/rubriques/prives/200.jpg 1000w,/template/images/rubriques/prives/150.jpg 600w" 
			>
			<img id="hpl2" src="/template/images/rubriques/independants/500.jpg" alt="Autres solutions de financement"
			sizes="100vw" srcset="/template/images/rubriques/independants/500.jpg 1800w, /template/images/rubriques/independants/300.jpg 1500w, /template/images/rubriques/independants/200.jpg 1000w,/template/images/rubriques/independants/150.jpg 600w" 
			>			
			
		</div> 
		<div id="hps1" class="hps">
			<h1><?php echo traduire('merci', $lang);?></h1>
			
		</div>
		<div id="hps2" class="hps">
			<?php if ($false===false):?>
			<h1><?php echo traduire('transmis', $lang);?> <br><b><?php echo $societe;?></b></h1>
			<p><?php echo traduire('contact', $lang);?></p>
			<?php else:?>
			<h1><?php echo traduire('refus', $lang);?></h1>
			<p><?php echo traduire('refusr', $lang);?></p>
			<?php endif;?>
		</div>
		<div id="hps3" class="hps">
			<h2><?php echo traduire('questions', $lang);?></h2>
			<p><?php echo traduire('hesiter', $lang);?></p>
		</div>
	</div>
	<div id="mct">
		<?php echo $tabs[0];?>
	</div>
</div>
<?php include('includes/blocks.php');?>
<?php include('includes/footer.php');?>
<?php include('includes/last.php');?>