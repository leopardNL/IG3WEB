<?php
if ($_COOKIE['statut'] == 2)
{
	include '../view/header_admin.php';
	include '../view/add_user.php';
	
	
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php

}
?>