<?php
$h1="Os nossos vídeos";
$link="/pt/credito/pedido-de-credito"; include('includes/first_loaded.php');
$lang="pt";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Vídeo promocional</title>
<meta name="description" content="Multicrédit - O especialista do crédito na Suiça ! Descubra o nosso novo vídeo pomocional más também os outros nossos meios de comunicação social."/>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="medias";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Vídeo promocional dos nossos serviços de financiamento na Suiça. Com a Multicrédit pode fazer o seu pedido de crédito diretamente na internet e escolher o montante desejado (de 3'000 até 300'000 CHF)</p>
		<p>Faça já o seu pedido de crédito e receba uma oferta gratuita e sem compromisso nas seguintes 24 a 48 horas !</p>
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/7_5aJ-ynl0Q" frameborder="0" allowfullscreen></iframe>
		<p>Quer beneficiar de uma oferta <b>gratuita e sem compromisso</b> ? Então faça já o seu pedido online !</p>
		<a class="bouton" href="/pt/credito/pedido-de-credito">Pedir um financiamento</a>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
