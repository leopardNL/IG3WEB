<?php

//création d'un adherent/utilisateur
function ajout($civ, $prenom, $nom, $mail, $fix, $mobile, $adresse, $codepost, $ville, $pays)
{
include '../model/connexion_sql.php';

// Hachage du mot de passe
$pass_hache = sha1(mb_strtolower($prenom) . "." . mb_strtolower($nom));
//génère un uuid
$uuid = uniqid();

$bd->exec("INSERT INTO adherent(uuid, sexe, nom, prenom, mail, fix, mobile, adresse, codepost, ville, pays, password) VALUES 
('".$uuid."', '".$civ."', '".$nom."', '".$prenom."', '".$mail."', '".$fix."', '".$mobile."', '".$adresse."', '".$codepost."', '".$ville."', '".$pays."', '".$pass_hache."')");

header('Location: ../controller/liste.php');
}

function mail_exist($mail) //verifie si le mail existe deja dans la BD
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

function modifier_mdp($id, $mdp) //modification du mot de passe
{
include '../model/connexion_sql.php';

// Hachage du mot de passe
$pass = sha1($mdp);

$bd->exec("UPDATE adherent SET password='" . $pass ."' WHERE id=".$id);

header('Location: ../controller/accueil.php');
}