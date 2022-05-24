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
        switch ($langTmp){
            case 'fr_FR':
                $ta = "Tableau d'amortissement";
                $langPrev = '_fr';
                $col1Text = 'Rang';
                $col2Text = 'Mensualité';
                $col3Text = 'Intérêts';
                $col4Text = 'Amortissement';
                $col5Text = 'Solde';
                $total = 'Total';
                $montantNom = 'Montant:';
                $dureeNom = 'Durée:';
                $tauxNom = 'Taux:';
                $moisNom = ' Mois';

                $payeAnticipation ='Payez par anticipation! En cas de remboursement anticipé, vous aurez droit à la remise des intérêts et à une réduction adaptée des coûts liées à la durée du crédit non utilisé.';

                $infos="Le tableau d'amortissement ci-dessus reste purement indicatif et peut ne pas correspondre à un contrat final. Ce tableau est calculé avec un taux d'intérêt de ".$taux."% , sans couverture d'assurance.";
                $articleLoi = "Selon la loi, l'octroi d'un crédit à la consommation est interdit s'il entraîne un surendettement (art. 3 LAU). Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt. Cashflex MultiCredit Sàrl est enregistrée comme service commercial du canton de Fribourg depuis avril 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl est membre de la Fédération des Entreprises Romandes.";


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
                $payeAnticipation ='Zahlen Sie im Voraus! Bei vorzeitiger Rückzahlung haben Sie Anspruch auf den Erlass der Zinsen und eine angemessene Reduzierung der Kosten für die Dauer des nicht genutzten Kredits.';
                $infos="Der obige Tilgungsplan dient lediglich der Veranschaulichung und entspricht möglicherweise nicht dem endgültigen Vertrag. Die Tabelle wurde mit einem Zinssatz von $taux% , ohne Versicherungsschutz, berechnet.";
                $articleLoi = "Gemäss Gesetz ist die Gewährung eines Konsumkredits verboten, wenn sie zu einer Überschuldung führt (Art. 3 UWG). Rechenbeispiel: Finanzierung von 10 000 CHF. Ein effektiver Jahreszins von 4,5% bis 9,9% führt zu Gesamtkosten für 12 Monate von 240 bis 520 CHF. Der Endzinssatz variiert je nach der Situation des einzelnen Kunden zwischen 4,5% und 9,9%. Es gibt keine Bearbeitungsgebühren oder zusätzliche Kosten: Sie zahlen nur die Zinsen für das Darlehen. Cashflex MultiCredit Sàrl ist seit April 2007 als kommerzielle Dienstleistung des Kantons Freiburg registriert.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl ist Mitglied der Fédération des Entreprises Romandes.";

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
                $payeAnticipation = 'Paga in anticipo! In caso di rimborso anticipato, avrete diritto a un rimborso degli interessi e a una riduzione adeguata dei costi relativi alla durata del credito non utilizzato';
                $infos="La tabella di ammortamento sopra riportata è puramente indicativa e potrebbe non corrispondere a un contratto definitivo. Questa tabella è calcolata con un tasso di interesse del $taux%, senza copertura assicurativa";
                $articleLoi ="Secondo la legge, la concessione di un credito al consumo è vietata se porta al sovraindebitamento (art. 3 LAU). Esempio di calcolo: finanziamento di 10.000 franchi. Un tasso di interesse annuo effettivo compreso tra il 4,5% e il 9,9% comporta costi totali per 12 mesi compresi tra 240 e 520 franchi svizzeri. Il tasso di interesse finale varia tra il 4,5% e il 9,9%, a seconda della situazione del cliente. Non ci sono spese di richiesta o costi aggiuntivi: si pagano solo gli interessi sul prestito. Cashflex MultiCredit Sàrl è registrata come servizio commerciale nel Cantone di Friburgo dall'aprile 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl è membro della Fédération des Entreprises Romandes";
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
                $payeAnticipation = 'Pay it forward! In case of early repayment, you will be entitled to interest rebate and an adapted reduction of the costs related to the duration of the unused credit.';
                $infos="The above amortization table is purely indicative and may not correspond to a final contract. This table is calculated with an interest rate of $taux%, without insurance coverage";
                $articleLoi ="According to the law, the granting of a consumer credit is prohibited if it leads to overindebtedness (art. 3 LAU). Calculation example: Financing of 10 000 CHF. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to 520. The final interest rate varies from 4.5% to 9.9% depending on the client's situation. There are no application fees or additional charges: you only pay the interest on the loan. Cashflex MultiCredit Sàrl is registered as a commercial service in the canton of Fribourg since April 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl is a member of the Fédération des Entreprises Romandes";
                break;
        }


        $path = realpath(__DIR__."/../images");
        $pdf_html = "<body>
                        <header>
                        <a href='https://www.multicredit.ch' target='_blank' style='position: absolute; top 40px; left 20px'><img  src='" . esc_url( get_template_directory_uri() ) . "/images/Logo-Multicredit-et-slogans".$langPrev.".png' width='118' height='109' alt='' /></a>
                        </header>
                        <footer>
                            <a href='https://www.multicredit.ch' target='_blank' style='position: absolute; bottom:  150px; left 20px'><img src='" . esc_url( get_template_directory_uri() ) . "/images/Multicredit-Pastille-DEPUIS-et-adresse".$langPrev.".png' width='200' height='120' alt='' /></a>
                            <a href='https://www.multicredit.ch' target='_blank' style='position: absolute; bottom:  80px; right:  20px'><img src='" . esc_url( get_template_directory_uri() ) . "/images/fleche-loupe-multicredit.png' width='100' height='30' alt='' /></a><br>
                        </footer>";
        $pdf_html .= "<div style='width:100%; text-align:center'>$ta</div>";
        $pdf_html .= "<table style='width: 100%; table-layout: fixed;'  cellspacing='0'>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<th colspan='5' style='text-align: left; border-bottom: 1px solid #000; padding: 0 0 20px;'>";
        //$pdf_html .= "<img style='max-width: 100%; display: inline-block;' src='" . esc_url( get_template_directory_uri() ) . "/images/amortization_header" . $langPrev . ".jpg' alt='' /></th>";
        //$pdf_html .= "<a href='https://www.multicredit.ch' target='_blank'><img style='max-width: 100%; display: inline-block;' src='https://www.multicredit.ch/wp/wp-content/uploads/multicredit-logo".$langPrev.".svg' alt='' /></a></th>";
        $pdf_html .= "</tr>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #df003c; font-weight: 700;' colspan='2'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$montantNom."</h5> " . $montant . " CHF</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #df003c; font-weight: 700;' colspan='2'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$dureeNom."</h5> " . $duree . $moisNom."</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000; color: #df003c; font-weight: 700;'><h5 style='margin: 0; color: #181817; font-weight: 400;'>".$tauxNom."</h5> " . $taux . "%</td>";
        $pdf_html .= "</tr>";
        $pdf_html .= "<tr>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col1Text. "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col2Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000;'>" . $col3Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col4Text . "</td>";
        $pdf_html .= "<td style='padding: 10px; border-bottom: 1px solid #000'>" . $col5Text . "</td>";
        $pdf_html .= "</tr>";
        for($i = 0; $i < count($table[0]); $i++) {
            if($i == 17 || $i == 36 || $i == 55 || $i == 74){
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
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000;text-decoration: underline;"><strong>'.$total.'</strong></td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000;text-decoration: underline;"><strong>'.$sommeAnnuite.'</strong></td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000;text-decoration: underline;"><strong>'.$sommeInterets.'</strong></td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000;text-decoration: underline;"><strong>'.$sommeAmortissement.'</strong></td>';
        $pdf_html .= '<td style="padding: 10px; border-bottom: 1px solid #000"></td>';

        $pdf_html .= "</tr>";
        $pdf_html .= "</table>";
        $pdf_html .="<p>".$payeAnticipation."</p>";
        $pdf_html .="<p class='small'>$infos</p>";
        $pdf_html .= "<p class='small'>$articleLoi</p>";

        
        
        

        $pdf_html.="</body>";
        $pdf_html.="<style>
                    @page  {
                        margin-top: 150px;
                        margin-bottom: 150px;
                        margin-left: 100px;
                        margin-right: 100px;
                    }
                    header{
                        position: fixed;
                        left: 0cm;
                        top: -130px;
                        right: 0cm;
                    }
                    footer {
                        position: fixed;
                        width: 100%; 
                        bottom: -150px; 
                        left: 0cm; 
                        right: 0cm;
                    }
                    .small{
                        font-size: xx-small ; 
                    }
                   </style>
                    ";
        //$pdf_html .= "<img style='max-width: 100%;' src='" . esc_url( get_template_directory_uri() ) . "/images/amortization_footer" . $langPrev . ".jpg' alt='' />";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdf_html);
        $dompdf->set_option('isHtml5ParserEnabled',true);
        $dompdf->set_option('isRemoteEnabled',true);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        ob_end_clean();
        // Output the generated PDF => Browser
        $dompdf->stream();
    }
       // echo "<script>console.log(".$pdf_html.")</script>";



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
