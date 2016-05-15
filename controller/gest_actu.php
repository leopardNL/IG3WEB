<?php
if(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' ))
{
	require_once '../model/gest_actu.php';
	$tab = liste_article();
	include '../view/header_admin.php';
	include '../view/gest_actu.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>
