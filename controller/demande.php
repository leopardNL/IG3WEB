<?php
require_once '../model/gest_offre.php';

if(autorisation($_COOKIE['identifiant'], $_COOKIE['uuid'])) //si admin
{

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
}
?>

