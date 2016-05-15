<?php
require_once '../model/gest_actu.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' ))
{

if (isset($_POST['delete'])) {
 
	supp_article($_POST['id']);
}

elseif (isset($_POST['add'])) {

	add_article($_POST['titre'], $_POST['contenu']);
 
} else {
 
    include '../view/header_admin.php';
	include '../view/add_actu.php';
 
}
}
?>