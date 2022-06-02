<?php

require_once( realpath(__DIR__.'/../pdfpdfi/fpdf/fpdf.php'));
require_once( realpath(__DIR__.'/../pdfpdfi/fpdi/fpdi.php'));



    /*if(!isset($_POST) || empty($_POST)) {
        die('{"success": false, "error": "401", "message": "Not allowed!"}');
    }*/

    $post = $_POST;
    $pdf  = new FPDI();
    $pdf->AddFont("Open Sans","","OpenSans-Regular.php");

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
                $col1Text = 'Mois';
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
                $deduction = 'N\'oubliez pas les que les interêts du crédit sont déducitbles des impôts';
                $infos="Le tableau d'amortissement ci-dessus reste purement indicatif et peut ne pas correspondre à un contrat final. Ce tableau est calculé avec un taux d'intérêt de ".$taux."% , sans couverture d'assurance.";
                $articleLoi = "Selon la loi, l'octroi d'un crédit à la consommation est interdit s'il entraîne un surendettement (art. 3 LAU). Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt. Cashflex MultiCredit Sàrl est enregistrée comme service commercial du canton de Fribourg depuis avril 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl est membre de la Fédération des Entreprises Romandes.";


                break;
            case 'de_DE':
                $ta = "Abschreibungstabelle";
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
                $deduction = 'Denken Sie daran, dass die Zinsen von der Steuer absetzbar sind';


                break;
            case 'it_IT':
                $ta ="Tabella di ammortamento";
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
                $deduction ="Non dimenticate che gli interessi sono deducibili dalle tasse.";
                break;
            default:
                //$langTmp == 'en_EN'
                $ta = "Amortization table";
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
                $deduction = "Don't forget that interest is tax deductible";
                break;
        }
        $months = Array();
        $interets = Array();
        $amortissement = Array();

        $counter = 1;
        $path = realpath(__DIR__."/../base-pdf");
        $template = "$path/base$langPrev.pdf";

        $pdf->SetFont('Open Sans');
        $pdf->SetMargins(15,20,15);
        $pdf->SetAutoPageBreak(false);
        $pdf->addPage("P");
        $thirdWidth = (($pdf->GetPageWidth()-30) /3);
        $fifthWidth = (($pdf->GetPageWidth()-30) / 5 );


        $pdf->setXY(0,40);
        $pdf->SetFont('Open Sans',"",18);
        $pdf->SetMargins(0,0,0);
        $pdf->setX(0);
        $pdf->Cell(0,0,utf8_decode(strtoupper($ta)),0,1,"C");
        $pdf->SetMargins(15,20,15);
        $pdf->setY($pdf->getY()+20);
        $pdf->SetFont('Open Sans',"",12);

        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/montant.png",$pdf->getX(),$pdf->getY(),5,5,"PNG");
        $pdf->setx($pdf->getX()+6);
        $pdf->Cell($thirdWidth,5, utf8_decode($montantNom." ".$montant),0,0,"L");

        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/duree.png",$pdf->getX(),$pdf->getY(),5,5,"PNG");
        $pdf->setx($pdf->getX()+6);
        $pdf->Cell($thirdWidth,5, utf8_decode($dureeNom." " . $duree . $moisNom),0,0,"L");

        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/taux.png",$pdf->getX(),$pdf->getY(),5,5,"PNG");
        $pdf->setx($pdf->getX()+6);
        $pdf->Cell($thirdWidth,5, utf8_decode($tauxNom." " . $taux." %"),0,0,"L");

        $pdf->setY($pdf->getY()+10);
        $pdf->Cell($fifthWidth ,10, utf8_decode($col1Text),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode($col2Text),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode($col3Text),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode($col4Text),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode($col5Text),1,1,"C");

        $pdf->SetFont('Helvetica',"",12);
        $headerPostion =$pdf->getY() - 10;

        $pdf->setFillColor(235,235,235);
        $time = strtotime("last day of this month",strtotime("next month"));


        $dateTxt = date("d.m.Y",$time);
        for($i = 0; $i < count($table[0]); $i++) {
            $months[] = (String)$i+1;
            if($i == 15 ||$i == 35 || $i == 55 || $i == 75 ){
                $pageCount = $pdf->setSourceFile($template);
                $tplIdx = $pdf->importPage($pageCount, '/MediaBox');
                $pdf->useTemplate($tplIdx);
                 //Ajouts hyper liens:
                $pdf->Link(10,10,50,50,"https://www.multicredit.ch");
                $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-10,40,15,"https://www.multicredit.ch");


                if($i == 15){
                    $template = "$path/base_light$langPrev.pdf";
                }
                $pdf->addPage();


                $pdf->setY($headerPostion-25);
                $pdf->Cell($fifthWidth ,10, utf8_decode($col1Text),1,0,"C");
                $pdf->Cell($fifthWidth,10, utf8_decode($col2Text),1,0,"C");
                $pdf->Cell($fifthWidth,10, utf8_decode($col3Text),1,0,"C");
                $pdf->Cell($fifthWidth,10, utf8_decode($col4Text),1,0,"C");
                $pdf->Cell($fifthWidth,10, utf8_decode($col5Text),1,1,"C");

            }
            $pdf->Cell($fifthWidth/4 ,10, utf8_decode($table[0][$i]),1,0,"C",$i%2);
            $pdf->Cell(3*($fifthWidth/4) ,10, utf8_decode($dateTxt),1,0,"C",$i%2);
            $pdf->Cell($fifthWidth,10, utf8_decode(number_format($table[1][$i],2)),1,0,"C",$i%2);
            $pdf->Cell($fifthWidth,10, utf8_decode(number_format($table[2][$i],2)),1,0,"C",$i%2);
            $pdf->Cell($fifthWidth,10, utf8_decode(number_format($table[3][$i],2)),1,0,"C",$i%2);
            $pdf->Cell($fifthWidth,10, utf8_decode(number_format($table[4][$i],2)),1,1,"C",$i%2);

            $amortissement[] = $table[3][$i];
            $interets[] = $table[2][$i];

            $time = strtotime("last day of this month",strtotime("+2 days",$time));
            $dateTxt = date("d.m.Y",$time);

        }
        $pdf->SetFont('Helvetica',"BIU");
        $pdf->Cell($fifthWidth ,10, utf8_decode($total),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeAnnuite,2)),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeInterets,2)),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeAmortissement,2)),1,1,"C");
        $pdf->SetFont('Helvetica');

        $pageCount = $pdf->setSourceFile("$path/base_light$langPrev.pdf");
        $tplIdx = $pdf->importPage($pageCount, '/MediaBox');
        $pdf->useTemplate($tplIdx);

        $url = "{
          type: 'bar',
          data: {
            labels: [" . implode(",", $months) . "],
            datasets: [
              {
                label: '$col3Text',       
                backgroundColor: '#df003c',
                data: [" . implode(",", $interets) . "],
              },
              {
                label: '$col4Text',        
                backgroundColor: '#0033A0',
                data: [" . implode(",", $amortissement) . "],
              },
            ],
          },
          options: {
            
            scales: {
              xAxes: [
                {
                  stacked: true,
                   scaleLabel: {
                    display: true,
                    labelString: '$col1Text',
                  },
                },
                
              ],
              yAxes: [
                {
                  stacked: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'CHF',
                  },
                },
              ],
            },
          },
        }";
        newElement($pdf,$langPrev,110);
        $test1 = "https://quickchart.io/chart?c=".urlencode($url);
        $pdf->Image( "https://quickchart.io/chart?c=".urlencode($url),($pdf->GetPageWidth() / 2) - 80,null,160,95,'PNG');

        newElement($pdf,$langPrev);
        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/2020/03/favicon.png",null,null,5,5,"PNG");
        $pdf->setXY($pdf->getX()+6,$pdf->getY()-5);
        $pdf->MultiCell(0,5, utf8_decode( $payeAnticipation),0,"J");

        newElement($pdf,$langPrev);
        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/2020/03/favicon.png",null,null,5,5,"PNG");
        $pdf->setXY($pdf->getX()+6,$pdf->getY()-5);
        $pdf->MultiCell(0,5, utf8_decode($deduction),0,"J");

        $pdf->setFontSize(5);
        newElement($pdf,$langPrev);
        $pdf->MultiCell(0,3, utf8_decode($infos),0,"J");
        newElement($pdf,$langPrev,75,2);
        $pdf->MultiCell(0,3, utf8_decode($articleLoi),0,"J");

        $pageCount = $pdf->setSourceFile("$path/base_light$langPrev.pdf");
        $tplIdx = $pdf->importPage($pageCount, '/MediaBox');
        $pdf->useTemplate($tplIdx);

        //Ajouts hyper liens:
        $pdf->Link(10,10,50,50,"https://www.multicredit.ch");
        $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-10,40,15,"https://www.multicredit.ch");

        ob_end_clean();
        $pdf->Output("D","document.pdf");
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
function newElement($pdf,$langPrev,$margin=75,$setY=5){
    $path=realpath(__DIR__."/../base-pdf");
    if (($pdf->GetPageHeight() - $pdf->getY()) < $margin){
        $pageCount = $pdf->setSourceFile("$path/base_light$langPrev.pdf");
        $tplIdx = $pdf->importPage($pageCount, '/MediaBox');
        $pdf->useTemplate($tplIdx);
        //Ajouts hyper liens:
        $pdf->Link(10,10,50,50,"https://www.multicredit.ch");
        $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-10,40,15,"https://www.multicredit.ch");


        $pdf->addPage();
        $pdf->setXY(15,60);

        return true;
    }else{
        $pdf->setY($pdf->getY()+$setY);
        return false;
    }
}
?>
