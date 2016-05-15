<?php


function login($mail, $pass)
{
include '../model/connexion_sql.php';

// Hachage du mot de passe
$pass_hache = sha1($pass);

// Vérification des identifiants
$req = $bd->prepare('SELECT id, statut, uuid FROM adherent WHERE mail = :mail AND password = :pass');
$req->execute(array(
    'mail' => $mail,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
	return 0;
}
else
{
	return $resultat;
}
}