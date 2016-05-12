<?php


function adherent()
{
include '../model/connexion_sql.php';


$resultat = $bd->query('SELECT * FROM adherent');
$tab = $resultat->fetchAll();
return $tab;

}

function delete($id)
{
echo 'delete';
echo $id;

}

function edit($id)
{
echo 'edit';
echo $id;
}

function info($id)
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM adherent where id=" . $id);
$tab = $resultat->fetchAll();
return $tab;
}

function info_enfant($id)
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM enfant where id_parent=" . $id);
$tab = $resultat->fetchAll();
return $tab;
}

function enfant($id, $prenom, $nom)
{
include '../model/connexion_sql.php';

$bd->exec("INSERT INTO enfant(id_parent, nom_enfant, prenom_enfant) VALUES 
(".$id.", '".$nom."', '".$prenom."')");

header('Location: ../controller/liste.php');
}
