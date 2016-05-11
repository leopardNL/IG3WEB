<?php


function liste_article()
{
include '../model/connexion_sql.php';


$resultat = $bd->query("SELECT * FROM actualite ORDER BY id_actu DESC");
$tab = $resultat->fetchAll();
return $tab;
}

function supp_article($id, $valeur)
{
include '../model/connexion_sql.php';

$bd->exec("DELETE FROM actualite WHERE id_actu=".$id);

header('Location: ../controller/gest_actu.php');
}
