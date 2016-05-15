<?php


function liste_demande() //recupère la liste des demandes renseignés par le nom des enfants
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT r.id_resa, r.id_offre, date_dispo, id_enfant, prenom_enfant, nom_enfant, statut FROM enfant e, reservation r, offre o 
	where e.id_enfant=r.idenfant AND r.id_offre=o.id_offre AND date_dispo>=CURRENT_DATE() AND date_dispo<=(CURRENT_DATE() + 15)");
$tab = $resultat->fetchAll();
return $tab;
}

function modifier_demande($id, $valeur, $id_offre) //change le statut de la demande 'valide' ou 'refuse'
{
include '../model/connexion_sql.php';


$bd->exec("UPDATE reservation SET statut=" . $valeur . " WHERE id_resa=" . $id);

if($valeur==2) //si la demande est validée, on retire une place disponible
{
$bd->exec("UPDATE offre SET nbplace=(nbplace - 1) WHERE id_offre=" . $id_offre);
}



header('Location: ../controller/gest_resa.php');
}
