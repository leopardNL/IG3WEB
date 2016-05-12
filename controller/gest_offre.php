<?php
if ($_COOKIE['statut'] == 2)
{
	require_once '../model/gest_offre.php';
	$tab = liste_offre();
	include '../view/header_admin.php';
	include '../view/gest_offre.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>
