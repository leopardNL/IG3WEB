<?php

require_once '../model/connexion.php';

// Hachage du mot de passe
//$pass_hache = sha1($_POST['pass']);
$id = login($_POST['mail'], $_POST['password']);


if($id == 0) //0 si aucun resultat
{

}
else //sinon on initialise les cookies
{
setCookie('identifiant',$id["id"],time()+3600, null, null, false, true);
setCookie('statut', $id["statut"],time()+3600, null, null, false, true);
setCookie('uuid', $id["uuid"],time()+3600, null, null, false, true);

header('Location: ../controller/accueil.php');
}
?>
