<?php


function liste_offre()
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM offre where date_dispo>=CURRENT_DATE() AND date_dispo<=(CURRENT_DATE() + 15)");
$tab = $resultat->fetchAll();
return $tab;
}

function modifier_offre($id, $valeur)
{
include '../model/connexion_sql.php';


$bd->exec("UPDATE offre SET nbplace=" . $valeur . " WHERE id_offre=" . $id);




header('Location: ../controller/gest_offre.php');
}

function ajout_resa($id_offre, $idenfant)
{
include '../model/connexion_sql.php';

$bd->exec("INSERT INTO reservation(id_offre, idenfant) VALUES (".$id_offre.",".$idenfant.")");

header('Location: ../controller/demande.php');
}

