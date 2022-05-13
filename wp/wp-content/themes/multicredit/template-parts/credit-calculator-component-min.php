<!-- Main Calculator component -->
<?php
$classes = get_body_class();
if (in_array('page-template-template-form', $classes)) {
  echo "<div class='demande-credit-component fullsize visible'>";
} else {
  echo "<div class='demande-credit-component'>";
}
?>
<form class="container" method="get" action="<?php echo get_home_url() ?>/<?php _e('credit-application', 'multicredit') ?>/">

  <?php
  if (!isset($montantValue)) {
    $MontantValue = 100;
  }
  if (!isset($DureeValue)) {
    $DureeValue = 12;
  }

  $_SESSION['montant'] = $MontantValue;
  $_SESSION['montant'] = $DureeValue;

  if (isset($_GET['montant'])) $MontantValue = $_GET['montant'];
  if (isset($_GET['duree']))  $DureeValue = $_GET['duree'];

  if (!empty($MontantValue) and isset($_GET['montant'])) {
    $MontantValue = $_GET['montant'];
  } else {
    $MontantValue = 3000;
  }

  if (!empty($DureeValue) and isset($_GET['duree'])) {
    $DureeValue = $_GET['duree'];
  } else {
    $DureeValue = 12;
  }
  ?>

  <div class="row">
    <div class="col-lg-5">
      <!-- Montant -->
      <p><?php _e('Amount', 'multicredit'); ?></p>
      <div class="slidecontainer">
        <input id="montant" name="montant" type="number" value="<?php echo $MontantValue; ?>" min="3000" max="400000" step="1000" oninput="montantSlider.value=montant.value" />
        <input id="montantSlider" type="range" min="3000" max="400000" value="<?php echo $MontantValue; ?>" step="1000" class="slider" oninput="montant.value=montantSlider.value" />
      </div>
    </div>
    <div class="col-lg-4">
      <!-- Durée -->
      <p><?php _e('Duration', 'multicredit'); ?></p>
      <div class="slidecontainer">
        <input id="duree" name="duree" type="number" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" oninput="dureeSlider.value=duree.value" />
        <input id="dureeSlider" type="range" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" class="slider" oninput="duree.value=dureeSlider.value" />
      </div>
    </div>
    <div class="col-lg-3">

      <p class="f-height hide-on-mobile"><?php _e('Monthly payment from', 'multicredit'); ?></p>
      <p class="f-height hide-on-desktop"><?php _e('Monthly payment including amortization, interests and death insurance from', 'multicredit'); ?></p>
      <div>
        <div style="display:flex">
          <h4 id="mensualite49">257 CHF</h4>
          <h4 style="font-size: 1.8em; margin-left:10px;"><?php _e('monthly', 'multicredit'); ?></h4>
        </div>

      </div>
    </div>
  </div>
  <!-- <div class="row align-items-center legend-bloc mt-4 mb-2" style="display: flex">
    <div id="49">
      <h4 id="mensualite49">257 CHF</h4>
      <h4 style="font-size: 1.8em; margin-left:10px;"><?php _e('monthly', 'multicredit'); ?></h4>
    </div>
    <div id="69">
      <h4 id="mensualite69">259 CHF</h4>
      <h4 style="font-size: 1.8em; margin-left:10px;"><?php _e('monthly', 'multicredit'); ?></h4>
    </div>
    <div id="99">
      <h4 id="mensualite99">263 CHF</h4>
      <h4 style="font-size: 1.8em; margin-left:10px;"><?php _e('monthly', 'multicredit'); ?></h4>
    </div>
  </div> -->
  <div class="row align-items-center legend-bloc mt-4 mb-2 ">
    <div class="col-lg-3 hide-on-mobile">&nbsp;</div>
    <div class="col-lg-6 text-right hide-on-mobile">
      <p style="margin-bottom: 8px;font-size: 0.9em;"><strong><?php _e('Monthly payments/refunds including:', 'multicredit'); ?></strong></p>
      <ul class="checklist inline-checklist">
        <li><?php _e('Amortization', 'multicredit'); ?></li>
        <li><?php _e('Interests', 'multicredit'); ?></li>
        <li><?php _e('Death insurance', 'multicredit'); ?></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <input type="submit" class="btn" value="<?php _e('Credit application', 'multicredit'); ?>" />
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <p style="font-size:0.6em;">
        <?php _e('Calculation example: Financing CHF 10,000. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to CHF 520. The final interest rate varies, depending on the situation of each client, from 4.5% to 9.9%. There are no application or additional costs: you only pay the interest on the loan.', 'multicredit'); ?>
        <!--Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt.-->
      </p>
    </div>
  </div>

</form>

</div>