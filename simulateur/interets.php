<?php
$montant=7500;
$duree=72;
$taux=6.6/100;

echo TableauAmortissement($montant, $duree, $taux);

echo '<hr>Remboursement si crédit en 60 mois: '.RemboursementAnticipe($montant, $duree, $taux, 60);

/*FONCTIONS D'AFFICHAGE*/
function TableauAmortissement($montant, $duree, $taux)
	{
	// Affiche un tableau d'amortissement
	$tab=Amortissement($montant, $duree, $taux);
	echo '
	<table class="amortissement">
		<tr>
			<th>Mois</th>
			<th>Facture totale</th>
			<th>Intérêt</th>
			<th>Capital</th>
			<th>Solde</th>
		</tr>
	';
	for ($i=0; $i<$duree; $i++)
		{
		echo
		'
		<tr>
			<td>'.round($tab[0][$i],2).'</td>
			<td>'.round($tab[1][$i],2).'</td>
			<td>'.round($tab[2][$i],2).'</td>
			<td>'.round($tab[3][$i],2).'</td>
			<td>'.round($tab[4][$i],2).'</td>
		</tr>
		';
		}
	echo '</table>';
	}

/*FONCTIONS DE CALCUL*/
function RemboursementAnticipe($montant, $duree_prevue, $taux, $duree_reelle)
	{
	$tab=Amortissement($montant, $duree_prevue, $taux);
	$rembourse=0;
	
	for ($i=$duree_reelle;$i<$duree_prevue;$i++)
		{
		$rembourse+=$tab[2][$i];
		}
	return $rembourse;
	}

function Amortissement($montant, $duree, $taux)
	{
	// Talcul du taux équivalent (mensuel)
	$taux_e=pow(1+$taux, 1/12) -1;
	$rang=Array();
	$annuite=Array();
	$interet=Array();
	$capital=Array();
	$solde=Array();
	
	// Calcul de la 1ère ligne
	$rang[0]=1;
	$annuite[0]=$montant*(($taux_e) / (1- (pow((1+($taux_e)), - $duree))));
	$interet[0]=$montant*$taux_e;
	$capital[0]=$annuite[0]-$interet[0];
	$solde[0]=$montant-$capital[0];
	
	for ($i=1; $i<$duree;$i++)
		{
		$rang[$i]=$i+1;
		$annuite[$i]=$annuite[0];
		$interet[$i]=$solde[$i-1]*$taux_e;
		$capital[$i]=$annuite[$i]-$interet[$i];
		$solde[$i]=$solde[$i-1]-$capital[$i];
		}
	return Array($rang, $annuite, $interet, $capital, $solde);
	}
	
?>