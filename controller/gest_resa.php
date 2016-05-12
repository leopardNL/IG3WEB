<?php
if ($_COOKIE['statut'] == 2)
{
	require_once '../model/gest_resa.php';
	$tab = liste_demande();
	include '../view/header_admin.php';
	include '../view/gest_resa.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>
