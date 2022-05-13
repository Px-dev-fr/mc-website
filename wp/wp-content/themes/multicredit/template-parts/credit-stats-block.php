<?php

$numone = '90769';
$descone = __( 'Customers trust us', 'multicredit' );

$numtwo = '15000';
$desctwo = __( 'Credit applications each year', 'multicredit' );

$sincedate =  Date('Y') - 1999;
$numtree = $sincedate;
$desctree = __( 'Years of activity in Switzerland', 'multicredit' );
/*
$numfour = '26';
$descfour = __( 'Cantons where we are active', 'multicredit' );
*/

$numfour = '500';
$descfour = __( 'of Swiss francs in loans since 1999', 'multicredit' );

?>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex full-width diagonal-top-bck gradient-bck bigpadding counter">
  <div class="wpb_column vc_column_container vc_col-sm-3">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">

        <div class="blocktitle title-center title-light countAnim clearfix">
          <h3><?php echo $numone; ?></h3>
          <h4><?php echo $descone; ?></h4>
        </div>

      </div>
    </div>
  </div>

  <div class="wpb_column vc_column_container vc_col-sm-3">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="blocktitle title-center title-light countAnim clearfix">
          <h3><?php echo $numtwo; ?></h3>
          <h4><?php echo $desctwo; ?></h4>
        </div>
      </div>
    </div>
  </div>

  <div class="wpb_column vc_column_container vc_col-sm-3">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="blocktitle title-center title-light countAnim clearfix">
          <h3><?php echo $numtree; ?></h3>
          <h4><?php echo $desctree; ?></h4>
        </div>
      </div>
    </div>
  </div>

  <div class="wpb_column vc_column_container vc_col-sm-3">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="blocktitle title-center title-light clearfix">
          <h3><span class="countAnim"><?php echo $numfour; ?></span> Mio</h3>
          <h4><?php echo $descfour; ?></h4>
        </div>
      </div>
    </div>
  </div>
</div>
