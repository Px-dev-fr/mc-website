<?php if ($typemenu=="ancient"):?>
	<div class="sb">
		<a href="/fr/credit">Crédit</a>
		<?php if($sub===true):?>
		<div class="sbb">
			<span>▲</span>	
			<a href="/fr/credit/prive">Crédit privé</a>
			<a href="/fr/pme/credit">Crédit PME</a>
			<a href="/fr/rachat-regroupement">Rachat et regroupement</a>
			<a href="/fr/carte-de-credit">Carte de crédit</a>
		</div>
		<?php endif;?>
	</div>
	<div class="sb">
		<a href="/fr/pme/factoring">Factoring</a>
		<?php if($sub===true):?>
		<div class="sbb">
			<span>▲</span>
			<a href="/fr/pme/factoring/affacturage/b2b">Affacturage B2B</a>
			<a href="/fr/pme/factoring/assurance">Assurance-crédit</a>
			<a href="/fr/pme/factoring/recouvrement">Recouvrement</a>
			<a href="/fr/pme/factoring/b2c">Affacturage B2C</a>
		</div>
		<?php endif;?>
	</div>

	<div class="sb">
		<a href="/fr/pme/leasing">Leasing</a>
		<?php if($sub===true):?>
		<div class="sbb">
			<span>▲</span>
			<a href="/fr/leasing">Pour particuliers</a>
			<a href="/fr/pme/leasing/entreprises">Entreprises</a>
			<a href="/fr/pme/leasing/independants">Indépendants</a>
		</div>
		<?php endif;?>
	</div>

	<div class="sb">
		<a href="/fr/hypotheque">Hypothèques</a>
		<?php if($sub===true):?>
		<div class="sbb">
			<span>▲</span>
			<a href="/fr/hypotheque/informations">Conseils et informations</a>
			<a href="/fr/hypotheque/taux">Modèles et taux</a>
			<a href="/fr/hypotheque/achat">Nouvel achat</a>
			
		</div>
		<?php endif;?>
	</div>
<?php endif;?>


<?php if ($typemenu=="prives"):?>
	<div class="sb"><a class="<?php echo $smenu['credit'];?>" href="/fr/credit">Crédit</a></div>
	<div class="sb"><a class="<?php echo $smenu['rachat-regroupement'];?>" href="/fr/rachat-regroupement">Rachat de prêt</a></div>
	<div class="sb"><a class="<?php echo $smenu['carte-de-credit'];?>" href="/fr/carte-de-credit">Carte de crédit</a></div>
	<div class="sb"><a class="<?php echo $smenu['hypotheque'];?>" href="/fr/hypotheque">Hypothèque</a></div>
<?php endif;?>

<?php if ($typemenu=="pme"):?>
	<div class="sb"><a class="<?php echo $smenu['credit'];?>" href="/fr/pme/credit">Crédit</a></div>
	<div class="sb"><a class="<?php echo $smenu['factoring'];?>" href="/fr/pme/factoring">Factoring</a></div>
	<div class="sb"><a class="<?php echo $smenu['leasing'];?>" href="/fr/pme/leasing">Leasing</a></div>
	<div class="sb"><a class="<?php echo $smenu['services'];?>" href="/fr/pme/services">Finance</a></div>
<?php endif;?>

<?php if ($typemenu=="independants"):?>
	<div class="sb"><a class="<?php echo $smenu['credit'];?>" href="/fr/independants/credit">Crédit</a></div>
	<div class="sb"><a class="<?php echo $smenu['leasing'];?>" href="/fr/independants/leasing">Leasing</a></div>
	<div class="sb"><a class="<?php echo $smenu['factoring'];?>" href="/fr/independants/factoring">Factoring</a></div>
	<div class="sb"><a class="<?php echo $smenu['paiement'];?>" href="/fr/independants/paiement">Solutions de paiement client</a></div>
<?php endif;?>