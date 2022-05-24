	<div class="presentation">
		<?php echo $texte[$langue];?>
	</div>
	<div class="block-slider" id="montant-slider">
		<h2><?php echo $montant[$langue];?></h2>
		<div class="slider">
			<input type="text" id="montant-track" data-slider="true"  data-slider-range="0,61" data-slider-step="1" value="8"/>
		</div>
		
		<div class="textinfos">
			<input type="text" id="montant" name="montant"  value="10'000"/>Chf
		</div>
	</div>
	
	<div class="block-slider" id="duree-slider">
		<h2><?php echo $duree[$langue];?></h2>
		<div class="slider">
			<input type="text" data-slider="true" id="duree-track" data-slider-range="12,120" data-slider-step="12" value="12"/>
		</div>
		
		<div class="textinfos">
			<input type="text" id="duree-span" name="duree" value="12"/><?php echo $mois[$langue];?>
		</div>
	</div>
	
	<div class="block_info">
		<h2><?php echo $mensualite[$langue];?>:</h2>
		<input type="text" readonly id="mensualite"/>
	</div>
	
	<div class="block_info">
		<h2><?php echo $interet[$langue];?>:</h2>
		<input type="text" readonly id="interet"/>
	</div>
	
	<input type="hidden" name="lang" value="<?php echo $langue;?>"/>
	<input type="submit" value="<?php echo $send[$langue];?>" onclick="document.getElementById('multicreditform').submit();"/>