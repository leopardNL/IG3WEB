<?php
require_once '../model/gest_offre.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' ))
{
if (isset($_POST['modifier'])) {
 
	modifier_offre($_POST['id'], $_POST['nbplace']);
 
} elseif (isset($_POST['ajouter'])) {
 
	ajouter_offre();
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
}
?>