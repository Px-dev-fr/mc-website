<!-- Rachat Calculator component -->
<?php
$classes = get_body_class();
if (in_array('page-template-template-form',$classes)) {
    echo "<div class='demande-credit-component buyout-calculator fullsize visible' style='margin-bottom: 8em;'>";
} else {
    echo "<div class='demande-credit-component buyout-calculator' style='margin-bottom: 8em;'>";
}
?>
  <form class="container" method="get" action="<?php echo get_home_url() ?>/<?php _e('loan-buyout-form','multicredit')?>/">

    <?php
      $_SESSION['dureerachat'] = $DureeRachatValue;
      $_SESSION['typecredit1'] = $_GET['type-credit-1'];
      $_SESSION['montantcredit1'] = $_GET['montantcredit1'];
      $_SESSION['typecredit2'] = $_GET['type-credit-2'];
      $_SESSION['montantcredit2'] = $_GET['montantcredit2'];
      $_SESSION['typecredit3'] = $_GET['type-credit-3'];
      $_SESSION['montantcredit3'] = $_GET['montantcredit3'];
      $_SESSION['typecredit4'] = $_GET['type-credit-4'];
      $_SESSION['montantcredit4'] = $_GET['montantcredit4'];

      $DureeRachatValue = $_GET['dureerachat'];

      if (!empty($DureeRachatValue)){
        $DureeRachatValue = $_GET['dureerachat'];
      } else{
        $DureeRachatValue = 12;
      }
    ?>

  <div class="row">
    <div class="col-lg-12">
      <p><?php _e( 'Your ongoing commitments', 'multicredit' );?></p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3">
      <input id="montantcredit1" name="montantcredit1" type="number" min="3000" max="400000" placeholder="<?php _e( 'Credit amount', 'multicredit' );?> 1" />
      <select id="type-credit-1" name="type-credit-1">
        <option value="non-defini" selected disabled><?php _e( 'Credit Type', 'multicredit' );?> 1</option>
        <option value="rachat-credit-en-cours"><?php _e( 'Credit refinancing', 'multicredit' );?></option>
        <option value="leasing"><?php _e( 'Lease refinancing', 'multicredit' );?></option>
        <option value="carte-de-credit"><?php _e( 'Credit card balance refinancing', 'multicredit' );?></option>
        <option value="autres"><?php _e( 'Others', 'multicredit' );?></option>
      </select>
    </div>
    <div class="col-lg-3">
      <input id="montantcredit2" name="montantcredit2" type="number" min="3000" max="400000" placeholder="<?php _e( 'Credit amount', 'multicredit' );?> 2" />
      <select id="type-credit-2" name="type-credit-2">
        <option value="non-defini" selected disabled><?php _e( 'Credit Type', 'multicredit' );?> 1</option>
        <option value="rachat-credit-en-cours"><?php _e( 'Credit refinancing', 'multicredit' );?></option>
        <option value="leasing"><?php _e( 'Lease refinancing', 'multicredit' );?></option>
        <option value="carte-de-credit"><?php _e( 'Credit card balance refinancing', 'multicredit' );?></option>
        <option value="autres"><?php _e( 'Others', 'multicredit' );?></option>
      </select>
    </div>
    <div class="col-lg-3">
      <input id="montantcredit3" name="montantcredit3" type="number" min="3000" max="400000" placeholder="<?php _e( 'Credit amount', 'multicredit' );?> 3" />
      <select id="type-credit-3" name="type-credit-3">
        <option value="non-defini" selected disabled><?php _e( 'Credit Type', 'multicredit' );?> 1</option>
        <option value="rachat-credit-en-cours"><?php _e( 'Credit refinancing', 'multicredit' );?></option>
        <option value="leasing"><?php _e( 'Lease refinancing', 'multicredit' );?></option>
        <option value="carte-de-credit"><?php _e( 'Credit card balance refinancing', 'multicredit' );?></option>
        <option value="autres"><?php _e( 'Others', 'multicredit' );?></option>
      </select>
    </div>
    <div class="col-lg-3">
      <input id="montantcredit4" name="montantcredit4" type="number" min="3000" max="400000" placeholder="<?php _e( 'Credit amount', 'multicredit' );?> 4" />
      <select id="type-credit-4" name="type-credit-4">
        <option value="non-defini" selected disabled><?php _e( 'Credit Type', 'multicredit' );?> 1</option>
        <option value="rachat-credit-en-cours"><?php _e( 'Credit refinancing', 'multicredit' );?></option>
        <option value="leasing"><?php _e( 'Lease refinancing', 'multicredit' );?></option>
        <option value="carte-de-credit"><?php _e( 'Credit card balance refinancing', 'multicredit' );?></option>
        <option value="autres"><?php _e( 'Others', 'multicredit' );?></option>
      </select>
    </div>
  </div>

  <div class="separator"></div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Durée -->
      <p><?php _e( 'Duration', 'multicredit' );?></p>
      <div class="slidecontainer">
        <input id="dureerachat" name="dureerachat" type="number" min="12" max="84" value="<?php echo $DureeRachatValue; ?>" step="12" oninput="dureerachatSlider.value=dureerachat.value" />
        <input id="dureerachatSlider" type="range" min="12" max="84" value="<?php echo $DureeRachatValue; ?>" step="12" class="slider" oninput="dureerachat.value=dureerachatSlider.value" />
      </div>
    </div>
    <div class="col-lg-3">
      <!-- Montant -->
      <p><?php _e( 'Amount', 'multicredit' );?></p>
      <h4 id="montantrachat">0</h4>
    </div>
    <div class="col-lg-3">
      <!-- Mensualités à 4.9% -->
      <p class="f-height hide-on-mobile"><?php _e( 'Monthly payment from', 'multicredit' );?></p>
      <p class="f-height hide-on-desktop"><?php _e( 'Monthly payment including amortization, interests and death insurance from', 'multicredit' );?></p>
      <h4 id="mensualiterachat49">0</h4>
      <p class="small"><?php _e( 'monthly', 'multicredit' );?></p>
    </div>
  </div>

  <div class="row align-items-center legend-bloc mt-4 mb-2 ">
    <div class="col-lg-3 hide-on-mobile">&nbsp;</div>
    <div class="col-lg-6 text-right hide-on-mobile">
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
