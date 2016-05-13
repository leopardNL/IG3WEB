<?php
require_once '../model/gest_actu.php';

if (isset($_POST['delete'])) {
 
	supp_article($_POST['id']);
}

elseif (isset($_POST['add'])) {

	add_article($_POST['titre'], $_POST['contenu']);
 
} else {
 
    include '../view/header_admin.php';
	include '../view/add_actu.php';
 
}
?>