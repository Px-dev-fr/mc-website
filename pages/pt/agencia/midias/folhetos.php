<?php
$h1="Nossos folhetos";
$link="/pt/credito/pedido-de-credito";
include('includes/first_loaded.php');
$lang="pt";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<title>Nossos folhetos</title>
<meta name="description" content="Descubra nossos folhetos ou flyers sobre os tipos de produtos que oferecemos tanto para privados como para PME: crédito, leasing, hipoteca, factoring, etc."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php $image="flyers";$alt="folhetos";include('includes/img.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<p>Deseja saber mais sobre nossos produtos específicos? Não hesite em baixar e / ou compartilhar os nossos folhetos de apresentação. Nós os atualizamos com frequência para que retratem fielmente nossos produtos e incorporem nossas novidades.</p>
		<h2>Nossa brochura para PME</h2>
		<p>Nossos <b>folhetos para PME</b> apresentam o conjunto dos nossos produtos destinados aos independentes e PME estabelecidos na Suíça.</p>
		<ul>
			<li><a href="/pdf/pt/flyer-pt.pdf" target="new">Ver / baixar a brochura</a>
		</ul>
		<h2>Nossa brochura para privados</h2>
		<p>Nossos <b>folhetos para privados</b> expõem nossos produtos destinados aos particulares: créditos, consolidação de dívidas, cartões de crédito e hipotecas.</p>
		<ul>
			<li><a href="/pdf/pt/brochura-privado-web.pdf" target="new">Ver / baixar a brochura</a>
		</ul>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
