<?php
if ($_COOKIE['statut'] == 1) //si l'utilisateur est un adhérent simple
{

	require_once '../model/gest_actu.php';
	$tab = liste_article();
	include '../view/header_user.php';
	include '../view/accueil.php';

	
}
elseif(($_COOKIE['statut'] == 2) AND ($_COOKIE['uuid'] == '5736fc96b9' )) //si user est admin
{
	require_once '../model/gest_actu.php';
	$tab = liste_article();
	include '../view/header_admin.php';
	include '../view/accueil.php';
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php
}
?>