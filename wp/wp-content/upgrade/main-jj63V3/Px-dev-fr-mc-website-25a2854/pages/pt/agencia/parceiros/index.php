<?php
$h1="Nossos parceiros na internet:";
$link="/pt/credito/pedido-de-credito";
include('includes/first_loaded.php');
$lang="pt";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Parceiros portugueses</title>
<meta name="description" content="Descubra todos os parceiros da Multicrédit que falam português!"/>
<?php include('includes/meta.php');?>
</head>
<body>
	<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="parceiros";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Descubra aqui os nossos principais parceiros. Deseja propor-nos um patrocínio web? Não hesite em contactar-nos por e-mail. (info@multicredit.ch)</p>
		<h2>Lista dos nossos parceiros:</h2>
		<p>Os nossos principais parceiros são os seguintes : 
		<ul>
			<li><b><a href="/pt/agencia/parceiros/parceiros-credito-pessoal">CréditoPessoal</a></b> : empresa suíça especializada na área do crédito ao consumo, que também propõe seguros e hipotecas, com mais de 15 anos de experiência. Esta casa tem exclusivamente clientes portugueses, emigrantes na Suíça !</li>
			<br>
			<li><b><a href="/pt/novo-banco">Novo Banco</a></b> : abra uma conta bancária em Portugal através da Suiça graças ao novo parceiro da Multicrédit: o Novo Banco! </li>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?> 
	<?php include('includes/last.php');?>
</div>
</body>
</html>
