<?php


function ajout($civ, $prenom, $nom, $mail, $fix, $mobile, $adresse, $codepost, $ville, $pays)
{
include '../model/connexion_sql.php';

// Hachage du mot de passe
$pass_hache = sha1(mb_strtolower($prenom) . "." . mb_strtolower($nom));


$bd->exec("INSERT INTO adherent(sexe, nom, prenom, mail, fix, mobile, adresse, codepost, ville, pays, password) VALUES 
('".$civ."', '".$nom."', '".$prenom."', '".$mail."', '".$fix."', '".$mobile."', '".$adresse."', '".$codepost."', '".$ville."', '".$pays."', '".$pass_hache."')");

header('Location: ../controller/liste.php');
}

function mail_exist($mail)
{
include '../model/connexion_sql.php';
$req = $bd->prepare('SELECT id FROM adherent WHERE mail = :mail');
$req->execute(array(
    'mail' => $mail));

$resultat = $req->fetch();

if (!$resultat)
{
	return 1;
}
else
{
	return 0;
}
}