<?php
if ($_COOKIE['statut'] == 1)
{
	require_once '../model/demande.php';
	$tab = liste_demande($_COOKIE['identifiant']);
	include '../view/header_user.php';
	include '../view/demande.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>

