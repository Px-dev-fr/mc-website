<?php
$suffixe=$lang;
if ($suffixe=='fr') $suffixe=''; else $suffixe="/".$suffixe; 		

// No de tel
if (!isset($mtel)){$mtel="079 936 31 43";}
if ($lang=="al") $mtel="079 903 57 39 ";

$mtela=str_replace(" ", "", $mtel);
$mtela="41".substr($mtela, 1);

?>
<?php

$home=Array(
'fr'=>'Multicrédit: Crédit personnel en Suisse',
'de'=>'Kredit in der Schweiz',
'en'=>'Loan in Switzerland',
'pt'=>'Crédito na Suíça',
'it'=>'Credito in Svizzera',
'al'=>'Kredi online',
'es'=>'Crédito en Suiza',
'pl'=>'Kredytu',
'sbc'=>'Privatni krediti',
'tr'=>'İsviçre\'de kredi'
);

$slog=Array(
'fr'=>"Depuis 1999<br>à votre service!",
'de'=>'Seit 1999 zu<br>Ihren Diensten!',
'en'=>'A specialist<br>since 1999!',
'pt'=>'Desde 1999 ao<br>seu serviço!',
'it'=>'Specialista<br>dal 1999!',
'es'=>'Desde 1999 <br>a su servicio!',
'pl'=>'Od 1999 roku<br>do twoich usług!',
'sbc'=>'Od 1999. u<br>vašoj službi!',
'tr'=>"1999'dan<br>beri hizmetinizde!"
);


$sfr=Array(
'fr'=>'Rapide<br>Simple<br>Discret',
'de'=>'Schnell<br>Einfach<br>Diskret'
);

$tgclass="";
if (($na===true) or ($nomenu===true)) {$tgclass.=" na ";
	//$sfr=Array();
}
else{
	$sfr=Array();
}
if (isset($sfr[$lang])) $tgclass.=" tri";

$langlink="/".$lang;

?>


<div id="me" class="pm">
	<div id="mt" class="pm">
		<?php if (is_file("includes/menu/top/$lang.php")):?>
			<?php include("includes/menu/top/$lang.php");?>
		<?php else:?>
			<div id="mtl">
				<?php if ($nomenu!==true) echo $home[$lang];else echo "<a href='$langlink'>HOME</a>";?>
			</div>
		<?php endif;?>
	</div>
	<div id="mks">
		<div id="mu"><?php if ($nomenu!==true):?><div></div><div></div><div></div><?php endif;?></div>
		<div id="tg" class="<?php echo $tgclass;?>">
			<div id="tel"><a href="tel:+41263222310"><span id="ticon"></span>026 322 23 10</a></div>
			<?php if (isset($sfr[$lang])) echo '<div id="sfr"><span>'.$sfr[$lang].'</span></div>';?>
			<div id="wh"><a href="https://api.whatsapp.com/send?phone=<?php echo $mtela;?>" target="new" rel="nofollow"><span id="wicon"></span>whatsapp</a></div>
			
		</div>
		<?php if ($nomenu!==true):?>
		<div id ="mkl"><?php include("includes/menu/$lang.php");?></div>
		<?php endif;?>		
	</div>
	<?php if ($nomenu!==true):?>
	
	<div id="slo">
		<?php echo $slog[$lang];?>
	</div>
	<a id="log" href="<?php echo $langlink;?>">
		<img width="189" height="50" src="https://static.multicredit.ch/images/logo/logo-50.png"
		srcset="https://static.multicredit.ch/images/logo/logo-50.png 1800w,https://static.multicredit.ch/images/logo/logo-40.png 1400w" sizes="100vw"
		alt="<?php echo $home[$lang];?>">
	</a>	
	<?php endif;?>
</div>
<div id="lg">
	<span><?php echo strtoupper($lang);?></span>
	<div id="clang">
		<?php
		$langs=Array("fr", "de", "en", "pt", "it", "es", "tr", "sbc", "pl", "al");
		foreach ($langs as $slang) if ($slang!=$lang) echo "<a href='/$slang'>".strtoupper($slang)."</a>";
		?>
	</div>
</div>