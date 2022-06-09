<?php

$titleform_s1 = __('Personal data', 'multicredit');
$titleform_s2 = __('Your situation', 'multicredit');
//$titleform_s3 = __( 'Your situation', 'multicredit' );
//$titleform_s4 =  __( 'Review and submit', 'multicredit' );


$current_language_code = apply_filters('wpml_current_language', null);
$cgurl = '';

if ($current_language_code == 'fr') {
    $cgurl = 'https://multicredit.ch/fr/cg/';
} else if ($current_language_code == 'de') {
    $cgurl = 'https://multicredit.ch/de/cg/';
} else if ($current_language_code == 'it') {
    $cgurl = 'https://multicredit.cwp/it/cg/';
} else if ($current_language_code == 'es') {
    $cgurl = 'https://multicredit.ch/es/cg/';
} else if ($current_language_code == 'pt-pt') {
    $cgurl = 'https://multicredit.ch/pt-pt/cg/';
} else if ($current_language_code == 'tr') {
    $cgurl = 'https://multicredit.ch/tu/cg/';
} else if ($current_language_code == 'sq') {
    $cgurl = 'https://multicredit.ch/al/cg/';
} else {
    $cgurl = 'https://multicredit.ch/en/cg/';
}

session_start();
$MontantValue = $_GET['montant'];
$DureeValue = $_GET['duree'];

$FormatedMontantValue = number_format($MontantValue, 0, ',', '\'');

