<?php
require_once '../model/gest_offre.php';

if(autorisation($_COOKIE['identifiant'], $_COOKIE['uuid']))
{
	if (isset($_POST['modifier'])) {
		if($_POST['mdp1'] == $_POST['mdp2'])
		{
			require_once '../model/inscription.php';
			modifier_mdp($_COOKIE['identifiant'], $_POST['mdp1']);
		}
		else
		{
		include '../view/header_user.php';
		?>
		Les deux mots de passe ne sont pas identique.
		<?php
		include '../view/edit_mdp.php';
		}
 
	} else {
 
		include '../view/header_user.php';
		include '../view/edit_mdp.php';
 
}
}
?>