<!-- Main Calculator component -->
<?php
$classes = get_body_class();
if (in_array('page-template-template-form',$classes)) {
    echo "<div class='demande-credit-component fullsize visible'>";
} else {
    echo "<div class='demande-credit-component'>";
}
?>
  <form class="container" method="get" action="<?php echo get_home_url() ?>/<?php _e('credit-application','multicredit')?>/">

    <?php
      $_SESSION['montant'] = $MontantValue;
      $_SESSION['duree'] = $DureeValue;

      $MontantValue = $_GET['montant'];
      $DureeValue = $_GET['duree'];

      if (!empty($MontantValue)){
        $MontantValue = $_GET['montant'];
      } else{
        $MontantValue = 3000;
      }

      if (!empty($DureeValue)){
        $DureeValue = $_GET['duree'];
      } else{
        $DureeValue = 12;
      }
    ?>

  <div class="row">
    <div class="col-lg-3">

      <!-- Montant -->
      <p><?php _e( 'Amount', 'multicredit' );?></p>
      <div class="slidecontainer">
        <input id="montant" name="montant" type="number" value="<?php echo $MontantValue; ?>" min="3000" max="400000" step="1000" oninput="montantSlider.value=montant.value" />
        <input id="montantSlider" type="range" min="3000" max="400000" value="<?php echo $MontantValue; ?>" step="1000" class="slider" oninput="montant.value=montantSlider.value" />
      </div>

      <!-- Durée -->
      <p><?php _e( 'Duration', 'multicredit' );?></p>
      <div class="slidecontainer">
        <input id="duree" name="duree" type="number" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" oninput="dureeSlider.value=duree.value" />
        <input id="dureeSlider" type="range" min="12" max="84" value="<?php echo $DureeValue; ?>" step="12" class="slider" oninput="duree.value=dureeSlider.value" />
      </div>
    </div>

    <div class="col-lg-3 norightpadding no-resizing-cols">
      <!-- Mensualités à 4.9% -->
      <p class="f-height"><?php _e( 'Monthly payment at', 'multicredit' );?> <b>4,9%</b></p>
      <h4 id="mensualite49">0</h4>
      <p class="small"><?php _e( 'monthly', 'multicredit' );?></p>
      <div class="separator"></div>

      <!-- Mensualités à 9.9% -->
      <p class="f-height"><?php _e( 'Monthly payment at', 'multicredit' );?> <b>9,9%</b></p>
      <h4 id="mensualite99">0</h4>
      <p class="small"><?php _e( 'monthly', 'multicredit' );?></p>
    </div>
    <div class="col-lg-3 nopadding no-resizing-cols">
      <!-- Intérêts à 4.9% -->
      <p class="f-height"><?php _e( 'Interests', 'multicredit' );?></p>
      <h4 id="interet49">0</h4>
      <p class="small"><?php _e( 'in addition to the desired amount', 'multicredit' );?></p>
      <div class="separator"></div>

      <!-- Intérêts à 9.9% -->
      <p class="f-height"><?php _e( 'Interests', 'multicredit' );?></p>
      <h4 id="interet99">0</h4>
      <p class="small"><?php _e( 'in addition to the desired amount', 'multicredit' );?></p>
    </div>
    <div class="col-lg-3 noleftpadding no-resizing-cols">
      <!-- Total à 4.9% -->
      <p class="f-height"><?php _e( 'Paid in total', 'multicredit' );?></p>
      <h4 id="total49">0</h4>
      <p class="small"><?php _e( 'at the rate of', 'multicredit' );?> <b>4,9%</b></p>
      <div class="separator"></div>

      <!-- Total à 9.9% -->
      <p class="f-height"><?php _e( 'Paid in total', 'multicredit' );?></p>
      <h4 id="total99">0</h4>
      <p class="small"><?php _e( 'at the rate of', 'multicredit' );?> <b>9,9%</b></p>
    </div>
  </div>
  <div class="row align-items-center legend-bloc">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-6 text-right">
		<p style="margin-bottom: 8px;font-size: 0.9em;"><strong><?php _e( 'Monthly payments/refunds including:', 'multicredit' );?></strong></p>
      <ul class="checklist inline-checklist">
        <li><?php _e( 'Amortization', 'multicredit' );?></li>
        <li><?php _e( 'Interests', 'multicredit' );?></li>
        <li><?php _e( 'Death insurance', 'multicredit' );?></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <input type="submit" class="btn" value="<?php _e( 'Credit application', 'multicredit' );?>" />
    </div>
  </div>
	  

  </form>

</div>
