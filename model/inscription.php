<?php


function ajout($civ, $prenom, $nom, $mail, $fix, $mobile, $adresse, $codepost, $ville, $pays)
{
include '../model/connexion_sql.php';

// Hachage du mot de passe
$pass_hache = sha1($prenom . "." . $nom);


$bd->exec("INSERT INTO adherent(sexe, nom, prenom, mail, fix, mobile, adresse, codepost, ville, pays, password) VALUES 
('".$civ."', '".$nom."', '".$prenom."', '".$mail."', '".$fix."', '".$mobile."', '".$adresse."', '".$codepost."', '".$ville."', '".$pays."', '".$pass_hache."')");

header('Location: ../controller/liste.php');
}