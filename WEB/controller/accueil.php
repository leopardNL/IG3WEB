<?php
if ($_COOKIE['statut'] == 1)
{
	include '../view/header_user.php';
	include '../view/accueil.php';

	
}
elseif ($_COOKIE['statut'] == 2)
{
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