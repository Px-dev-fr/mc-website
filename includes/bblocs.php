<?php
// On récupère le nombre de clients
if (!isset($_SESSION['clients'])){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://crm.cashflex.ch/curl/getnbclients.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$return = curl_exec($curl);
	curl_close($curl);
	flush();
	$_SESSION['clients']=$return;
}
$clients=$_SESSION['clients'];
?>

<?php if ($lang=="fr"){?>
<div id="bblocs" class="pm">
	<div>
		<div><span data-max="<?php echo $clients;?>">0</span> Clients</div>
		<div>Nous ont<br>fait confiance</div>
	</div>
	<div>
		<div><span data-max="<?php echo (date("Y")- 1999);?>">0</span> Années</div>
		<div>D'activité<br>en Suisse</div>
	</div>
	<div>
		<div><span data-max="26">0</span> Cantons</div>
		<div>Où nous<br>sommes présents</div>
	</div>
</div>
<?php } ?>

<?php if ($lang=="it"){?>
<div id="bblocs" class="pm">
	<div>
		<div><span data-max="<?php echo $clients;?>">0</span> Clienti</div>
		<div>Ci hanno<br>fatto fiducia</div>
	</div>
	<div>
		<div><span data-max="<?php echo (date("Y")- 1999);?>">0</span> Anni</div>
		<div>Di attività<br>in Svizzera</div>
	</div>
	<div>
		<div><span data-max="26">0</span> Cantoni</div>
		<div>Dove<br>siamo presenti</div>
	</div>
</div>
<?php } ?>

<?php if ($lang=="de"){?>
<div id="bblocs" class="pm">
	<div>
		<div><span data-max="<?php echo $clients;?>">0</span> Kunden</div>
		<div>Haben uns <br>vertraut</div>
	</div>
	<div>
		<div><span data-max="<?php echo (date("Y")- 1999);?>">0</span> Jahre</div>
		<div>Aktivität <br>in der Schweiz</div>
	</div>
	<div>
		<div><span data-max="26">0</span> Kantone</div>
		<div>Wo wir <br>vor Ort sind</div>
	</div>
</div>
<?php } ?>

<?php if ($lang=="en"){?>
<div id="bblocs" class="pm">
	<div>
		<div><span data-max="<?php echo $clients;?>">0</span> Customers</div>
		<div>Have<br>trusted us</div>
	</div>
	<div>
		<div><span data-max="<?php echo (date("Y")- 1999);?>">0</span> Years</div>
		<div>Of activity<br>in Switzerland</div>
	</div>
	<div>
		<div><span data-max="26">0</span> Cantons</div>
		<div>Global<br>Reach</div>
	</div>
</div>
<?php } ?>

<?php if ($lang=="pt"){?>
<div id="bblocs" class="pm">
	<div>
		<div><span data-max="<?php echo $clients;?>">0</span> Clientos</div>
		<div>Nos fizeram<br>confiança</div>
	</div>
	<div>
		<div><span data-max="<?php echo (date("Y")- 1999);?>">0</span> Anos</div>
		<div>De actividade<br>na Suiça</div>
	</div>
	<div>
		<div><span data-max="26">0</span> Cantões</div>
		<div>Estamos<br>presentes</div>
	</div>
</div>
<?php } ?>