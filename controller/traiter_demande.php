<?php
require_once '../model/gest_resa.php';

if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' )) //si admin
{

if (isset($_POST['valide'])) { //si il a cliqué sur valider
 
	modifier_demande($_POST['id'], 2, $_POST['id_offre']);
 
} elseif (isset($_POST['refuse'])) { //si il a cliqué sur refuser
 
    modifier_demande($_POST['id'], 1, $_POST['id_offre']);
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
}
?>