<?php
require_once '../model/gest_actu.php';

if (isset($_POST['delete'])) {
 
	supp_article($_POST['id']);
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
?>