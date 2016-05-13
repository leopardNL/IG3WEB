<?php

require_once '../model/demande.php';


if($_COOKIE['statut'] == 1)
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