<?php

require_once '../model/inscription.php';


if($_COOKIE['statut'] == 2)
{
	if(mail_exist($_POST['email']) == 1)
	{
	ajout($_POST['civilite'], $_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['tel'], $_POST['mobile'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['pays']);
	}
	else
	{
	?>
	Adresse mail appartient deja a une compte
	<a href="../controller/add_user.php">RETOUR</a>
	<?php
	}
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php 
}

?>