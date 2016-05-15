<?php


function liste_offre() //recupère la liste des offres
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM offre where date_dispo>=CURRENT_DATE() AND date_dispo<=(CURRENT_DATE() + 15)");
$tab = $resultat->fetchAll();
return $tab;
}

function ajouter_offre() //ajoute un joue supplémentaire : le trigger s'occupe de la date
{
include '../model/connexion_sql.php';
$bd->exec("INSERT INTO offre(nbplace) VALUES (0)");
header('Location: ../controller/gest_offre.php');
}

function modifier_offre($id, $valeur) //modifie le nombre de place
{
include '../model/connexion_sql.php';


$bd->exec("UPDATE offre SET nbplace=" . $valeur . " WHERE id_offre=" . $id);




header('Location: ../controller/gest_offre.php');
}

function ajout_resa($id_offre, $idenfant) //ajoute une réservation
{
include '../model/connexion_sql.php';

$req = $bd->prepare('SELECT * FROM reservation WHERE id_offre = :id AND idenfant = :enf');
$req->execute(array(
    'id' => $id_offre,
	'enf' => $idenfant));

$resultat = $req->fetch();

if (!$resultat)
{	
$bd->exec("INSERT INTO reservation(id_offre, idenfant) VALUES (".$id_offre.",".$idenfant.")");
}
header('Location: ../controller/demande.php');
}

function autorisation($id, $uuid) //test si un utilisateur malveillant n'a pas modifié son cookie
{
include '../model/connexion_sql.php';

$req = $bd->prepare('SELECT * FROM adherent WHERE id = :id AND uuid = :uuid');
$req->execute(array(
    'id' => $id,
	'uuid' => $uuid));

$resultat = $req->fetch();

if ($resultat)
{
	return true;
}
else
{
	return false;
}
}

