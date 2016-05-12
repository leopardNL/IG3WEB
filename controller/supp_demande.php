<?php

require_once '../model/demande.php';


if($_COOKIE['statut'] == 1)
{
supp_demande($_POST['id_resa'], $_POST['id_offre']);
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