<?php
setCookie('identifiant',' ',time()+1, null, null, false, true);
setCookie('statut',' ',time()+1, null, null, false, true);

header('Location: ../index.php');
?>