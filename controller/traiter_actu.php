<?php
require_once '../model/gest_actu.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' )) //si admin
{

if (isset($_POST['delete'])) { //si il a cliqué sur supprimer
 
	supp_article($_POST['id']);
}

elseif (isset($_POST['add'])) { //si il a cliqué sur ajouter

	add_article($_POST['titre'], $_POST['contenu']);
 
} else {
 
    include '../view/header_admin.php';
	include '../view/add_actu.php';
 
}
}
?>