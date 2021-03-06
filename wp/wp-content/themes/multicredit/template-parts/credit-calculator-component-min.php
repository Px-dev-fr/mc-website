<!-- Main Calculator component -->
<?php
if (isset($_POST['amortization_table']) and $_POST['amortization_table'] == "submitted") {
    include(__DIR__ . "/table.php");
}
$classes = get_body_class();
?>
<div class='demande-credit-component'>
    <form class="container" id="demandeCredit" method="get" action="<?php echo get_home_url() ?>/<?php _e('credit-application', 'multicredit') ?>/">

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

        $tauxListe = ["49", "79", "99"];
        ?>

        <div class="row align-items-start" style="display: flex;flex-wrap: wrap;justify-content: center;">
            <div class="col-lg-6">
                <!-- Montant -->
                <p><?php _e('Amount from 3\'000 to 400\'000 CHF', 'multicredit'); ?></p>
                <div class="slidecontainer">
                    <input id="montant" name="montant" type="number" value="<?php echo $MontantValue; ?>" min="3000" max="400000" step="1000" oninput="montantSlider.value=montant.value" />
                    <input id="montantSlider" type="range" min="3000" max="400000" value="<?php echo $MontantValue; ?>" step="1000" class="slider" oninput="montant.value=montantSlider.value" />
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Durée -->
                <p><?php _e('Duration from 12 to 84 months', 'multicredit'); ?></p>
                <div class="slidecontainer">
                    <input id="duree" name="duree" type="number" min="12" max="84" value="<?php echo $DureeValue; ?>" step="1" oninput="dureeSlider.value=duree.value" />
                    <input id="dureeSlider" type="range" min="12" max="84" value="<?php echo $DureeValue; ?>" step="1" class="slider" oninput="duree.value=dureeSlider.value" />
                    <ul class="range-labels" id="slider-label">
                        <li><span>12</span></li>
                        <li><span>24</span></li>
                        <li><span>36</span></li>
                        <li><span>48</span></li>
                        <li><span>60</span></li>
                        <li><span>72</span></li>
                        <li><span>84</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

    <div>

        <!-- Nav tabs -->
        <ul id="tabs-taux" class="nav nav-tabs row align-items-center d-flex flex-row justify-content-center col-12 mr-0 pr-0" role="tablist">
            <li class="nav-item col-4 gtm-trigger-taux-49" role="presentation">
                <a class="nav-link gtm-trigger-taux-49" href="#taux49" aria-controls="taux49" role="tab" data-toggle="tab">
                    <div class="percent lg-h6 mb-1 gtm-trigger-taux-49">4.9%</div>
                    <div class="montant-monthly lg-h3 h5 font-weight-bold mb-1 gtm-trigger-taux-49" id="mensualite49">277 CHF</div>
                    <div class="text-monthly font-italic lg-h6 mb-0 gtm-trigger-taux-49"><?php _e('monthly', 'multicredit'); ?></div>
                </a>
            </li>
            <li class="nav-item col-4 active gtm-trigger-taux-79" role="presentation">
                <a class="nav-link gtm-trigger-taux-79" href="#taux79" aria-controls="taux49" role="tab" data-toggle="tab">
                    <div class="percent lg-h6 mb-1 gtm-trigger-taux-79">7.9%</div>
                    <div class="montant-monthly lg-h3 h5 font-weight-bold mb-1 gtm-trigger-taux-79" id="mensualite79">281 CHF</div>
                    <div class="text-monthly font-italic lg-h6 mb-0 gtm-trigger-taux-79"><?php _e('monthly', 'multicredit'); ?></div>
                </a>
            </li>
            <li class="nav-item col-4 gtm-trigger-taux-99" role="presentation">
                <a class="nav-link gtm-trigger-taux-99" href="#taux99" aria-controls="taux49" role="tab" data-toggle="tab">
                    <div class="percent lg-h6 mb-1 gtm-trigger-taux-99">9.9%</div>
                    <div class="montant-monthly lg-h3 h5 font-weight-bold mb-1 gtm-trigger-taux-99" id="mensualite99">284 CHF</div>
                    <div class="text-monthly font-italic lg-h6 mb-0 gtm-trigger-taux-99"><?php _e('monthly', 'multicredit'); ?></div>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content d-lg-flex flex-row justify-content-center align-items-center">

            <? foreach ($tauxListe as $taux) : ?>
                <div role="tabpanel" class="tab-pane col-12 <?= $taux == '79' ? 'active' : '' ?>" id="taux<?= $taux ?>">
                    <div class="mensualiteUnique" id="<?= $taux ?>">
                        <div class="d-flex justify-content-center align-items-start flex-column flex-lg-row mb-lg-0 mb-2">
                            <!-- Infos -->
                            <div class="col-12 col-lg-4 d-flex justify-content-center">
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h5>
                                        <?php _e('Benefits:', 'multicredit'); ?>
                                    </h5>
                                    <div class=" px-0 mb-4">
                                        <ul>
                                            <li>
                                                <?php _e('Tax-deductible interest', 'multicredit'); ?>
                                            </li>
                                            <li>
                                                <?php _e('Possibility of early repayment', 'multicredit'); ?>
                                            </li>
                                            <li>
                                                <?php _e('Death insurance covering the debt', 'multicredit'); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 d-flex justify-content-center">
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h5>
                                        <?php _e('Eligibility:', 'multicredit'); ?>
                                    </h5>
                                    <div class=" px-0 mb-4">
                                        <ul>
                                            <li>
                                                <?php _e('From 20 to 69 years old', 'multicredit'); ?>
                                            </li>
                                            <? if ($taux == "49") : ?>
                                                <li>
                                                    <?php _e('Working in Switzerland', 'multicredit'); ?>
                                                </li>
                                                <li>
                                                    <?php _e('Being a property owner', 'multicredit'); ?>
                                                </li>
                                            <? else : ?>
                                                <li>
                                                    <?php _e('All Swiss citizens, holders of permit B, C, G or legitimation card are eligible', 'multicredit'); ?>
                                                </li>
                                            <? endif ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-lg-0 d-lg-flex justify-content-lg-center" id="ppi">
                                <!-- PPI -->
                                <div class="d-flex justify-content-start align-items-start mb-4 flex-column">
                                    <h5 class="mr-4"><?php _e('Payment protection insurance:', 'multicredit'); ?></h5>
                                    <div class="px-0">
                                        <ul>
                                            <li>
                                                <?php _e('Inability to work', 'multicredit'); ?>
                                            </li>
                                            <li>
                                                <?php _e('Involuntary unemployment', 'multicredit'); ?>
                                            </li>
                                            <li>
                                                <?php _e('Earning disability', 'multicredit'); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="d-flex justify-content-start align-items-center mr-4">
                                            <input type="checkbox" class="ppiYes" id="ppiYes" name="ppi" checked>
                                            <label class="m-0 p-0" for="ppiYes">
                                                <?php _e('Yes', 'multicredit') ?>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mr-4">
                                            <input type="checkbox" class="ppiNo" id="ppiNo" name="ppi">
                                            <label class="m-0 p-0" for="ppiNo">
                                                <?php _e('No', 'multicredit') ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tableau d'amortissement -->
                        <div class="mb-2 mb-lg-4 col px-lg-0 d-flex justify-content-center">
                            <div class="" id="tableauAmortissement">
                                <form method="POST" action="">
                                    <input id="amortizationTableButton" type="submit" value="<?php _e('Create an amortization table', 'multicredit') ?>">
                                    <input type="hidden" name="amortization_table" value="submitted">
                                    <? if ($taux == "49") : ?>
                                        <input type="hidden" name="taux" value="4.9">
                                    <? elseif ($taux == "79") : ?>
                                        <input type="hidden" name="taux" value="7.9">
                                    <? elseif ($taux == "99") : ?>
                                        <input type="hidden" name="taux" value="9.9">
                                    <? endif ?>
                                    <input type="hidden" id="montant<?= $taux ?>" name="montant" value="3000">
                                    <input type="hidden" id="duree<?= $taux ?>" name="duree" value="12">
                                </form>
                            </div>
                        </div>

                        <!-- SMALL SCREEN -->
                        <div class="d-lg-none d-flex flex-column justify-content-center align-items-center">
                            <!-- <? if (!in_array('page-template-template-form', $classes)) : ?> -->
                            <!-- Bouton Demande -->
                            <div class="col d-flex justify-content-center px-0 mb-2">
                                <div class="col px-0">
                                    <input id="demande-credit-header" type="submit" form="demandeCredit" class="btn mb-0" value="<?php _e('Credit application', 'multicredit'); ?>" />
                                </div>
                            </div>
                            <!-- <? endif ?> -->
                            <!-- Y compris -->
                            <div class="col d-flex justify-content-center px-0 mb-2">
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="" style="font-size: 0.9em;"><strong><?php _e('Monthly payments/refunds including:', 'multicredit'); ?></strong></div>
                                    <div class="d-flex justify-content-center align-items-center flex-column">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Amortization', 'multicredit'); ?>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Interests', 'multicredit'); ?>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Death insurance', 'multicredit'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sécurité des données -->
                            <div class="col d-flex justify-content-center align-items-center securite px-0 mb-2">
                                <img src="https://www.multicredit.ch/wp/wp-content/uploads/shield-2.svg" height="32px" width="32px">
                                <!-- <img src="https://www.multicredit.ch/wp/wp-content/uploads/2205203_key_lock_pad_security_icon.png" height="32px" width="32px"> -->
                                <div style="margin: 0px; font-size: 0.8em;margin-left: 10px">
                                    <?php _e('Your data is transmitted to us securely and is hosted in Switzerland.', 'multicredit'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- LARGE SCREEN -->
                        <div class="d-none d-lg-flex justify-content-between align-items-center mb-4">
                            <!-- Sécurité des données -->
                            <div class="col-3 d-flex justify-content-center align-items-center securite px-2">
                                <img src="https://www.multicredit.ch/wp/wp-content/uploads/shield-2.svg" height="32px" width="32px">
                                <!-- <img src="https://www.multicredit.ch/wp/wp-content/uploads/2205203_key_lock_pad_security_icon.png" height="32px" width="32px"> -->
                                <div style="margin: 0px; font-size: 0.8em;margin-left: 10px">
                                    <?php _e('Your data is transmitted to us securely and is hosted in Switzerland.', 'multicredit'); ?>
                                </div>
                            </div>
                            <!-- Y compris -->
                            <div class="col-5 d-flex justify-content-center px-2">
                                <div class="d-flex justify-content-end align-items-end flex-column">
                                    <div class="" style="font-size: 0.9em;"><strong><?php _e('Monthly payments/refunds including:', 'multicredit'); ?></strong></div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Amortization', 'multicredit'); ?>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Interests', 'multicredit'); ?>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="m-2" src="/wp/wp-content/themes/multicredit/images/mc_checklist_icon.svg" width="15px" alt="Checklist Multicredit">
                                            <?php _e('Death insurance', 'multicredit'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? if (!in_array('page-template-template-form', $classes)) : ?>
                                <!-- Bouton Demande -->
                                <div class="d-flex col-4 justify-content-center px-2">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <input id="demande-credit-simulator" type="submit" form="demandeCredit" class="btn mb-0" value="<?php _e('Credit application', 'multicredit'); ?>" />
                                        <div class="free-application-fees-text">
                                            <?php _e('No application fees', 'multicredit'); ?>
                                        </div>
                                    </div>
                                </div>
                            <? endif ?>
                        </div>
                        <!-- Mentions légales -->
                        <div class="row mentions">
                            <div class="col-lg-12">
                                <div style="font-size:0.6em;">
                                    <?php _e('As a consumer credit consulting company, we are subject to strict privacy and data protection guidelines <a href=" https://www.fedlex.admin.ch/eli/cc/51/117_121_129/en ">(hosted in Switzerland)</a>. For your security as well as ours, we offer you an initial telephone interview from Monday to Friday, from 08:30 am to 6:30 pm. We would also like to point out that our activities are subject to compliance with the Consumer Credit Act <a href="https://www.fedlex.admin.ch/eli/cc/2002/593/en" target="_blank"> (LCC)</a>', 'multicredit') ?></a>
                                    <!--Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt.-->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div style="font-size:0.6em;">
                                    <?php _e('Calculation example: Financing CHF 10,000. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to CHF 520. The final interest rate varies, depending on the situation of each client, from 4.5% to 9.9%. There are no application or additional costs: you only pay the interest on the loan.', 'multicredit'); ?>
                                    <!--Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt.-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach ?>
        </div>

    </div>
</div>