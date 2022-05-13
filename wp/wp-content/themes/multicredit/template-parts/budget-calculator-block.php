<section class="lightgrey-bck bigpadding full-width">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <form>
          <div class="row">
            <div class="col-lg-12">
              <h3><?php _e( 'Revenues (monthly in CHF)', 'multicredit' );?></h3>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <input type="number" id="salaire" name="salaire" placeholder="<?php _e( 'Net salary/income', 'multicredit' );?>" />
              <input type="number" id="revenuconjoint" name="revenuconjoint" placeholder="<?php _e( 'Your spouse\'s net salary/income (monthly) if applicable', 'multicredit' );?>" />
              <input type="number" id="autresrevenus" name="autresrevenus" placeholder="<?php _e( 'Other monthly net incomes', 'multicredit' );?>" />
              <p><br/></p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <h3><?php _e( 'Expenses (monthly in CHF)', 'multicredit' );?></h3>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <input type="number" id="loyer" name="loyer" placeholder="<?php _e( 'Your monthly rent or contribution to the rent', 'multicredit' );?>" />
              <input type="number" id="fraismenage" name="fraismenage" placeholder="<?php _e( 'Household expenses (Food, internet and other)', 'multicredit' );?>" />
              <input type="number" id="fraisdeplacement" name="fraisdeplacement" placeholder="<?php _e( 'Go to work costs', 'multicredit' );?>" />
              <input type="number" id="fraisassurance" name="fraisassurance" placeholder="<?php _e( 'Monthly health insurance premiums (if married, for family)', 'multicredit' );?>" />
              <input type="number" id="autresfrais" name="autresfrais" placeholder="<?php _e( 'Other monthly expenses or obligations (monthly credit payment, leasing, credit card...)', 'multicredit' );?>" />
              <select id="nombreenfants">
                <option value="0"><?php _e( 'Dependent children', 'multicredit' );?></option>
                <option value="0"><?php _e( 'None', 'multicredit' );?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <p><br/></p>
              <a id="calculatebudgetbtn" class="btn"><?php _e( 'Calculate my budget', 'multicredit' );?></a>
              <p><br/></p>
            </div>
          </div>

          <div class="row pb-4 mb-4">
            <div class="col-lg-12">
              <h3><?php _e( 'Budgetary surplus: ', 'multicredit' );?></h3>
              <h4 id="budgetTotal">0 CHF</h4>
            </div>
          </div>

          <div class="row pb-4 mb-4">
            <div class="col-lg-12">
              <h3><?php _e( 'Borrowing capacity: ', 'multicredit' );?></h3>
              <h4 id="borrowCapacity">0 CHF</h4>
            </div>
          </div>
      </form>
    </div> <!-- Col 6 -->

    <div class="col-lg-6">

		<div class="wpb_wrapper">
			<h4><?php _e( 'The Budgetary surplus', 'multicredit' );?></h4>
			<p><?php _e( 'This value represents an approximation of the amount you would have at the end of each month, once the charges have been paid and after deduction of the cost of living.', 'multicredit' );?></p>
			<h4><?php _e( 'Borrowing capacity', 'multicredit' );?></h4>
			<p><?php _e( 'Borrowing capacity allows you to roughly estimate the amount you can get with a loan. It depends directly on the calculation of the budget and the estimated budget surplus.', 'multicredit' );?></p>
			<h4><?php _e( 'Our solutions', 'multicredit' );?></h4>
			<p><?php _e( 'Do you want a more precise budget calculation or do you want to know how much you could get with a loan? Do not hesitate to ask us, we will gladly analyze your application and propose you a non-binding offer.', 'multicredit' );?></p>

		</div>

    </div>
	  </div>
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
	</div>
  </div> <!-- Row -->
</div> <!-- Container -->

</section>
