<?php


function adherent() //récupère la liste des adhérent
{
include '../model/connexion_sql.php';


$resultat = $bd->query('SELECT * FROM adherent');
$tab = $resultat->fetchAll();
return $tab;

}

function delete($id) //supprime l'adhérent donné en paramètre
{
include '../model/connexion_sql.php';

$bd->exec("DELETE FROM adherent WHERE id=".$id);
header('Location: ../controller/liste.php');
}


function info($id) //récupère les informations de l'adhérent passé en paramètre
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM adherent where id=" . $id);
$tab = $resultat->fetchAll();
return $tab;
}


function info_enfant2($id) //récupère la liste des enfants de l'adhérent passé en paramètre
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM enfant where id_parent=" . $id); 
$tab = $resultat->fetchAll();
return $tab;
}

function enfant($id, $prenom, $nom) //ajoute un enfant à l'adhérent passé en paramètre
{
include '../model/connexion_sql.php';

$bd->exec("INSERT INTO enfant(id_parent, nom_enfant, prenom_enfant) VALUES 
(".$id.", '".$nom."', '".$prenom."')");

header('Location: ../controller/liste.php');
}
