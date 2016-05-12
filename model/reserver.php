<?php


function place_dispo()
{
include '../model/connexion_sql.php';
$resultat = $bd->query('SELECT * FROM offre where date_dispo > CURRENT_DATE() AND date_dispo < (CURRENT_DATE()+7)');
$tab = $resultat->fetchAll();
return $tab;

}

function demande($date){

echo "fonction";
include '../model/connexion_sql.php';
$bd->exec("INSERT INTO reservation(idenfant, date_resa) VALUES (4, ".$date.")");
}

//PROBLEME ICI MERCREDI 4 MAI