<?php
require_once '../model/gest_offre.php';

if (isset($_POST['modifier'])) {
 
	modifier_offre($_POST['id'], $_POST['nbplace']);
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
?>