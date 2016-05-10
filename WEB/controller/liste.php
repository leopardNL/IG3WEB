<?php
if ($_COOKIE['statut'] == 2)
{
	require_once '../model/liste.php';
	$tab = adherent();
	include '../view/header_admin.php';
	include '../view/liste.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>

