<?php


function liste_demande()
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT r.id_resa, date_dispo, id_enfant, prenom_enfant, nom_enfant, statut FROM enfant e, reservation r, offre o 
	where e.id_enfant=r.idenfant AND r.id_offre=o.id_offre AND date_dispo>=CURRENT_DATE() AND date_dispo<=(CURRENT_DATE() + 15)");
$tab = $resultat->fetchAll();
return $tab;
}

function modifier_demande($id, $valeur)
{
include '../model/connexion_sql.php';


$bd->exec("UPDATE reservation SET statut=" . $valeur . " WHERE id_resa=" . $id);




header('Location: ../controller/gest_resa.php');
}
