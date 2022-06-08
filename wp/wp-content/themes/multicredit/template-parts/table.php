<?php

require_once( realpath(__DIR__.'/../pdfpdfi/fpdf/fpdf.php'));
require_once( realpath(__DIR__.'/../pdfpdfi/fpdi/fpdi.php'));



    /*if(!isset($_POST) || empty($_POST)) {
        die('{"success": false, "error": "401", "message": "Not allowed!"}');
    }*/

    $post = $_POST;
    $pdf  = new FPDI();
    $pdf->AddFont("Open Sans","","OpenSans-Regular.php");
    $pdf->AddFont("Avenir","","Avenir-Medium.php");
    $pdf->AddFont("Avenir","BI","Avenir-BlackOblique.php");
    $pdf->AddFont("Avenir","B","Avenir-Black.php");


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
                $top = "RAPIDE, SIMPLE ET DISCRET";
                $mobile = "+41799363175";
                $bureau ="+41263222310";
                $ta = "Tableau d'amortissement";
                $langPrev = '_fr';
                $col1Text = 'Mois';
                $col2Text = 'Mensualité';
                $col3Text = 'Intérêts';
                $col4Text = 'Amortissement';
                $col5Text = 'Solde';
                $total = 'Total';
                $xAxe = 'Durée, mois';
                $yAxe = 'Montant, CHF';
                $montantNom = 'Montant:';
                $dureeNom = 'Durée:';
                $tauxNom = 'Taux:';
                $moisNom = ' Mois';
                $payeAnticipation ='Payez par anticipation ! En cas de remboursement anticipé, vous aurez droit à la remise des intérêts et à une réduction adaptée des coûts liés à la durée du crédit non utilisé.';
                $deduction = 'N\'oubliez pas que les intérêts du crédit sont déductibles des impôts';
                $infos="Le tableau d'amortissement ci-dessus reste purement indicatif et peut ne pas correspondre à un contrat final. Ce tableau est calculé avec un taux d'intérêt de ".$taux."% , sans couverture d'assurance.";
                $articleLoi = "Selon la loi, l'octroi d'un crédit à la consommation est interdit s'il entraîne un surendettement (art. 3 LAU). Exemple de calcul : Financement de 10 000 CHF. Un taux d'intérêt annuel effectif de 4,5% à 9,9% entraîne des coûts totaux pour 12 mois de 240 à 520 CHF. Le taux d'intérêt final varie, en fonction de la situation de chaque client, de 4,5% à 9,9%. Il n'y a pas de frais de dossier ni de frais supplémentaires : vous ne payez que les intérêts du prêt. Cashflex MultiCredit Sàrl est enregistrée comme service commercial du canton de Fribourg depuis avril 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl est membre de la Fédération des Entreprises Romandes.";
                $supp = "Un supplément/rallonge de crédit est envisageable après 6 à 9 mois de remboursement ponctuel";
                break;

            case 'de_DE':
                $top ="";
                $mobile = "+41799363175";
                $bureau ="+41263222310";
                $ta = "Amortisations Plan";
                $langPrev = '_de';
                $col1Text = 'Monat';
                $col2Text = 'Rate';
                $col3Text = 'Zinsen';
                $col4Text = 'Amortisation';
                $col5Text = 'Restschuld';
                $total ='Total';
                $montantNom = 'Betrag:';
                $dureeNom = 'Dauer:';
                $tauxNom = 'Zins:';
                $moisNom = ' Monat';
                $payeAnticipation ='Zahlen Sie im Voraus! Wenn Sie im Voraus zahlen, bekommen Sie einie Ermässigung der Zinsen und eine angepasste Reduzierung der Kosten von der nicht benützten Kredit Dauer.';
                $infos="Der obige Tilgungsplan dient lediglich der Veranschaulichung und entspricht möglicherweise nicht dem endgültigen Vertrag. Die Tabelle wurde mit einem Zinssatz von $taux% , ohne Versicherungsschutz, berechnet.";
                $articleLoi = "Gemäss Gesetz ist die Gewährung eines Konsumkredits verboten, wenn sie zu einer Überschuldung führt (Art. 3 UWG). Rechenbeispiel: Finanzierung von 10 000 CHF. Ein effektiver Jahreszins von 4,5% bis 9,9% führt zu Gesamtkosten für 12 Monate von 240 bis 520 CHF. Der Endzinssatz variiert je nach der Situation des einzelnen Kunden zwischen 4,5% und 9,9%. Es gibt keine Bearbeitungsgebühren oder zusätzliche Kosten: Sie zahlen nur die Zinsen für das Darlehen. Cashflex MultiCredit Sàrl ist seit April 2007 als kommerzielle Dienstleistung des Kantons Freiburg registriert.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl ist Mitglied der Fédération des Entreprises Romandes.";
                $deduction = 'Vergessen Sie nicht, dass die Zinsen bei den Steuern abziehbar sind';
                $xAxe = 'Dauer, Monat';
                $yAxe = 'Bertrag, CHF';
                $supp = "Einen Kredit Zusatz/Verlängerung ist nach 6-9 Monaten nach pünktlicher Ratenzahlung möglich";


                break;
            case 'it_IT':
                $mobile = "+41799035739";
                $bureau ="+41263222310";
                $ta ="Tabella di ammortamento";
                $langPrev = '_it';
                $col1Text = 'Mese';
                $col2Text = 'Rata mensile';
                $col3Text = 'Interesse';
                $col4Text = 'Ammortamento';
                $col5Text = 'Saldo';
                $total = 'Totale';
                $montantNom = 'Importo:';
                $dureeNom = 'Durata:';
                $tauxNom = 'Tasso:';
                $moisNom = ' Mese';
                $payeAnticipation = 'Paghi in anticipo! In caso di rimborso anticipato, le saranno rimborsati gli interessi e avrete una riduzione dei costi sulla durata del prestito non usufruito';
                $infos="La tabella di ammortamento sopra riportata è puramente indicativa e potrebbe non corrispondere a un contratto definitivo. Questa tabella è calcolata con un tasso di interesse del $taux%, senza copertura assicurativa";
                $articleLoi ="Secondo la legge, la concessione di un credito al consumo è vietata se porta al sovraindebitamento (art. 3 LAU). Esempio di calcolo: finanziamento di 10.000 franchi. Un tasso di interesse annuo effettivo compreso tra il 4,5% e il 9,9% comporta costi totali per 12 mesi compresi tra 240 e 520 franchi svizzeri. Il tasso di interesse finale varia tra il 4,5% e il 9,9%, a seconda della situazione del cliente. Non ci sono spese di richiesta o costi aggiuntivi: si pagano solo gli interessi sul prestito. Cashflex MultiCredit Sàrl è registrata come servizio commerciale nel Cantone di Friburgo dall'aprile 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl è membro della Fédération des Entreprises Romandes";
                $deduction ="Non dimentichi che gli interessi sono deducibili dalle tasse.";
                $xAxe = 'Durée, mois';
                $yAxe = 'Montant, CHF';
                $supp = "Un supplemento o aumento del prestito è possibile dopo 6-9 mesi di rimborso puntoale";

                break;
            default:
                //$langTmp == 'en_EN'
                $mobile = "+4179471661";
                $bureau ="+41263222310";
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
                $payeAnticipation = 'Pay in advance! In case of early repayment, you will be entitled to interest relief and an equivalent reduction of the costs related to the remaining credit period';
                $infos="The above amortization table is purely indicative and may not correspond to a final contract. This table is calculated with an interest rate of $taux%, without insurance coverage";
                $articleLoi ="According to the law, the granting of a consumer credit is prohibited if it leads to overindebtedness (art. 3 LAU). Calculation example: Financing of 10 000 CHF. An effective annual interest rate of 4.5% to 9.9% results in total costs for 12 months of CHF 240 to 520. The final interest rate varies from 4.5% to 9.9% depending on the client's situation. There are no application fees or additional charges: you only pay the interest on the loan. Cashflex MultiCredit Sàrl is registered as a commercial service in the canton of Fribourg since April 2007.IDE : CHE-113.592.711. Cashflex MultiCredit Sàrl is a member of the Fédération des Entreprises Romandes";
                $deduction = "Don't forget that the interest amount is tax-deductible ";
                $xAxe = 'Duration, month';
                $yAxe = 'Amount, CHF';
                $supp = "A credit supplement/extension is possible after 6 to 9 months of regular payment.";

                break;
        }
        $months = Array();
        $interets = Array();
        $amortissement = Array();

        $counter = 1;
        $path = realpath(__DIR__."/../base-pdf");
        $template = "$path/base$langPrev.pdf";




        $pdf->SetFont('Avenir');
        $pdf->SetMargins(15,20,15);
        $pdf->SetAutoPageBreak(false);
        $pdf->addPage("P");
        $thirdWidth = (($pdf->GetPageWidth()-30) /3);
        $fifthWidth = (($pdf->GetPageWidth()-30) / 5 );

        $posTelBureauLinkX = 10;
        $posTelBureauLinkY =$pdf->GetPageHeight() -13;

        $posTelLinkX = 29;
        $posTelLinkY =$pdf->GetPageHeight() -13;

        $posMailToX = 48;
        $posMailToY =$pdf->GetPageHeight() -13;

        $pdf->setXY($posTelBureauLinkX,$posTelBureauLinkY);
        $pdf->Link($posTelBureauLinkX,$posTelBureauLinkY,17,4,"tel:$bureau");

        $pdf->setXY($posTelLinkX,$posTelLinkY);
        $pdf->Link($posTelLinkX,$posTelLinkY,17,4,"tel:$mobile");

        $pdf->SetXY($posMailToX,$posMailToY);
        $pdf->Link($posMailToX,$posMailToY,22,4,"mailto:info@multicredit.ch");

       /* $pdf->SetFont('Helvetica',"BI",18);
        $pdf->setXY(80,20);
        $pdf->Cell(0,0,utf8_decode($top),0,0,"R");*/

        $pdf->setXY(0,40);
        $pdf->SetFont('Avenir',"B",18);
        $pdf->SetMargins(0,0,0);
        $pdf->setX(0);
        $pdf->Cell(0,0,utf8_decode(($ta)),0,1,"C");
        $pdf->SetMargins(15,20,15);
        $pdf->setY($pdf->getY()+20);
        $pdf->SetFont('Avenir',"",12);

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

        $pdf->SetFont('Avenir',"",12);
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
                $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-23,50,30,"https://www.multicredit.ch");


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
        $pdf->SetFont('Avenir',"BIU",12);
        $pdf->Cell($fifthWidth ,10, utf8_decode($total),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeAnnuite,2)),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeInterets,2)),1,0,"C");
        $pdf->Cell($fifthWidth,10, utf8_decode(number_format($sommeAmortissement,2)),1,1,"C");
        $pdf->SetFont('Avenir',"",12);


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
                    labelString: '$xAxe',
                  },
                },
                
              ],
              yAxes: [
                {
                  stacked: true,
                  scaleLabel: {
                    display: true,
                    labelString: '$yAxe',
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

        newElement($pdf,$langPrev);
        $pdf->Image("https://www.multicredit.ch/wp/wp-content/uploads/2020/03/favicon.png",null,null,5,5,"PNG");
        $pdf->setXY($pdf->getX()+6,$pdf->getY()-5);
        $pdf->MultiCell(0,5, utf8_decode($supp),0,"J");

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
        $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-23,50,30,"https://www.multicredit.ch");

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
        $test = count($pdf->PageNo());
        if($pdf->PageNo()> 1){
            $pageCount = $pdf->setSourceFile("$path/base_light$langPrev.pdf");
        }else{
            $pageCount = $pdf->setSourceFile("$path/base$langPrev.pdf");
        }
        $tplIdx = $pdf->importPage($pageCount, '/MediaBox');
        $pdf->useTemplate($tplIdx);
        //Ajouts hyper liens:
        $pdf->Link(10,10,50,50,"https://www.multicredit.ch");
        $pdf->Link($pdf->GetPageWidth()-50,$pdf->GetPageHeight()-23,50,30,"https://www.multicredit.ch");



        $pdf->addPage();
        $pdf->setXY(15,60);

        return true;
    }else{
        $pdf->setY($pdf->getY()+$setY);
        return false;
    }
}
?>
