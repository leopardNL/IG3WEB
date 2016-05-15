<?php

require_once '../model/demande.php';

require_once '../model/gest_offre.php';

if(autorisation($_COOKIE['identifiant'], $_COOKIE['uuid'])) //si couple id-uuid est correcte
{
supp_demande($_POST['id_resa']);
header('Location: ../controller/demande.php');
}
else
{
?>
Accés réservé
<a href="../index.php">Accueil</a>
<?php 
}

?>