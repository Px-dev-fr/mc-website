<?php

$titleform_s1 = __( 'Personal data', 'multicredit' );
$titleform_s3 = __( 'Your situation', 'multicredit' );

$current_language_code = apply_filters( 'wpml_current_language', null );
$cgurl='';

if ($current_language_code=='fr') {
	$cgurl='https://multicredit.ch/fr/cg/';
} else if ($current_language_code=='de') {
	$cgurl='https://multicredit.ch/de/cg/';
} else if ($current_language_code=='it') {
	$cgurl='https://multicredit.ch/it/cg/';
} else if ($current_language_code=='es') {
	$cgurl='https://multicredit.ch/es/cg/';
} else if ($current_language_code=='pt-pt') {
	$cgurl='https://multicredit.ch/pt-pt/cg/';
} else if ($current_language_code=='tr') {
	$cgurl='https://multicredit.ch/tu/cg/';
} else if ($current_language_code=='sq') {
	$cgurl='https://multicredit.ch/al/cg/';
} else {
	$cgurl='https://multicredit.ch/en/cg/';
}

?>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex full-width lightgrey-bck smallpadding pt-0">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">s
			<div class="wpb_wrapper">


				<main class="container">

					<section id="section1" class="pt-4">
							<?php
								$fields = array(
											'langue' => 'fr',
											'origine_referer' => $_SESSION['origine_referer'],
											'ip' => $_SERVER['REMOTE_ADDR'],
											'url' => 'multicredit'
										);
								foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
								rtrim($fields_string, '&');

								$url=("https://crm.cashflex.ch/curl/formulaires/prives/cartecc.php");
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_REFERER, 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
								curl_setopt($ch, CURLOPT_URL, $url);
								curl_setopt($ch,CURLOPT_POST, count($fields));
								curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								$output = curl_exec($ch);
								curl_close($ch);
								$output=str_replace('type="submit"', 'type="submit" class="btn"', $output);

								$matches = null;
								preg_match_all('#<input type="hidden" name="token" value="(.*)" class="subc">#', $output, $matches);
							?>

							<!-- MultiStep Form Start -->
							<form id="cash_form" method="POST" action="">

								<input type="hidden" name="token" value="<?php echo $matches[1][0]; ?>" class="subc">
								<input type="hidden" name="url" value="multicredit" class="subc">
								<input type="hidden" name="demande_service" value="Carte de crédit" class="subc">
								<input type="hidden" name="client_langue" value="<?php echo $current_language_code ?>" class="subc">

										<div class="blocktitle title-center clearfix">
											<h2><?php _e( 'Your request in 2 minutes!', 'multicredit' ); ?></h2>
											<h4><?php _e( 'Non-binding form', 'multicredit' ); ?></h4>
											<p><?php _e('Need a higher limit? Whatever the situation, our solution will prevent you from running out of cash! Apply for your credit card online and receive a no-obligation proposal as soon as possible!', 'multicredit'); ?></p>
										</div>

										<div class="blocktitle title-center clearfix">
											<h3><?php echo $titleform_s1 ?></h3>
										</div>

										<!-- First Tab -->
										<div class="tab d-block">

										<div class="row">
											<div class="col-md-3 label"><?php _e('First name','multicredit'); ?></div>
											<div class="col-md-6"><input aria-required="true" placeholder="<?php _e('First name','multicredit'); ?>" name="client_nom" id="nom" pattern="^([- \w\d\u00c0-\u024f]+)$"
         required="required"  spellcheck="false" type="text" data-bind="nom"></div>
				 							<div class="col-md-3 form-field-valid"></div>
											<div class="col-md-3 form-field-invalid"><?php _e('This field is required.','multicredit'); ?></div>
									  	</div>

										<div class="row">
											<div class="col-md-3 label"><?php _e('Last name','multicredit'); ?></div>
											<div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Last name','multicredit'); ?>" name="client_prenom" id="prenom" pattern="^([- \w\d\u00c0-\u024f]+)$"
												required="required"  spellcheck="false" type="text" data-bind="prenom"></div>
												<div class="col-md-3 form-field-valid"></div>
												<div class="col-md-3 form-field-invalid"><?php _e('This field is required.','multicredit'); ?></div>
									  	</div>

											<div class="row">
													<div class="col-md-3 label"><?php _e('Zip code / City','multicredit'); ?></div>
													<div class="col-md-2"><input aria-required="true" placeholder="<?php _e('Zip code','multicredit'); ?>" name="client_cpa" id="cpa" type="number" required="required" data-bind="cpa"></div>
													<div class="col-md-4"><input aria-required="true" placeholder="<?php _e('City','multicredit'); ?>" name="client_localite" id="localite" type="text" required="required" disabled="disabled" data-bind="localite"></div>
													<div class="col-md-3 form-field-valid"></div>
													<div class="col-md-3 form-field-invalid"><?php _e('This field is required.','multicredit'); ?></div>
											  	</div>

													<div class="row">
															<div class="col-md-3 label"><?php _e('Mobile phone','multicredit'); ?></div>
															<div class="col-md-6"><input aria-required="true" placeholder="<?php _e('XXX XXX XX XX','multicredit'); ?>" name="client_telephone" id="telephone" type="tel" required="required" pattern="[0-9 ]{3}[0-9 ]{3}[0-9 ]{2}[0-9]{2}" data-bind="telephone"></div>
															<div class="col-md-3 form-field-valid"></div>
															<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
															</div>

													<div class="row">
															<div class="col-md-3 label"><?php _e('Private E-Mail','multicredit'); ?></div>
															<div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Private E-Mail','multicredit'); ?>" name="client_email" id="email" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$"  required="required" spellcheck="false" type="email" data-bind="email"></div>
															<div class="col-md-3 form-field-valid"></div>
															<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
														</div>

														<div class="row">
														 <div class="col-md-3 label"><?php _e('Prosecutions/bad debt (poursuites/Betreibungen)','multicredit'); ?></div>
														 <div class="col-md-6">
																 <select aria-required="true" id="client_poursuites" name="client_poursuites" required="required" data-bind="client_poursuites">
																 <option value="" selected disabled hidden><?php _e('Do you have any prosecutions or bad debt financial history?','multicredit'); ?></option>
																 <option value="non"><?php _e('No','multicredit'); ?></option>
																 <option value="non"><?php _e('Prosecutions/bad debt (poursuites/Betreibungen)','multicredit'); ?></option>
																 <option value="non"><?php _e('Negative code with a credit, leasing or credit card at ZEK/IKO (bad repayment)','multicredit'); ?></option>
																 <option value="non"><?php _e('Wage withholding','multicredit'); ?></option>
																 <option value="non"><?php _e('You are under guardianship/curtel','multicredit'); ?></option>
															 </select>
															 </div>
															 <div class="col-md-3 form-field-valid"></div>
				 											<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
														 </div>



														 <div class="blocktitle title-center clearfix">
															<h3><?php echo $titleform_s3 ?></h3>
														</div>


									<div class="row">
											<div class="col-md-3 label"><?php _e('Date of birth','multicredit'); ?></div>
											<div class="col-md-1"><input placeholder="<?php _e('Day','multicredit'); ?>"  name="naissance-dd" id="naissance-dd" aria-required="true" maxlength="2" pattern="\d{2}" type="number" required="required" class="groupfields birth" data-bind="naissance-dd"></div>
											<div class="col-md-1"><input placeholder="<?php _e('Month','multicredit'); ?>"  name="naissance-mm" id="naissance-mm" aria-required="true" maxlength="2" pattern="\d{2}" type="number" required="required" class="groupfields birth" data-bind="naissance-mm"></div>
											<div class="col-md-2"><input placeholder="<?php _e('Year','multicredit'); ?>"  name="naissance-yyyy" id="naissance-yyyy" aria-required="true" maxlength="4" pattern="\d{4}" type="number" required="required" class="groupfields birth" data-bind="naissance-yyyy"></div>
											<div class="col-md-2"><small><?php _e('Ex: 15.04.1980','multicredit'); ?></small></div>
											<div class="col-md-3 form-field-valid"></div>
											<div class="col-md-3 form-field-invalid"><?php _e('All fields are required.','multicredit'); ?></div>
									  	</div>

											<div class="row">
												<div class="col-md-3 label"><?php _e('Nationality / Permit','multicredit'); ?></div>
												<div class="col-md-6">
													<select aria-required="true" id="type_de_permis" name="client_type_de_permis" required="required" data-bind="type_de_permis">
														<option value="" selected disabled hidden><?php _e('Type','multicredit'); ?></option>
														<option value="Suisse"><?php _e('Swiss','multicredit'); ?></option>
														<option value="Permis_C"><?php _e('C Permit','multicredit'); ?></option>
														<option value="Permis_B"><?php _e('B Permit','multicredit'); ?></option>
														<option value="Permis_L(>2_ans)"><?php _e('L Permit (more than 2 years)','multicredit'); ?></option>
														<option value="Permis_L(<2_ans)"><?php _e('L Permit (less than 2 years)','multicredit'); ?></option>
														<option value="Permis_G(>3ans)"><?php _e('G Permit (more than 3 years)','multicredit'); ?></option>
														<option value="Permis_G(<3_ans)"><?php _e('G Permit (less than 3 years)','multicredit'); ?></option>
														<option value="Carte_legitimation"><?php _e('Legitimation Card','multicredit'); ?></option>
													</select>
												</div>
												<div class="col-md-3 form-field-valid"></div>
												<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
												</div>


												<div class="row">
  											 <div class="col-md-3 label"><?php _e('Dependent children?','multicredit'); ?></div>
  											 <div class="col-md-6">
  													 <select aria-required="true" id="choix_enfants" name="choix_enfants" required="required" data-bind="choix_enfants">
  													 <option value="" selected disabled hidden><?php _e('Yes/No','multicredit'); ?></option>
  													 <option value="oui"><?php _e('Yes','multicredit'); ?></option>
  													 <option value="non"><?php _e('No','multicredit'); ?></option>
  												 </select>
  												 </div>
  												 <div class="col-md-3 form-field-valid"></div>
  												<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
  											 </div>

 											 <div class="row" id="childrens-birth">
 												<div class="col-md-3 label"><?php _e('Year of birth','multicredit'); ?></div>
 												<div class="col-md-2"><input placeholder="<?php _e('Child 1','multicredit'); ?>" id="age_enfant_1" name="age_enfant_1" type="number" maxlength="4" pattern="\d{4}" data-bind="age_enfant_1"></div>
 												<div class="col-md-2"><input placeholder="<?php _e('Child 2','multicredit'); ?>" id="age_enfant_2" name="age_enfant_2" type="number" maxlength="4" pattern="\d{4}" data-bind="age_enfant_2"></div>
 												<div class="col-md-2"><input placeholder="<?php _e('Child 3','multicredit'); ?>" id="age_enfant_3" name="age_enfant_3" type="number" maxlength="4" pattern="\d{4}" data-bind="age_enfant_3"></div>
 												<div class="col-md-3 form-field-valid"></div>
 												 <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
 											 </div>



											 <div class="row" id="salary">
										 		<div class="col-md-3 label"><?php _e('Monthly  net salary (CHF)','multicredit'); ?></div>
										 		<div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Monthly salary','multicredit'); ?>" id="revenus" name="client_revenus" required="required" type="number" data-bind="revenus"></div>
										 		<div class="col-md-3 form-field-valid"></div>
										 		<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
										 		</div>


										 	 <div class="row">
										 		 <div class="col-md-3 label"><?php _e('Monthly housing payment (CHF)','multicredit'); ?></div>
										 		 <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Amount in CHF','multicredit'); ?>" id="loyer" name="client_loyer" required="required" type="number" data-bind="loyer"></div>
										 		 <div class="col-md-3 form-field-valid"></div>
										 		<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
										 		</div>

									<div class="row">
										<div class="col-md-3 label"></div>
										<div class="col-md-3"><input class="switch" type="checkbox" value="accord" id="form_accord_1"><?php _e('I accept the','multicredit'); ?> <!--<a href="<?php echo $cgurl ?>" id="termsofusemodal">--><a href="javascript:void(0);" id="termsofusemodal"><?php _e('terms of use','multicredit'); ?></a>.</div>
										<div class="col-md-3 form-field-invalid"><?php _e('You must accept our terms of use.','multicredit'); ?></div>
										<div class="col-md-3 label"></div>
									</div>

									</div>


									<div class="formnav d-flex justify-content-between">
										<button type="submit" class="btn floatright" id="submit" onclick=""><?php _e('Submit credit card request', 'multicredit') ?></button>
									</div>

							</form>
							<!-- /.MultiStep Form -->

							<div id="successmessage" class="d-none">
							</div>

					</section>

				</main> <!-- /content -->

			</div>
		</div>
	</div>
</div>
