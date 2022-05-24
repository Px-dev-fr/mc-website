<?php
$h1="Zefix";
$link="/fr/credit/formulaire-demande-credit"; 
include('includes/first_loaded.php');
$lang="fr";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Zefix</title>
<meta name="description" content="La Zefix, ou index centrale des raisons du commerce propose un annuaire complet de toutes les sociétés et entreprises en Suisse, par cantons. Explications ici."/>
<?php include('includes/meta.php');?>
</head>
<body>
<div id="container">
	<?php include('includes/header.php');?>
	<?php include('includes/arianne.php');?>
	<div id="mct">
		<?php echo "<h1>$h1</h1>";?><?php include('includes/dsimuls/credit.php');?>
		
		<p>La Zefix est une liste librement disponible en Suisse qui contient toutes les raisons commerciales helvétiques: entreprises, sociétés, agences, PME, SARL, ... Le nom signifie littéralement "<b>Ze</b>ntral <b>Fi</b>rmen": <i>Index central des raisons de commerce</i> en français.</p>
		<h2>De quoi s'agit-il?</h2>
		<p>En Suisse, toute entreprise, toute société, et même toute personne s'établissant comme indépendant (typiquement de profession libérale) doit s'inscrire au registre du commerce suisse. Chaque inscription est cantonale, et il peut s'avérer difficile de rechercher une entreprise sans savoir dans quelle canton sa raison commerciale / individuelle a été enregistrée. C'est pourquoi la confédération a mis en place un outil permettant d'effectuer une recherche dans tous les cantons. La <strong>Zefix</strong> est donc un outil en ligne de recherche de raisons de commerce.</p>
		<h2>Site internet</h2>
		<p>Le site est disponible dans les <b>trois principales langues</b> de Suisse (français, allemand et italien), ainsi qu'en anglais. Il est possible d'y effectuer une recherche dans toute la Suisse ou par cantons. La Zefix <b>recense également les anciennes raisons de commerce (radiées incluses)</b>.</p>
		<h2>Où rechercher les informations?</h2>
		<p>Si vous souhaiter rechercher des informations sur le site internet de la Zefix, il vous suffit de vous rendre sur leur site internet:</p>
		<ul>
			<li>En français: <a rel="nofollow" href="http://zefix.ch/zfx-cgi/hrform.cgi/hraPage?alle_eintr=on&pers_sort=original&pers_num=0&language=2&col_width=366&amt=007">visiter le site en français</a></li>
			<li>En allemand: <a rel="nofollow" href="http://zefix.ch/zfx-cgi/hrform.cgi/hraPage?alle_eintr=on&pers_sort=original&pers_num=0&language=1&col_width=366&amt=007">visiter le site en allemand</a></li>
			<li>En italien: <a rel="nofollow" href="http://zefix.ch/zfx-cgi/hrform.cgi/hraPage?alle_eintr=on&pers_sort=original&pers_num=0&language=3&col_width=366&amt=007">visiter le site en italien</a></li>
			<li>En anglais: <a rel="nofollow" href="http://zefix.ch/zfx-cgi/hrform.cgi/hraPage?alle_eintr=on&pers_sort=original&pers_num=0&language=4&col_width=366&amt=007">visiter le site en anglais</a></li>
		</ul>
		<h2>Quelles sont les informations disponibles?</h2>
		<p>La Zefix regroupe toutes les raisons de commerce de Suisse, mais sous la forme de liens. C'est à dire que les informations relatives à une société ne sont pas stockées directement sur la Zefix: elle fait le lien vers le registre du commerce du canton où est l'entreprise. En recherchant une raison commerciale sur le site internet, vous trouverez donc un lien vers le site web du registre de commerce cantonal concerné.</p>
	</div>
	<?php include('includes/blocks.php');?>
	<?php include('includes/footer.php');?>
	<?php include('includes/last.php');?>
</div>
</body>
</html>
