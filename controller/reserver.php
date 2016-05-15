<?php
require_once '../model/gest_offre.php';

if(autorisation($_COOKIE['identifiant'], $_COOKIE['uuid'])) //si couple id-uuid est correcte
{
	require_once '../model/reserver.php';
	$tab = place_dispo();
	include '../view/header_user.php';
	include '../view/reserver.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}

?>