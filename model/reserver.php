<?php



function place_dispo() //récupère les 7 prochaines offres de place disponible
{
include '../model/connexion_sql.php';
$resultat = $bd->query('SELECT * FROM offre where date_dispo > CURRENT_DATE() AND date_dispo < (CURRENT_DATE()+7)');
$tab = $resultat->fetchAll();
return $tab;

}