<!-- Main Calculator component -->
<?php
if(isset($_POST['amortization_table']) and $_POST['amortization_table'] =="submitted"){
    include (__DIR__."/table.php");
}
$classes = get_body_class();
if (in_array('page-template-template-form',$classes)) {
    echo "<div class='demande-credit-component fullsize visible'>";
} else {
    echo "<div class='demande-credit-component'>";
}
?>
  <form class="container" id="demandeCredit" method="get" action="<?php echo get_home_url() ?>/<?php _e('credit-application','multicredit')?>/">

    <?php
      if(!isset($montantValue)){
          $MontantValue = 100;
      }
    if(!isset($DureeValue)){
        $DureeValue = 12;
    }

      $_SESSION['montant'] = $MontantValue;
      $_SESSION['montant'] = $DureeValue;

    if(isset($_GET['montant']))$MontantValue = $_GET['montant'];
    if(isset($_GET['duree']))  $DureeValue = $_GET['duree'];

      if (!empty($MontantValue) and isset($_GET['montant'])){
        $MontantValue = $_GET['montant'];
      } else{
        $MontantValue = 3000;
      }

      if (!empty($DureeValue) and isset($_GET['duree'])){
        $DureeValue = $_GET['duree'];
      } else{
        $DureeValue = 12;
      }
    ?>

    <div class="row align-items-center" style="display: flex;flex-wrap: wrap;justify-content: center;">
        <div class="col-lg-5">
          <!-- Montant -->
          <p><?php _e( 'Amount from 3\'000 to 400\'000 CHF', 'multicredit' );?></p>
          <div class="slidecontainer">
              <input id="montant" name="montant" type="number" value="<?php echo $MontantValue; ?>" min="3000" max="400000" step="1000" oninput="montantSlider.value=montant.value" />
              <input id="montantSlider" type="range" min="3000" max="400000" value="<?php echo $MontantValue; ?>" step="1000" class="slider" oninput="montant.value=montantSlider.value" />
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Durée -->
          <p><?php _e( 'Duration from 12 to 84 months', 'multicredit' );?></p>
          <div class="slidecontainer">
            <input id="duree" name="duree" type="number" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" oninput="dureeSlider.value=duree.value" />
            <input id="dureeSlider" type="range" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" class="slider" oninput="duree.value=dureeSlider.value" />
          </div>
        </div><div class="col-lg-3" style="text-align: center">
            <!-- Durée -->
            <p><?php _e( 'Do you want PPI insurance ?', 'multicredit' );?></p>
            <input type="checkbox" id="ppiYes" name="ppi" checked> <label for="ppiYes"> <?php _e('Yes','multicredit')?></label>
            <input type="checkbox" id="ppiNo" name="ppi" > <label for="ppiNo"> <?php _e('No','multicredit')?></label>
        </div>
        <!--<div class="col-lg-3">

          <p class="f-height hide-on-mobile"><?php _e( 'Monthly payment from', 'multicredit' );?></p>
          <p class="f-height hide-on-desktop"><?php _e( 'Monthly payment including amortization, interests and death insurance from', 'multicredit' );?></p>
		  <div>
			<div style="display:flex">
				<h4 id="mensualite49">257 CHF</h4>
				<h4 style="font-size: 1.8em; margin-left:10px;"><?php _e( 'monthly', 'multicredit' );?></h4>
			</div>

		  </div>
        </div>-->
    </div>
  </form>
    <div class="row align-items-center" style="display: flex;flex-wrap: wrap;justify-content: center;">
        <div class="mensualiteUnique" id="49">
            <span class="tauxInteretSimul">
                <?php _e( 'For an interest rate of: ', 'multicredit' );?> 4.9%
            </span>
            <div class="infoSimulRes">
                <ul>
                    <li>
                        <?php _e( 'Tax-deductible interest', 'multicredit' );?>
                    </li>
                    <li>
                        <?php _e( 'Possibility of early repayment', 'multicredit' );?>
                    </li>
                    <li>
                        <?php _e('Death insurance covering the debt', 'multicredit'); ?>
                    </li>
                </ul>
            </div>
            <div id="tableauAmortissement">
                <form method="POST" action="">
                    <input type="submit" value="<?php _e('CREATE AN AMORTIZATION TABLE', 'multicredit')?>">
                    <input type="hidden" name="amortization_table" value="submitted">
                    <input type="hidden" name="taux" value="4.9">
                    <input type="hidden"  id="montant49" name="montant" value="3000">
                    <input type="hidden"  id="duree49" name="duree" value="12">
                </form>
            </div>
            <div class="mensuelSimul">
                <h4 id="mensualite49">257 CHF</h4>
                <h4><?php _e( 'monthly', 'multicredit' );?></h4>
            </div>
        </div>
        <div class="mensualiteUnique" id="79">
            <span class="tauxInteretSimul">
                <?php _e( 'For an interest rate of: ', 'multicredit' );?> 7.9%
            </span>
            <div class="infoSimulRes">
                <ul>
                    <ul>
                        <li>
                            <?php _e('Tax-deductible interest', 'multicredit' );?>
                        </li>
                        <li>
                            <?php _e('Possibility of early repayment', 'multicredit' );?>
                        </li>
                        <li>
                            <?php _e('Death insurance covering the debt ', 'multicredit'); ?>
                        </li>
                        <li>
                            <?php _e('CH, permit C, B, G and legitmation card','multicredit');?>
                        </li>
                    </ul>
                </ul>
            </div>
            <div id="tableauAmortissement">
                <form method="POST" action="">
                    <input type="submit" value="<?php _e('CREATE AN AMORTIZATION TABLE', 'multicredit')?>">
                    <input type="hidden" name="amortization_table" value="submitted">
                    <input type="hidden" name="taux" value="7.9">
                    <input type="hidden"  id="montant79" name="montant" value="3000">
                    <input type="hidden"  id="duree79" name="duree" value="12">
                </form>
            </div>
            <div class="mensuelSimul">
                <h4 id="mensualite79">259 CHF</h4>

                <h4><?php _e( 'monthly', 'multicredit' );?></h4>
            </div>
        </div>
        <div class="mensualiteUnique" id="99">
            <span class="tauxInteretSimul">
                <?php _e( 'For an interest rate of: ', 'multicredit' );?> 9.9%
            </span>
            <div class="infoSimulRes">
                <ul>
                    <li>
                        <?php _e('Tax-deductible interest', 'multicredit' );?>
                    </li>
                    <li>
                        <?php _e('Possibility of early repayment', 'multicredit' );?>
                    </li>
                    <li>
                        <?php _e('Death insurance covering the debt', 'multicredit'); ?>
                    </li>
                    <li>
                        <?php _e('CH, permit C, B, G and legitmation card','multicredit');?>
                    </li>
                </ul>
            </div>
            <div id="tableauAmortissement">
                <form method="POST" action="">
                    <input type="submit" value="<?php _e('CREATE AN AMORTIZATION TABLE', 'multicredit')?>">
                    <input type="hidden" name="amortization_table" value="submitted">
                    <input type="hidden" name="taux" value="9.9">
                    <input type="hidden"  id="montant99" name="montant" value="3000">
                    <input type="hidden"  id="duree99" name="duree" value="12">
                </form>
            </div>
            <div class="mensuelSimul">
                <h4 id="mensualite99">263 CHF</h4>
                <h4><?php _e( 'monthly', 'multicredit' );?></h4>
            </div>
        </div>
    </div>
  <div class="row align-items-center legend-bloc mt-4 mb-2 ">
      <div class="col-lg-3" style="display: flex;flex-wrap: initial;justify-content: center;align-items: inherit;">
          <img src="https://www.multicredit.ch/wp/wp-content/uploads/6936490_lock_protection_safety_security_shield_icon.png" height="32px" width="32px">
          <img src="https://www.multicredit.ch/wp/wp-content/uploads/2205203_key_lock_pad_security_icon.png" height="32px" width="32px">
          <p style="margin: 0px; font-size: 0.8em;margin-left: 10px">
              <?php _e('Your data is transmitted to us securely and is hosted in Switzerland.','multicredit');?>
          </p>
      </div>
    <div class="col-lg-6 text-right ">
      <p style="margin-bottom: 8px;font-size: 0.9em;"><strong><?php _e( 'Monthly payments/refunds including:', 'multicredit' );?></strong></p>
        <ul class="checklist inline-checklist">
          <li><?php _e( 'Amortization', 'multicredit' );?></li>
          <li><?php _e( 'Interests', 'multicredit' );?></li>
          <li><?php _e( 'Death insurance', 'multicredit' );?></li>
        </ul>
    </div>
    <div class="col-lg-3">
      <input type="submit" form="demandeCredit" class="btn" value="<?php _e( 'Credit application', 'multicredit' );?>" />
    </div>
  </div>
    <div class="row">
        <div class="col-lg-12">
            <p style="font-size:0.6em;">
                <?php  _e('As a consumer credit consulting company, we are subject to strict privacy and data protection guidelines <a href=" https://www.fedlex.admin.ch/eli/cc/51/117_121_129/en ">(hosted in Switzerland)</a>. For your security as well as ours, we offer you an initial telephone interview from Monday to Friday, from 08:30 am to 6:30 pm.
We would also like to point out that our activities are subject to compliance with the Consumer Credit Act <a href="https://www.fedlex.admin.ch/eli/cc/2002/593/en" target="_blank"> (LCC)</a>','multicredit')?></a>
                <!--Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt.-->
            </p>
        </div>
	  <div class="col-lg-12">
		  <p style="font-size:0.6em;">
              <?php  _e('Calculation example: Financing CHF 10,000. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to CHF 520. The final interest rate varies, depending on the situation of each client, from 4.5% to 9.9%. There are no application or additional costs: you only pay the interest on the loan.', 'multicredit'); ?>
              <!--Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt.-->
          </p>
	  </div>
  </div>	  



</div>
