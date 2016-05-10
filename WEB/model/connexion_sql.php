<?php

// Connexion à la base de données
try
{
    $bd = new PDO('mysql:host=localhost;dbname=projetmam;charset=utf8','root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}