?>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex full-width lightgrey-bck smallpadding pt-0">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div id="loadingmessage" class="d-none" style="margin-left: 100px; height:400px">
                <h4><?php _e("Sending in progress, please wait...", "multicredit"); ?></h4>
                <img src="https://media.tenor.com/images/a742721ea2075bc3956a2ff62c9bfeef/tenor.gif" style="width:50px; height:50px; display:block; margin:auto;" alt="loading">
            </div>
            <div id="contenu-principal" class="wpb_wrapper">

                <!-- Form Steps indicator -->
                <div class="form-step-bar">
                    <div class="container-bar">
                        <div class="row">
                            <div class="prestep step-1 col-4 finish"><span class="number">0</span><span class="steplabel"><?php _e('Desired credit amount', 'multicredit'); ?></span></div>
                            <div class="step step-2 col-4 active"><span class="number">1</span><span class="steplabel"><?php _e('Personal data', 'multicredit'); ?></span></div>
                            <div class="step step-3 col-4"><span class="number">2</span><span class="steplabel"><?php _e('Your situation', 'multicredit'); ?></span></div>
                            <?php /* <div class="step step-4 col-3"><span class="number">4</span><span class="steplabel"><?php _e('Review and submit','multicredit'); ?></span></div> */ ?>
                        </div>
                    </div>
                </div>





                <main class="container">

                    <section id="section1">

                        <div class="container-fluid col-md-12">
                            <!-- MultiStep Form Start -->
                            <form id="cr_f">

                                <?php
                                $montant = 10000;
                                $duree = 12;
                                $orig = "";
                                if (isset($_SESSION['orig'])) $orig = $_SESSION['orig'];
                                if (isset($_POST['montant'])) $montant = $_POST['montant'];
                                if (isset($_POST['duree'])) $duree = $_POST['duree'];
                                $curl = curl_init();
                                curl_setopt($curl, CURLOPT_URL, 'https://crm.cashflex.ch/curl/formulaires/prives/credit/formulaire.php');
                                curl_setopt($curl, CURLOPT_REFERER, 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                                curl_setopt($curl, CURLOPT_COOKIESESSION, true);
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); //
                                $postfields = array(
                                    'langue' => 'fr',
                                    'montant' => $montant,
                                    'duree' => $duree,
                                    'ip' => $_SERVER['REMOTE_ADDR'],
                                    'orig' => 'Formulaire',
                                    'signature' => 'Multicredit',
                                    'url' => 'www.multicredit.ch'
                                );
                                curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
                                $output = curl_exec($curl);
                                curl_close($curl);

                                $matches = null;
                                preg_match_all('#<input type="hidden" name="token" value="(.*)" class="subc">#', $output, $matches);
                                ?>

                                <input type="hidden" name="token" value="<?php echo $matches[1][0]; ?>" class="subc">
                                <input type="hidden" name="langue" value="<?php echo $current_language_code ?>">
                                <input type="hidden" name="url" value="www.multicredit.ch">
                                <input type="hidden" name="orig" value="Formulaire">
                                <input type="hidden" id="gclid" name="GCLID" value="">

                                <input type="text" name="montant" id="montant" value="<?php echo $MontantValue; ?>" disabled class="d-none montanthiddenfield">
                                <input type="text" name="duree" id="duree" value="<?php echo $DureeValue; ?>" disabled class="d-none dureehiddenfield">

                                <!-- First Tab -->
                                <div class="tab">

                                    <div class="blocktitle title-center clearfix">
                                        <h2><?php _e('Your request in 2 minutes!', 'multicredit'); ?></h2>
                                        <h4><?php _e('Non-binding form', 'multicredit'); ?></h4>

                                        <p><?php _e('Fill out the credit application form and get a definitive answer within 24 hours. Receive a preliminary decision in only 5 minutes, during the first telephone contact. Basic requirement: work or have an income in Switzerland.', 'multicredit'); ?></p>
                                    </div>

                                    <?php // if(!empty($DureeValue)) { 
                                    ?>
                                    <div class="row formamount">

                                        <div class="col-6" id="summary-amount"><?php _e('Wished amount', 'multicredit'); ?>: CHF&nbsp;<span class="summary-amount"></span></div>
                                        <div class="col-6" id="summary-duration"><?php _e('Loan duration', 'multicredit'); ?>: <span class="summary-duration"></span>&nbsp;<?php _e('months', 'multicredit'); ?></div>


                                    </div>
                                    <?php //	}
                                    ?>

                                    <div class="blocktitle title-center clearfix">
                                        <h3><?php echo $titleform_s1 ?></h3>
                                        <div class="ssl-block">
                                            <div class="ssl-img"><img src="https://www.multicredit.ch/wp/wp-content/uploads/secure-datas.svg" width="60px" height="28px"></div>
                                            <div class="ssl-txt"><?php _e('Your data are transmitted to us in a secure mode and are hosted in Switzerland.', 'multicredit'); ?></div>
                                        </div>
                                    </div>

                                    <div class="row radioboxs">
                                        <div class="col-md-3 label"><?php _e('Gender', 'multicredit'); ?></div>

                                        <div class="col-md-2">
                                            <input class="checkbox-mc" type="radio" name="titre" value="Madame" textval="<?php _e('Madam', 'multicredit'); ?>" id="madame" class="" data-bind="titre">
                                            <label class="for-checkbox-mc" for="madame">
                                                <svg class="svg-icon" viewBox="0 0 100 100">
                                                    <path d="M47.6,99.6c-8.3,0-18.4-0.5-28.3-2.9c-3.2-0.8-6.3-1.9-9.2-3.3c-5.3-2.6-6.8-6.8-5-12.4
														c1.3-4.2,3.1-8.1,5.9-11.6c2.6-3.2,5.8-5.3,9.9-6c1.3-0.2,2.1-0.9,2.6-2c1.5-2.9,2.1-6.1,2-9.2c-0.2-6.1-1-12.2-1.2-18.4
														c-0.3-9.2,0.9-18.2,6.8-25.8c3.8-4.9,9-7.4,15.1-7.6c3.7-0.1,7.4-0.1,11,0.6c6.6,1.3,11.2,5.4,14,11.4C74.9,19.9,76,28,75,36.4
														c-0.9,7.1-1.6,14.2-0.2,21.3c0.2,1,0.6,2,0.9,2.9c0.6,1.6,1.6,2.6,3.4,2.9c5.5,1,9.2,4.6,11.8,9.3c1.6,3,2.9,6.3,3.9,9.6
														c1.2,3.9-0.2,7.6-3.6,10C87.6,94.9,83.3,96,79,97C69.3,99.1,59.4,99.6,47.6,99.6z M30.9,31.7c-1.1-0.2-1.5,0.8-1.6,1.9
														c-0.3,2.1,0.1,4.2,1,6.1c0.3,0.6,0.9,1.4,1.3,1.4c1.3,0,1.3,0.9,1.6,1.7c2.1,5.2,5,9.9,9.8,13.1c4.1,2.8,8.5,3.1,12.9,0.5
														c5.3-3,8.3-7.9,10.6-13.3c0.4-0.9,0.5-2,1.9-2c0.3,0,0.7-0.6,0.9-0.9c1.3-2.2,1.6-4.5,1.2-7c-0.1-0.5-0.5-1-0.9-1.6
														c-0.4,0.3-0.6,0.5-0.8,0.7c-1,1.4-2,1.3-3.5,0.5c-7.6-4-15.3-8-23.1-11.9c-1-0.5-2.4-0.5-3.5-0.4c-2.2,0.3-3.8,1.6-4.8,3.5
														C32.8,26.5,32,29,30.9,31.7z M62.1,56.7c-8.2,7.5-16.4,7.5-24.3,0.2c-0.7,1.1-1.2,2.2-1.9,3c-0.8,0.8-1.9,1.4-3,2.2
														c0.6,0.9,1.1,1.8,1.9,2.5c8.6,7.9,21.2,8.1,29.9,0.1c0.8-0.7,1.4-1.8,2.2-2.9C64.3,60.8,62.6,59.4,62.1,56.7z" />
                                                </svg>
                                                <?php _e('Madam', 'multicredit'); ?></label>
                                        </div>

                                        <div class="col-md-2">
                                            <input class="checkbox-mc" type="radio" name="titre" value="Monsieur" textval="<?php _e('Sir', 'multicredit'); ?>" id="monsieur" data-bind="titre">
                                            <label class="for-checkbox-mc" for="monsieur">
                                                <svg class="svg-icon" viewBox="0 0 100 100">
                                                    <path class="st0" d="M31.7,62.6c2.2,3.7,5.9,5,9.7,5.8c7.1,1.6,14.2,1.4,21-1.3c2.1-0.8,4-2,5.3-4.1c0.2-0.2,0.6-0.5,0.8-0.5
													c3.9,0.4,7.9,0.7,11.7,1.4c5.2,0.9,8.7,4.3,11.2,8.7c1.8,3.2,3.1,6.7,4.3,10.2c1.2,3.7-0.3,7.3-3.5,9.6C88.4,95,84,96.1,79.6,97
													c-13.6,2.8-27.3,3-41.1,2.3c-7.5-0.4-14.9-1.1-22.2-3.2c-2.7-0.8-5.3-1.8-7.8-3.1c-4.2-2.2-5.9-6.3-4.4-10.8c1-3.1,2.3-6.1,3.8-9
													c3.3-6.3,8.7-9.4,15.8-9.9C26.3,63,29,62.8,31.7,62.6z" />
                                                    <path class="st0" d="M50,0.3c5.4-0.2,10.4,0.9,14.8,4c5.5,4,8.1,9.6,8.9,16.2c0.2,1.8,0.2,3.7,0.2,5.5c0,0.4-0.1,0.8,0.1,1
													c2.1,2.5,1.7,5.3,1.2,8.1c-0.5,2.5-1.1,4.9-3.4,6.5c-0.4,0.3-0.6,1-0.8,1.6c-2.2,5.2-5.2,9.9-9.4,13.7c-7.5,6.6-16,6.6-23.5-0.1
													c-4.1-3.7-7-8.2-9.2-13.2c-0.4-1-1.1-1.9-1.8-2.7c-2.9-3-3.7-10.2-1.5-13.8c0.2-0.4,0.2-1,0.2-1.5c-0.1-4.4,0.4-8.7,2.2-12.8
													c3.5-7.9,9.9-11.9,18.4-12.7C47.5,0.2,48.7,0.3,50,0.3z M64.8,23.6c-0.2,0-0.3,0.1-0.4,0.1c-0.2-0.1-0.5-0.2-0.7-0.3
													c-2.9-1.9-5.9-2.3-9.3-1.6c-4.7,1-9.4,0.7-14-0.8c-2.3-0.8-4.3,0-6,1.6c-1.9,1.8-3,4-3.7,6.5c-0.1,0.4-0.6,0.8-0.9,1.1
													c-0.5,0.5-1.3,0.9-1.5,1.5c-0.7,2.6-0.1,5.1,1.3,7.4c0.2,0.4,0.7,1,1.1,1c1.2-0.1,1.3,0.8,1.6,1.5c1.8,4.7,4.4,9,8.2,12.3
													c3.3,2.8,7,4.4,11.5,3.6c4.4-0.9,7.8-3.5,10.3-7.1c2.2-3.1,3.9-6.6,6-10.1c0.3-0.2,1.2-0.5,1.5-1.1c1.4-2.2,2-4.7,1.4-7.4
													c-0.3-1.2-0.8-1.9-2.2-1.3c-0.6-3.2-1.8-6-4.6-8.3C64.6,22.8,64.7,23.2,64.8,23.6z" />
                                                </svg>
                                                <?php _e('Sir', 'multicredit'); ?></label>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('This field is required.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('First name', 'multicredit'); ?></div>
                                        <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('First name', 'multicredit'); ?>" name="prenom" id="prenom" pattern="^([- \w\d\u00c0-\u024f]+)$" required="required" spellcheck="false" type="text" data-bind="prenom"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('This field is required.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Last name', 'multicredit'); ?></div>
                                        <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Last name', 'multicredit'); ?>" name="nom" id="nom" pattern="^([- \w\d\u00c0-\u024f]+)$" required="required" spellcheck="false" type="text" data-bind="nom"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('This field is required.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row dob-f">
                                        <div class="col-md-3 label"><?php _e('Date of birth', 'multicredit'); ?></div>
                                        <div class="col-md-1"><input placeholder="<?php _e('Day', 'multicredit'); ?>" name="naissance-dd" id="naissance-dd" aria-required="true" maxlength="2" pattern="\d{2}" onKeyPress="return check(event,value)" onInput="checkLength(2,this)" type="number" required="required" class="groupfields birth" data-bind="naissance-dd"></div>
                                        <div class="col-md-1"><input placeholder="<?php _e('Month', 'multicredit'); ?>" name="naissance-mm" id="naissance-mm" aria-required="true" maxlength="2" pattern="\d{2}" onKeyPress="return check(event,value)" onInput="checkLength(2,this)" type="number" required="required" class="groupfields birth" data-bind="naissance-mm"></div>
                                        <div class="col-md-2"><input placeholder="<?php _e('Year', 'multicredit'); ?>" name="naissance-yyyy" id="naissance-yyyy" aria-required="true" maxlength="4" pattern="\d{4}" onKeyPress="return check(event,value)" onInput="checkLength(4,this)" type="number" required="required" class="groupfields birth" data-bind="naissance-yyyy"></div>
                                        <div class="col-md-2"><small><?php _e('Ex: 15.04.1980', 'multicredit'); ?></small></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('All fields are required.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Zip code / City', 'multicredit'); ?></div>
                                        <div class="col-md-2"><input aria-required="true" placeholder="<?php _e('Zip code', 'multicredit'); ?>" name="cpa" id="cpa" type="number" required="required" data-bind="cpa"></div>
                                        <div class="col-md-4"><input aria-required="true" placeholder="<?php _e('City', 'multicredit'); ?>" name="localite" id="localite" type="text" required="required" data-bind="localite"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('This field is required.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Mobile phone', 'multicredit'); ?></div>
                                        <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Phone number (without spaces)', 'multicredit'); ?>" name="telephone" id="telephone" type="tel" required="required" pattern="[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" data-bind="telephone"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Private E-Mail', 'multicredit'); ?></div>
                                        <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Private E-Mail', 'multicredit'); ?>" name="email" id="email" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required="required" spellcheck="false" type="email" data-bind="email"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"></div>
                                        <div class="col-md-3"><input class="switch" type="checkbox" value="accord" id="form_accord_1"><?php _e('I accept the', 'multicredit'); ?>
                                            <!--<a href="<?php echo $cgurl ?>" id="termsofusemodal">--><a href="javascript:void(0);" id="termsofusemodal"><?php _e('terms of use', 'multicredit'); ?></a>.
                                        </div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('You must accept our terms of use.', 'multicredit'); ?></div>
                                        <div class="col-md-3 label"></div>
                                    </div>

                                </div>

                                <!-- Second Tab -->
                                <div class="tab">

                                    <div class="blocktitle title-center clearfix">
                                        <h3><?php echo $titleform_s2 ?></h3>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Type of employment', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="type" name="type" required="required" data-bind="type">
                                                <option value="" selected disabled hidden><?php _e('Type of employment', 'multicredit'); ?></option>
                                                <option value="salaire"><?php _e('Full time employee', 'multicredit'); ?></option>
                                                <option value="heure"><?php _e('Part time employee', 'multicredit'); ?></option>
                                                <option value="temporaire"><?php _e('Temporary', 'multicredit'); ?></option>
                                                <option value="rente"><?php _e('Retired person/Disabled annuitant', 'multicredit'); ?></option>
                                                <option value="independant"><?php _e('Self-employed/Sole proprietorship', 'multicredit'); ?></option>
                                                <option value="propre_societe"><?php _e('Employee in your own company', 'multicredit'); ?></option>
                                                <option value="fonctionnaire_ong"><?php _e('NGO official (UN, WHO,...)', 'multicredit'); ?></option>
                                                <option value="fonctionnaire-int"><?php _e('International civil servant (mission, embassy, ...)', 'multicredit'); ?></option>
                                                <option value="chomage"><?php _e('Unemployed', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <?php /*
										<div class="row d-none">
										 <div class="col-md-3 label"><?php _e('Current job position','multicredit'); ?></div>
										 <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Current job position','multicredit'); ?>" id="profession" name="profession" required="required" readonly type="text" data-bind="profession" value="not-specified"></div>
										 <div class="col-md-3 form-field-valid"></div>
										 <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
										</div>
											*/ ?>

                                    <div class="row" id="salary">
                                        <div class="col-md-3 label"><?php _e('Monthly net income/salary (CHF)', 'multicredit'); ?></div>
                                        <div class="col-md-3"><input aria-required="true" placeholder="<?php _e('Amount in CHF', 'multicredit'); ?>" id="revenus" name="revenus" required="required" type="number" min="1" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" data-bind="revenus"></div>
                                        <div class="col-md-3">
                                            <select aria-required="true" id="salaireX" name="salaireX" required="required" data-bind="salaireX">
                                                <option value="" selected disabled hidden><?php _e('Number of annual salary (frequency)', 'multicredit'); ?></option>
                                                <option value="12">x 12</option>
                                                <option value="13">x 13</option>
                                                <option value="14">x 14</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <?php /*
										<div class="row d-none" id="salary-since">
											<div class="col-md-3 label"><?php _e('Receiving above income since','multicredit'); ?></div>
											<div class="col-md-3">
												<select aria-required="true" id="salaire-quand-mois" name="salaire-quand-mois" required="required" data-bind="salaire-quand-mois">
													<option value="01" selected><?php _e('Month','multicredit'); ?></option>
												</select>
											</div>
											<div class="col-md-3">
												<select aria-required="true" id="salaire-quand-annee" name="salaire-quand-annee" class="yearslist" required="required" data-bind="salaire-quand-annee">
												<option value="1900" selected><?php _e('Year','multicredit'); ?></option>
											</select>
											</div>
											<div class="col-md-3 form-field-valid"></div>
											<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
									  	</div>
												*/ ?>
                                    <?php /*
										<div class="blocktitle title-center clearfix">
											<h3><?php _e('Rent and charges','multicredit'); ?></h3>
										</div>
											*/ ?>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Housing', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="loyer_type" name="loyer_type" required="required" data-bind="loyer_type">
                                                <option value="" selected disabled hidden><?php _e('Tenant / Owner', 'multicredit'); ?></option>
                                                <option value="locataire"><?php _e('Tenant', 'multicredit'); ?></option>
                                                <option value="hypotheque"><?php _e('Owner', 'multicredit'); ?></option>
                                                <option value="parents"><?php _e('At parent\'s home', 'multicredit'); ?></option>
                                                <option value="colocation"><?php _e('Roommate', 'multicredit'); ?></option>
                                                <option value="payé par employeur"><?php _e('Paid by employer', 'multicredit'); ?></option>
                                                <option value="participation au loyer"><?php _e('Flatsharing', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Monthly housing payment (CHF)', 'multicredit'); ?></div>
                                        <div class="col-md-6"><input aria-required="true" placeholder="<?php _e('Amount in CHF', 'multicredit'); ?>" id="loyer" name="loyer" required="required" type="number" min="1" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" data-bind="loyer"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <?php /*
											<div class="row d-none" id="address-since">
												<div class="col-md-3 label"><?php _e('Address since (living there)','multicredit'); ?></div>
												<div class="col-md-3">
													<select aria-required="true" id="loyer-quand-mois" name="loyer-quand-mois" required="required" class="form-control" data-bind="loyer-quand-mois">
														<option value="01" selected><?php _e('Month','multicredit'); ?></option>
													</select>
												</div>
												<div class="col-md-3">
													<select aria-required="true" id="loyer-quand-annee" name="loyer-quand-annee" class="yearslist" required="required" class="form-control"  data-bind="loyer-quand-annee">
													<option value="1900" selected><?php _e('Year','multicredit'); ?></option>
												</select>
												</div>
												<div class="col-md-3 form-field-valid"></div>
												<div class="col-md-3 form-field-invalid"><?php _e('Invalid field.','multicredit'); ?></div>
										  	</div>
												*/ ?>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Prosecutions/bad debt (poursuites/Betreibungen)', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="poursuites" name="poursuites" required="required" data-bind="poursuites">
                                                <option value="" selected disabled hidden><?php _e('Do you have any bad debt collections?', 'multicredit'); ?></option>
                                                <!-- <option value="oui"><?php //_e('Yes','multicredit'); 
                                                                            ?></option>
														 <option value="non"><?php //_e('No','multicredit'); 
                                                                                ?></option>
													 -->
                                                <option value="non"><?php _e('I do not have pending prosecution or bad debt at the moment (Betreibungen/Poursuites)', 'multicredit'); ?>
                                                <option value="Poursuites avec opposition"><?php _e('I do have pending prosecution or bad debts, with total or partial oppositions that I legally contest (Betreibungen/Poursuites)', 'multicredit'); ?>
                                                <option value="Poursuites inferieures 5000 chf"><?php _e('I have prosecution or bad debts less than 5’000 CHF (Betreibungen/Poursuites)', 'multicredit'); ?>
                                                <option value="Poursuites superieures 5000 chf"><?php _e('I have prosecution or bad debts more than 5’000 CHF (Betreibungen/Poursuites)', 'multicredit'); ?>
                                                <option value="Poursuites/ADB"><?php _e('I have a lot of prosecutions or bankruptcy or garnishment of my wages with the prosecution office (Verlustscheine oder Konkurs/ADB ou faillite)', 'multicredit'); ?>
                                                <option value="ZEK"><?php _e('I have or had in the past, payment problems with a credit, leasing or credit card. I have a negative code at the ZEK / IKO credit center', 'multicredit'); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <!--Moyen de transport et nombre de kilomètres jusqu au travail-->
                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Means of transport', 'multicredit'); ?></div>
                                        <div class="col-md-3">
                                            <select name="moyen_transport" id="moyen_transport" required="required">
                                                <option value="" selected disabled hidden><?php _e('How do you get to work?', 'multicredit'); ?></option>
                                                <option value="à pieds"><?php _e('On foot', 'multicredit'); ?></option>
                                                <option value="à vélo"><?php _e('By bike', 'multicredit'); ?></option>
                                                <option value="à moto"><?php _e('By motorcycle', 'multicredit'); ?></option>
                                                <option value="transport en commun"><?php _e('By public transit', 'multicredit'); ?></option>
                                                <option value="voiture sans stricte nécessité"><?php _e('By car (not strictly necessary)', 'multicredit'); ?></option>
                                                <option value="voiture strictement nécessaire"><?php _e('By car (strictly necessary)', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input placeholder="<?php _e('Number of kilometers to the workplace', 'multicredit'); ?>" id="nb_kilometres" type="number" min="0" step="1">
                                            <input type="hidden" name="frais_mensuels_transport" id="frais_mensuels_transport">
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Other business expenses (chf)', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <input placeholder="<?php _e("Meals, equipment, etc. Amount in CHF", 'multicredit'); ?>" type="number" min="0" step="1" name="frais_professionnels" required="required">
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <?php /*
										 <div class="blocktitle title-center clearfix">
											<h3><?php echo $titleform_s3 ?></h3>
										</div>
										*/ ?>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Nationality / Permit', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="type_de_permis" name="type_de_permis" required="required" data-bind="type_de_permis">
                                                <option value="" selected disabled hidden><?php _e('Type', 'multicredit'); ?></option>
                                                <option value="Suisse"><?php _e('Swiss', 'multicredit'); ?></option>
                                                <option value="Permis_C"><?php _e('C Permit', 'multicredit'); ?></option>
                                                <option value="Permis_B"><?php _e('B Permit', 'multicredit'); ?></option>
                                                <option value="Permis_L(>2_ans)"><?php _e('L Permit (more than 2 years)', 'multicredit'); ?></option>
                                                <option value="Permis_L(<2_ans)"><?php _e('L Permit (less than 2 years)', 'multicredit'); ?></option>
                                                <option value="Permis_G(>3ans)"><?php _e('G Permit (more than 3 years)', 'multicredit'); ?></option>
                                                <option value="Permis_G(<3_ans)"><?php _e('G Permit (less than 3 years)', 'multicredit'); ?></option>
                                                <option value="Carte_legitimation"><?php _e('Legitimation card', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>


                                    <div class="row d-none">
                                        <div class="col-md-3 label"><?php _e('Ongoing credit or leasing', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="deja_credit_leasing" name="deja_credit_leasing" required="required" data-bind="deja_credit_leasing">
                                                <option value="non selected"><?php _e('No', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Dependent children', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="choix_enfants" name="choix_enfants" required="required" data-bind="choix_enfants">
                                                <option value="" selected disabled hidden><?php _e('Yes/No', 'multicredit'); ?></option>
                                                <option value="oui"><?php _e('Yes', 'multicredit'); ?></option>
                                                <option value="non"><?php _e('No', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row" id="childrens-birth">
                                        <div class="col-md-3 label"><?php _e('Year of birth', 'multicredit'); ?></div>
                                        <div class="col-md-2"><input placeholder="<?php _e('Child 1', 'multicredit'); ?>" id="age_enfant_1" name="age_enfant_1" type="number" maxlength="4" pattern="\d{4}" onKeyPress="return check(event,value)" onInput="checkLength(4,this)" data-bind="age_enfant_1"></div>
                                        <div class="col-md-2"><input placeholder="<?php _e('Child 2', 'multicredit'); ?>" id="age_enfant_2" name="age_enfant_2" type="number" maxlength="4" pattern="\d{4}" onKeyPress="return check(event,value)" onInput="checkLength(4,this)" data-bind="age_enfant_2"></div>
                                        <div class="col-md-2"><input placeholder="<?php _e('Child 3', 'multicredit'); ?>" id="age_enfant_3" name="age_enfant_3" type="number" maxlength="4" pattern="\d{4}" onKeyPress="return check(event,value)" onInput="checkLength(4,this)" data-bind="age_enfant_3"></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Marital status', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select aria-required="true" id="etat_civil" name="etat_civil" required="required" data-bind="etat_civil">
                                                <option value="" selected disabled hidden><?php _e('Official marital status', 'multicredit'); ?></option>
                                                <option value="celibataire"><?php _e('Single', 'multicredit'); ?></option>
                                                <option value="marie"><?php _e('Married', 'multicredit'); ?></option>
                                                <option value="partenariat"><?php _e('Registered partnership ', 'multicredit'); ?></option>
                                                <option value="divorce"><?php _e('Divorced', 'multicredit'); ?></option>
                                                <option value="separe"><?php _e('Separate', 'multicredit'); ?></option>
                                                <option value="concubinage"><?php _e('Not registered partnership', 'multicredit'); ?></option>
                                                <option value="veuf/veuve"><?php _e('Widow / Widower', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>


                                    <div class="row" id="spouse_position">
                                        <div class="col-md-3 label"><?php _e('Type of job of your spouse', 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <select id="type_conjoint" name="type_conjoint" data-bind="type_conjoint">
                                                <option value="" selected hidden><?php _e('Type of employment', 'multicredit'); ?></option>
                                                <option value="salaire"><?php _e('Full time employee', 'multicredit'); ?></option>
                                                <option value="heure"><?php _e('Part time employee', 'multicredit'); ?></option>
                                                <option value="temporaire"><?php _e('Temporary', 'multicredit'); ?></option>
                                                <option value="rente"><?php _e('Retired person/Disabled annuitant', 'multicredit'); ?></option>
                                                <option value="independant"><?php _e('Self-employed/Sole proprietorship', 'multicredit'); ?></option>
                                                <option value="propre_societe"><?php _e('Employee in your own company', 'multicredit'); ?></option>
                                                <option value="fonctionnaire_ong"><?php _e('NGO official (UN, WHO,...)', 'multicredit'); ?></option>
                                                <option value="fonctionnaire-int"><?php _e('International civil servant (mission, embassy, ...)', 'multicredit'); ?></option>
                                                <option value="chomage"><?php _e('Unemployed', 'multicredit'); ?></option>
                                                <option value="foyer"><?php _e('Housewife / Man', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <!--Moyen de transport et nombre de kilomètres jusqu au travail conjoint-->
                                    <div class="row" id="moyen_transport_conjoint_ligne">
                                        <div class="col-md-3 label"><?php _e("Spouse's means of transportation", 'multicredit'); ?></div>
                                        <div class="col-md-3">
                                            <select name="moyen_transport_conjoint" id="moyen_transport_conjoint">
                                                <option value="" selected disabled hidden><?php _e('How does your spouse go to work?', 'multicredit'); ?></option>
                                                <option value="à pieds"><?php _e('On foot', 'multicredit'); ?></option>
                                                <option value="à vélo"><?php _e('By bike', 'multicredit'); ?></option>
                                                <option value="à moto"><?php _e('By motorcycle', 'multicredit'); ?></option>
                                                <option value="transport en commun"><?php _e('By public transit', 'multicredit'); ?></option>
                                                <option value="voiture sans stricte nécessit"><?php _e('By car (not strictly necessary)', 'multicredit'); ?></option>
                                                <option value="voiture strictement nécessaire"><?php _e('By car (strictly necessary)', 'multicredit'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input placeholder="<?php _e("Spouse's number of kilometers to the workplace", 'multicredit'); ?>" id="nb_kilometres_conjoint" type="number" min="0" step="1">
                                            <input type="hidden" name="frais_mensuels_transport_conjoint" id="frais_mensuels_transport_conjoint">
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row" id="frais_professionnels_conjoint_ligne">
                                        <div class="col-md-3 label"><?php _e("Spouse's other business expenses (chf)", 'multicredit'); ?></div>
                                        <div class="col-md-6">
                                            <input placeholder="<?php _e("Meals, equipment, etc. Amount in CHF", 'multicredit'); ?>" type="number" min="0" step="1" id="frais_professionnels_conjoint" name="frais_professionnels_conjoint">
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>



                                    <div class="row" id="salary_spouse">
                                        <div class="col-md-3 label"><?php _e("Your spouse's net salary/income (monthly CHF) if applicable", 'multicredit'); ?></div>
                                        <div class="col-md-3"><input placeholder="<?php _e('Amount in CHF', 'multicredit'); ?>" id="revenus_conjoint" name="revenus_conjoint" type="number" min="1" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" data-bind="revenus_conjoint"></div>
                                        <div class="col-md-3">
                                            <select id="salaireX_conjoint" name="salaireX_conjoint" data-bind="salaireX_conjoint">
                                                <option value="" selected disabled hidden><?php _e('Number of annual salary (frequency)', 'multicredit'); ?></option>
                                                <option value="12">x 12</option>
                                                <option value="13">x 13</option>
                                                <option value="14">x 14</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 label"><?php _e('Note / Tell us about your project', 'multicredit'); ?></div>
                                        <div class="col-md-6"><textarea id="remarques" name="remarques" placeholder="<?php _e('Your project is important to us, describe it here in a few words if you wish.', 'multicredit'); ?>" data-bind="remarques"></textarea></div>
                                        <div class="col-md-3 form-field-valid"></div>
                                        <div class="col-md-3 form-field-invalid"><?php _e('Invalid field.', 'multicredit'); ?></div>
                                    </div>

                                    <?php /*
												 <div class="row">
			 										<div class="col-md-3 label"></div>
			 										<div class="col-md-3"><input class="switch" type="checkbox" value="oui" name="limite" id="limite"  data-bind="limite"><?php _e('Yes, I would like to know my credit limit','multicredit'); ?></div>
			 										<div class="col-md-3 form-field-invalid"></div>
			 										<div class="col-md-3 label"></div>
			 									</div>
												*/ ?>

                                </div>

                                <!-- Final Tab -->
                                <?php /*
								<div class="tab container-480">

									<div class="blocktitle title-center clearfix">
									 <h3><?php echo $titleform_s4 ?></h3>
								 </div>

								 <div class="blocksubtitle clearfix">
								 <h4><?php echo $titleform_s1 ?></h4>
							 </div>

									 <dl class="row">

										 <dt class="col-6"><?php _e('Wished amount','multicredit'); ?>: </dt>
										 <dd class="col-6">CHF&nbsp;<span class="summary-amount"></span></dd>
									    <dt class="col-6"><?php _e('Loan duration','multicredit'); ?>: </dt>
									    <dd class="col-6"><span class="summary-duration"></span>&nbsp;<?php _e('months','multicredit'); ?></dd>

									</dl>

								 <dl class="row">

										 <dt class="col-6"><?php _e('Gender','multicredit'); ?>: </dt>
										 <dd class="col-6" data-update="titre"></dd>

									    <dt class="col-6"><?php _e('Last name','multicredit'); ?>: </dt>
									    <dd class="col-6" data-update="nom"></dd>

									    <dt class="col-6"><?php _e('First name','multicredit'); ?>: </dt>
									    <dd class="col-6" data-update="prenom"></dd>

									    <dt class="col-6"><?php _e('Date of birth','multicredit'); ?>: </dt>
									    <dd class="col-6"><span data-update="naissance-dd"></span>.<span data-update="naissance-mm"></span>.<span data-update="naissance-yyyy"></span></dd>

											<dt class="col-6"><?php _e('Zip code / City','multicredit'); ?>: </dt>
											<dd class="col-6"><span data-update="cpa"></span> <span id="localiteupdate" data-update="localite"></span></dd>

											 <dt class="col-6"><?php _e('Mobile phone','multicredit'); ?>: </dt>
											 <dd class="col-6" data-update="telephone"></dd>

											 <dt class="col-6"><?php _e('Private E-Mail','multicredit'); ?>: </dt>
											 <dd class="col-6" data-update="email"></dd>

										</dl>

									<div class="blocksubtitle clearfix">
										<h4><?php echo $titleform_s2 ?></h4>
									</div>

	 								 <dl class="row">

	 										 <dt class="col-6"><?php _e('Type of employment','multicredit'); ?>: </dt>
	 										 <dd class="col-6" data-update="type"></dd>

											 <dt class="col-6"><?php _e('Current job position','multicredit'); ?>: </dt>
	 										 <dd class="col-6" data-update="profession"></dd>

											 <dt class="col-6"><?php _e('Monthly net income/salary (CHF)','multicredit'); ?>: </dt>
	 										 <dd class="col-6" data-update="revenus"></dd>

											 <dt class="col-6"><?php _e('Number of annual salary (frequency)','multicredit'); ?>: </dt>
	 										 <dd class="col-6" data-update="salaireX"></dd>

											 <dt class="col-6"><?php _e('Receiving above income since','multicredit'); ?>: </dt>
	 										 <dd class="col-6"><span data-update="salaire-quand-mois"></span> <span data-update="salaire-quand-annee"></span></dd>

	 										</dl>

											<dl class="row">

	 	 										 <dt class="col-6"><?php _e('Housing','multicredit'); ?>: </dt>
	 	 										 <dd class="col-6" data-update="loyer_type"></dd>

												 <dt class="col-6"><?php _e('Monthly housing payment (CHF)','multicredit'); ?>: </dt>
	 	 										 <dd class="col-6" data-update="loyer"></dd>

	 											 <dt class="col-6"><?php _e('Address since (living there)','multicredit'); ?>: </dt>
	 	 										 <dd class="col-6"><span data-update="loyer-quand-mois"></span> <span data-update="loyer-quand-annee"></span></dd>

	 											 <dt class="col-6"><?php _e('Prosecutions/bad debt (poursuites/Betreibungen)','multicredit'); ?>: </dt>
	 	 										 <dd class="col-6" data-update="poursuites"></dd>

	 	 										</dl>

												<div class="blocksubtitle clearfix">
												<h4><?php echo $titleform_s3 ?></h4>
											</div>

												<dl class="row">

		 	 										 <dt class="col-6"><?php _e('Nationality / Permit','multicredit'); ?>: </dt>
		 	 										 <dd class="col-6" data-update="type_de_permis"></dd>

													 <dt class="col-6"><?php _e('Ongoing credit or leasing','multicredit'); ?>: </dt>
		 	 										 <dd class="col-6" data-update="deja_credit_leasing"></dd>

		 											 <dt class="col-6"><?php _e('Dependent children','multicredit'); ?>: </dt>
		 	 									 	 <dd class="col-6" data-update="choix_enfants"></dd>

													 <dt class="col-6"><?php _e('Year of birth of children','multicredit'); ?>: </dt>
													<dd class="col-6"><span data-update="age_enfant_1"></span> / <span data-update="age_enfant_2"></span> / <span data-update="age_enfant_3"></span></dd>

													<dt class="col-6"><?php _e('Marital status','multicredit'); ?>: </dt>
													<dd class="col-6" data-update="etat_civil"></dd>

													<dt class="col-6"><?php _e('Type of job of your spouse','multicredit'); ?>: </dt>
													<dd class="col-6" data-update="type_conjoint"></dd>

													<dt class="col-6"><?php _e("Your spouse's net salary/income (monthly CHF) if applicable",'multicredit'); ?>: </dt>
													<dd class="col-6" data-update="revenus_conjoint"></dd>

													<dt class="col-6"><?php _e('Number of annual salary (frequency)','multicredit'); ?>: </dt>
													<dd class="col-6" data-update="salaireX_conjoint"></dd>

													<dt class="col-6"><?php _e('Additional information / tell us about your project','multicredit'); ?>: </dt>
													<dd class="col-6" data-update="remarques"></dd>

													<dt class="col-6"><?php _e('Credit limit','multicredit'); ?>: </dt>
													<dd class="col-6" data-update="limite" id="limitfeedback"></dd>

		 	 										</dl>


								</div>
								*/ ?>

                                <div id="error-message-form"><?php _e('You have not completed all fields, please complete all the mandatory fields above.', 'multicredit'); ?></div>

                                <div class="formnav d-flex justify-content-between">
                                    <button type="button" class="btn floatleft" id="prevBtn" onclick="nextPrev(-1)"><?php _e('Previous', 'multicredit') ?></button>
                                    <button type="button" class="btn floatright" id="nextBtn" onclick="nextPrev(1)"><?php _e('Next', 'multicredit') ?></button>
                                </div>

                            </form>
                            <!-- /.MultiStep Form -->

                            <div id="successmessage" class="d-none">
                                <h4><?php _e('Request sent successfully', 'multicredit'); ?></h4>
                            </div>

                            <div id="errormessage" class="d-none">
                                <h4><?php _e('Technical problem', 'multicredit'); ?></h4>
                            </div>

                        </div>
                    </section>

                </main> <!-- /content -->


                <?php // Add Read More block
                echo get_template_part('template-parts/read-more-block');
                ?>

                <div class="container pb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blocktitle title-center clearfix">
                                <h2><?php _e('Opinion of our customers', 'multicredit'); ?></h2>
                            </div>

                            <!-- ProvenExpert Bewertungssiegel -->
                            <div id="pewl"></div>
                            <script type="text/javascript" src="https://www.provenexpert.com/widget/landing_cashflex-multicredit-sarl.js?feedback=1&avatar=0&competence=0&style=white" async></script>

                            <!-- ProvenExpert Bewertungssiegel Ende -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>