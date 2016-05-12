<?php
require_once '../model/gest_resa.php';

if (isset($_POST['valide'])) {
 
	modifier_demande($_POST['id'], 2);
 
} elseif (isset($_POST['refuse'])) {
 
    modifier_demande($_POST['id'], 1);
 
} else {
 
    echo "comment es-tu venu sur cette page ?";
 
}
?>