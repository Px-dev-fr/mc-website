


<?php get_header("apres-demande"); ?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					// Displays the page's content
					the_content();

				} // end while
			} // end if
			?>

            <?php
                echo str_replace("\\", "", urldecode($_GET['retour']));
			
			
// 				if($_GET['langue']!=""){
// 					if($_GET['retour']=="0" || $_GET['retour'] == "1"){
					
// 						// En cas de refus
// 						if($_GET['retour']=="0"){
// 							if (is_file(__DIR__."/app/ressources/refus-".$_GET["langue"].".txt")){
// 								echo(file_get_contents(__DIR__."/app/ressources/refus-".$_GET["langue"].".txt"));
// 							}
							
							

// 						}

// 						if($_GET['retour']=="1"){
// 							include(__DIR__."/app/ressources/trads.php");
// 							$retour.="<p>".$trad['confirmtxt'][$lang]."</p>";
// 							$retour.="<ul>$documents</ul>";
// 							if ($replaces['mariage']!="") $retour.=$replaces['mariage'];
// 							$f="$base/template/crm/autre/confirmationweb/confirmation-".$client->langue.".txt";
// 							if (is_file($f)) $retour.="<p>".file_get_contents($f)."</p>";
// 							$retour.="<h2>".$trad['vosdocs'][$lang]."</h2>";
// 							$retour.="<div class='flex row' id='cr_f_docs' style='margin-bottom: 2em;'>".$trad['envoidocs'][$lang]."</div>";
// 						}
// 					}
// 				}
			

            ?>

			<?php // Add Contact block
				echo get_template_part('template-parts/credit-contact-block');
			?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
