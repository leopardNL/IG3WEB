<?php
require_once '../model/liste.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' ))
{
if (isset($_POST['info'])) {
 
    include '../view/header_admin.php';
	$tab = info($_POST['id']);
	$enfant = info_enfant2($_POST['id']);
	include '../view/info_adherent.php';
 
} elseif (isset($_POST['edit'])) {
 
	edit($_POST['id']);
	
} elseif (isset($_POST['delete'])) {
 
    delete($_POST['id']);

} elseif (isset($_POST['ajouter'])) {
 
    enfant($_POST['id'], $_POST['prenom'], $_POST['nom']);
	
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
}
?>