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

function add_article($titre, $contenu)
{
include '../model/connexion_sql.php';

$y = addslashes($titre);
$i = addslashes($contenu);

$bd->exec("INSERT INTO actualite(titre_actu, date_actu, contenu) VALUES ('". $y . "',CURRENT_DATE(),'" . $i . "')");

header('Location: ../controller/gest_actu.php');
}
