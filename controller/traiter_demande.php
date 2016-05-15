<?php
require_once '../model/gest_resa.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' ))
{

if (isset($_POST['valide'])) {
 
	modifier_demande($_POST['id'], 2, $_POST['id_offre']);
 
} elseif (isset($_POST['refuse'])) {
 
    modifier_demande($_POST['id'], 1, $_POST['id_offre']);
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
}
?>