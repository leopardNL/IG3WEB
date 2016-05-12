<?php
if ($_COOKIE['statut'] == 1)
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