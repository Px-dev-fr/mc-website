<?php if ($typemenu=="ancient"):?>
<div class="sb">
	<a href="/de/kredit">Kredit</a>
	<?php if($sub===true):?>
	<div class="sbb">
		<span>▲</span>	
		<a href="/de/kredit/privat">Privatpersonen</a>
		<a href="/de/kmu/kredit">KMU Kredit</a>
		<a href="/de/ablosung">Kreditablösung</a>
	</div>
	<?php endif;?>
</div>
<div class="sb">
	<a href="/de/kmu/factoring">Factoring</a>
	<?php if($sub===true):?>
	<div class="sbb">
		<span>▲</span>
		<a href="/de/kmu/factoring/klassisches">Klassisches Factoring</a>
		<a href="/de/kmu/factoring/versicherung">Kreditversicherung</a>
		<a href="/de/kmu/factoring/inkasso">Inkasso</a>
	</div>
	<?php endif;?>
</div>

<div class="sb">
	<a href="/de/kmu/leasing">Leasing</a>
	<?php if($sub===true):?>
	<div class="sbb">
		<span>▲</span>
		<a href="/de/kmu/leasing">Für KMU</a>
		<a href="/de/kredit/fahrzeuge/auto/kredit-oder-leasing">Kredit o. Leasing?</a>
	</div>
	<?php endif;?>
</div>

<div class="sb">
	<a href="/de/hypothek">Hypotheken</a>
	<?php if($sub===true):?>
	<div class="sbb">
		<span>▲</span>
		<a href="/de/hypothek/eigenheim">Eigenheim</a>
		<a href="/de/hypothek/information/sonstiges">Info & Rechner</a>
		<a href="/de/hypothek/immobilien/haus-bauen">Haus bauen</a>
	</div>
	<?php endif;?>
</div>
<div class="sb">
	<a href="/de/kreditkarte">Kreditkarte</a>
</div>
<?php endif;?>


<?php if ($typemenu=="prives"):?>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/kredit">Kredit</a></div>
	<div class="sb"><a class="<?php echo $smenu['ablosung'];?>" href="/de/ablosung">Kreditablösung</a></div>
	<div class="sb"><a class="<?php echo $smenu['hypothek'];?>" href="/de/hypothek">Hypotheken</a></div>
	<div class="sb"><a class="<?php echo $smenu['kreditkarte'];?>" href="/de/kreditkarte">Kreditkarte</a></div>
<?php endif;?>


<?php if ($typemenu=="pme"):?>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/kmu/kredit">Kredit</a></div>
	<div class="sb"><a class="<?php echo $smenu['factoring'];?>" href="/de/kmu/factoring">Factoring</a></div>
	<div class="sb"><a class="<?php echo $smenu['leasing'];?>" href="/de/kmu/leasing">Leasing</a></div>
	<div class="sb"><a class="<?php echo $smenu['leasing'];?>" href="/de/kmu/finanzen">Finanzen</a></div>
<?php endif;?>

<?php if ($typemenu=="independants"):?>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/selbststandige/kredit">Kredit</a></div>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/selbststandige/leasing">Leasing</a></div>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/selbststandige/factoring">Factoring</a></div>
	<div class="sb"><a class="<?php echo $smenu['kredit'];?>" href="/de/selbststandige/rechnungskauf">Zahlungsmöglichkeiten Kunden</a></div>
<?php endif;?>