<?php


function liste_demande($id_parent)
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT r.id_offre, date_dispo, id_enfant, prenom_enfant, statut FROM enfant e, reservation r, offre o 
	where e.id_parent=" . $id_parent . " AND e.id_enfant=r.idenfant AND r.id_offre=o.id_offre AND date_dispo>=CURRENT_DATE()");
$tab = $resultat->fetchAll();
return $tab;
}


function supp_demande($id)
{
include '../model/connexion_sql.php';

$bd->exec("DELETE FROM reservation WHERE id_offre=".$id);
}