<?php
$domPath = realpath(__DIR__.'/../dompdf/autoload.inc.php');
require_once $domPath;
use Dompdf\Dompdf;

    /*if(!isset($_POST) || empty($_POST)) {
        die('{"success": false, "error": "401", "message": "Not allowed!"}');
    }*/

    $post = $_POST;

    /*session_start();
    $leasing = isset($_SESSION['leasing']) ? $_SESSION['leasing'] : [];
    $_SESSION['leasing'] = array_merge($leasing, $post);
    $leasing = $_SESSION['leasing'];*/
    if(isset($_POST)){

        $montant = $_POST['montant'];
        $duree = $_POST['duree'];
        $taux = $_POST['taux'];
        $table = amortissement($montant, $duree, $taux/100);

        $sommeAnnuite=0;
        $sommeInterets=0;
        $sommeAmortissement=0;

        foreach($table as $key=>$colonne){

            switch($key){

                case 1:
                    foreach ($colonne as $valeur){
                        $sommeAnnuite+=$valeur;
                    }
                    break;
                case 2:
                    foreach ($colonne as $valeur){
                        $sommeInterets+=$valeur;
                    }
                    break;
                case 3:
                    foreach ($colonne as $valeur){
                        $sommeAmortissement+=$valeur;
                    }
                    break;

            }
        }

        $sommeAnnuite=round($sommeAnnuite,2 );
        $sommeInterets=round($sommeInterets, 2);
        $sommeAmortissement=round($sommeAmortissement, 2);

        // var_dump($montant);
        // var_dump($duree);
        // var_dump($taux);
        $langTmp = get_locale();
        switch (get_locale()){
            case 'fr_FR':
                $langPrev = '_fr';

                $col1Text = 'Rang';
                $col2Text = 'Annuité';
                $col3Text = 'Intérêts';
                $col4Text = 'Amortissement';
                $col5Text = 'Solde';
                $total = 'Total';
                $montantNom = 'Montant:';
                $dureeNom = 'Durée:';
                $tauxNom = 'Taux:';
                $moisNom = ' Mois';
                break;
            case 'de_DE':
                $langPrev = '_de';
                $col1Text = 'Monat';
                $col2Text = 'Monatliche Rate';
                $col3Text = 'Zinsanteil';
                $col4Text = 'Amortisation';
                $col5Text = 'Restwert';
                $total ='Gesamt';
                $montantNom = 'Betrag:';
                $dureeNom = 'Dauer:';
                $tauxNom = 'Zinssatz:';
                $moisNom = ' Monaten';
                break;
            case 'it_IT':
                $langPrev = '_it';
                $col1Text = 'Mese';
                $col2Text = 'Rendita';
                $col3Text = 'Tasso di interesse';
                $col4Text = 'Amortamenti';
                $col5Text = 'Importo totale';
                $total = 'Totale';
                $montantNom = 'Importo:';
                $dureeNom = 'Durata:';
                $tauxNom = 'Tasso:';
                $moisNom = ' Mesi';
                break;
            default:
                //$langTmp == 'en_EN'
                $langPrev = '_en';
                $col1Text = 'Month';
                $col2Text = 'Annuity';
                $col3Text = 'Interest';
                $col4Text = 'Capital';
                $col5Text = 'Pay';
                $total = 'Total:';
                $montantNom = 'Amount:';
                $dureeNom = 'Duration:';
                $tauxNom = 'Rate:';
                $moisNom = ' Months';
                break;
        }

        $test = "https://www.multicredit.ch/wp/wp-content/uploads/multicredit-logo".$langPrev.".svg'";
        $pdf_html = "";
        $pdf_html .= "<table style='width: 100%; table-layout: fixed;' cellspacing='0'>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<th colspan='5' style='text-align: left; border-bottom: 1px solid #000; padding: 0 0 20px;'>";
        //$pdf_html .= "<img style='max-width: 100%; display: inline-block;' src='" . esc_url( get_template_directory_uri() ) . "/images/amortization_header" . $langPrev . ".jpg' alt='' /></th>";
        $pdf_html .= "<img style='max-width: 100%; display: inline-block;' src='https://www.multicredit.ch/wp/wp-content/uploads/multicredit-logo".$langPrev.".svg' alt='' /></th>";
        $pdf_html .= "</tr>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #F26200; font-weight: 700;' colspan='2'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$montantNom."</h5> " . $montant . " CHF</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #F26200; font-weight: 700;' colspan='2'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$dureeNom."</h5> " . $duree . $moisNom."</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #F26200; font-weight: 700;'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$tauxNom."</h5> " . $taux . "%</td>";
        $pdf_html .= "</tr>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col1Text. "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col2Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000;'>" . $col3Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col4Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col5Text . "</td>";
        $pdf_html .= "</tr>";
        for($i = 0; $i < count($table[0]); $i++) {
            if($i == 20 || $i == 45 || $i == 70 || $i == 95){
                $pdf_html .= "<tr>";
                $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col1Text. "</td>";
                $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col2Text . "</td>";
                $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000;'>" . $col3Text . "</td>";
                $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col4Text . "</td>";
                $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col5Text . "</td>";
                $pdf_html .= "</tr>";
            }
            $pdf_html .= '<tr>';
            $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.$table[0][$i].'</td>';
            $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.number_format($table[1][$i], 2).'</td>';
            $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.number_format($table[2][$i], 2).'</td>';
            $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.number_format($table[3][$i], 2).'</td>';
            $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.number_format($table[4][$i], 2).'</td>';
            $pdf_html .= '</tr>';
        }
        $pdf_html .= "<tr>";
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.$total.'</td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.$sommeAnnuite.'</td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.$sommeInterets.'</td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000">'.$sommeAmortissement.'</td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000"></td>';

        $pdf_html .= "</tr>";
        $pdf_html .= "</table>";
        //$pdf_html .= "<img style='max-width: 100%;' src='" . esc_url( get_template_directory_uri() ) . "/images/amortization_footer" . $langPrev . ".jpg' alt='' />";

        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdf_html);
        $dompdf->set_option('isRemoteEnabled', TRUE);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        ob_end_clean();
        // Output the generated PDF => Browser
        $dompdf->stream();
    }



function amortissement($montant, $duree, $taux){
    // Talcul du taux équivalent (mensuel)
    $taux_e=pow(1+$taux, 1/12) -1;
    $rang=Array();	  // i= 0, 1, 2, ...
    $annuite=Array(); // mensualité
    $interet=Array(); // intérêt
    $capital=Array(); // amortissement
    $solde=Array();	  // Reste à payer

    // Calcul de la 1ère ligne
    $rang[0]=1;
    $annuite[0]=$montant*(($taux_e) / (1- (pow((1+($taux_e)), - $duree))));
    $interet[0]=$montant*$taux_e;
    $capital[0]=$annuite[0]-$interet[0];
    $solde[0]=$montant-$capital[0];

    for ($i=1; $i<$duree;$i++)	{
        $rang[$i]=$i+1;
        $annuite[$i]=$annuite[0];
        $interet[$i]=$solde[$i-1]*$taux_e;
        $capital[$i]=$annuite[$i]-$interet[$i];
        $solde[$i]=$solde[$i-1]-$capital[$i];
    }
    return Array($rang, $annuite, $interet, $capital, $solde);
}
?>
