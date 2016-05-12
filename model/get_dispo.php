<?php
function get_dispo()
{
    global $bd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bd->prepare('SELECT * FROM offre Where date >= CURDATE() ');
    $req->execute();
    $nb_dispos = $req->fetchAll();
    
    
    return $nb_dispos;
}